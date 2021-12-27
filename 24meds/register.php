<?php require("connection.php")?>
<?php
session_start();

if(isset($_SESSION["loggedin"])){
    header("location:/24med/index.php");
    die();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$mno=$_POST['phoneno'];

if(isset($_POST['submit']))
{
  $registerUser = "INSERT INTO user (name, email, password,phone_no) VALUES ('".$name."','".$email."','".$pass."','".$mno."')";

  if ($conn->query($registerUser) === TRUE) {
    $_SESSION["user_email"]=$email;
    header("location:/24med/index.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
}
?>


<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script>

</script>

<title>Register</title>
  </head>
  
  <body>
  
  <div class="jumbotron jumbotron-fluid" style="background-color:silver">

  <form method="post">
<div class="ui text container">
<h1>Register</h1>

  <div class="ui inverted huge form">
  <div class="field">
        <label>Name</label>
        <input placeholder="Name" type="text" name="name" required="" maxlength="20">
    </div>
    <div class="field">
        <label>Email</label>
        <input placeholder="Email" type="email" name="email" required="" >
    </div>
    <div class="field">
        <label>Password</label>
        <input placeholder="Password" type="password" name="password" required="" maxlength="20">
    </div>
    <div class="field">
        <label>Mobile No.</label>
        <input placeholder="Mobile No" type="tel" name="phoneno" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
    </div>
    <button type="submit" class="ui inverted huge red submit button" name="submit">Register</button>
    <a type="submit" class="ui  huge red submit button" href="/24meds/login.php">Already Registered ?</a>
  </div>
</div>
</div>
</form>
       <!DOCTYPE html>
<html lang="zxx">
<head>
<title>Health Plus a Medical Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-meta-tags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Health Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-meta-tags-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" Department="" />
<link href="css/services.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/ziehharmonika.css" rel="stylesheet" type="text/css">
<link href="css/JiSlider.css" rel="stylesheet"> 
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
</head>	
<div class="main" id="home">
<!-- banner -->
<body>

	<?php
            include './footer.php';
            ?>	
</body>
</html>
  </body>
  </html>