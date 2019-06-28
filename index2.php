<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/w4.css">
    <link rel="stylesheet" type="text/css" href="css/emailform.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Project-SendEmail</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');


/* Top Navigation */

.top-nav {
    padding: 0 15px;
}

.top-nav>li {
    display: inline-block;
    float: left;
}

.top-nav>li>a {
    padding-top: 20px;
    padding-bottom: 20px;
    line-height: 20px;
    color: #fff;
}

.top-nav>li>a:hover,
.top-nav>li>a:focus,
.top-nav>.open>a,
.top-nav>.open>a:hover,
.top-nav>.open>a:focus {
    color: #fff;
    background-color: #1a242f;
}

.top-nav>.open>.dropdown-menu {
    float: left;
    position: absolute;
    margin-top: 0;
    /*border: 1px solid rgba(0,0,0,.15);*/
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-color: #fff;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}

.top-nav>.open>.dropdown-menu>li>a {
    white-space: normal;
}

/* Side Navigation */



html,body {
  font-family: 'Kanit', sans-serif;
  font-size:15px;
  margin: 0;
  overflow-x:hidden;
}
.openSidenav{
  cursor: pointer;
  color: #818181;
  background: #77b9ff;
  position: fixed;
  width: 35px;
  height: 100%;
  top: 70px;
  left: 0;
  padding: 35px;
}

.closedSidenav{
  cursor: pointer;
  color: #818181;
  background: #0c0c0c;
  position: fixed;
  width: 35px;
  height: 100%;
  top: 70px;
  left: 0;
  padding: 35px;
}
.material-icons {
  float: right;
  position: absolute;
  left: 15px;
}
.sidenav {
	width: 0;
	height: 100%;
	background: #77b9ff;
	position: fixed;
	padding: 100;
	padding-top: 40px;
	font-size: 15px;
	z-index: 1;
	top: 70px;
	left: 0;
	transition: 0.5s;
	overflow: auto;
	color: white;
}
.sidenav>a:link {
	padding: 2px 32px;
	display: block;
	text-decoration: none;
	color: #818181;
	transition: 0.3s;
}

.sidenav>a:hover {
	color: #f1f1f1;
}

.sidenav>a:visited {
	color: #818181;
}

.sidenav>.close {
	float: right;
	font-size: 36px;
	top: 0;
}


a {
    color: #fff;
    text-decoration: none;
}

a:hover, a:focus {
    color: #f0f0f0;
    text-decoration: underline;
}

.content {
  transition: margin-left .5s;
  padding: 20px;
  margin-left: 35px;
}
@media screen and (max-height: 450px) {
  .sidenav {
    padding-top: 15px;
  }
  .sidenav a {
    font-size: 18px;
  }
}

.button1555 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  font-family: 'Kanit', sans-serif;
}

.button555 {
  background-color: #5256ba; /* blue */
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 8px -40px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  font-family: 'Kanit', sans-serif;
}

