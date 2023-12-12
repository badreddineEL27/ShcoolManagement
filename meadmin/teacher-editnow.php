<?php 

 $teacher_id = $_GET['teacherid'];
 $edit_teacher_info = $ravi->edit_teacherid($teacher_id);
	$edit_teacher_display = $edit_teacher_info->fetch_assoc();


if(isset($_POST['up_teacher']))
{
	
	
	$up_fullname = $_POST['up_fullname'];
	$up_address = $_POST['up_address'];
	$up_email = $_POST['up_email'];
	$up_father = $_POST['up_father'];
	$up_mother = $_POST['up_mother'];
	$up_dob = $_POST['up_dob'];
	$up_qualification = $_POST['up_qualification'];
	$up_contact = $_POST['up_contact'];
	$up_staff = $_POST['up_staff'];
	$up_gender = $_POST['up_gender'];
	
	$update_done = $ravi->update_teacher_info($up_fullname,$up_address,$up_email,$up_father,$up_mother,$up_dob,$up_qualification,$up_contact,$up_staff,$up_gender,$teacher_id);
	if($update_done==true)
	{
		echo "<script>window.location='home.php?ravi=teacher-information';</script>";
	}
	else
	{
		echo "<script>alert('Impossible de mettre à jour les informations');</script>";
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
		Formateurs
		</h2>

		<div class="grid-1">
			<div class="form-body">
				<form class="form-horizontal" method="post">
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Nom Complet</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="up_fullname" value="<?php echo $edit_teacher_display['t_fullname']; ?>"> </div>
					</div>
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Adresse</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="up_address" value="<?php echo $edit_teacher_display['t_address']; ?>"> </div>
					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_email" value="<?php echo $edit_teacher_display['t_email']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Nom du Père</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_father" value="<?php echo $edit_teacher_display['t_father']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Nom de la Mère</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_mother" value="<?php echo $edit_teacher_display['t_mother']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Date de Naissance</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_dob" value="<?php echo $edit_teacher_display['t_dob']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Qualification</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_qualification" value="<?php echo $edit_teacher_display['t_qualification']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Télé</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_contact" value="<?php echo $edit_teacher_display['t_contact']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Type de Formateur</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_staff" value="<?php echo $edit_teacher_display['t_staff_type']; ?>"> </div>

					</div>
					<div class="form-group">


						<select id="selector1" class="form-control1" name="up_gender">
						   <option value="<?php echo $edit_teacher_display['t_gender']; ?>">Sexe</option>
							<option>Homme</option>
						   <option>Famme</option>
							</select>
					</div>


					<div class="col-sm-offset-2"> <button type="submit" class="btn btn-default" name="up_teacher">Mettre à jour le profil de Formateur</button> </div>
				</form>
			</div>

		</div>


	</div>