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
      <div class="pp-rond" >
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
<form method="post" >
  <p>Vous avez des difficultés à vous présenter à d’autres personnes.</p>
  
  <select name="d1">
    <option value=1>Oui</option>
    <option value=2>Plutôt</option> 
    <option value=4>Pas vraiment</option>
    <option value=5>Non</option>
  </select><br />

  <p>Vous essayez de répondre dès que possible à vos e-mails et ne supportez pas d’avoir une boîte de messagerie mal organisée.</p>
  
  <select name="d2">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>Vous vous sentez supérieur(e) aux autres.</p>
  
  <select name="d3">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>Cela ne vous dérange pas d’être le centre de l’attention.</p>
  
  <select name="d4">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>Cela ne vous dérange de gérer les projets</p>
  
  <select name="d5">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />














<h1>Crétatif</h1>
  
<p>Vous êtes souvent si perdu(e) dans vos pensées.</p>
  
  <select name="c1">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>J’aimerai disposer de plus de temps pour méditer et avoir une vie intérieure plus spirituelle.</p>
  
  <select name="c2">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>Je suis convaincu que des changements positifs de ma personnalité et de ma façon de vivre peuvent contribuer à changer le monde.</p>
  
  <select name="c3">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>Je suis prêt à gagner moins d’argent pour avoir une vie plus en accord avec mes valeurs.</p>
  
  <select name="c4">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>Avec un crayon, pensez vous pouvoir changer le monde ?</p>
  
  <select name="c5">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />











<h1>Logique</h1>

<p>Vous avez des facilités à rester serein(e) et concentré(e), même lorsque certaines situations donnent lieu à une certaine pression.</p>
  
  <select name="lo1">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>Pour vous il est important de définir le sens de toute chose.</p>
  
  <select name="lo2">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>Pour vous les mathématiuqes sont la matière la plus importante.</p>
  
  <select name="lo3">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>Vous aimez trouvez la solution à des problèmes complexe.</p>
  
  <select name="lo4">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>Tant que n'avez pas trouvez la réponse à un probleme, vous ne pouvez pas dormir.</p>
  
  <select name="lo5">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />






<h1>Litteraire</h1>


<p>Vous êtes souvent perdu dans ce que vous lisez que vous en oubliez le monde exterieiur.</p>
  
  <select name="li1">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>Un proche vous offre un libre, vous êtes ravi ?</p>
  
  <select name="li2">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>Les documentaires sont ce que vous regardez le plus.</p>
  
  <select name="li3">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>Vous préférez agir dans le réel que le virtuel.</p>
  
  <select name="li4">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>Pour vous c'est la culture et l'enseignement qui priment.</p>
  
  <select name="li5">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />










<h1>Attentioné</h1>


<p>Vous avez jamais oublié l'anniversaire de vos proches qui est important pour vous.</p>
  
  <select name="a1">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>Vous oeuvrez pour le bien d'associations.</p>
  
  <select name="a2">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>Vous aimez faire des petites attentions.</p>
  
  <select name="a3">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>Vous ne supportez pas de voir la tristesse.</p>
  
  <select name="a4">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />

  <p>Tenter d'aider les autres est votre quotidien.</p>
  
  <select name="a5">
    <option value=5>Oui</option>
    <option value=4>Plutôt</option> 
    <option value=2>Pas vraiment</option>
    <option value=1>Non</option>
  </select><br />










<input type="submit" name="formusend" id="formusend" value="Submit">

</form>

<?php
if (isset($_POST['d1']))
{
$d11 = $_POST['d1'];

}
if (isset($_POST['d2']))
{
$d22 = $_POST['d2'];
}
if (isset($_POST['d3']))
{
$d33 = $_POST['d3'];
}
if (isset($_POST['d4']))
{
$d44 = $_POST['d4'];
}
if (isset($_POST['d5']))
{
$d55 = $_POST['d5'];
}
if(isset($d11)){
$resultatD=($d11+$d22+$d33+$d44+$d55)/5;
}
if (isset($resultatD)){
    echo $resultatD;
}
?>





<?php

