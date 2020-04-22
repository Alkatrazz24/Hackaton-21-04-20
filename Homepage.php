<!DOCTYPE html>
<html lang="fr">
<?php 
    session_start();
    if(!isset($_SESSION['Firstname'])){ 
        echo "<script>location.href='login.php';</script>";
}
?>

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
      <p><a class="actif" href="#">Accueil</a></p>
      <p><a class="" href="#metier">Métier</a></p>
      <p><a class="" href="#cursus">Cursus</a></p>
      <p><a class="" href="#formations">Formations</a></p>
      <p><a class="" href="#event">Évenements</a></p>
      <p><a class="" href="#actu">Actualités</a></p>
      <p><a class="actif" href="tchat.php">Mini-tchat</a></p>
      <p><a class="" href="logout.php">Deconnexion</a></p>
    </div>
    <div class="content">
        <?php

              include 'config.php';
              global $db;
              $sql=$db->prepare("SELECT * FROM test where Email=:Email");
              $sql->execute([
                'Email'=>$_SESSION['Email'],
              ]);
              $resultat=$sql->fetch();
              if(isset($resultat['dirigisme'])){
              $_SESSION['dirigisme']=$resultat['dirigisme'];
              }
              if(!isset($resultat['dirigisme'])){
              $_SESSION['dirigisme']=0;
              }

              if(isset($resultat['creatif'])){
              $_SESSION['creatif']=$resultat['creatif'];
              }

              if(!isset($resultat['creatif'])){
              $_SESSION['creatif']=0;
              }


              if(isset($resultat['logique'])){
              $_SESSION['logique']=$resultat['logique'];
              }
              if(!isset($resultat['logique'])){
                $_SESSION['logique']=0;
              }


              if(isset($resultat['litteraire'])){
              $_SESSION['litteraire']=$resultat['litteraire'];
              }
              if(!isset($resultat['litteraire'])){
                $_SESSION['litteraire']=0;
              }


              if(isset($resultat['attentione'])){
              $_SESSION['attentione']=$resultat['attentione'];
              }
              if(!isset($resultat['attentione'])){
                $_SESSION['attentione']=0;}

              ?>
      <h1>Bonjour <?php echo $_SESSION['Firstname'] ?> !</h1>
      <div class="content-profil">
        <h3>Profil</h3>
        <p><?php
        if($_SESSION['attentione']==0){
          echo "Veulliez faire un test, merci d'être honnete !";
        } 
        ?>
        </p>
        <div class="content-profil-flex">
          <!-- Classe à mettre sur skills-line : skills-line-0 = 0%, skills-line-25 = 25%, skills-line-50%,
          skills-line-75 = 75%, skills-line-100% -->
          <div class="skills-list">
            <div class="skills-item">
              <p>Dirigisme</p>
              <div class="skills-line-complete">
                <div class="skills-line-100"></div>
              </div>
              <p><?php 

              $d1=$_SESSION['dirigisme']/5*100;
              echo $d1; ?>%</p>
            </div>
            <div class="skills-item">
              <p>Créatif</p>
              <div class="skills-line-complete">
                <div class="skills-line-100"></div>
              </div>
              <p><?php $c1=$_SESSION['creatif']/5*100;
              echo $c1; ?>%</p>
            </div>
            <div class="skills-item">
              <p>Logique</p>
              <div class="skills-line-complete">
                <div class="skills-line-100"></div>
              </div>
              <p><?php $lo1=$_SESSION['logique']/5*100;
              echo $lo1; ?>%</p>
            </div>
            <div class="skills-item">
              <p>Litteraire</p>
              <div class="skills-line-complete">
                <div class="skills-line-100"></div>
              </div>
              <p><?php $li1=$_SESSION['litteraire']/5*100;
              echo $li1; ?>%</p>
            </div>
            <div class="skills-item">
              <p>Attentioné</p>
              <div class="skills-line-complete">
                <div class="skills-line-100"></div>
              </div>
              <p><?php $a1=$_SESSION['attentione']/5*100;
              echo $a1; ?>%</p>
            </div>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" width="275.405" height="318.021" viewBox="0 0 275.405 318.021"><defs><style>.a{fill:none;stroke:#eaf0f4;}.a,.b{stroke-miterlimit:10;}.b{fill:rgba(117,255,176,0.38);stroke:#39ff8e;}</style></defs><g transform="translate(0.5 0.577)"><path class="a" d="M274.9,238.189V79.878L137.7.6.5,79.878V238.189l137.2,79.278Z" transform="translate(-0.5 -0.6)"/><path class="a" d="M182.656,165.248V73.7L103.378,27.8,24.1,73.7v91.55L103.378,210.9Z" transform="translate(33.824 38.96)"/><path class="a" d="M120.114,115.515V69.372L80.107,46.3,40.1,69.372v46.143l40.007,23.072Z" transform="translate(57.095 65.867)"/><path class="a" d="M137.7.6V158.911L.5,79.878" transform="translate(-0.5 -0.6)"/><path class="a" d="M.5,144.378,137.7,65.1V223.656" transform="translate(-0.5 93.211)"/><path class="a" d="M193.6,191.211,56.4,111.933,193.6,32.9" transform="translate(80.802 46.378)"/><path class="b" d="M215.272,184.432,235.563,55.594,112.789,9.719,33.511,80.587-.6,191.929l113.389,25.86Z" transform="translate(24.413 32.071)"/></g></svg>
        </div>
        <button type="button" name="button" class="button"><a href="formulaire.php">RELANCER LE TEST</a></button>
      </div>
      <h1>Ce que nous vous recommandons :</h1>
        <h3>Métier</h3>
        <?php

        $test=$db->prepare("SELECT * FROM resultat");
        $test->execute();
         $count=1; 
        while ($a=$test->fetch()){
          if($a['dirigisme']<=$_SESSION['dirigisme'] && $a['creatif']<=$_SESSION['creatif'] && $a['logique']<=$_SESSION['logique'] && $a['litteraire']<=$_SESSION['litteraire'] && $a['attentione']<=$_SESSION['attentione']){
           echo $count;
            echo " : ";
            echo $a['metier'];
            echo "  //  ";
            $count=$count+1;
          }

        }
        ?>



        <h3>Cursus</h3>
          <?php    
          $test=$db->prepare("SELECT * FROM resultat");
        $test->execute();  
        $count=1;  
          while ($a=$test->fetch()){
          if($a['dirigisme']<=$_SESSION['dirigisme'] && $a['creatif']<=$_SESSION['creatif'] && $a['logique']<=$_SESSION['logique'] && $a['litteraire']<=$_SESSION['litteraire'] && $a['attentione']<=$_SESSION['attentione']){
            echo $count;
            echo " : ";
            echo $a['ecole'];
            echo "  //  ";
            $count=$count+1;
          }
        }
          ?>
          
          <h3>Formations</h3>
          <?php    
          $test=$db->prepare("SELECT * FROM resultat");
          $test->execute();   
          $count=1;  
          while ($a=$test->fetch()){
          if($a['dirigisme']<=$_SESSION['dirigisme'] && $a['creatif']<=$_SESSION['creatif'] && $a['logique']<=$_SESSION['logique'] && $a['litteraire']<=$_SESSION['litteraire'] && $a['attentione']<=$_SESSION['attentione']){
            echo $count;
            echo " : ";
            echo $a['formation'];
            echo "  //  ";
            $count=$count+1;
          }
        }
          ?>
        <h3>Évenements</h3>
        
        <h3>Actualités</h3>
      
      </div>
    </div>
  </div>
</body>
</html>
