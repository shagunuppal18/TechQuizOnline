<!DOCTYPE html>
<html lang="en">
<head>
<style>
h1 {
  text-align: center;
}
</style>
<style>
body {
  background-image: url('quiz.jpg');
}
</style>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body> 


<div class="panel panel-danger">
      <div class="panel-heading">
      <h1>WELCOME TO THE QUIZ!!!</h1></div>
    </div>
    

<div class="container">
<div class="row">
<div class="col-sm-6">

  <div class="panel panel-primary">
  <div class="panel-heading">
  <h2>LOGIN </h2>
  </div>
  <div class="panel-body">
  <?php
	if(isset($_GET['run'])  && $_GET['run']=="failed")
	{
        	echo "Your email or password is not correct";
	}
	?>
  <form role="form" action="login.php" method="post">
  <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name = "e" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control"  name = "p" id="pwd" placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
  </div>
  </div>

  <div class="col-sm-6">
  <div class="panel panel-primary">
  <div class="panel-heading">
  <h2>SIGN UP</h2>
  </div>
  <div class="panel-body">
  <?php 
	if(isset($_GET['run'])&& $_GET['run']=="success"){echo  "<mark>Your registration successfully done </mark>";} 
	?>
  <form role = "form" method ="post" action= "signup1.php" enctype = "multipart/form-data">
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="n" id="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
    </div>
    <div class="form-group">
      <label for="pwd">Upload your image</label>
      <input type="file" class="form-control" name="img" id="file" >
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
  </div>
</div>
</div>
</div>

</body>
</html>
