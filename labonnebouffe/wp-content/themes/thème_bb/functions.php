<?php

// Initialisation de notre menu :
add_action('init', 'poles_init_menu');

function poles_init_menu() {
    if(function_exists('register_nav_menu')) {
        register_nav_menu('Principal', __('Principal', 'theme_bb'));
    }
}

// ---- REGION / WIDGET

add_action('widgets_init','eprojet_init_sidebar'); // j'execute la fonction nomé "eprojet_init_sidebar"

function eprojet_init_sidebar() { // fonction qui contient la déclaration de mes régions
    if(function_exists('register_nav_menu')) { // Si la fonction register_sidebar existe (c'est une fonction interne à wordpress) alors je déclare des régions
            register_sidebar(array(
                'name'           => __('region-ent','eprojet'),
                'id'             => 'region-entete',
                'description'    => __('vous pouvez placer les widgets dans la  region entete','eprojet')
            ));
            register_sidebar(array(
                'name'           => __('colonne de droite','eprojet'),
                'id'             => 'colonne-droite',
                'description'    => __('vous pouvez placer les widgets dans la colonne de droite','eprojet')
            ));
            register_sidebar(array(
                'name'           => __('region-footer','eprojet'),
                'id'             => 'region-footer',
                'description'    => __('vous pouvez placer les widgets dans le footer','eprojet')
            ));
    }
}


function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyCI-Hmi683mHKOpMXTki5g-PZSVKK_Rqfo';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// Fonction permettant de récupérer les informations sur un champ

function getfield ($field) {

    $info = get_field_object($field); // Permet de récupérer des information sur un champ
    $obj = new StdClass();
    $obj ->label =  $info['label'];
    $obj ->value =  $info['value'];

    return $obj;
}

// Notre fonction getField() va construire un objet avec les informations à l'intérieur

// Affichage catégorie
function showCategory() {
    $cat = '';
    $categories = get_categories(array(
        'category_name' => 'ville',
        'orderby'       => 'name',
        'exclude'       => 1
    ));

    foreach($categories as $category) {
        $cat .= '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a><br>';
    }
    return $cat;
}
//---------------------------------------------------------------------------------------------------------------

function showCategoryByPostType($type) {
    $current_cat = get_query_var('cat');

    query_posts("post_type=$type&cat=$current_cat");
}
//-----------------------------------------------------------------------------------------------------------------


function getImage() {
    $content = '';
    $images = get_children('post_parent' . get_the_ID() . '&post_type=attachment&post_mine_type=image&post_per_page=10');

    foreach($images as $image_id => $a) {
        $content .= wp_get_attachment_image($image_id, 'medium');
    }
    return $content;
}
