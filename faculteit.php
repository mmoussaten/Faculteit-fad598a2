<?php

    echo "Van welk getal wil je de faculteit zien ?\n";
       $keuze = readline();

         $num = $keuze;
           $factorial = 1;
           for ($x = $num; $x >= 1; $x--) {
               $factorial = $factorial * $x;
               {
                   echo "De faculteit van $num is $factorial";
               }
           }
