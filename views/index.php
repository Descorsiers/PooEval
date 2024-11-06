<?php 
    ob_start();

    render('Forum/index', [
        'blogs'=> $data['blogs'],
        'messages'=> $data['messages']
    ], true);

    $content = ob_get_clean();

    render('default', [
        'content'=> $content
    ], true);



?>