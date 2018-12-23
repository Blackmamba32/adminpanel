<?php
include('inc_session.php');
session_destroy();
header('Location: index.php');
?>