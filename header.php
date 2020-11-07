<!doctype html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://cdn.bootcdn.net/ajax/libs/highlight.js/10.3.2/styles/github.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
    <title><?php echo bloginfo( 'name' )?></title>
  </head>
<body>
<div class="container-fluid bg-dark overflow-hidden position-relative content-body">
    <img src="<?php bloginfo('template_url'); ?>/images/home-bg.jpg" class="img-fluid home-bg">
    <nav class="navbar navbar-expand-lg navbar-dark <?php if (!is_home())echo 'bg-dark';?>">
        <div class="container">
            <a class="navbar-brand logo" href="<?php bloginfo('url')?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" class="img-fluid">
                <span class="text-white d-inline-block"><?php bloginfo('name')?></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php bloginfo('url');?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php bloginfo('url');?>/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php bloginfo('url');?>/projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php bloginfo('url');?>/about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>