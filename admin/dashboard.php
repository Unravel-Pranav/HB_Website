<?php
require('inc/essentials.php');
adminLogin();
session_regenerate_id(true);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Pannel - Dashboard</title>
        <?php require('inc/links.php'); ?>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body class="bg-light">

    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between ">
        <h3 class="mb-0">ADMIN PANEL</h3>
        <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>
      
        
    <?php require('inc/scripts.php');  ?>
    </body>
</html>