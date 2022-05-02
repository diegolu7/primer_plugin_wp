jQuery(document).ready(function ($) {


  $("#btnnuevo").click(function () {
    $("#modalnuevo").modal("show");

  });

  var i = 1;
  $("#add").click(function (e) {

    // i++;
    // $("#camposdinamicos").append('<tr id="row' + i + '"><td><label for="txtnombre" class="col-form-label">Pregunta ' + i + '</label></td><td> <input type="text" name="name[]" id="name" class="form-control name_list" ></td><td><select name="type[]" id="type" class="form-control type_list"><option value="1" selected>SI - NO</option><option value="2"> Rango 0 - 5</option></select></td><td><button name="remove" id="' + i + '" class="btn btn-danger btn_remove">x</button></td></tr>');
    $("#camposdinamicos").append('<tr id="row' + i + '"><td><label for="txtnombre" class="col-form-label">Pregunta ' + i + '</label></td><td> <input type="text" name="name[' + i + ']" id="name" class="form-control name_list" ></td><td><button name="remove" id="' + i + '" class="btn btn-danger btn_remove">x</button></td></tr>');
    i++;

    e.preventDefault();
  });

  $(document).on('click', '.btn_remove', function () {
    var button_id = $(this).attr('id');
    $("#row" + button_id + "").remove();
  });




























});
