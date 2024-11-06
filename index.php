<?php 
    require './utils/utils.php';

    switch ($_SERVER['REDIRECT_URL']) {
        case '/':
            require './controllers/indexCtrl.php';
            break;
        case '/forum':
            require './controllers/forumCtrl.php';
            break;
        case '/connectUser':
            require './controllers/connectUserCtrl.php';
            break;
        case '/user':
            require './controllers/userCtrl.php';
            break;
        case '/addForum':
            require './controllers/addForumCtrl.php';
            break;
        case '/addUser':
            require './controllers/addUserCtrl.php';
            break;
        
        default:
            # code...
            break;
    }












?>