<?php
session_start();
if(!isset($_SESSION['lgid']))
{
    header('Location: index.php');
}

$currenttime=time();
if($currenttime-$_SESSION['logintime']>=600)
{
    session_destroy();
    header('Location: index.php');
}
?>