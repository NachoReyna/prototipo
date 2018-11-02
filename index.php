<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <title></title>
  </head>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>

  $( function() {
  $( "#draggable" ).draggable();
  $( "#draggable2" ).draggable();
  $( "#draggable3" ).draggable();

});


  function pruebaSeleccionar(){
    $( "#draggable3" ).draggable();

    var checar = $('#checkbox-nested-1').prop('checked');
    var checar2 = $('#checkbox-nested-2').prop('checked');
    var checar3 = $('#checkbox-nested-3').prop('checked');
    var checar4 = $('#checkbox-nested-4').prop('checked');
    $('#paso2').empty();
    if (checar==true) {
    var personaje1 = '<div><div id="draggable3" class="ui-widget-content">'+
      '<p>ksjñkdjlsjf</p></div>'+
    '</div>';
    $('#paso2').append(personaje1);
      console.log('personaje 1');
    }

    if (checar2==true) {
      var personaje2 = '<img src="https://supercurioso.com/wp-content/uploads/2017/12/610-datos-fascinantes-sobre-los-personajes-de-Mario.jpg" alt="" width="30%" >';
      $('#paso2').append(personaje2);
        console.log('personaje 2');

    }

    if (checar3==true) {
      var personaje3 = '<img src="https://supercurioso.com/wp-content/uploads/2017/12/810-datos-fascinantes-sobre-los-personajes-de-Mario.jpg" alt="" width="30%" >';
      $('#paso2').append(personaje3);
        console.log('personaje 3');
    }

    if (checar4==true) {
      var personaje4 = '<img src="https://supercurioso.com/wp-content/uploads/2017/12/910-datos-fascinantes-sobre-los-personajes-de-Mario.jpg" alt="" width="30%" >';
      $('#paso2').append(personaje4);
        console.log('personaje 4');
    }
  }
  </script>
  <body>
    <div id="draggable" class="ui-widget-content">
			<p>Drag me around</p>
		</div>
		<div id="" class="ui-widget-content">
			<p>Drag me around</p>
		</div>

    <div id="draggable2" class="ui-widget-content">
      <p>ksjñkdjlsjf</p>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Agrega un personaje
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Selecciona un personaje y despues da click en "Aceptar"</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="widget" id="paso1">
                <label for="checkbox-nested-1">Personaje 1
                  <input type="checkbox" name="personaje1" id="checkbox-nested-1">
                  <img src="https://supercurioso.com/wp-content/uploads/2017/12/710-datos-fascinantes-sobre-los-personajes-de-Mario.jpg" alt="" width="100px">
                </label>
                <label for="checkbox-nested-2">Personaje 2
                  <input type="checkbox" name="personaje2" id="checkbox-nested-2">
                  <img src="https://supercurioso.com/wp-content/uploads/2017/12/610-datos-fascinantes-sobre-los-personajes-de-Mario.jpg" alt="" width="100px">

                </label>
                <label for="checkbox-nested-3">Personaje 3
                  <input type="checkbox" name="checkbox-nested-3" id="checkbox-nested-3">
                  <img src="https://supercurioso.com/wp-content/uploads/2017/12/810-datos-fascinantes-sobre-los-personajes-de-Mario.jpg" alt="" width="100px">

                </label>
                <label for="checkbox-nested-4">Personaje 4
                  <input type="checkbox" name="checkbox-nested-4" id="checkbox-nested-4">
                  <img src="https://supercurioso.com/wp-content/uploads/2017/12/910-datos-fascinantes-sobre-los-personajes-de-Mario.jpg" alt="" width="100px">
                </label>
                <br>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" onclick="pruebaSeleccionar();" data-dismiss="modal" class="btn btn-primary">Aceptar</button>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>



    <div class="" id="paso2">

    </div>


  </body>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
