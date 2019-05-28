<?php

$blogPostId = 1;
$allPosts = [
    '1' => [],
    '2' => [],
    '3' => [],
    '4' => []
];
$count = 1;

foreach($posts as $individualPost){
    echo "
        <h2>".allPosts[blogPostId][title]."
    ";
    $count = $count + 1;
}
?>