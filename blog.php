<?php

$posts = [
    [
     'Title' => 'Resume',
     <evaResume class="doc"></evaResume>
    ],
    [
      'Name' => 'Bracken',
      'PhoneNumber' => '555-555-5555'
    ],
    [
      'Name' => 'Michael',
      'PhoneNumber' => '101-001-10001'
    ],
    
  ];
$count = 1;

foreach($posts as $individualPost){
    echo "
        <div style='font-size:12px; color:#999;'>Post #".($count)."</div>
        <div style='font-size:16px; font-weight:bold;'>".$individualPost['Title']."</div>
        <div style='font-size:14px; margin-bottom:20px;'>".$individualPost['PhoneNumber']."</div>
    ";
    $count = $count + 1;
}
?>