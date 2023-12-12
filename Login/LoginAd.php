<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Espace Administrative</title>
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
            background-image: url(../assets/images/bg.jpg) ;
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
        <h1 style="color: var(--theme-color);font-size: 25px;">Espace Administrative</h1>
        <div class='line'></div> 
	    <form action="login.php" method="post" name="login-form" id="login-form">
            <div> 
            Nom d'utilisateur *                                                                                                       
            <span class='ie-placeholders'>Nom d'utilisateur </span>
            <input maxlength="14" type='text' name='code_etud' id="code_etud" size=20 placeholder="Nom d'utilisateur" required autofocus onchange="javascript: this.value = this.value.replace(/[*+:;,!?_///\s]+/ig,'');" />  
            <br/>
            </div>
            <br/>
            <div> 
            Mot de passe *                                                                          
                <span class='ie-placeholders'>Mot de passe </span>
                <input maxlength="8" type='password'  name='cin_etud' id="cin_etud" size=20 placeholder='Mot de passe' required onchange="javascript:this.value = this.value.replace(/[-*+:;,!?_///\s]+/ig,'');" />
                <br/>
            </div>
            <br>
            <div>
                <input type="submit" name="login_button" id="login_button" class="btn btn-theme2" value="Connexion" style="display: block;  margin-left: auto; margin-right: auto " >
            </div>
		</form>
<script language="javascript">
    $('#code_etud').focus();
</script> 
<div align="center" id="message" for="status">
        <a class="nav-link" href="Login.php">Espace Stagiaire</a>
	</div>
	</div>  
	</section>
</div>
<a class="nav-link" href="../index.php" align="center" ><img src="../assets/images/accueil.png" alt="Accueil"></a>
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