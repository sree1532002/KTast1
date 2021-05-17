<link rel="icon" href="bhavan.jpeg" type="image/icon type">
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";
$con = mysqli_connect($hostname,$username,$password,$dbname);
if(isset($_POST["submit"])){
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $pno = mysqli_real_escape_string($con,$_POST['pno']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $dt = mysqli_real_escape_string($con,$_POST['dt']);
    $food = mysqli_real_escape_string($con,$_POST['food']);

    if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO bookings (name_e,pno, email,dt,food)
    VALUES ('$name', '$pno', '$email','$dt','$food')";

    if (mysqli_query($con, $sql)){
        echo "<script>";
        echo "alert('Details sent successfully');";
        echo "window.location.href = 'index.php';";
        echo "</script>";
    } 
    else {
        echo "<script>";
        echo "alert('Error has occured,Please try again');";
        echo "window.location.href = 'menu.php';";
        //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "</script>";
    }
}
else{
    echo "<script>";
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	echo "alert('This page cannot be accessed');";
	echo "window.location.href = 'index.php';";
	echo "</script>";
}
mysqli_close($con);
?>