<?php


//get the id of the blog post in the array of Blog Posts
function getBlogPost($blogPostId){
    
    $allBlogPosts = getAllBlogPosts();
    
    return $allBlogPosts[$blogPostId];
}

//get all of the info (id, content, title) of the blog posts in the array of Blog Posts
function getAllBlogPosts(){
    
    $allBlogPosts = [
        1 => [
            'blogPostId' => 1,
            'title' => "Welcome",
            'h1' => "<h1>Eva Jeliazkova</h>"
        ],
        2 => [
            'blogPostId' => 2,
            'title' => "About Me",
            'h1' => "<h1>Who is she</h1>"
        ],
    ];

    return $allBlogPosts;
}