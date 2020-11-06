<?php

// 后台自定义上传头像
require get_template_directory() . '/functions/local_avatar.php';
//删除链接category目录
require get_template_directory() . '/functions/url_delete_category.php';


//后台支持添加特色图
add_theme_support( 'post-thumbnails' );