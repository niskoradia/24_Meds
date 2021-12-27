<?php require("connection.php")?>
<?php  session_start(); 
if(!isset($_SESSION["loggedin"])){
  header("location:/24meds/login.php");
  die();
}
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

<title>24Meds</title>
  </head>
  <body>
  <?php include("header.php");?>
  <?php
$sql = "SELECT * FROM product where p_id= '".$_GET['pid']."'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
      ?>
      <div class="ui text container">
        <h1>Your product <?php echo $row['name']?></h1>
        <h2>You have to pay <?php echo $row['price'] * $_GET['quantity']?> and quantity is <?php echo $_GET['quantity']?></h2>
      <form class="ui huge  form" method="POST" action="ordersuccess.php">
        <input type="hidden" value="<?php echo $_GET['quantity']?>" name="quantity">
        <input type="hidden" value="<?php echo $row['p_id']?>" name="pid">
        <input type="hidden" value="<?php echo $_SESSION['id']?>" name="uid">
        <input type="hidden" value="<?php echo $row['price']?>" name="price">

        <h2 class="ui dividing header">Shipping Information</h2>
        <div class="field">
            <textarea name="address" required></textarea>
        </div>
        <div class="fields">
    <div class="seven wide field">
      <label>pod(pay on delivery)</label>
     
  <button class="ui inverted brown w-100 massive button" type="Submit">CONFIRM33</button>
</form>
</div>

<?php }?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>