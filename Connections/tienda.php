<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"

$hostname_tienda = "localhost";
$database_tienda = "tienda";
$username_tienda = "root";
$password_tienda = "";

    //$conn = new mysqli('localhost', 'root', '', 'gdlwebcamp');
    $tienda = new mysqli($hostname_tienda, $username_tienda, $password_tienda, $database_tienda);
    
    if($tienda->connect_error) {
      echo $error -> $tienda->connect_error;
    }
    
    $tienda->set_charset("utf8");





// $tienda = mysqli_connect($hostname_tienda, $username_tienda, $password_tienda) or trigger_error(mysql_error(),E_USER_ERROR); 
?>