<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title></title>
  <link rel="stylesheet" href="..\css\mhreg.css">

  </head>
  <body>
<?php       session_start(); ?>

  <?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){

    $regno = $_SESSION['regno'];
    require_once('../dbConnect.php');
if(isset($_POST["qblock"])){

  $blockname="A block";
  $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='male';" );
  $row = mysqli_fetch_array( $rowSQL );
  $largestNumber = $row['max'];
  if($largestNumber==0){
    $largestNumber=1;
  }
  $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='male';");
$data=mysqli_fetch_assoc($result);
$count= $data['total'];
if($count<6){
  $roomno=$largestNumber;
}
else{
    $roomno=$largestNumber+1;
}
}
if(isset($_POST["B block"])){
  $blockname="B block";
  $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='male';" );
  $row = mysqli_fetch_array( $rowSQL );
  $largestNumber = $row['max'];
  if($largestNumber==0){
    $largestNumber=1;
  }
  $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='male';");
$data=mysqli_fetch_assoc($result);
$count= $data['total'];
if($count<6){
  $roomno=$largestNumber;
}
else{
    $roomno=$largestNumber+1;
}
}
if(isset($_POST["C block"])){
  $blockname="C block";
  $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='male';" );
  $row = mysqli_fetch_array( $rowSQL );
  $largestNumber = $row['max'];
  if($largestNumber==0){
    $largestNumber=1;
  }
  $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='male';");
$data=mysqli_fetch_assoc($result);
$count= $data['total'];
if($count<6){
  $roomno=$largestNumber;
}
else{
    $roomno=$largestNumber+1;
}
}
if(isset($_POST["D block"])){
  $blockname="D block";
  $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='male';" );
  $row = mysqli_fetch_array( $rowSQL );
  $largestNumber = $row['max'];
  if($largestNumber==0){
    $largestNumber=1;
  }
  $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='male';");
$data=mysqli_fetch_assoc($result);
$count= $data['total'];
if($count<6){
  $roomno=$largestNumber;
}

else{
    $roomno=$largestNumber+1;
}
}
if(isset($_POST["ablock"])){
  $blockname="Ablock";
  $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='male';" );
  $row = mysqli_fetch_array( $rowSQL );
  $largestNumber = $row['max'];
  if($largestNumber==0){
    $largestNumber=1;
  }
  $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='male';");
$data=mysqli_fetch_assoc($result);
$count= $data['total'];
if($count<6){
  $roomno=$largestNumber;
}
else{
    $roomno=$largestNumber+1;
}
}
if(isset($_POST["bblock"])){
  $blockname="Bblock";
  $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='male';" );
  $row = mysqli_fetch_array( $rowSQL );
  $largestNumber = $row['max'];
  if($largestNumber==0){
    $largestNumber=1;
  }
  $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='male';");
$data=mysqli_fetch_assoc($result);
$count= $data['total'];
if($count<6){
  $roomno=$largestNumber;
}
else{
    $roomno=$largestNumber+1;
}
}

if(isset($_POST["cblock"])){
  $blockname="Cblock";
  $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='male';" );
  $row = mysqli_fetch_array( $rowSQL );
  $largestNumber = $row['max'];
  if($largestNumber==0){
    $largestNumber=1;
  }
  $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='male';");
$data=mysqli_fetch_assoc($result);
$count= $data['total'];
if($count<6){
  $roomno=$largestNumber;
}
else{
    $roomno=$largestNumber+1;
}
}
if(isset($_POST["dblock"])){
  $blockname="Dblock";
  $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='male';" );
  $row = mysqli_fetch_array( $rowSQL );
  $largestNumber = $row['max'];
  if($largestNumber==0){
    $largestNumber=1;
  }
  $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='male';");
$data=mysqli_fetch_assoc($result);
$count= $data['total'];
if($count<6){
  $roomno=$largestNumber;
}
else{
    $roomno=$largestNumber+1;
}
}


$sql="UPDATE `users` SET `block`='$blockname' where regno='$regno'";
$query=mysqli_query($conn,$sql);
$sql="UPDATE `users` SET `roomno`='$roomno' where regno='$regno'";
$query1=mysqli_query($conn,$sql);
if($query && $query1){
  echo 'Entry successful';
  header('Location: studentdashboard.php');
}
else{
  echo "error occoured";
}
}
   ?>
<?php include '../header.php';?>
<form class="" action="mhregistration.php" method="post">


    <section class="cards">

<article class="card card--5">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> MGR Hostel</span>
    <h3 class="card__title">A block</h3>
        <input type="submit" name="ablock" id="ablock" class="card__by" value="submit">
  </div>
</article>


<article class="card card--6">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> MGR Hostel</span>
    <h3 class="card__title">B block</h3>
        <input type="submit" name="bblock" id="bblock" class="card__by" value="submit">
  </div>
</article>


<article class="card card--7">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> MGR Hostel</span>
    <h3 class="card__title">C block</h3>
        <input type="submit" name="cblock" id="cblock" class="card__by" value="submit">
  </div>
</article>


<article class="card card--8">

  <div class="C BLOCK"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> MGR Hostel</span>
    <h3 class="card__title">D block</h3>
      <input type="submit" name="dblock" id="dblock" class="card__by" value="submit">
  </div>
</article>


  </section>
</form>

  </body>
</html>
