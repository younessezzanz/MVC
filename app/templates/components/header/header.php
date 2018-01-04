<?php
use PHPMVC\LIB\Template\Template;
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://themeforest.net/user/flexycodes
 *
 * @package flexycodes
 */

?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>  

    <meta charset="UTF-8">
    <title><?= $title; ?></title>

    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link id="favicon" rel="icon" type="image/x-icon" href="/images/favicon.png">

    <?php Template::fc_head(); ?>

    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
    <![endif]-->

</head>
