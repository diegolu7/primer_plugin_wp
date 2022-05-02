<?php
      global $wpdb;//instancia global -> p/ hacer consultas a la DB
      $query = "SELECT * FROM {$wpdb->prefix}encuestas";

      //vble contiene lo q retorna la consulta!
      $lista_encuestas = $wpdb->get_results($query,ARRAY_A); //ARRAY_A -> para q retorne un array_asociativo
      if(empty($lista_encuestas)){
            $lista_encuestas = [];
      }

// boton guardar
if(isset($_POST['btnguardar'])){
      print_r($_POST);

}
?>
<div class="wrap">
  <?php
     echo "<h1>" . get_admin_page_title() . "</h1>" ; //tomara el titulo del Menu
  ?>
  <a id="btnnuevo" class="page-title-action" href="#"> Añadir nueva</a>
  <br><br><br>

   <table class="wp-list-table widefat fixed striped pages">
      <thead>
              <th >Nombre de la encuestas</th>
              <th >shortcode</th>
              <th >Acciones</th>
      </thead>
      <tbody id="the-list">
            <?php
                  //Recorremos La lista traida de la consulta
                  foreach ($lista_encuestas as $key => $value){
                        $nombre=$value['Nombre'];
                        $shortcode=$value['Shortcode'];


                        echo "<tr>
                        <td>$nombre </td>
                        <td>$shortcode</td>
                        <td>
                        <a class='page-title-action' href='#'>Ver estadisticas</a>
                        <a class='page-title-action' href='#'>Borrar</a>
                        </td>
                  </tr>";
                  }
                  
            ?>
      </tbody>
</table>




</div>


<!-- Modal -->
<div class="modal fade" id="modalnuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nueva Encuesta</h5>
        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                  <form method="post" >
                        <div class="modal-body">
                              <div class="form-group row">
                                    <label for="txtnombre" class="col-sm-5 col-form-label">Nombre de la encuesta</label>
                                    <div class="col-sm-7">
                                          <input type="text" id="txtnombre" name="txtnombre" style="width:100%">
                                    </div>
                              </div>
                              <h5 class="py-1 ">Preguntas</h5>

                              <table id="camposdinamicos">
                                    <tr>
                                          <td>
                                                <label for="txtnombre" class="col-form-label">Pregunta 1</label>
                                          </td>
                                          <td>
                                                <input type="text" name="name[0]" id="name" class="form-control name_list" >
                                          </td>
                                          <td>
                                                <button name="add" id="add" class="btn btn-success">Agregar</button>
                                          </td>
                                    </tr>
                              </table>
                        </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-primary btnguardar" name="btnguardar" id="btnguardar">Guardar</button>
                              </div>
                  </form>

    </div>
  </div>
</div>