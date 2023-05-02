<?php
    //Adatbázis csatlakozás adatai
    require_once("dbeleres.php");

    if(!isset($_SESSION['user_id']))  //Létezik-e SESSION munkaváltozók között a user_id változó
    {
        if(!isset($_POST['Belépés']))  //Az index.php fájlban meg lett nyomva a Belépés gomb.
        {
            //Adatbázishoz való csatlakozás
            $kapcsolat=mysqli_connect($adatbazisIP,$adatbazisUserName,$adatbazisJelszo,$adatbazisNev);

            if(!$kapcsolat)
                {
                    echo "Nem sikerült kapcsolódni a MySQL szerver Áruház adatbázisázhoz<br>";
                }
            else
                {
                    //Az index.php username és password változójának lementése két lokális változóba
                    $user_username=$_POST['username'];
                    $user_password=$_POST['password'];
                    //Ellenőrzöm, hogy ez a két változó létezik-e
                    $sql="SELECT sorszam,felhasznalonev FROM user WHERE felhasznalonev='$user_username" AND jelszo=SHA('$user_password')"
           }
        }

            
    }




?>