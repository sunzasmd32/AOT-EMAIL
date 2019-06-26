<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="css/custom.css">

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
@media(min-width:768px) {
    body {
        margin-top: 50px;
    }
    /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/
}

#wrapper {
    padding-left: 0;    
}

#page-wrapper {
    width: 100%;        
    padding: 0;
    background-color: #fff;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 225px;
    }

    #page-wrapper {
        padding: 22px 10px;
    }
}

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

@media(min-width:768px) {
    .side-nav {
        position: fixed;
        top: 70px;
        left: 225px;
        width: 225px;
        margin-left: -225px;
        border: none;
        border-radius: 0;
        border-top: 1px rgba(0,0,0,.5) solid;
        overflow-y: auto;
        background-color: #e6e6e6;
        /*background-color: #5A6B7D;*/
        bottom: 0;
        overflow-x: hidden;
        padding-bottom: 40px;
    }

    .side-nav>li>a {
        width: 225px;
        border-bottom: 1px rgba(0,0,0,.3) solid;
    }

    .side-nav li a:hover,
    .side-nav li a:focus {
        outline: none;
        background-color: #1a242f !important;
    }
}

.side-nav>li>ul {
    padding: 0;
    border-bottom: 1px rgba(0,0,0,.3) solid;
}

.side-nav>li>ul>li>a {
    display: block;
    padding: 10px 15px 10px 38px;
    text-decoration: none;
    /*color: #999;*/
    color: #fff;    
}

.side-nav>li>ul>li>a:hover {
    color: #fff;
}

.button1555 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button555 {
  background-color: #4CAF50; /* Green */
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
<body>
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>

<div id="wrapper">

    <!-- Navigation -->

    <nav class="navbar navbar-inverse2 navbar-fixed-top" role="navigation">
        <a href="https://www.airportthai.co.th/th/"><img src="Logo_AOT.png" style="width: auto; height: 60px;"></a>
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
            <li>
                <input class="form-control mr-sm-2" type="text" placeholder="Search" >
            </li>
            <li style="padding-left:10px;">
                <button class="btn btn-success" type="submit" >Search</button>
            </li>
            <li style="padding-left:10px;"><button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary">Send Picture</button></li>
</ul>

<div id="id01" class="modal">  
    <div class="modal-dialog" role="document">
    <div class="modal-content animate">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Email</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"  onclick="document.getElementById('id01').style.display='none'" >
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
    <img src="EmailTesting_Icon_Aqua.png" class="logo"><br>
</div>
      
         <input id="email" placeholder="Email" class="form-control">
      <input type="hidden" id="image" placeholder="image" class="form-control">
      </div>
      <div class="modal-footer">
      <button value="Send An Email" id="show" class="btn btn-success sendEmail" >Send An Email</button>
        <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
      </div>
    </div>
  </div>
</div>
</li>
            <li>
            </li>            
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i> Show Folder <i class="fa fa-fw fa-angle-down pull-right"></i></a>
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
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
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
    <div class="container" style="width: auto;">
    <div class="row">
    <?php for($indexPicture=0;$indexPicture<$size-2;$indexPicture++){ ?>
       <div class="col col-md-auto">
       <li class="tiles__tile">
            <div class="tiles__tile__inner">
                 <input type="checkbox" class="canselect img sendImage" name="testImage"  id="testImage[<?=$indexPicture?>]"  value="<?=$pic_name[$indexPicture]?>">

                <label for="testImage[<?=$indexPicture?>]">Select</label>
                <img style="width:500px; height:500px; background-size:cover;" src="<?=$pic_path[$indexPicture]?>"> 
                <?=$pic_name[$indexPicture]?> 
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
                   }, success: function (response) {
                        $("#show-logo").show();
                        $("#show-loader").hide();
                        if (response.status == "success"){

                            alert('Email Has Been Sent!');
                        }
                        else {
                            alert('ERROR');
                            console.log(response);
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
