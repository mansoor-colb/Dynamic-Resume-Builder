<?php
session_start();
// $_SESSION['userId'] = '1';
if(!isset($_SESSION['userId']))
{
  header('location:login.php');
}
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Online Resume Builder</title>
  <?php require 'assets/function.php'; ?>
	<?php require "assets/autoloader.php" ?>
	<style type="text/css">
	<?php include 'css/myStyle.css'; ?>		

.treb{font-family: 'KoHo', sans-serif;}
.flex{display: flex}
.hub-top {position: fixed;top: 0;z-index: 20;width: 100%;background:transparent;height: 111px;}
.logo{padding:11px 5px 11px 22px;color: white}
.logo i{color: white;font-size: 77pt}
.logoname{color: white;font-size: 22pt;padding: 22px 11px;}
.login{margin: 11px; color:white;}
.m1{margin: 1px}
.dashboard{background: #333333;position: fixed;height: 100%;width: 17%;padding-top: 111px;}
.dashboard span{color:white;font-size:20px;letter-spacing:1px;padding: 11px 22px;display: block;}
.dashboard ul{list-style: none;padding: 0}
.dashboard ul li{color: white;padding: 6px 22px;display: block;font-size: 14pt;box-shadow: 1px 1px 2px black;;margin-top: 3px}
.dashboard ul li:hover{box-shadow: 1px 1px 2px green;cursor: pointer;background: #ADD8E6;color: black}
.dashboard ul li i{float: right;padding-top: 5px}
/* .dashboard:hover{box-shadow: 2px 2px 22px green} */
.admin-pic{position: relative;top: -88px;left: 33px}
.admin-name{position: relative;top: -166px;left: 166px;font-size: 13pt;}
.admin-pic img{width: 111px ;height: 111px}
/* .name{} */
.center{text-align: center;}
#mydiv:hover{box-shadow: 2px 2px 22px blue}
</style>
</head>
<body style="background: url(photo/main.jpg) fixed;">


<div class="background-image"></div>
<div class="hub-top">
	<div class="logo flex pull-left">
		<div><i class="glyphicon glyphicon-cloud"></i></div>
		<div class="logoname treb"><span>Online  Resume Builder </span></div>
	</div>


	<div class="login pull-right " style="margin-right: 44px">
		<div><img src="photo/user.png" class="img-responsive" style="width: 55px;margin:auto;"></div>
		<div class="treb" class="name "><span style="text-align: center;"><?php echo userName(); ?></span><br>
		<a href="setting.php"></a><button class="btn btn-success btn-sm" style="padding: 1px 11px;font-size: 8pt">Setting <i class="fa fa-gear fa-fw"></i></button></a>
		</div>

	</div>

</div>
<div class="dashboard treb " style="background-color:transparent;  opacity: inherit;">
	<span class="dbname">Dashboad</span>
	<ul>
		<a href="index.php"><li><i class="fa fa-home fa-fw"></i> Home</li></a>
		<a href="newCv.php"><li><i class="fa fa-edit fa-fw"></i> Build New CV</li></a>
		<a href="savedCv.php"><li ><i class="fa fa-user-circle fa-fw"></i>Saved CV's</li></a>
		<a href="contactUs.php" ><li style="background:#739099"><i class="fa fa-phone fa-fw"></i> Contact Us</li></a>
    <a href="setting.php"><li><i class="fa fa-gear fa-fw"></i>Account Setting</li></a>
		<a href="logout.php"><li><i class="fa fa-sign-out fa-fw"></i> Logout</li></a>
	</ul>
</div>

<div class="well well-sm" style="margin-left: 18%;font-family: 'Acme', sans-serif;background:transparent;border:none;padding-top: 122px;background-color: rgba(0, 0, 0, 0.4);  opacity: inherit;">
  <div class="panel panel-primary"style="background-color:transparent;">
  		<div class="panel-heading center" style="background-color:transparent;"><h3>About Us</h3></div>
  		<div class="panel-body" style="font-size:20px;letter-spacing:1px;color: #ADD8E6;background:transparent;">
  			We Are The People, Who Are Very Innovative in Presence Of minds.Our Job Is To Make People Adapt
			  A Hazzle Free Life-Style By Making Them Connect With The Technologies. 
  			<br>
  			<h2>Easy Way OF Handling Chores.</h2> 
  		</div>

  </div>
  <div class="panel panel-primary"style="background-color:transparent;">
  		<div class="panel-heading center" style="background-color:transparent;"><h3>Address and Phone Number</h3></div>
  		<div class="panel-body" style="color: #ADD8E6;background:transparent;letter-spacing:1px">
  			<h3>
  				<i class="fa fa-phone fa-fw" ></i>080-675675-324
  				<br><br>
  				<i class="fa fa-book fa-fw"></i> meghana@gmail.com
				<br><br>
  				<i class="fa fa-book fa-fw"></i> manisha2@gmail.com
				<br><br>
  				<i class="fa fa-book fa-fw"></i> Prerana@gmail.com
				  <br><br>
  				<i class="fa fa-book fa-fw"></i> mansoor@gmail.com.com

  			</h3>
  		</div>
  </div>
   
</div>

</body>
</html>

