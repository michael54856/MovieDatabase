<?php
    $host = 'localhost';
    $dbuser ='root';
    $dbpassword = '';
    $dbname = 'moviedatabase';
    $link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
    $deleteSQL = "delete from movies WHERE id={$_POST['deleteID']};";
    $result_123 = mysqli_query($link,$deleteSQL) or die("Bad query : $deleteSQL");
?>