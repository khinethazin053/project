<!-- This is for user login -->

<?php

require('dbconnection.php');

$email = $_POST['email'];

$password = $_POST['password'];

if(!empty($email) & !empty($password))
{
$sql = "SELECT name,email,password FROM users WHERE email=:email AND password=:password";

$s = $pdo->prepare($sql);

$s->bindParam(':email',$email);

$s->bindParam(':password',$password);

$s->execute();

$user = $s->fetch(PDO::FETCH_ASSOC);

foreach ($use as $user) {
    echo $use->name;
}

}

?>