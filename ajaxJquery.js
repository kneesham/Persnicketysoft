$(document).ready(function() {
var value = $( this ).val();
  $( "#users" ).on('change', function(){
    $( "#userdiv" ).load("indexConstruction.php?userid=" + value);


      // $("#userdiv").text( value );

  });

});
