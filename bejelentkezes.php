<!DOCTYPE html>
<html>
<title>PHP weboldalam</title>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>    
    
</head>   
    
<body>

<?php
  session_start();
    
    //session korábban cookie volt
  if(isset($_SESSION["felhasznalonev"])){
      header("location:index.php");
  }

    
  $adatbazis_szerver = "localhost";
  $adatbazis_felhasznalo = "root";
  $adatbazis_jelszo = "";
  $adatbazis_nev = "teszt";

  $kapcsolat = mysqli_connect($adatbazis_szerver, $adatbazis_felhasznalo, $adatbazis_jelszo, $adatbazis_nev);
?>
<div class="container-fluid">
    <div class="col-lg-12 bg-dark form-group text-white">
        <form action="bejelentkezes.php" method="post">
        <input type="submit" class="btn btn-success" name="regisztracio" value="Regisztráció">
        </form>
        <?php
            if (array_key_exists("regisztracio",$_POST)){
                header("location:regisztracio.php");
            }
        ?>
    </div>
    
<div class="row">
<div class="col-sm-4">
</div>
<div class="col-sm-4 bg-dark form-group text-white">      

    <form action="bejelentkezes.php" method="post">
    <label for="felhasznalonev">Felhasználónév:</label>
    <input type="text" class="form-control" id="felhasznalonev" name="felhasznalonev" required>
    <label for="jelszo">Jelszó:</label>
    <input type="password" class="form-control" id="jelszo" name="jelszo" required>
    <br>
    <input type="submit" class="btn btn-success" name="bejelentkezes" value="Bejelentkezés">
    <br>&nbsp;
    </form>

<?php 

    if (array_key_exists("bejelentkezes",$_POST)){
        
        $felhasznalonev = $_POST["felhasznalonev"];
        $jelszo = $_POST["jelszo"];
        
        if (strlen($felhasznalonev)>15 OR strlen($felhasznalonev)<2){
            echo "<div class='alert alert-danger'>A felhasználónév minimum 2, maximum 15 karakter lehet!</div>";
        }
        else {
            echo strlen($felhasznalonev);
            echo "<br>";
            echo $felhasznalonev;
            echo "<br>";
            $felhasznalonev = trim($felhasznalonev, ".;*");
            echo $felhasznalonev;
            echo "<br>";
            $felhasznalonev = stripslashes($felhasznalonev);
            echo $felhasznalonev;
            echo "<br>";
            $felhasznalonev = htmlspecialchars($felhasznalonev);
            echo $felhasznalonev;
            echo "<br>";
        
            $sql = "SELECT * FROM felhasznalok WHERE felhasznalonev     = '$felhasznalonev'";
            echo $sql;
            $valasz = mysqli_query($kapcsolat, $sql);
        
            while($sor = mysqli_fetch_assoc($valasz)) {
        
                if(password_verify($jelszo, $sor["jelszo"])){
                    echo "sikeres bejelentkezés!";
                    $_SESSION["felhasznalonev"] = $felhasznalonev;
                    $_SESSION["id"] = $sor["id"];
                    // setcookie("felhasznalonev", $felhasznalonev,     time()+3600);
                    // régi, nem biztonságos bejelentkezés javítása
                    header("location:index.php");
                }
        
            }
        }
  }
?>
    
</div>
</div>
</div>
    
</body>