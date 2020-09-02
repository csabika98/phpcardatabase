<?php  session_start();
if (array_key_exists("kijelentkezes",$_POST)){
                unset($_SESSION["felhasznalonev"]);
                unset($_SESSION["id"]);
                //setcookie("felhasznalonev", "", time()-3600);
                header("location:bejelentkezes.php");
            }
if(!isset($_SESSION["felhasznalonev"])){
      header("location:bejelentkezes.php");
  }
?>

<!DOCTYPE html>

<html  >
    
<head>
  <!-- Site made with Mobirise Website Builder v5.0.29, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.0.29, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/853993434-121x121.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
</style>
<body>
  
   <section class="menu cid-s48OLK6784" once="menu" id="menu1-h">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://shmector.com/_ph/13/853993434.png">
                        <img src="assets/images/853993434-121x121.png" alt="Mobirise" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="http://localhost/PHP-jarmunyilvantarto/index.php">Jármű adatbázis</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-4" href="http://localhost/PHP-jarmunyilvantarto/mkdocs/index.html">Tudástár</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="http://localhost/PHP-jarmunyilvantarto/cars.php">Járművek</a></li>
                <li class="nav-item"><a class="nav-link link text-black display-4" ><form action="index.php" method="post">
        <input type="submit" class="btn btn-success" name="kijelentkezes" value="Kijelentkezés">
        </form></a></li>
                
                </ul>
                
                
            </div>
        </div>
    </nav>

</section>
  

<section class="engine"><a href="https://mobirise.info/o">portfolio web templates</a></section>
    <section class="content1 cid-s48udlf8KU" id="content1-8">
   
    <div class="container">
        <button type="button" class="btn btn-primary" style="margin: 0 0 0 40%" data-toggle="modal" data-target="#exampleModal">
 Új jármű hozzáadása
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Új jármű hozzáadása</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-sm-12 bg-dark form-group text-white">      

    <form action="cars.php" method="post" enctype="multipart/form-data">
        <label for="evjarat">Évjárat:</label>
        <input type="number" min="1900" max="2099" step="1" value="0" class="form-control" id="evjarat" name="evjarat">
        <label for="marka">Márka:</label>
        <input type="text" class="form-control" id="marka" name="marka">
        <label for="muszaki">Műszaki vizsga:</label>
        <input type="date" class="form-control" id="muszaki" name="muszaki" value="<?php echo date("Y-m-d"); ?>"><br>
        <div class="custom-file">
        <label for="kep" class="custom-file-label">Kép:</label>
        <input type="file" id="kep" name="kep" class="custom-file-input">
        </div>
        <br><br>
        <input type="submit" class="btn btn-success" name="hozzadas" value="Hozzáadás">
        <br>&nbsp;
    </form>

</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Mégse</button>
        
      </div>
    </div>
  </div>
</div><br><br>
        
        <div class="row justify-content-center">
            <div class="title col-12 col-md-9">
                <?php

