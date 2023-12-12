<?php 
session_start();

if(@$_SESSION['st_user'])
{
	header("location:../students/home.php");
}
 include "../setting/config.php";
if(isset($_POST['student_signin']))
{
 $st_username = $_POST['st_username'];
	
	$st_password = $_POST['st_password']; 
	
	if($st_username=="" || $st_password=="")
	{
      echo "<script>alert('Please Fill Properly');</script>";
	}
	 else
	 {
	$go = $ravi->student_login_check($st_username,$st_password);
	if($go==1)
	{
		$_SESSION['st_user'] = $st_username;
		header("location:../students/home.php");
	}
	else
	{
		echo "<script>alert('login failed');</script>";
	}
	 }
	
}

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Espace Stagiaire</title>
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style-bootstrap.css">
    <link href="../assets/Bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <link href="../assets/Bootstrap/css/fontsgoogleapis.css" rel="stylesheet" type="text/css" media="screen">
    <link href="../assets/Bootstrap/css/form-style.css" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript" src="../assets/Bootstrap/js/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="../assets/Bootstrap/js/bootstrap.min.js"></script>
    <style>
        body{
            background-image: url(../assets/images/2.jpg) ;
            background-repeat: no-repeat;
            background-position: center calc(0.375em + 0.1875rem) center;
        }
    </style>
</head> 
<body>
<div class="container" id="login_form">
	<section id="content">

<div class='logo'><a href="../index.php" ><img src="../assets/images/agaIs_logo.png" alt="" style="width: 300px;" /></a></div>
	<div class='form'>    
        <h1 style="color: var(--theme-color);font-size: 25px;">Espace Stagiaire</h1>
        <div class='line'></div> 
        <form method="post">
            <div>                                                                                                        
            <span class='ie-placeholders'>CNE:</span>
            <input maxlength="14" class="form-control" name="st_username" id="st_username" type="text"  size=20 >
            Format de Username: ABCD@ofppt-edu.ma (Nom Complet@ + OFPPT-edu.ma)
            </div>
            <br/>
            <div>                                                                           
                <span class='ie-placeholders'>CIN:</span>
                <input maxlength="8" class="form-control" name="st_password" id="st_password" type="password" size=20>
				<span class="help-block"></span>
                Pour les non nationaux n'ayant pas de CIN: saisir J000000
            </div>
            <br>
            <div class="checkbox">
						<label class="control-label" for="rememberMe">
                        forgot password?
						</label>
					</div>
            <div>
            <button name="student_signin" type="submit" id="submit" value="Login" class="btn btn-theme2"  style="display: block;  margin-left: auto; margin-right: auto " >Connexion</button>
            </div>
		</form>
	<div align="center" id="message" for="status">
        <a class="nav-link"> Entrez votre CNE ou Massar et votre CIN pour se connecter ...</a>
	</div>
	</div>  
	</section>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<!-- référencement -->  
<!-- <img alt="Clicky" width="1" height="1" src="//in.getclicky.com/101121212ns.gif" /> -->
</body>
</html>