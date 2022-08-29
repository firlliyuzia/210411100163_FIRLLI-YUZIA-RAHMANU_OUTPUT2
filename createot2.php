<?php
        // variabel baru
        $FirstName = ($_POST["Fnama"]);
        $LastName = ($_POST["Lnama"]);
        $nim = (int)($_POST["nim"]);
        $dob = (int)$_POST["lahir"];
        $age = (int)$_POST["umur"];
        $height = (float)$_POST["tinggi"];
        $address = (string)$_POST["alamat"];

        //menampilkan data
        echo "First Name = " . $FirstName. "<br>";
        echo "Last Name = " . $FirstName. "<br>";
        echo "Nim = " . $nim . "<br>";
        echo "Date of Brith = " . $dob . "<br>";
        echo "Umur = " . $age . "<br>";
        echo "tinggi = " . $height . "<br>";
        echo "adress = " . $address . "<br>";
        ?>