<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Khalid Nazmus Sakib's website</title>
    <link rel="stylesheet" href="guestbook/Poststyle.css"/>
    
</head>
<body>
<style>



</style>


<div id="content1">
<div id="tweetcontainer">

<div id="tweetwrap">
<div id="tweet1">
</div>
<div id="tweet">
</div>
</div>

</div> 
<div id="form">
<br><strong>Post something...</strong><br><br>
<form id="myForm" action="guestbook/instant_post_fetch.php" method="post">
Name*:<br><input type="text" name="guestbook_name" maxlength="25"><br><br>
Email(will not be displayed):<br><input type="text" name="guestbook_email" maxlength="255"><br><br>
Message*(max 320 characters):<br><textarea name="guestbook_message" rows="6" cols="35" maxlength="350"></textarea><br>
<button id="sub">Post</button>
</form>
<span id="feedback"></span>
</div>  
</div>
<script type="text/javascript" src="jQuery.js"></script>
<script type="text/javascript" src="guestbook/instant_post.js"></script>  

    
</body>
</html>
