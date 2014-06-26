$(document).ready(function () { 
     
	$('#content').load('home.php');
	 
	 
	 
    $('#top_menu li').hover(
		
	 function () {
            //show its submenu
            $('ul', this).stop().slideDown();
		}, 
        function () {
            //hide its submenu
            $('ul', this).stop().slideUp();          
        }
    );
    		
	$('#top_menu>li').hover(
		function(){
		var count = $('ul',this).find('a').length; //the number of a
		/*var x = parseInt($('li').height());*/
		var y=count*50 + 'px';
		$("#main_section").stop().animate({"top": y}, 'slow');
		},
		function(){
		$("#main_section").stop().animate({"top": 0}, 'slow');
		}
	); 
	
	
	$('#top_menu li a ').click(function(){
		$('#content').fadeOut('slow');
	var page=$(this).attr('para')+".php";
		//$('#main_section').children().fadeOut('slow');
		
		$('#content').hide().load(page).fadeIn('slow');
		return false;
		
	});
	 

		 
	/*$('#javascript').mousemove(function(e){  //this will create the hover effect
	$('#pseudodiv').text('x: '+ e.clientY +'y:'+e.clientY);});	 	 */
	

	 
	 });