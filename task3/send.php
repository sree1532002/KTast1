<?php 
$name = $_POST['name'];
$pno = $_POST['pno'];
$address = $_POST['address'];
$dt = $_POST['dt'];
$items = $_POST['items'];
$res = explode (",", $items);
$i = 0;
foreach ($res as $key => $value) {
    $i++;
}
$amount = $i * 100;
$tax = 0.01 * $amount;
$total = $amount + $tax;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Milk Bath</title>
<link rel="icon" href="bath.jpeg" type="image/icon type">
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="stylecards.css">
  <link rel="stylesheet" href="footer.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="bg-img1" class="float-container">
        <div id = "t" class="float-child">
            <img src = "bath.jpeg" id="image">
        </div>
        <div id = "p" class="float-child">
            <ul class="nav justify-content-end">
                <li class="nav-item" >
                <a class="nav-link"  id = "item" href="#about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id = "item" href="#bg">Items</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id = "item" href="#bg">Order</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id = "item" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <h1 id = "topic">Your order will be delivered soon</h1>
    </div>
<table class="table table-striped table-dark">
  <tbody>
    <tr>
      <th scope="row">Name</th>
      <td><?php echo $name ?></td>
    </tr>
    <tr>
      <th scope="row">Phone number</th>
      <td><?php echo $pno ?></td>
    </tr>
    <tr>
      <th scope="row">Address</th>
      <td><?php echo $address ?></td>
    </tr>
    <tr>
      <th scope="row">Date and time of delivery</th>
      <td><?php echo $dt ?></td>
    </tr>
    <tr>
      <th scope="row">Amount</th>
      <td><?php echo $amount ?></td>
    </tr>
    <tr>
      <th scope="row">Tax</th>
      <td><?php echo $tax ?></td>
    </tr>
    <tr>
      <th scope="row">Total amount</th>
      <td><?php echo $total ?></td>
    </tr>
  </tbody>
</table>
<div class = "footer" id="contact">
  <i class="fa fa-phone" id="icon1"></i><a id="footericons" href="#">10, Adyar, Chennai</a>
  <i class="fa fa-map-marker" id="icon2"></i><a id="footericons" href="#">+91 82378 29732</a>
  <i class="fa fa-envelope" id="icon3"></i><a id="footericons" href="mailto:ab@gmail.com">mb@gmail.com</a><br>
  <a href="https://www.google.com/search?tbs=lf:1,lf_ui:1&tbm=lcl&q=location+anna+university&rflfq=1&num=10&ved=2ahUKEwj9ke3a4vXuAhUUOSsKHUGAC0gQtgN6BAgTEAc#rlfi=hd:;si:;mv:[[13.0262271,80.2418169],[13.005884799999999,80.20306529999999]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3,lf:1,lf_ui:1">
  <img src="map.jpeg" alt="map" id="mapres"></a>
<p id="copy">@Copyright 2021, Milk Bath</p><br><br>
</body>
</html>