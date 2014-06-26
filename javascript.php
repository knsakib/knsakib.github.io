<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Khalid Nazmus Sakib's website</title>
	
</head>

<body>
<div id="javascript" onMouseMove="$('#javascript').mousemove(function(e){$('#pseudodiv').text('x: '+ e.clientY +'y:'+e.clientY);});">
<h3>Taking a mouse pointer's co-ordiantes over a elementelement's coordinates with jQuery </h3>
<p>
Use .mousemove(function(e){}); function to take the mouse co-ordiantes over aelement </br> For example:
I use: </br> $('#javascript').mousemove(function(e){$('#pseudodiv').text('x: '+ e.clientY +'y:'+e.clientY);})</br> and define a blank 
div tag with id name "pseudodiv" to show the cordinates of the mouse over this very paragraph inside that div tag.  
</p>
<div id="pseudodiv"></div>
<h3>Apply a generic single jQuery function that works for all buttons/links</h3>
<p>
Define a customized attribute to the link where the value of the attribute is the id of the page/div associated with
</br> For example: If the attribute of a link is "example" then the div you want to show give the id="example" to that div  
</p>
</div>
	
	</body>
</html>