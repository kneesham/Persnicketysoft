$(document).ready(function() {

  $( "#users" ).on('change', function(){
    $( "#userLoad" ).load("indexConstruction.php");

      var value = $( this ).val();

      $("#userdiv").text( value );

  });

});
