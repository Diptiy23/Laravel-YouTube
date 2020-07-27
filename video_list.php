<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "config/config.php";
 
$arr_list = array();
if (array_key_exists('search_ip', $_GET)) {
    $channel = $_GET['search_ip'];
    $url = "https://www.googleapis.com/youtube/v3/search?maxResults=10&part=snippet&q=ajinkya%20&key=AIzaSyB2NRzJrkFA11oLe9VYowp6h9rmqpV2vHI&order=title". DEVELOPER_KEY;
    $arr_list = getYTList($url);
}


?>

<html>
   <body>
       <h1>YouTube Search</h1>
      <?php
         echo Form::open(array('url' => 'video_list/submit'));
            echo Form::label('search_ip','Search your Youtube Video');
            echo '<br/>';
            echo Form::text('search_ip', '',['class' => '','placeholder' => 'Here...' , 'value' => 'hii']);
            echo '<br/>';
            echo '<br/>';
            echo Form::submit('Click Me!');
            echo '<br/>';
            echo '<br/>';
            echo '<br/>';
            echo '<br/>';
            echo Form::textarea('result', '',['class' => '']);
            echo Form::close();
            
       ?>  
            
    </body>
</html>         



