<?php 
    require './models/Blogs.php';
    require './models/Messages.php';

    $blog__id = null;

    if(!empty($_GET['id']) && ctype_digit($_GET['id'])){
        $blog_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    }else{
        die("Vous devez définir un paramètre id valide dans l'url");
    };

    $blogs = new Blogs();
    $blog->id = $blog__id;
    $messages = new Messages();

    render('forum', [
        'blog'=> $blog->getOneBlog(),

    ]);


























?>