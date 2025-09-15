<?php 

   if (isset($_POST['login'])) {
   		$username=$_POST['username'];
   		$password=$_POST['password'];

   		if ($username=="admin" && $password=="123") {
   			setcookie('login', "berhasil Login haha" , time() + 3600);
   			setcookie('user', "$username" , time() + 3600);

   			header("Location:dashboard.php");
   		}else{
   		$pesan="
   			<div class='alert alert-danger mt-4' role='alert'>
  		 	 Username dan Password Salah!
			</div>
	    ";

   		}
   	 }

?>

<html>
<head>
	<title>Login Cookie</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
	
</head>
<body>
	<div class="container-fluid bg-primary-subtle d-flex align-items-center
	justify-content-center" style="height:100vh">
	<div class="card py-5 px-4 text-center" style="border-radius:15px">
		<h3>LOGIN</h3>
		<?php 
			if (isset($pesan)) {
				echo $pesan;
			}
		?>

		<form method="post" action="">
			<input type="text" name="username" class="form-control my-3"
			placeholder="Input Username">
			<input type="password" name="password" class="form-control my-3"
			placeholder="Input Password">
			<button type="submit" name="login" class="btn btn-primary">Login</button>
		</form>
	</div>
</div>
</body>
</html>