 <?php
    include('config/init.php');
    
    //$blogPostId = $_REQUEST['blogPostId'];
    //$blogPost = getBlogPost($blogPostId);
    $profileId = 1;
    $profile = getProfile(4);
    
    echoHeader('Title', 'the first header');
    echo "
        <h1>".$profile['name']."</h1>
        ...
    ";

?> 
