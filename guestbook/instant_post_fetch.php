<?php

$time=time();
$errors=array(); // to pick errors messages 

if (mysql_connect('ec2-54-187-216-239.us-west-2.compute.amazonaws.com','sakib','sakibWeb') && mysql_select_db('guestbook')){

    if (isset($_POST['guestbook_name'], $_POST['guestbook_email'], $_POST['guestbook_message'])){ 
    $guestbook_name = mysql_real_escape_string(htmlentities($_POST['guestbook_name']));
    $guestbook_email = mysql_real_escape_string(htmlentities($_POST['guestbook_email']));
    $guestbook_message = mysql_real_escape_string(htmlentities($_POST['guestbook_message']));
        
        if (!empty($guestbook_email)) {
			if (filter_var($guestbook_email, FILTER_VALIDATE_EMAIL) == FALSE) { //this function validate email
			$errors[]='The email doesn\'t appear to be valid';
			}
		}
		
		if (empty($guestbook_name) || empty($guestbook_message)) {
            $errors[]='Name and Message are required';
        }
        
		if (strlen($guestbook_name)>25 || strlen($guestbook_email)>255 || strlen($guestbook_message)>350) {
            $errors[]='One or more fields exceed the limit';
        }

        if (empty($errors)){ // SQL value injection
            $insert="INSERT INTO `message` VALUES('','$time','$guestbook_name','$guestbook_email','$guestbook_message')";
                
                if ($insert=mysql_query($insert)){ //overriding $insert with mysql->$insert
                echo ':) Thank you! '.$guestbook_name.' for your post';
                }else{
                $errors[]='Sorry Guys! :( something went wrong. Can you insert it again?';
                }
        
        }else{
            foreach($errors as $error){ // errors are the array and error is the variable that 
            echo $error.'</br>';
            }
        }
    }
}
else{
echo 'sorry guys! :( could not connect to database at this time';
}
    
?>
