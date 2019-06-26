<?php

    use PHPMailer\PHPMailer\PHPMailer;


    require 'connect.php';

    if (isset($_POST['email'])) { //POST มาจากหน้า index.php
        require_once "PHPMailer/PHPMailer.php";   //เรียกไฟล์
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        $name = "SUPPAWIT FUANGNOI";
        $email = $_POST['email'];
        // $subject = "TESTsubject";
        // $body = "TestBody";
        $check = $_POST['image'];
        $dir = $_POST['direct'];
        $checkboxvar=explode(",", $check);
        
        $sql = "INSERT INTO email (email,image) VALUES ('".$_POST['email']."','".$_POST['image']."')"; 
        $conn->query($sql);
        $conn->close();

        $filesize = 0;
        $count = 0;
        for ($j=0; $j <sizeof($checkboxvar) ; $j++) {

            $filesize += filesize($dir.$checkboxvar[$j]);

            if ($filesize>15000000) {

                $j--;
                $mail = new PHPMailer();

                //SMTP Settings
                $mail->isSMTP();
                $mail->Host = "smtp.gmail.com"; //host ของ  gmail , hotmail = smtp.live.com
                $mail->SMTPAuth = true;
                $mail->Username = "boontrika@bangkokwebsolution.com"; //email 
                $mail->Password = 'boontrika'; //password
                $mail->Port = 465; //587,25 ใช้ hotmail
                $mail->SMTPSecure = "ssl"; //tls

                //Email Settings
                $mail->isHTML(true);
                $mail->setFrom($email, $name);
                $mail->addAddress($email); //email
                // $mail->Subject = $subject;
                // $mail->Body = $body;

                $mail->Subject = 'Airports of Thailand Public Co.,Ltd.';
                $mail->Body = "
                    <!DOCTYPE html>
                        <html>
                            <head>
                            <title>Airports of Thailand Public Co.,Ltd.</title>
                            </head>
                            <body> 
                                <img src='http://airportthai.co.th/wp-content/uploads/2018/04/logo.png';>
                                <h1 style='background: #176BB6; padding: 10px; color: white;'>Airports of Thailand Public Co.,Ltd.</h1>

                                <p style='background: #';>Copyright 2018 Airports of Thailand Public Co.,Ltd. All rights reserved.</p>
                            </body>
                        </html>
                        ";
                
                for ($i=$count; $i < $j ; $i++) {
                     $mail->addAttachment($dir.$checkboxvar[$i],$checkboxvar[$i]);//แนบไฟล์ใส่ path ไฟล์ที่อยู่รูปภาพ
                     $count++;
                }

                if ($mail->send()) {
                    $status = "success";
                    $response = "Email is sent!";
                    $filesize = 0;
                } else {
                    $status = "failed";
                    $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
                }
                    




                }elseif ($j==sizeof($checkboxvar)-1) {

                    $mail = new PHPMailer();

                    //SMTP Settings
                    $mail->isSMTP();
                    $mail->Host = "smtp.gmail.com"; //host ของ  gmail , hotmail = smtp.live.com
                    $mail->SMTPAuth = true;
                    $mail->Username = "boontrika@bangkokwebsolution.com"; //email 
                    $mail->Password = 'boontrika'; //password
                    $mail->Port = 465; //587,25 ใช้ hotmail
                    $mail->SMTPSecure = "ssl"; //tls

                    //Email Settings
                    $mail->isHTML(true);
                    $mail->setFrom($email, $name);
                    $mail->addAddress($email); //email
                    // $mail->Subject = $subject;
                    // $mail->Body = $body;

                    $mail->Subject = 'Airports of Thailand Public Co.,Ltd.';
                    $mail->Body = "
                        <!DOCTYPE html>
                            <html>
                                <head>
                                <title>Airports of Thailand Public Co.,Ltd.</title>
                                </head>
                                <body> 
                                    <img src='http://airportthai.co.th/wp-content/uploads/2018/04/logo.png';>
                                    <h1 style='background: #176BB6; padding: 10px; color: white;'>Airports of Thailand Public Co.,Ltd.</h1>

                                    <p style='background: #';>Copyright 2018 Airports of Thailand Public Co.,Ltd. All rights reserved.</p>
                                </body>
                            </html>
                            ";
                    
                    for ($i=$count; $i <= $j ; $i++) {
                         $mail->addAttachment($dir.$checkboxvar[$i],$checkboxvar[$i]);//แนบไฟล์ใส่ path ไฟล์ที่อยู่รูปภาพ
                         $count++;
                    }
                    // var_dump($mail->send());exit();
                    if ($mail->send()) {
                        $status = "success";
                        $response = "Email is sent!";
                        $filesize = 0;
                    } else {
                        $status = "failed";
                        $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
                    }
                }
        }


 exit(json_encode(array("status" => $status, "response" => $response)));


    }
?>
