$(document).ready(function() {

  $( "#users" ).on('change', function(){
    var value = $( this ).val();
    $( "#userdiv" ).load("indexConstruction.php?id=" + value);


      // $("#userdiv").text( value );

  });

});
