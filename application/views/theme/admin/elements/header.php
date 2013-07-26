<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="follow, index">
        <title> <?php echo $this->config->item('site_name');?></title>
        <meta name="description" content="<?php echo $this->config->item('meta_description');?>">
        <meta name="author" content="<?php echo $this->config->item('meta_google_plus');?>">
        <meta name="keywords" content="<?php echo $this->config->item('meta_keywords');?>">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@<?php echo $this->config->item('Twitter_handle');?>">
        <meta name="twitter:creator" content="">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="<?php echo $this->config->item('meta_description');?>">
        <meta name="twitter:image" content="">
        <!-- Facebook Open Graph -->
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:description" content="" />
        <meta property="og:image" content="" />
        <meta property="og:url" content="" />
        <meta property="og:site_name" content="<?php echo $this->config->item('site_name'); ?>" />
        <!-- Google Plus -->
        <meta itemprop="name" content="" />
        <meta itemprop="image" content="" />
        <meta itemprop="description" content="<?php echo $this->config->item('meta_description');?>" />
  
        <!-- Styles -->

        <?php
        // add logic if user is logged in to flush the assets cache
        // Assets::clear_cache();
        ?>

        <?php Assets::css($this->config->item('theme_css')); ?>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- JS -->
        <?php Assets::cdn($this->config->item('theme_jscdn')); ?>
        <?php  Assets::js($this->config->item('theme_js')); ?>
        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/ico/favicon.ico'); ?>">
    </head>