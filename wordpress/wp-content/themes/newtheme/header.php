<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Document</title>

    <?php wp_head();?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body <?php body_class();?>>

    <nav class="navbar navbar-expand-sm backG-dark navbar-dark fixed-top">
    <div class="container navigation">

        <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_directory'); ?> /assets/logo.png"
                alt=""></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#target_collapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="target_collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="menu-items rgt-border" href="#"><i class="fa fa-phone"></i> <?php echo get_theme_mod('header-number') ?>
                </a>
                </li>
                <li class="nav-item">
                    <a class="menu-items" href="#"><i class="fa fa-envelope"></i> 
                    <?php echo get_theme_mod('header-email') ?>
                </a>
                </li>
                <li class="nav-item">
                    <a class="menu-items btn btn-pink" href="#"><i class="fa fa-paper-plane-o"></i> &nbsp;BOOK NOW</a>
                </li>

            </ul>
        </div>

    </div>
</nav>
