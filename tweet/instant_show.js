$(document).ready(function(){

    $("#sub").click(function(){
    var data = $("#myForm :input").serializeArray();
    $.post( $("#myForm").attr("action"), data, 
        function(info){ $("#feedback").html(info);
        //$.post( pass_data_to_this_url, data, callback_function );
        });
    clearInput();
    updates();
    });

    $("#myForm").submit(function(){
    return false; // it will prohebited the user to redirect any other page  
    });

done(); //done should be called as sson as the document is reday
//it will do instant update because of addition or deletion in the databse
//because it was called inside it.

});
 
function done(){
      setTimeout(function() { // it will make delay 200 on updates
                            //and done function
      updates();    //these updates and done functions are the parameter of setTimeout function
      done();
      }, 200);
}

function clearInput() {
    $("#myForm :input").each( function() {
       $(this).val('');
    });
}

    
function updates(){ 
    $.getJSON("tweet/instant_show_fetch.php", function(data){
    //getJSON is the ajax or jquery way to get data from php file 
    $("#show").empty();
    //make "show" empty in order to avoid duplication   
        $.each(data.result, function(){ //loop in through the array result  
        //data is coming from callback and result is the key array of the data
        //if you see the code and the output of instant_show_fetch.php you will
        //the key array name is 'result'
        $("#show").prepend("Posted by "+"<b>"+this['name']+"</b>"+" on "+this['time']+":<br/>"+this['message']+"<hr></br>");
        });
    
    });
}
