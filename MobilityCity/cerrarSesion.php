<?php
session_start();
if($_SESSION['nombre']){
    session_destroy();
    header("location:index.html");
}
else{
    header("location:index.html");
}
?>