<?php 


 if(isset($_POST['add_teacher_info']))
 {
	 //$add_t_fullname,$add_t_address,$add_t_email,$add_t_username,$add_t_pass,$add_t_father,$add_t_mother,$add_t_dob,$add_t_qualification,$add_t_contact,$add_t_staff,$add_t_gender
	  $add_t_fullname = $_POST['add_t_fullname'];
	 $add_t_address = $_POST['add_t_address'];
	 $add_t_email = $_POST['add_t_email'];
	 $add_t_username = $_POST['add_t_username'];
	 $add_t_pass = $_POST['add_t_pass'];
	 $add_t_father = $_POST['add_t_father'];
	 $add_t_mother = $_POST['add_t_mother'];
	 $add_t_dob = $_POST['add_t_dob'];
	 $add_t_qualification = $_POST['add_t_qualification'];
	 $add_t_contact = $_POST['add_t_contact'];
	 $add_t_staff = $_POST['add_t_staff'];
	 $add_t_gender = $_POST['add_t_gender'];
	 if($add_t_fullname=="" OR $add_t_address=="" OR $add_t_email=="" OR $add_t_username=="" OR $add_t_pass=="" OR $add_t_father=="" OR $add_t_mother=="" OR $add_t_dob=="" OR $add_t_qualification=="" OR $add_t_contact=="" OR $add_t_staff=="" OR $add_t_gender=="")
	 {
		 echo "<script>alert('Certains champs manquent....');</script>";
	 }
	 else
	 {
	
	 
	 $add_done = $ravi->add_teacher($add_t_fullname,$add_t_address,$add_t_email,$add_t_username,$add_t_pass,$add_t_father,$add_t_mother,$add_t_dob,$add_t_qualification,$add_t_contact,$add_t_staff,$add_t_gender);
	 if($add_done==true)
	 {
		 echo "<script>window.location='home.php?teacher=teacher-information';</script>";
	 }
	 else
	 {
		 echo "<script>alert('échec de l'ajout d'informations sur l'enseignant');</script>";
	 }
 }
 }

?>
<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="index.html">Home</a></li>
			<li class="active">
			Formateurs
			</li>
		</ol>
	</div>
	<!--//sub-heard-part-->
	<div class="graph-visual tables-main">
		<h2 class="inner-tittle">
			Ajouter un Formateur
		</h2>

		<div class="grid-1">
			<div class="form-body">
				<form class="form-horizontal" method="post">
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Nom Complet</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="add_t_fullname" placeholder="Nom Complet"> </div>
					</div>
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Adresse</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="add_t_address" placeholder="Adresse"> </div>
					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_email" placeholder="Email"> </div>

					</div>
				<div class="form-group"> <label for="address" class="col-sm-2 control-label">N.Utilisateur</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_username" placeholder="Nom d'utilisateur"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Mot de Passe</label>
						<div class="col-sm-9"> <input type="password" class="form-control" name="add_t_pass" placeholder="Mot de Passe"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Nom du Père</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_father" placeholder="Nom du Père"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Nom de la Mère</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_mother" placeholder="Nom de la Mère"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Date de Naissance</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_dob" placeholder="Date de Naissance"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Qualification</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_qualification" placeholder="Qualification"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Télé</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_contact" Placeholder="Télé"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Type de Formateur</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_staff" placeholder="Type de Formateur"> </div>

					</div>
					<div class="form-group">


						<select id="selector1" class="form-control1" name="add_t_gender">
						   <option>Sexe</option>
							<option value="Male">Homme</option>
						   <option value="Female">Famme</option>
							</select>
					</div>


					<div class="col-sm-offset-2"> 
						<input type="submit" class="btn btn-default" name="add_teacher_info" value ="Add Teacher Info">
						</div>
				</form>
			</div>

		</div>


	</div>