jQuery(document).ready(function(){

    jQuery('.ajaxform').submit( function() {
        var my_data = $(this).serialize();

        //AJAX FOR addCard and add Link
        $.ajax({
            url     : $(this).attr('action'),
            type    : $(this).attr('method'),
            data    : my_data,
            success : function( data ) {
                        //reload the content on call
                        $("#lists").load("php/loadProfile.php");
                        $("#dropList").load("php/dropList.php");
                         //if(!alert("success")){window.location.reload();}                 
                      },
            error   : function(){
                         alert('Something wrong');
                      }
        });

        return false;
    });

});

//AJAX for delete call
function del(username, sent){
  var link = "../users/"+username+"/"+sent+".txt";
  var textfile = link;

  var r = confirm("Are you sure you want to delete this card?")
 if(r == true){
  $.ajax({
    type: "POST",
    url: "php/deleteCard.php",
    data: { varlink:textfile },                        
    success: function(data) {
      //on delete, refresh the content
       $("#lists").load("php/loadProfile.php");
       $("#dropList").load("php/dropList.php");
    }
  });
}
};