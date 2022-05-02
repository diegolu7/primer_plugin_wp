<?php
/*
Plugin Name: Text Plugin (4-
Plugin URL: https://github.com/diegolu7
Description: contenido *** interior de menu
Version: 0.0.1
*/

function Activar(){
  //CREAMOS 2 TABLAS EN LA DB SI AUN NO ESTAN CREADAS

  global $wpdb;//vble global-wp para poder usar las fn de la DB

  $sql = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}encuestas(
      `EncuestaId` INT NOT NULL AUTO_INCREMENT ,
      `Nombre` VARCHAR(45) NULL ,
      `Shortcode` VARCHAR(45) NULL ,
      PRIMARY KEY (`EncuestaId`))";
  //ahora ejecutamos el qry creado
  $wpdb->query($sql);

  //creamos 2do qry
  $sql2 = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}encuestas_detalle(
      `DetalleId` INT NOT NULL AUTO_INCREMENT ,
      `Encuestald` INT NULL ,
      `Pregunta` VARCHAR(150) NULL ,
      `Tipo` VARCHAR(45) NULL ,
      PRIMARY KEY (`DetalleId`))";  
  
  //ahora ejecutamos el qry creado
  $wpdb->query($sql2);

  //creando 3ro
  $sql3 = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}encuestas_respuesta (
      `RespuestaId` INT NOT NULL AUTO_INCREMENT ,
      `DetalleId` INT NULL ,
      `Respuesta` VARCHAR(45) NULL ,
      PRIMARY KEY (`RespuestaId`))";


  //ahora ejecutamos el qry creado
  $wpdb->query($sql3);
   




}
function Desactivar(){
  flush_rewrite_rules();

}
register_activation_hook(__FILE__,'Activar'); /*llama a fn al tocar btn "Activar" */
register_deactivation_hook(__FILE__,'Desactivar');

add_action('admin_menu','CrearMenu');//1°Accion 2°Funcion
//crear Menu en panel de wp
function CrearMenu(){
  add_menu_page( //fn de wp
    'Titulo del menu', //titulo del menu
    'Nombre del Menu solapa',// titulo del Menu
    'manage_options', //capability : a q usuario le daremos el menu
    plugin_dir_path(__FILE__).'admin/lista_encuestas.php', //slug (porcion final link unico)
    null, //funcion para mostrar contenido
    plugin_dir_url(__FILE__).'admin/img/icon.png', //direccion de la imagen
    '1' //posicion de aparicion del MENU
  );
 
}
 function MostrarContenido(){


}
 
//encolar BOOTSTRAP--------------------------------
function EncolarBootstrapJS($hook){
  // echo "<script> console.log('$hook') </script>";
  if($hook != "testplugin-4/admin/lista_encuestas.php"){
    return; //salimos -> solo cargara el hook si esta parado en el menu donde lo necesitamos
  }
                    //name        url                                               FILE   
  wp_enqueue_script('bootstrapJs',plugins_url('admin/bootstrap/js/bootstrap.min.js',__FILE__),array('jquery'));
  
  
}
add_action('admin_enqueue_scripts','EncolarBootstrapJS');

//encolar CSS--------------------------------------
function EncolarBootstrapCSS($hook){
  // echo "<script> console.log('$hook') </script>";
  if($hook != "testplugin-4/admin/lista_encuestas.php"){
    return; //salimos -> solo cargara el hook si esta parado en el menu donde lo necesitamos
  }
                    //name        url                                               FILE   
  wp_enqueue_style('bootstrapcss',plugins_url('admin/bootstrap/css/bootstrap.min.css',__FILE__));
}
add_action('admin_enqueue_scripts','EncolarBootstrapCSS');

//encolar SCRIPT PROPIO-----------------------------
function EncolarJS($hook){
  // echo "<script> console.log('$hook') </script>";
  if($hook != "testplugin-4/admin/lista_encuestas.php"){
    return; //salimos -> solo cargara el hook si esta parado en el menu donde lo necesitamos
  }
                    //name        url                                               FILE   
  wp_enqueue_script('JSExterno',plugins_url('admin/js/lista_encuestas.js',__FILE__),array('jquery'));
}
add_action('admin_enqueue_scripts','EncolarJS');