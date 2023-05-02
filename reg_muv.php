<?php
    //Adatbázis csatlakozás
    include_once("dbeleres.php");

    //A változók lementése a reg.php fájlból
    $nev=$_POST['name'];
    $email=$_POST['email'];
    $felhnev=$_POST['username'];
    $jelszo=$_POST['password'];
    $jelszo2=$_POST['password2'];

    //MYSQL adatbázis csatlakozás
    $kapcsolat=mysqli_connect($adatbazisIP,$adatbazisUserName,$adatbazisJelszo,$adatbazisNev);
    if(!$kapcsolat)
    {
        echo "Nem sikerült a MySQL adatbázis Aruhaz adatbázishoz csatlakozni.";
        echo mysqli_error();
    }
    else
    {
        echo "Sikerült kapcsolódni a MySQL adatbázis Aruhaz-hoz";
    }
    //Jelszó és jelszó megerősítése egyezik-e? Összehasonlítás
    if($jelszo==$jelszo2)
    {
        $parancs="INSERT INTO user (nev,email,felhasznalonev,jelszo) VALUES ('$nev','$email','$felhnev',SHA('$jelszo'));";
        $ertek=mysqli_query($kapcsolat,$parancs);
        if(!$ertek)
        {
            echo "Nem sikerült a MySQL adatbázis Aruhaz adatbázisához kapcsolódni<br>";
            echo mysqli_error();
        }
        else
        {
            echo "Sikeres regisztráció.<br>";
        }
    }
    else
    {
        echo "A két jelszó nem egyezik.";
    }





?>