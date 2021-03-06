<!DOCTYPE html>
<html>
<head>
	<title> Sign up/Login Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
	<style>
	*
	{
		margin:0px;
		padding:0px;
	}
	.left-column,.right-column
	{
		margin-top:20px;
		width:45%;
		height : 325px;
		display: inline-block;
		float:left;
		border-radius: 10px;
		background-color: #d3d3d3	;
	}
	.right-column
	{
		position: relative;
		margin-left :100px;
	}
	input[type=text],input[type=password] {
		padding:12px 10px;
		margin:8px 0px;
		display:inline-block;
	}
	input[type=submit] {
	  width: 100%;
	  background-color: #00b3b3;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	}

	input[type=submit]:hover {
	  background-color: #45a049;
	}
	div.box
	{
		margin-top: 100px;
		width:90%;
		display:inline-block;
		border-radius: 10px;
	 	background-color: #F2F2F2;
	  	padding: 20px;
	  	margin-left:40px;
	}
	.text 
	{
		display:inline-block;
		width:150px;
		height:20px;
		text-align:center;
	}
	span
	{
		width:90px
	}
	body
	{
		background-color: #00b3b3;
	}
	</style>
</head>
<body>
	<div class="box">
		<h2>Healthcare Management System - Doctor Signup/Login</h2>
		<div class="left-column">
			<h3 class ="sign-tag">&nbsp;Sign up here !</h3>
			<form action="signupDoctor.php" method="POST">
					<div class ="text">Name :</div>
					<input type="text" id="doc_name_s" name="doc_name_s"/> <br/>

					<div class ="text">Password :</div>
					<input type="password" id="doc_pass_s" name="doc_pass_s"/><br/>

					<div class ="text">Repeat Password :</div>
					<input type="password" id="doc_repe_s"/><br/>

					<div class ="text">Hospital :</div>
					<input type="text" id="hospital" name="hospital" placeholder="Select Hospital Name" class="form-control" style="width:190px;">
					<div id="hospitalList"></div>

					<div class ="text">Specialization :</div>
					<select name = "specialization">
						<option value="Cardiologist">Cardiologist</option>
						<option value="Anesthesiologist">Anesthesiologist</option>
						<option value="Dermatologist">Dermatologist</option>
						<option value="Gatroenterologist">Gatroenterologist</option>
						<option value="Gynecologist">Gynecologist</option>
						<option value="Nephrologist">Nephrologist</option>
						<option value="Neurologist">Neurologist</option>
						<option value="Oncologist">Oncologist</option>
						<option value="Ophthalmologist">Ophthalmologist</option>
						<option value="Pediatrician">Pediatrician</option>
						<option value="Radiologist">Radiologist</option>
					</select>
					<input type="submit" name="Sign up"/>
			</form>
		</div>
		<div class="vertical"></div>
		<div class="right-column">
			<h3 class="log-tag">&nbsp;Log In here !</h3>
			<form action="loginDoctor.php" method="POST">
					<div class ="text">Name :</div>
					<input type="text" id="doc_name_l" name="doc_name_l"/><br/>
					<div class ="text">Password :</div>
					<input type="password" id="doc_pass_l" name="doc_pass_l"/><br/>
					<input type="password" style="visibility:hidden;"/><br/>
					<input type="password" style="visibility:hidden;"/><br/>
					<input type="submit" style="margin-top:15px;" value="Log In"/>
			</form>
		</div>
	</div>
</body>
</html>

<!--script>
	$(document).ready(function(){
		$('#hospital').keyup(function(){
			var query = $(this).val();
			if(query != ''){
				$.ajax({
					url:"hospitaldb.php",
					method:"POST",
					data:{query:query},
					success:function(data){
						$('#hospitalList').fadeIn();
						$('#hospitalList').html(data);
					}
				});
			}
			else{
				$('#hospitalList').fadeOut();
				$('#hospitalList').html("");
			}
		});

		$(document).on('click','li',function(){
			$('#hospital').val($(this).text());
			$('#hospitalList').fadeOut();
		});
	});

</script-->