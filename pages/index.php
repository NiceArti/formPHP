<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site1</title>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <?php session_start(); ?>
    <?php include_once('pages/functions.php'); ?>
    
    <div class="container">
        <div class="row">
            <header class="col-sm-12 col-md-12 col-lg-12 ">
                    <?php include_once('pages/header.php') ?>
            </header>
        </div>
        <div class="row">
            <nav class="col-sm-12 col-md-12 col-lg-12 p-2 m-3">
                <?php include_once('pages/menu.php'); ?>
            </nav>
        </div>
        <div class="row">
            <section class="col-sm-12 col-md-12 col-lg-12 p-2 m-4">
                <?php
                $page = isset($_GET['page'])?$_GET['page']:1;

                switch ($page) {
                    case 1:
                        include_once('pages/home.php');
                        break;
                    case 2:
                        include_once('pages/upload.php');
                        break;
                    case 3:
                        include_once('pages/gallery.php');
                        break;
                    case 4:
                        include_once('pages/registration.php');
                        break;
                    default:
                        include_once('pages/registration.php');
                        break;
                }
                ?>
            </section>
        </div>
    </div>
</body>
</html>