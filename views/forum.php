<?php 
    ob_start();
// On récupère notre template
    render('Forum/forum', [

    ], true);

    $content = ob_get_clean();

    // On appelle le template qui contient la base du corps html
    render('default', [
        'content'=> $content
    ], true);

























?>