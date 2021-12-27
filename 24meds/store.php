<?php require("connection.php")?>
<?php  session_start(); 
?>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Semantic CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script>

</script>

<title>Store</title>
  </head>
  <body>
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
            include './top_section.php';
            ?>	
</body>
</html>
 <style>
 .carousel {
   max-height:500px;  
   max-width:70%;
   margin-left:auto;
   margin-right:auto;
   margin-top:0px;
 }
.carousel img{
  max-height:500px;  
  margin-left:auto;
   margin-right:auto;
}
 </style>
  <div class="ui segment grey inverted">


<h1 class="display-3"style="text-align:center;">Ayurvedic</h1>

<div class="ui container four stackable cards mt-4">
<?php
$sql = "SELECT * FROM product where c_id=1 limit 5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
        <a class="card" href="/24meds/product.php?pid=<?php echo $row['p_id'];?>">
        <div class="content">
        <div class="header">    <?php echo $row['name']?></div>
        </div>
    <div class="image">
      <img src="<?php echo $row['image'];?>" style="max-width:100%;max-height:300px;overflow:hidden;">
    </div>
  </a>
  <?php
    }
} else {
    echo "0 results";
}?>
</div>
<h1 class="display-3"style="text-align:center;">Allopathic</h1>

<div class="ui container four stackable cards mt-4">

<?php
$sql = "SELECT * FROM product where c_id=2 limit 5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
        <a class="card" href="/24meds/product.php?pid=<?php echo $row['p_id'];?>">
        <div class="content">
        <div class="header">    <?php echo $row['name']?></div>
        </div>
    <div class="image">
      <img src="<?php echo $row['image'];?>" style="max-width:100%;max-height:300px;overflow:hidden;">
    </div>
  </a>
  <?php
    }
} else {
    echo "0 results";
}?>
</div>
<h1 class="display-3"style="text-align:center;">Generic</h1>

<div class="ui container four stackable cards mt-4">
<?php
$sql = "SELECT * FROM product where c_id=3 limit 5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
        <a class="card" href="/24med/product.php?pid=<?php echo $row['p_id'];?>">
        <div class="content">
        <div class="header">    <?php echo $row['name']?></div>
        </div>
    <div class="image">
      <img src="<?php echo $row['image'];?>" style="max-width:100%;max-height:300px;overflow:hidden;">
    </div>
  </a>
  <?php
    }
} else {
    echo "0 results";
}?>
</div>
<h1 class="display-3"style="text-align:center;">Homeopathic</h1>

<div class="ui container four stackable cards mt-4">
<?php
$sql = "SELECT * FROM product where c_id=4 limit 5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
        <a class="card" href="/24med/product.php?pid=<?php echo $row['p_id'];?>">
        <div class="content">
        <div class="header">    <?php echo $row['name']?></div>
        </div>
    <div class="image">
      <img src="<?php echo $row['image'];?>" style="max-width:100%;max-height:300px;overflow:hidden;">
    </div>
  </a>
  <?php
    }
} else {
    echo "0 results";
}?>
</div>

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

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>