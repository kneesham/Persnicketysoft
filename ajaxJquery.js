$(document).ready(function() {

  $( "#users" ).on('change', function(){
    var value = $( this ).val();
    $( "#userdiv" ).load("indexConstruction.php?fname=" + value);


      // $("#userdiv").text( value );

  });

});
