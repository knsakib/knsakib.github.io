<?php
mysql_connect('fdb2.biz.nf','1470566_post','rootpass');
mysql_select_db('1470566_post');
$sql = "SELECT * FROM entries ORDER BY `timestamp`";
$res = mysql_query($sql);
$result = array();

while ($row = mysql_fetch_array($res) )
            //$entries_timestamp = date('D M Y , h:i', $entries_row['timestamp']);
    array_push($result, array('time' => date('D M Y , h:i', $row['timestamp']),
                              'name'=> $row['name'],
                              'message'=> $row['message']));
echo json_encode(array("result" => $result)); 

//json is a way of encoding array
?>
