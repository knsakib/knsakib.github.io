<?php

if (mysql_connect('ec2-54-187-216-239.us-west-2.compute.amazonaws.com','root','HssM4F') && mysql_select_db('messages')){
// if mysql connected and mysql database guestbook connected
// @ sign before 'mysql_connect' and 'mysql_select_db' force not to show default error message
    
    $entries = mysql_query("SELECT * FROM messages ORDER BY `timestamp` DESC LIMIT 1");
    //$entries = mysql_query("SELECT `timestamp`, `name`, `email`,`message` FROM entries ORDER BY `timestamp` DESC LIMIT 1");
    //$entries_row = mysql_query($entries);
    $entries_row=mysql_fetch_array($entries);       
            $entries_timestamp = date('D M Y , h:i', $entries_row['timestamp']);
            $entries_name = $entries_row['name'];
            $entries_email = $entries_row['email'];
            $entries_message = $entries_row['message'];
            
    
            echo 'Posted by <strong>'.$entries_name.'</strong> on '.$entries_timestamp.':</br>'.$entries_message.'</br><hr>';
            
    
}else{
echo 'sorry guys! :( could not connect to the database at this time';
}
?>
