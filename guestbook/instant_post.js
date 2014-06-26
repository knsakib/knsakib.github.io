$("#sub").click(function(){



var data = $("#myForm :input").serializeArray();

$.post( $("#myForm").attr("action"), data, function(info){ 
$("#feedback").html(info);
//$.post( pass_data_to_this_url, data, callback_function );
    if (~info.indexOf(":) Thank you! ")){
    
	update();}
});

clearInput();

//updates(); 
});
 
$("#myForm").submit( function() {
  return false; 
});

$(document).ready(function(){
show(); 
})
 
function clearInput() {
    $("#myForm :input").each( function() {
       $(this).val('');
    });
}

function show() {
    $.post("guestbook/show.php", function(data) {
    //$('#tweet').empty();
    $('#tweet').append(data);
	
    });
};

function update() {
    $.post("guestbook/instant_update.php", function(updatedata) {
    $('#tweet1').prepend(updatedata).hide().fadeIn('slow');
	var y =$('#tweet1').height();
	var h = y - 30 + 'px'
	/*var y =$('#tweet1')[0].scrollHeight + 'px';*/
	/*var y = $("#tweet1").height() + 'px'; 
		/*var x = parseInt($('li').height());*/
		/*var y=count*50 + 'px';*/
	$("#tweet").stop().animate({"top": h}, 'slow');
	
    });
};
