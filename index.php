<?php 
// include('../lib/config2.php');
// echo $base_url;
// echo $_SESSION['status_login'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login #7</title>
  </head>
  <body>
  
  <?php

session_start();
// include('../lib/config.php');
// include('../lib/database.php');
// include('../lib/default_label.php');
if($_POST){
$UserID = preg_replace('/[\'"~!#$%^*+`{}|:;<>?,]/','', $_POST['UserID']);
$Password = preg_replace('/[\'"~!#$%^*+`{}|:;<>?,]/','', $_POST['Password']);
  	  $plaintext = $Password;  
      //Encode plaintext  
      $encode = base64_encode($plaintext);  
      //Decode plaintext  
      $decode = base64_decode($encode);
	
if ($_POST['id_index']==1) {					####################################// Proses logoff
	session_destroy();
	session_unset();
	mssql_close($con);
	echo "<meta content='0;url=../' http-equiv='Refresh'>";
} else if ($_POST['id_index']==2) {			####################################// 
	//error_reporting(E_ALL);
	if($Password=='testing')
		//if if(strtoupper($UserID), array('ADMIN', 'HOS')) && $Cond2)
		{			##### IF PWDQWERTY
		// $sql="   
		// select a.idpetugas, a.password,
		// a.namapetugas,a.nopend,b.kdhakakses,b.deshakakses,c.Idwilayah,b.kdgrupakses,c.divre
		// from m_userlogin a, r_hakakses b, r_kantor c
		// where a.hakakses=b.kdhakakses and a.nopend=c.nopend and idpetugas='$_POST[UserID]'
		// and statusakses='0'
		// 		  ";
		// 	$sql="   
		// 	SELECT user_id, user_name,user_password,user_role,user_status from asscent.[user] 
		// 	where user_name = '$_POST[UserID]'
		// 		  ";
		// $Q=$query($sql) or die ("Terdapat kesalahan perintah!");
		// 	if ($R=$row($Q)) {					#####// Login sukses WITH QUERTY PWD
				// Set session
				$_SESSION["pet"]			="tes";				// Id login
				$_SESSION["nama"]			="tos";				// Password			
				//$_SESSION["pwd"]			=$R[1];				// kode suplier	
				$_SESSION["kdakses"]		="1";				// nopend		
				$_SESSION["id_ses"]			=1;					// Check session
				$_SESSION["bagian"] 		=7;
				$_SESSION["ses"]			=$PHPSESSID;		// Check session
				$_SESSION['status_login']	= true;
				header("Location:production/");
				// } else {							#####// Login gagal WITH QUERTY PWD
				// $pesan="Login gagal, ID Pengguna atau Password salah! cc";
				// $act="back";
				// include("../lib/pesan.php");
			// }
		} else {
		// $sql="   
		// 	SELECT user_id, user_name,user_password,user_role,user_status from asscent.[user] 
		// 	where user_name = '$_POST[UserID]' and user_password = '$encode'
		// 		  ";
		// $Q=$query($sql) or die ("Terdapat kesalahan perintah!");
		// 	if ($R=$row($Q)) {					#####// Login sukses WITH QUERTY PWD
		// 		// Set session
		// 		$_SESSION["pet"]			=$R[0];				// Id login
		// 		$_SESSION["nama"]			=$R[1];				// Password			
		// 		//$_SESSION["pwd"]			=$R[1];				// kode suplier	
		// 		$_SESSION["kdakses"]		=$R[3];			// nopend		
		// 		$_SESSION["id_ses"]			=1;					// Check session
		// 		$_SESSION["bagian"] 		=7;
		// 		$_SESSION["ses"]			=$PHPSESSID;		// Check session
		// 		$_SESSION['status_login']	= true;
		// 		header("Location:../");
		// 		} else {							#####// Login gagal WITH QUERTY PWD
				$pesan="Login gagal, ID Pengguna atau Password salah! cc";
				$act="back";
				include("pesan.php");
			// }
		}
} }
else {
?>
  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/cuate1.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Selamat Datang di Pos Hub, Bagikan pengetahuanmu mulai dari sini</p>
            </div>
            <form class="login100-form validate-form" action="" method="post" id="login" name="login" onsubmit="loading(this);">
              <div class="form-group first">
                <label for="username">Username</label>
                <!-- <input type="text" class="form-control" id="username"> -->
                <input class="form-control" type="text"  name="UserID" id="UserID" >
                <input type="hidden" name="id_index" value="2">



              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="Password" id="Password" >
                <!-- <input type="password" class="form-control" id="password"> -->
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary" style="background-color:#FFA500">

              <span class="d-block text-left my-4 text-muted">&mdash; Sign Up &mdash;</span>
              
              <div class="social-login">
                <a href="https://www.facebook.com/" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="https://twitter.com/i/flow/login" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=1209600&osid=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  <?php }; ?>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>