<?php

require_once('controller/Router.php');

$router = new Router();
$router->routeReq();


//test pullrequest


//pulllllll


/*

require ('controller/appController.php');
	   echo go();
	   

<form method="post" action="index.php"> 
Username : <input type="text" name="username" size="12"><br> 
Email : <input type="text" name="email" size="12"> <br> 
Password : <input type="text" name="password" size="12"> 
<input type="submit" value="OK"> 
</form>


$username = $_POST['username']; 
$email = $_POST['email']; 
$password = $_POST['password']; 

$req = $bdd->prepare('INSERT INTO users(username, password, email) 
VALUES(:username, :password, :email)');

$req->execute(array(
	'username' => $username,
	'password' => $password,
	'email' => $email
));


$reponse = $bdd->query('SELECT * FROM users');
while ($donnees = $reponse->fetch())
{
echo '<strong>Utilisateur</strong> :'. $donnees['username']. '<br />';
}
*/
?>


