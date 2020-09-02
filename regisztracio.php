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
  $adatbazis_szerver = "localhost";
  $adatbazis_felhasznalo = "root";
  $adatbazis_jelszo = "";
  $adatbazis_nev = "teszt";

  $kapcsolat = mysqli_connect($adatbazis_szerver, $adatbazis_felhasznalo, $adatbazis_jelszo, $adatbazis_nev);
?>
<div class="container-fluid">
    <div class="col-lg-12 bg-dark form-group text-white">
        <form action="regisztracio.php" method="post">
        <input type="submit" class="btn btn-success" name="bejelentkezes" value="Bejelentkezes">
        </form>
        <?php
            if (array_key_exists("bejelentkezes",$_POST)){
                header("location:bejelentkezes.php");
            }
        ?>
    </div>
    
<div class="row">
<div class="col-sm-4">
</div>
<div class="col-sm-4 bg-dark form-group text-white">      

    <form action="regisztracio.php" method="post">
    <label for="felhasznalonev">Felhasználónév:</label>
    <input type="text" class="form-control" id="felhasznalonev" name="felhasznalonev" required>
    <label for="jelszo">Jelszó:</label>
    <input type="password" class="form-control" id="jelszo" name="jelszo" required>
    <label for="vezeteknev">Vezetéknév:</label>
    <input type="text" class="form-control" id="vezeteknev" name="vezeteknev" required>
    <label for="keresztnev">Keresztnév:</label>
    <input type="text" class="form-control" id="keresztnev" name="keresztnev" required>
    <label for="email">E-mail:</label>
    <input type="email" class="form-control" id="email" name="email" required>
    <label for="telefonszam">Telefonszám (+36xx-xxxxxxx):</label>
    <input type="tel" class="form-control" id="telefonszam" name="telefonszam" pattern="+36[0-9]{2}-[0-9]{7}" required>
    <br>
    <input type="submit" class="btn btn-success" name="regisztracio" value="Regisztráció">
    <br>&nbsp;
    </form>

<?php 
    if (array_key_exists("regisztracio",$_POST)){
      $felhasznalonev = $_POST["felhasznalonev"];
      $jelszo = $_POST["jelszo"];
      $vezeteknev = $_POST["vezeteknev"];
      $keresztnev = $_POST["keresztnev"];
      $email = $_POST["email"];
      $telefonszam = $_POST["telefonszam"];

      $sql = "SELECT * FROM felhasznalok WHERE felhasznalonev = '$felhasznalonev'";
      $valasz = mysqli_query($kapcsolat, $sql);
      
      $sor = mysqli_fetch_assoc($valasz);

     if(!$sor == NULL){
          echo "<div class='alert alert-danger'>Már létezik ilyen felhasználó!</div>";
      }
      else {
        $titkositott = password_hash($jelszo, PASSWORD_DEFAULT);
      
        $sql = "INSERT INTO felhasznalok (telefon, email, vezeteknev, keresztnev, felhasznalonev, jelszo) VALUES ('$telefonszam', '$email', '$vezeteknev', '$keresztnev', '$felhasznalonev', '$titkositott')";
        mysqli_query($kapcsolat, $sql);
        echo "<div class='alert alert-success'>Sikeres regisztráció!</div>";
          }
  }
?>
    
</div>
</div>
</div>   
</body>