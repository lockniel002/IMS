<?php
$onSession=$_SESSION['onSession'];
if($onSession!=1){
  header("Location:./Guest.php");

}else{
  header("Location:../Guest.php");
}
?>
<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Check if the user agent contains the word 'Mobile'
$isMobile = strpos($userAgent, 'Mobile') !== false;

// Check if the user agent contains the word 'Tablet'
$isTablet = strpos($userAgent, 'Tablet') !== false;

// If it's a mobile or tablet device, redirect to the phone website
if ($isMobile || $isTablet) {
    header('Location: ./Guest-R.php');
    exit();
}

// If it's not a mobile or tablet device, stay on the desktop website
header('Location: ./Guest.php');
exit();
?>