.button5551 {
  background-color: #42aaf4; /* Green */
  border: none;
  color: white;
  padding: 5px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.navbar .nav > li > a > .label {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  position: absolute;
  top: 14px;
  right: 6px;
  font-size: 10px;
  font-weight: normal;
  min-width: 15px;
  min-height: 15px;
  line-height: 1.0em;
  text-align: center;
  padding: 2px;
}

.navbar .nav > li > a:hover > .label {
  top: 10px;
}

.navbar-brand {
    padding: 5px 15px;
}

.navbar-inverse2 {
    background-color: #fff;
    border-color: #080808;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body style="font-family: 'Kanit', sans-serif;">
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>

<div id="wrapper">

    <!-- Navigation -->

    <nav class="navbar navbar-inverse2 navbar-fixed-top" role="navigation">
        <a href="https://www.airportthai.co.th/th/"><img src="Logo_AOT.png" style="width: auto; height: 60px;" class="logo"></a>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Top Menu Items -->

        <div class="selected button5551"></div>
        <ul class="nav navbar-right top-nav">
          <li style="margin-right: 200px; margin-top: 5px;" >
                <input class="form-control mr-sm-2" id="form_search" type="text" placeholder="Search" style="padding-right: auto; margin-right: 100px; height: 50px; max-width:100%;">
            </li>
                       
            <li style="padding-left:10px; margin-top: 5px;"><button onclick="document.getElementById('id01').style.display='block'" id="btn_search" class="btn btn-primary" style="height: 50px; width: 150px;">Send Picture</button></li>
</ul>

<div id="id01" class="modal">  
    <div class="modal-dialog" role="document">
    <div class="modal-content animate">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Email</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"  onclick="document.getElementById('id01').style.display='none'" style="margin-top:-17px;">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
             <!-- <div id="hidepage2" style="display:block;" align="left" width="100%" > -->


<!-- </div> -->
      <div class="modal-body">
        <div class="loader-center loader" style="display: none;" id="show-loader">
            <span class="loader">
                <IMG SRC="loading.gif" WIDTH="200" HEIGHT="200"  ALT="" >
            </span>
        </div>

<div style="display: show;" id="show-logo">
    <img src="EmailTesting_Icon_Aqua.png" class="logo" id="logo_email"><br>
</div>
      
         <input id="email" placeholder="Email" class="form-control" style="height: 50px; ">
      <input type="hidden" id="image" placeholder="image" class="form-control">
      </div>
      <div class="modal-footer">
      <button value="Send An Email" class="btn btn-success sendEmail" style="height: 50px; width: 150px;">Send An Email</button>
        
      </div>
    </div>
  </div>
</div>


    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
                    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
      <div class="sidenav">
                <li style="list-style: none;">
                      <a href="#" class="close btn-close">&times;</a><br><br>
                </li>
                <li style="list-style: none;">       
                    <a href="#" data-toggle="collapse" data-target="#submenu-1" class="text_show"><i class="fa fa-fw fa-search"></i> Show Folder <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-1" class="">

        <?php 
            $dir  = "images";
            $files1 = scandir($dir);
            $sizefolder = sizeof($files1);
            for ($i=2; $i < $sizefolder ; $i++) { ?>
                <input type="button" class="button555 button1555" name="Button" value="<?=$files1[$i] ?>" onClick="window.location='index2.php?dir=<?=$files1[$i]?>';">
                <br>
            <?php }

            
         ?>
                    </ul>
                </li>
  </div>
      </div>
       <div class="content">
    <span class="openSidenav">
      <i class="material-icons">arrow_forward</i>
    </span>
  </div>
        <!-- /.navbar-collapse -->
            <div class="row" id="main" >
                <div class="content-image">
<?php 
    $allowed_types=array('jpg','jpeg','gif','png');
    $check = 0;
    if ($check == 0) {
        $dir  = "images";
        $files1 = scandir($dir);
        $direc = $files1[2];
    }
    if (isset($_GET['dir'])) {
        $direc = $_GET['dir'];
        $check = 1;
    }
    $dir    ="images/".$direc."/";
    $files1 = scandir($dir);
    $total=0; // นับจำนวนรูปทั้งหมด
    $pic_path=array();
    $size = sizeof($files1);
    $pic_name=array();
    $i=0;
    foreach($files1 as $key=>$value){
        if($key>1){
            $file_parts = explode('.',$value);
            $pic_name[$i++]=$value;
            $ext = strtolower(array_pop($file_parts));
            if(in_array($ext,$allowed_types)){
                $pic_path[]=$dir.$value;
                $total++;
                 
            }
        }
    }
?>

      <input type="hidden" id="direct" value="<?=$dir ?>">

  <ul class="tiles">
    <div class="container" >
    <div class="row">
    <?php for($indexPicture=0;$indexPicture<$size-2;$indexPicture++){ ?>
       <div class=" col-md-5 ">
       <li class="tiles__tile">
            <div class="tiles__tile__inner">
                 <input type="checkbox" class="canselect img sendImage" name="testImage"  id="testImage[<?=$indexPicture?>]"  value="<?=$pic_name[$indexPicture]?>" >

                <label for="testImage[<?=$indexPicture?>]">Select</label>
                <img class="img_show"  src="<?=$pic_path[$indexPicture]?>"> 
                <p class="name_img"><?=$pic_name[$indexPicture]?> </p>
            </div>
        </li>
       </div>
<?php } ?>
</div></div>
</ul>
</div>


<!-- BODY CONTENT -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script  src="./css/script.js"></script>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">

        $(".sendImage").on('click', function(){
            var tableta_id = Array();
                $("input[name='testImage']:checked").each(function (i, v) {
                    tableta_id[i] = $(this).val();
                });
                $("#image").val(tableta_id);

        });

        $(".sendDirect").on('click', function(){
                var direct = $("#direct").val();

        });

        $(".sendEmail").on('click', function(){
            var email = $("#email").val();
            var image = $("#image").val();
            var direct = $("#direct").val();
            alert('กำลังอัพโหลดไฟล์');

            if (email!=null) {
                var _token = $('input[name="_token"]').val();
                $("#show-logo").hide();
                $("#show-loader").show();
                $.ajax({
                   url: 'sendEmail.php',
                   type: 'POST',
                   data: {
                       email: email,
                       image : image,
                       _token : _token,
                       direct : direct
                   }, success: function(response) {
                    var json_re = JSON.parse(response);
                    // console.log(test.status);
                    
                        $("#show-logo").show();
                        $("#show-loader").hide();
                        if (json_re.status == "success"){

                            alert('Email Has Been Sent!');
                        }
                        else {
                            alert('ERROR');
                           
                        }
                   }
                });
            }
        });

    $(document).ready(function(){
      $("#hide").click(function(){
        $("p").hide();
      });
      $("#show").click(function(){
        $("p").show();
      });
    });


    </script>
</body>
</html>
