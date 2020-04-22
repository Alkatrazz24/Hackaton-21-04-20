<?php 
    session_start();
    if(!isset($_SESSION['Firstname'])){ 
        echo "<script>location.href='login.php';</script>";
      }   
?>
<!DOCTYPE html>
<html>
<style>
  html, body, .container{
  height: 100%;
}

body {
  margin: 0; padding: 0;
  font-family: Helvetica;
}

.container{
  display: flex;
}

.img
{
  height: 100%;
  width: 50%;
  background-image: linear-gradient(180deg, #FFFFFF00 0%, #3B7F58 100%), url("../img/you_x_ventures_Oalh2MojUuk_uns.png");
  background-position: center;
}

.form
{
  width: 30%;
  text-align: center;
  margin:auto;
  padding: 0px 200px;
}

.form img
{
  width: 250px;
}

.form h3
{
  font-size: 22px;
  font-family: Helvetica;
  font-weight: bold;
  margin: 28px 0 0 0;
}

form
{
  display: flex;
  flex-direction: column;
}

form input
{
  margin-top: 28px;
}

.form-input
{
  background: #FFFFFF 0% 0% no-repeat padding-box;
  border: 2px solid #EBEDED;
  border-radius: 6px;
  opacity: 1;
  font-size: 13px;
  height: 40px;
  padding: 0px 15px ;
}

form input[type=submit], .button
{
  height: 40px;
  width: 150px;
  background: #3B7F58 0% 0% no-repeat padding-box;
  border-radius: 6px;
  opacity: 1;
  font-size: 11px;
  font-weight: bold;
  font-family: Helvetica;
  color: #ffffff;
  margin: auto;
  margin-top: 28px;
}

.button{
  margin-top: 0px;
}

.button a
{
  color: #ffffff;
  text-decoration: none;
}

.left
{
  text-align: left;
}

.form p
{
  font-size: 14px;
  font-family: Helvetica;
  color: #A5A5A5;
}

.form p a
{
  font-weight: bold;
  color: #3B7F58;
  text-decoration: none;
}

/* HOME */

.header
{
  display: flex;
  padding: 30px;
  align-items:center;
  justify-content: space-between;
}

.header-logo
{
  width: 150px;
}

.header input
{
  width: 70%;
}

.header .pp-rond
{
  width: 61px;
  height: 61px;
  background: #3B7F58 0% 0% no-repeat padding-box;
  opacity: 1;
  border-radius: 30px;
  cursor: pointer;
}

.header .profil
{
  display:flex;
  align-items:center;
  justify-content: space-between;
}

.header .profil p
{
  margin-right: 10px;
  color : #000000;
  font-weight: bold;
  cursor: pointer;
}

.main
{
  display: flex;
}

.nav
{
  display: flex;
  flex-direction: column;
  width: 150px;
  padding: 50px;
  position: relative;
}

.nav a, .nav p
{
  margin: 10px;
  text-decoration: none;
  color: #000000;
}

.nav .actif
{
  color : #3B7F58;
  font-weight: bold;
}

.nav::after
{
  content: "";
  position: absolute;
  right:0;
  height: 100%;
  width: 1px;
  background-color: #707070;
}

.content
{
  padding-left: 35px;
}

.content-profil-flex
{
  display: flex;
  align-items: center;
}

.skills-list
{
  margin-right: 150px;
}

.skills-item
{
  display: flex;
  align-items: center;
}

.skills-line-complete
{
  width: 200px;
  height: 2px;
  margin: 0px 15px;
  background-color: #E5E5E5;
}

.skills-line-0
{
  width: 0px;
  height: 2px;
  background-color: #000000;
}

.skills-line-25
{
  width: 50px;
  height: 2px;
  background-color: #000000;
}

.skills-line-50
{
  width: 100px;
  height: 2px;
  background-color: #000000;
}

.skills-line-75
{
  width: 145px;
  height: 2px;
  background-color: #000000;
}

.skills-line-100
{
  width: 200px;
  height: 2px;
  background-color: #000000;
}

.content-group a
{
  text-decoration: none;
  color: #000000;
  margin-right: 20px;
}

.content-group a:last-child
{
  margin-right: 0px;
}

.content button a
{
  color: #ffffff;
}

.content-title
{
  font-size: 15px;
  font-weight: bold;
}

.content-tag
{
  margin: 10px 0px;
  color: #ffffff;
  font-weight: bold;
  background-color: #3B7F58;
  text-align: center;
  width: 115px;
  padding: 5px;
  font-size: 14px;
}

.content-tag p
{
  margin: 0px;
}

.content-block
{
  width: 300px;
}

.content-desc
{
  text-align: justify;
}

.content-group
{
  display: flex;
}

.content-img img
{
  width: 100%;
}

.content-metier
{
  margin-top: 50px;
}

/* Content */

.content .back
{
  color: #3B7F58;
  font-size: 16px;
  text-decoration: none;
  position: relative;
}

.content .back::before
{
  content: "";
  background-color: #3B7F58;
  width: 25px;
  height: 3px;
  left:-30px;
  top: 8px;
  position: absolute;
}

.content .back:hover
{
  text-decoration: underline;
}

.main-img
{
  width: 800px;
  height: 447px;
}

.main-img img
{
  width: 100%;
}

.content-main-page
{
  max-width: 800px;
}

.reponse-list div
{
  display: block;
}

.content-main-page form input
{
  margin-top: 15px;
}


  </style>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MyWay | Bienvenue</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="header">
    <img class="header-logo" src="img/Logo.png" alt="">
    <input class="form-input" type="text" name="search" value="" placeholder="Rechercher">
    <div class="profil">
      <p><a class="" href="profil.php">Mon profil</a></p>
      <div class="pp-rond">
      </div>
    </div>
  </div>
  <div class="main">
    <div class="nav">
      <p><a class="actif" href="homepage.php#">Accueil</a></p>
      <p><a class="" href="homepage.php#metier">Métier</a></p>
      <p><a class="" href="homepage.php#cursus">Cursus</a></p>
      <p><a class="" href="homepage.php#formations">Formations</a></p>
      <p><a class="" href="homepage.php#event">Évenements</a></p>
      <p><a class="" href="homepage.php#actu">Actualités</a></p>
      <p><a class="actif" href="tchat.php">Mini-tchat</a></p>
      <p><a class="" href="logout.php">Deconnexion</a></p>
    </div>
    <div class="content content-main-page">
        <?php 
        include 'config.php';
        global $db;
        ?>
        <p>
            <strong>Full name :</strong>
            <span><?php echo $_SESSION['Firstname'];?> <?php echo $_SESSION['Lastname'];?></span>
        </p>
        <p>
            <strong>Email :</strong>
            <span><?php echo $_SESSION['Email'];?></span>
        </p>

        <p>
            <strong>Phone :</strong>
            <span><?php

            $q=$db->prepare("SELECT Phone FROM Profil WHERE Email=:Email");
            $q->execute([
                'Email'=>$_SESSION['Email']
            ]);
            $result=$q->fetch();
            if (isset($result['Phone'])){
                echo $result['Phone'];
            }
            else{
                echo "à remplir";
            }


            ?></span>
        </p>




        <p>
            <strong>Profession :</strong>
            <span><?php
            $q=$db->prepare("SELECT Profession FROM Profil WHERE Email=:Email");
            $q->execute([
                'Email'=>$_SESSION['Email']
            ]);
            $result=$q->fetch();
            if (isset($result['Profession'])){
                echo $result['Profession'];
            }
            else{
                echo "à remplir";
            }
             ?></span>
        </p>
        <p>
            <strong>Compétances :</strong>
            <span><?php
            $q=$db->prepare("SELECT competance FROM Profil WHERE Email=:Email");
            $q->execute([
                'Email'=>$_SESSION['Email']
            ]);
            $result=$q->fetch();
            if (isset($result['competance'])){
                echo $result['competance'];
            }
            else{
                echo "à remplir";
            }  
            ?></span>
        </p>
        <p>
            <strong>Project:</strong>
            <span><?php
            $q=$db->prepare("SELECT Project FROM Profil WHERE Email=:Email");
            $q->execute([
                'Email'=>$_SESSION['Email']
            ]);
            $result=$q->fetch();
            if (isset($result['Project'])){
                echo $result['Project'];
            }
            else{
                echo "à remplir";
            }
                
            ?></span>
        </p>
        <p>
            <strong>Résultat</strong>
            <span><?php
            $q=$db->prepare("SELECT resultat FROM Profil WHERE Email=:Email");
            $q->execute([
                'Email'=>$_SESSION['Email']
            ]);
            $result=$q->fetch();
            if (isset($result['resultat'])){
                echo $result['resultat'];
            }
            else{
                echo "à remplir";
            } 
            ?></span>
        </p>
        <button  onclick="location.href = 'profil2.php'"> Modifier </button>
    </div>

    <div style="clear:both"></div>
</div>


</body>