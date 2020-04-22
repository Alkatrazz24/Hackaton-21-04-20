<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MyWay | Inscription</title>
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
          <h3>Inscription</h3>
        </div>
        <form method="POST">
    <input type="text" name="Firstname" id ="Firstname" placeholder="Firstname" required>
    <input type="text" name="Lastname" id = "Lastname" placeholder="Lastname" required>
    <input type="email" name="Email" id="Email"placeholder="Email" required>
    <input type="password" name="password1" id="password1" placeholder="Password" required>
    <input type="password" name="password2" id="password2" placeholder="Confirm Password" required>
    <input type="submit" name="formsend" id="formsend" value="Submit">


        
        </form>
        <div class="bottom">
        <p>Vous avez déjà un compte ?</p>
        <button type="button" name="button" class="button"><a href="login.php">JE ME CONNECTE</a></button>
        </div>
        </div>
    </div>

<?php
    if(isset(($_POST["formsend"]))){
        extract($_POST);
        if(!empty($password1)&& !empty($password2) && !empty($Firstname)&& !empty($Lastname)&& !empty($Email)){
            if($password1==$password2){
                $option=[
                    'cost'=>12,
                ];
                $hashpass=password_hash($password1, PASSWORD_DEFAULT,$option);

                include 'config.php';
                global $db;


                $a=$db->prepare("SELECT Email FROM users WHERE Email=:Email");
                $a->execute(['Email'=>$Email]);
                $resultE =$a->rowCount();

                if($resultE>0){
                    echo "L'email existe déjà";
                }
                
                if($resultE==0){
                    $q = $db->prepare("INSERT INTO users(Firstname,Lastname,Email,Password)VALUES(:Firstname,:Lastname,:Email,:Password)");
                    $q->execute([
                        'Firstname'=>$Firstname,
                        'Lastname'=>$Lastname,
                        'Email'=>$Email,
                        'Password'=>$hashpass
                    ]);
                    echo "Le compte a bien été créé";
                    echo "<script>location.href='/phpmyadmin/hackaton/login.php';</script>";
                    
                }

            }
            else{
                echo "Les mots de passes ne sont pas identiques";
            }
        }
        else{
            echo "Les champs ne sont pas remplies";
        }



    }

?>



</div>
</body>
</html>