function cars($jarmuid){
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "teszt";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT  * FROM jarmuvek WHERE jarmuid=".$jarmuid;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<div class='container' style='margin: 0 0 0 30%'>";
  while($row = mysqli_fetch_assoc($result)) {
      $id= $row["jarmuid"];
      $marka= $row["marka"];
      $evjarat= $row["evjarat"];
      $muszaki= $row["muszaki"];
    echo   "<div class='flip-card '>";
    echo  "<div class='flip-card-inner'>";
    echo   "<div class='flip-card-front'>";
    echo   "<img src='data:image/jpeg;base64,".$row["kep"]."'' alt='car' style='width:300px; height:300px;'>";
    echo     "</div>";
    echo   "<div class='flip-card-back'>";
    echo  "<br><h1>".$row["marka"]."</h1>";
    echo   "<br><p>évjárat: ".$row["evjarat"]."</p>"; 
    echo   "<br><p>műszaki: ".$row["muszaki"]."</p>";
       
     echo "<form action='cars.php' method='post'><button type='submit' name='torles' value='$id]' class='btn btn-secondary' style='margin: 0 0 0 35%'>Törlés</button></form><br>";  
  
    echo "</div></div></div><br>";
      
     
     
      ?>
    
                
                <?php
  
      echo "</div>";
            
      echo "<br>";
    
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
echo "</div>";
}
                
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teszt";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT  jarmuid FROM jogosultsagok WHERE felhasznaloid=".$_SESSION["id"];
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  
  while($row = mysqli_fetch_assoc($result)) {
    cars($row["jarmuid"]);

  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
                <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-7"></h4>
                
            </div>
        </div>
    </div>
</section>


<section class="footer3 cid-s48P1Icc8J" once="footers" id="footer3-i">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7">Segítség</li><li class="foot-menu-item mbr-fonts-style display-7"><a href="http://forums.mobirise.com/" class="text-success">Mobirise Forums</a></li><li class="foot-menu-item mbr-fonts-style display-7"><a href="https://mobirise.com/" class="text-success">Mobirise.com</a></li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2020 jarmuadatbazs. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
<?php
   
        
    if (count($_POST)>0){      
    if (array_key_exists("hozzadas",$_POST)){
        $evjarat = $_POST["evjarat"];
        $marka = $_POST["marka"];
        $muszaki = $_POST["muszaki"];
        
        $fajl = file_get_contents($_FILES["kep"]["tmp_name"]);
        //képet átalakítottuk base64 formátumra, a változóban tárolódik
        $base64 = base64_encode($fajl);
        
        
        //ezt fogjuk használni a megjelenítéshez, a böngészőnk dekódolni tudja a base64 formátumú képet közvetlenül
        
        
        //Az adatbázis insert-et kibővítettük úgy, hogy a kep mezőbe berakjuk a base64 változó tartalmát
         $adatbazis_szerver = "localhost";
  $adatbazis_felhasznalo = "root";
  $adatbazis_jelszo = "";
  $adatbazis_nev = "teszt";

  $kapcsolat = mysqli_connect($adatbazis_szerver, $adatbazis_felhasznalo, $adatbazis_jelszo, $adatbazis_nev);

        $sql = "INSERT INTO jarmuvek (evjarat, marka, muszaki, kep) VALUES ('$evjarat', '$marka', '$muszaki', '$base64')";
        $eredmeny = mysqli_query($kapcsolat, $sql);
        $jarmuid = mysqli_insert_id($kapcsolat);
        $felhasznaloid = $_SESSION["id"];
        
        
        $sql = "INSERT INTO jogosultsagok (felhasznaloid, jarmuid) VALUES ('$felhasznaloid','$jarmuid')";
        mysqli_query($kapcsolat, $sql);
        echo "<meta http-equiv='refresh' content='0'>";
        }
     if (array_key_exists("torles",$_POST)){
        $felhasznaloid = $_SESSION["id"];
        $torlendo = $_POST["torles"];
        
        //Vizsgáljuk, hogy létezik-e a felhasználó - járműid összerendelés a jogosultságok táblában tartalmát
             
         $adatbazis_szerver = "localhost";
  $adatbazis_felhasznalo = "root";
  $adatbazis_jelszo = "";
  $adatbazis_nev = "teszt";

  $kapcsolat = mysqli_connect($adatbazis_szerver, $adatbazis_felhasznalo, $adatbazis_jelszo, $adatbazis_nev);
        $sql = "SELECT * FROM jogosultsagok WHERE jarmuid='$torlendo' AND felhasznaloid='$felhasznaloid' ";
        
        //a lekérés eredményét feldolgozzuk
        $eredmeny = mysqli_query($kapcsolat, $sql);
        while($sor = mysqli_fetch_assoc($eredmeny)) {
            //ha a lekérés nem jár sikerrel, tehát nincs jogosultság, akkor ez az ág fut le
            if (!array_key_exists("felhasznaloid",$sor)){
                $nincsjogom = 1;
            }
            
            //ha van jogosultságunk, akkor az else ágban fut le az a funkció, amit eredetileg végre akartunk hajtani
            else {
        $sql = "DELETE FROM jogosultsagok WHERE jarmuid='$torlendo' AND felhasznaloid='$felhasznaloid' ";
        mysqli_query($kapcsolat, $sql);
        
        $sql = "DELETE FROM jarmuvek WHERE jarmuid='$torlendo'";
        mysqli_query($kapcsolat, $sql);
        echo "<meta http-equiv='refresh' content='0'>";
            }
        }

        }
    
    
    
    
    }
    
    
    ?>
  
</body>
   
</html>