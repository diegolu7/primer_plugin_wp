<?php
/*
Plugin Name: Text pulgin (1-3)
Plugin URL: https://github.com/diegolu7
Description: Creando contenido del menu
Version: 0.0.1
*/

function Activar(){

}
function Desactivar(){
  flush_rewrite_rules();

}
function Borrar(){

}
echo "hola plugin";

register_activation_hook(__FILE__,'Activar'); /*llama a fn al tocar btn "Activar" */
register_deactivation_hook(__FILE__,'Desactivar');

add_action('admin_menu','CrearMenu');//1°Accion 2°Funcion


//crear Menu en panel de wp
function CrearMenu(){
  add_menu_page( //fn de wp
    'Super Encuestas', //titulo del menu
    'Menu Creado x mi',// titulo del Menu
    'manage_options', //capability : a q usuario le daremos el menu
    'sp_menu', //slug (porcion final link unico)
    'MostrarContenido', //funcion para mostrar contenido
    plugin_dir_url(__FILE__).'admin/img/icon.png', //direccion de la imagen
    '1' //posicion de aparicion del MENU
  );
//agregamos un subMenu(Solapa) a Menu 
add_submenu_page(
  'sp_menu', // parent slug
  'Ajustes', // titulo pagina
  'Ajustes', // titulo menu
  'manage_options', // capability
  'sp_menu_ajustes', // slug
  'Fn_Submenu' // fn Submenu
);
}
function MostrarContenido(){ //fn MENU
  echo "<h1> Este es el interior del menu! </h1> <br>
  <p> lorem itsu comue este chango es</p>
  ";
}
function Fn_Submenu(){// fn Submenu
  echo '<h2> Submenu </h2>';
}

