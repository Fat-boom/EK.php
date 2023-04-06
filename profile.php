<?php include('./template/navbar.php'); ?>

<h1>Welcome user xxx </h1>

<?php
session_start();
$_SESSION['email'] = $name;
echo 'Der aktuelle Benutzer ist: ' . $_SESSION['email'];
?>
<?php
$dsn = 'mysql:host=localhost;dbname=mydatabase';
$username = 'email';
$password = 'password';

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$sql = "DELETE FROM users WHERE id = :id";
$stmt = $pdo->prepare($sql);
$id = email;
$stmt->bindParam(':id', $id);
$stmt->execute();
?>

<?php include('./template/footer.php'); ?>