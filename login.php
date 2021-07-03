<DOCTYPE html>
<html>
   <head>
     <title>Cours PHP /MySQL</title>
     <meta charset="utf-8">
     <link rel="stylesheet" href="cours.css">
    </head>
    <body>
      <h1>Bases de données MySQL</h1>
      <?php
      $servername ='localhost';
      $dbname = 'operation';
       
      $username = 'root';
      $password = '';
      $url = 'mysql:host='.$servername.';dbname=' .$dbname;
      $db = new PDO($url, $username, $password);

      //on vérifie la connexion 
      if(!$db){
          die('Erreur : ');
      }
      echo 'connexion réussie';

      $db->exec("CREATE TABLE IF NOT EXISTS users (".
      " nickname char(20),".
      " password char(50)".
      ");");
      
      
//création des  variables nom et mot de  passe puis ajout des conditions de sécurité
           
if(isset($_POST["login"]) && !empty($_POST["login"])){
  $login =htmlspecialchars($_POST["login"]);
}else{
  $erreur  = "champ  incomplet";
}
          
   if(isset($_POST["password"]) && !empty($_POST["password"])){
//     Hachage  du mot de passe   
     $pass =  sha1($_POST["password"]);
   }else{
       $erreur  = "champ  incomplet";
     }
      
      // controle du login
     isLoginUsed($login)  die('Login déjà utilisé');
      
      
      // création de l'id
      $handler = mysqli_query($base, "SELECT id FROM $users ORDER BY id DESC LIMIT 1");
      $data = mysqli_fetch_assoc($handler);
      $id = $data['id'];
      $id = intval($id) + 1;
      
      // ajout de l'utilisateur
      $query="INSERT INTO $users(id, login, password) VALUES('$id','$login','$password')";
      mysqli_query($base, $query);
      ?>  
  
      </body>
      </html>
