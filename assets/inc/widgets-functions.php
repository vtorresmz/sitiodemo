<?php

/*widget assets*/
function zona_widget()
{
    
register_sidebar(array(
    'name' => 'Footer columna 1', 'id' => 'footerstc2_col1',//le damos ID y nombre al footer
    'before_widget' => '<div id="%1$s" class="col-12 col-md-6">', //añadimos clases y contenedores
    'after_widget' => '</div>',//cerramos los contenedores 
    'before_title' => '<h5 class="titulo-menu-footer">', //añadimos contenedores para titulo
    'after_title' => '</h5>'//cerramos los contenedores de titulo
));
}

add_action('widgets_init', 'zona_widget');
/*widget assets*/