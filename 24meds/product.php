<?php require("connection.php")?>

<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Semantic CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script>

  </script>

  <title>Product </title>
</head>
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
<body>

  <?php
$sql = "SELECT * FROM product where p_id= '".$_GET['pid']."'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
      ?>
  <div class="ui grid mt-5">
    <div class="six wide column">
      <div class="" style="min-width:500px;">
        <div class="image">
          <img src="<?php echo $row['image'];?>" style="max-width:500px;max-height:500px;">
        </div>
      </div>
    </div>
    <div class="ten wide column">
    <h1 class="ui dividing header">
    <?php echo $row['name']?>

</h1>
<h2 class="ui dividing header">
  Description
  <div class="sub header"><?php echo $row['description']?></div>
</h2>
<h2 class="ui dividing header">
 MG
  <div class="sub header"> <?php echo $row['mg']?></div>
</h2>
<h2 class="ui dividing header">
  Price
  <div class="sub header"><?php echo $row['price']?> Rupees</div>
</h2>     
<form class="ui huge form" action="ordernow.php">
  <div class="field">
    <label>Quantity</label>
    <input type="number" name="quantity" placeholder="Quantity" min="1" max="5" value="1">
    <input type="hidden" name="pid" value="<?php echo $row['p_id']?>">
    <button class="ui inverted brown w-100 massive button"  type="Submit">Buy now</button>
  </div>
</form>
    </div>
  </div>
  <?php
} else {
    echo "0 results";
}?>
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

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

</body>
  
</html>