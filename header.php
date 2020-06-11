<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <!--get the ttile from bloginfo-->
    <title><?php bloginfo('name');?></title> 
    <!--Pings back the links found in a post.-->
    <link rel="pingback" href="<?php  bloginfo('pingback_url');?>"/>
    <?php wp_head(); ?>
   
    <!--the main css stylesheet-->
    <link rel="stylesheet" href="style.css">   
</head>
<!-- START section__type-nav -->
<nav class="uk-navbar-container" uk-navbar>
<!-- START .uk-navbar-left -->
<div class="uk-navbar-left">
    <img src="img/fivesteps.png" alt="" >
</div>
<!-- END .uk-navbar-left -->
<!-- START .uk-navbar-right -->
<div class="uk-navbar-right">
<ul class="uk-navbar-nav">
    <li><a href="#">How It Works</a></li>
    <li><a href="#">Preise</a></li>
    <li><a href="#">Tipps</a></li>
    <li><a href="#">kontakt</a></li>
    <li>
        <a href="#">De</a>
        <div class="uk-navbar-dropdown">
            <ul class="uk-nav uk-navbar-dropdown-nav">
                <li><a href="#">En</a></li>
                <li><a href="#">De</a></li>
            </ul>
        </div>
    </li>
    <li><a href="#"><span>Gratis Call vereinbaren</span></a></li>
</ul>
</div>
<!-- END .uk-navbar-right -->
</nav>
<!-- END .section__type-nav -->
