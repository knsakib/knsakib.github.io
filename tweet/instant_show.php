<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Khalid Nazmus Sakib's website</title>

    <link rel="stylesheet" href="tweet/Poststyle2.css"/>
</head>



<body>

<div id="whole">

<div id="showcontainer">
<div id="show">
</div>
</div> 


<form id="myForm" action="tweet/update.php" method="post">
Name:<br><input type="text" name="name" maxlength="25"><br><br>
Email(will not be displayed):<br><input type="text" name="email" maxlength="255"><br><br>
Message:<br>
<textarea name="message" rows="6" cols="35" maxlength="350"></textarea><br>
<!--observe that we did npt create any post processing through php rather calling a java script 
also we gave id value instead of name-->
<button id="sub">Save</button>
</br><span id="feedback"></span>
</form>
 </div>
 
<script type="text/javascript" src="jQuery.js"></script>
<script type="text/javascript" src="tweet/instant_show.js"></script>  
    
</body>
</html>
