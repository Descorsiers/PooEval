<?php 
    require './models/Blogs.php';
    require './models/Messages.php';

    $blogs = new Blogs();
    $messages = new Messages();

    render('index',[
        'blogs'=>$blogs->getAllBlogs(),
        'messages'=> $messages->getAllMessages() 
    ]);






?>