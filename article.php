<?php
    $page_title = "Article";
    $current = 'article';
    include 'includes/header.php';
    // this means user is logged in and account is not expired - show article
    if (isset($_SESSION['user_id']) && isset($_SESION['user_not_expired'])){
        include 'templates/article.php';
    }else{
        include 'templates/membersonly.php';
    }
    include 'includes/footer.php';