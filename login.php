<?php 
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MyWay | Bienvenue</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="img">

    </div>
    <div class="form">
      <div class="top-middle">
        <img src="img/Logo.png" alt="">
        <div class="left">
          <h3>Connexion</h3>
        </div>
        <form method="POST">

        <input type="email" name="lemail" id="lemail"  placeholder="Email" required>
        <input type="password" name="password" id="password" placeholder="Password" required>

        <input type="submit" name="formlogin" id="formlogin" value="Submit">
        </form>
        <p>Mot de passe oublié ? <a href="#">Cliquez-ici</a></p>
      </div>
      <br>
      <br>
      <div class="bottom">
        <p>Pas encore de compte ?</p>
        <button type="button" name="button" class="button"><a href="inscription.php">JE M'INSCRIS</a></button>
      </div>
    </div>
<?php
    if(isset($_POST['formlogin'])){
        extract($_POST);
        if(!empty($lemail)&& !empty($password)){
            include 'config.php';
            global $db;

            $q=$db->prepare("SELECT * FROM users WHERE email= :email");
            $q->execute(['email'=>$lemail]);
            $result =$q->fetch();

            if($result==true)
            {   
                $hashpassword=$result['Password'];
                if(password_verify($password, $hashpassword)){
                    $_SESSION['Firstname']=$result['Firstname'];
                    $_SESSION['Lastname']=$result['Lastname'];
                    $_SESSION['Email']=$result['Email'];
                    echo "<script>location.href='/phpmyadmin/hackaton/Homepage.php';</script>";
                    exit();

                    echo "le compte est bon";
                }
                else{
                    echo "le mot de passe n'est pas correct";
                }
            }
            else{
                echo "Le mail '".$lemail."' n'est pas associé a un compte";
            }


        }
        else{
            echo "Les champs ne sont pas tous remplis";
        }
    }

?>




</div>

</body >
</html>
