<?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
  background-image: url('ready1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>

  <title>Quiz Practice</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <center><h2>ONLINE QUIZ</h2></center>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">PROFILE</a></li>
    <li style="float:right"><a href="logout.php">Logout</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select" >Start Quiz</button></center>      
      <div class="col-sm-4"></div>
	   <div class="col-sm-4"><br>
      <div id="select" class="tab-pane fade">

      <form  method="post" action="ques_show.php">
      <select class="form-control" id=#select name="cat">
      <option>select category</option>
      <?php		  
		  foreach($profile->cat as $category)
		  {  ?>			  			
			<option value="<?php echo $category['id'];?>"><?php echo $category['cat_id'];?></option>
			<?php   }?>
    </select><br>
    <center><input type="submit" value="submit" class="btn btn-primary" /></center>
    </form>
      </div>
	  </div>
	  <div class="col-sm-4"></div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>SHOWING PROFILE</h3>
      <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>

    <?php 
	foreach($profile->data as $prof)
	{?>
      <tr>
        <td><?php echo $prof['id'];?></td>
        <td><?php echo $prof['name'];?></td>
        <td><?php echo $prof['email'];?></td>
        <td><img src="img/<?php echo $prof['img'];  ?>" alt="" width="35px" height="30px" /></td>
      </tr>
    </tbody>
	<?php 	}?>
  </table>



</body>
</html>