if (isset($_POST['c1']))
{
$c11 = $_POST['c1'];

}
if (isset($_POST['c2']))
{
$c22 = $_POST['c2'];
}
if (isset($_POST['c3']))
{
$c33 = $_POST['c3'];
}
if (isset($_POST['c4']))
{
$c44 = $_POST['c4'];
}
if (isset($_POST['c5']))
{
$c55 = $_POST['c5'];
}
if(isset($c11)){
$resultatC=($c11+$c22+$c33+$c44+$c55)/5;
}
if (isset($resultatC)){
    echo $resultatC;
}

?> 

<?php

if (isset($_POST['lo1']))
{
$lo11 = $_POST['lo1'];

}
if (isset($_POST['lo2']))
{
$lo22 = $_POST['lo2'];
}
if (isset($_POST['lo3']))
{
$lo33 = $_POST['lo3'];
}
if (isset($_POST['lo4']))
{
$lo44 = $_POST['lo4'];
}
if (isset($_POST['lo5']))
{
$lo55 = $_POST['lo5'];
}
if(isset($lo11)){
$resultatLO=($lo11+$lo22+$lo33+$lo44+$lo55)/5;
}

if (isset($resultatLO)){
    echo $resultatLO;
}


?>

<?php
if (isset($_POST['li1']))
{
$li11 = $_POST['li1'];

}
if (isset($_POST['li2']))
{
$li22 = $_POST['li2'];
}
if (isset($_POST['li3']))
{
$li33 = $_POST['li3'];
}
if (isset($_POST['li4']))
{
$li44 = $_POST['li4'];
}
if (isset($_POST['li5']))
{
$li55 = $_POST['li5'];
}

if(isset($li11)){
$resultatLI=($li11+$li22+$li33+$li44+$li55)/5;
}
if (isset($resultatLI)){
    echo $resultatLI;
}
?>
<?php
if (isset($_POST['a1']))
{
$a11 = $_POST['a1'];

}
if (isset($_POST['a2']))
{
$a22 = $_POST['a2'];
}
if (isset($_POST['a3']))
{
$a33 = $_POST['a3'];
}
if (isset($_POST['a4']))
{
$a44 = $_POST['a4'];
}
if (isset($_POST['a5']))
{
$a55 = $_POST['a5'];
}

if(isset($a11)){
$resultatA=($a11+$a22+$a33+$a44+$a55)/5;
}
if (isset($resultatA)){
}

?>


<?php

include 'config.php';
    global $db;
    $q=$db->prepare("SELECT*FROM test WHERE Email=:Email");
    $q->execute([
        'Email'=>$_SESSION['Email']
      ]);
    $result=$q->fetch();
if(!isset($result['Email'])){
                    $q = $db->prepare("INSERT INTO test(Email,dirigisme,creatif,logique,litteraire,attentione)VALUES(:Email,:dirigisme,:creatif,:logique,:litteraire,:attentione)");
                    $q->execute([
                    'Email'=>$_SESSION['Email'],
                    'dirigisme'=>$resultatD,
                    'creatif'=>$resultatC,
                    'logique'=>$resultatLO,
                    'litteraire'=>$resultatLI,
                    'attentione'=>$resultatA
                ]);
                echo "Test ajouté";
                echo "<script>location.href='/phpmyadmin/hackaton/formulaire.php';</script>";
                }



else{
                  if(isset($resultatD)){
                    $n=$db->prepare("UPDATE test SET dirigisme=:dirigisme,creatif=:creatif,logique=:logique,litteraire=:litteraire,attentione=:attentione WHERE Email=:Email");
                    $n->execute([
                    'Email'=>$_SESSION['Email'],
                    'dirigisme'=>$resultatD,
                    'creatif'=>$resultatC,
                    'logique'=>$resultatLO,
                    'litteraire'=>$resultatLI,
                    'attentione'=>$resultatA
                ]);
                echo "Le test a été modifié";
                $_SESSION['dirigisme']=$resultatD;
                $_SESSION['creatif']=$resultatC;
                $_SESSION['logique']=$resultatLO;
                $_SESSION['litteraire']=$resultatLI;
                $_SESSION['attentione']=$resultatA;
                echo "<script>location.href='/phpmyadmin/hackaton/homepage.php';</script>";
                }
                  

                else{
                  echo "pas de valeur selectionné";
                }
              }

?>
</body>
</html>

