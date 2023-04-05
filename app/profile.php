<?php include('./template/navbar.php'); ?>

<h1>Welcome user xxx </h1>
<?php
session_start();
$_SESSION['name'] = $name;
echo 'Der aktuelle Benutzer ist: ' . $_SESSION[$name];
?>


<?php include('./template/footer.php'); ?>