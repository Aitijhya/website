<?php
   $server = "sql212.epizy.com";
   $username ="epiz_32348444";
   $password ="Ps49EmvcuT1anK";
   $dbname ="epiz_32348444_GetYourHelpers";

   $conn = mysqli_connect( $server,$username,$password,$dbname);
   if(!$conn){
    die("Connection Failed :".mysqli_connect_error());
   }
   ?>