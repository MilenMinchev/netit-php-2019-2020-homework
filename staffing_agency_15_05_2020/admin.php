<?php
    include './_external_autoload.php';
    
    (new controllers\AdminController())->index();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Staffing Agency</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/admin.css">
    </head>
    <body>
        
        <div id="admin-header">
            <h1 class="logo">Admin staffing agency</h1>
            <div id="admin-header-placeholder">
                <ul>
                    <li>Add new</li>
                    <li>List posts</li>
                    <!-- <li><a href="logout.php">Log out</a></li> -->
                    <li><a href="admin.php?action=logout">Log out</a></li>
                </ul>
            </div>
        </div>
        
        <?php 
            
            if(\session\Session::checkFlashMessage('create_blog_post')) {
                
                echo '<div class="message success">';
                echo \session\Session::getFlashMessage('create_blog_post');
                echo '</div>';                
            }
            
            // темплейт методика
        ?>            
        
        <div id="admin-editor">
            <form method="POST" name="admin-post-editor">
                <input class="form-input" type="text" placeholder="Post title" name="post_title">
                <textarea class="form-textarea h-40"  placeholder="Post preview" name="post_preview"></textarea>
                <textarea class="form-textarea h-160"  placeholder="Post content" name="post_content"></textarea>
                <input class="button" type="submit" name="post_submit">
                
                <input type="hidden" name="post_tokken" value="1">
            </form>
        </div>

    </body>
</html>
