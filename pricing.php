<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOSTEL CHARGE</title>
    <link rel="stylesheet" href="css\pricing.css">

    <script type="text/javascript">
      function change(){
        window.location.href ="registration.php";
      }
      function rtohome(){
        window.location.href ="index.php";
      }
    </script>
  </head>

  <body>
    <div class="Nav" id="Nav1">
      <div class="NavbarContainer">
        <img src="images/vit1.png" alt="" class="NavLogo" onclick="rtohome()">
        <div class="MobileIcon">
        <i class="fa fa-bars"></i>
        </div>
        <ul class="NavMenu ">
          <li class="NavItem"><a id="linkcolor" on class="NavLinks" href="index.php#about">About</a></li>
          <li class="NavItem"><a id="linkcolor1" class="NavLinks" href="pricing.php">hostel charge</a></li>
          <li class="NavItem"><a id="linkcolor2" class="NavLinks" href="index.php#contact">Contact Us</a></li>
          <li class="NavItem"><a id="linkcolor3" class="NavLinks" href="signin.php">Sign in</a></li>
        </ul>
        <div class="NavBtn">
          <button type="button" name="button" class="NavBtnLink" onclick="change()">Signup</button>
        </div>

      </div>
    </div>



    <div class="pricingcontainer">
      <div class="pricingwrapper">
        <div class="columns">
  <ul class="price">
    <li class="header">A Block</li>
    <div class="imagewrapper">
    <img style="height:150px; width:150px;" src="images\A BLOCK.jpg" alt="">
    </div>

    <li class="grey">2 Lakh/ year</li>
    <li>Best Internet</li>
    <li> A block</li>
    <li>Best Mess</li>
    <li>World class facilities</li>
    <li class="grey"><a href="signin.php" class="button">Select</a></li>
  </ul>
</div>


<div class="columns">
<ul class="price">
<li class="header">B Block</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images\B BLOCK.jpg" alt="">
</div>

<li class="grey">1.20 lakh Thousand/ year</li>
<li> B Block</li>
<li>Common reading room</li>
<li>Indoor games</li>
<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>

<div class="columns">
<ul class="price">
<li class="header">C Block</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images\C BLOCK.jpg" alt="">
</div>

<li class="grey">1.30 lakh/ year</li>
<li>C block</li>
<li>Gym</li>
<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>


<div class="columns">
<ul class="price">
<li class="header">D Block</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images\D BLOCK.jpg" alt="">
</div>

<li class="grey">98 Thousand/ year</li>
<li>Non-Ac block</li>
<li>comfortable living area</li>
<li>Free wifi</li>
<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>

      </div>
    </div>

  </body>
</html>
