<?php

//create connection with server//
//mysqli_connect(servername, username, password,dbname); 
$con = mysqli_connect("localhost","root","","practice");
if($con)
{
    echo"server connected<br>";
}
else
{
    echo"server not connected<br>";
}

//select database
//mysqli_select_db($con_var,"dbname");
$db = mysqli_select_db($con,"practice");
if($db)
{
    echo"database selected<br>";
}
else
{
    echo"database not selected<br>";
}

$a ="Geekyshows";

if (isset($a))
{
    echo "data is set";
}
else{
    echo "data is not set";
}
?>