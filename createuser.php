<!-- This is for user login when users login save to the users table -->
<?php
 require('dbconnection.php');
 $name =$_POST['name'];
 $email =$_POST['email'];
 $password=$_POST['password'];


 $sql = "INSERT INTO users(name, email, password)
VALUES (:name,:email,:password)";
$a = $pdo->prepare($sql);

$a->bindParam(':name',$name);

$a->bindParam(':email',$email);

$a->bindParam(':password',$password);

$a->execute();


header('location:form.php')

?>