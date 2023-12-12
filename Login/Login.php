<!DOCTYPE html>
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
	<script language="javascript" type="text/javascript" src="../js/login.js"></script>
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

		<div class='logo'><img src="../assets/images/agaIs_logo.png" alt="" style="width: 300px;" /></div>
	<div class='form'>    
        <h1 style="color: var(--theme-color);font-size: 25px;">Espace Stagiaire</h1>
        <div class='line'></div> 
        <form method="post" action="index.php">
            <div>                                                                                                        
            <span class='ie-placeholders'>CNE:</span>
            <input maxlength="14" class="form-control" name="username" id="username" type="text"  size=20 placeholder="<?php echo $Translation['username']; ?>" required>
            <br/>
            Format du CNE: YY-XXXXXXXX (Année du Bac + tiret + 8 chiffres)
            </div>
            <br/>
            <div>                                                                           
                <span class='ie-placeholders'>CIN:</span>
                <input maxlength="8" class="form-control" name="password" id="password" type="password" size=20 required>
				<span class="help-block"></span>
                <br/>
            </div>
            <br>
            <div class="checkbox">
						<label class="control-label" for="rememberMe">
							<input type="checkbox" name="rememberMe" id="rememberMe" value="1">
						</label>
					</div>
            <div>
            <button name="signIn" type="submit" id="submit" value="signIn" class="btn btn-theme2"  style="display: block;  margin-left: auto; margin-right: auto " ></button>
            </div>
		</form>
	<div align="center" id="message" for="status">
        <a class="nav-link"> Entrez votre CNE ou Massar et votre CIN pour se connecter ...</a>
	</div>
	</div>  
	</section>
</div>
<script>document.getElementById('username').focus();</script>
<?php include_once("$currDir/footer.php"); ?>
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