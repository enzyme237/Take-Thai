<!DOCTYPE html>
<html>
     <head></head> 
    <meta charset="Utf-8">
    <title></title>
<body>
<?php
$name="";
$surname="";
$email="";
$message="";
// condition de sécurité verifiant si le formulaire est bien rempli

if(isset($_POST["Nom"]) && !empty($_POST["Nom"])){
   $name = $_POST["Nom"];
}

if(isset($_POST["prénom"]) && !empty($_POST["prénom"])){
    $surname = $_POST["prénom"];
 }

if(isset($_POST["email"]) && !empty($_POST["email"])){
   $email = $_POST["email"];
}
if(isset($_POST["Message"]) && !empty($_POST["Message"])){
   $message = $_POST["Message"];
}
?>
<!-- création du tableau -->
<table border="10" cellpading="10"  cellspacing="0" width="100%">
<!-- ligne des différents titres -->
<tr>
<th>Nom</th>
<th>prénom</th>
<th>email</th>
<th>Message</th>
</tr> 
<!-- affichage sur un ligne -->
<tr>
<td><?php echo $name ?></td> 
<td><?php echo $surname ?></td> 
<td><?php echo $email?></td>
<td><?php echo $message?></td>
</tr>
</table>
   </body>
</html>

