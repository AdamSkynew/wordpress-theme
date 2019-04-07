<?php
add_action('wp_enqueue_scripts', 'tw_tema');
function tw_tema(){ //funcao para adicionar arquivos css e arquivos javascript
    wp_enqueue_style('bootstrap-twtema',get_stylesheet_directory_uri().'/css/bootstrap.css');
    wp_enqueue_style('style-twtema',get_stylesheet_directory_uri().'/css/style.css');
    wp_enqueue_script('modernizr-twtema',get_stylesheet_directory_uri().'/js/modernizr.js');
    wp_enqueue_script('jquery-twtema',get_stylesheet_directory_uri().'/js/jquery.js');
    wp_enqueue_script('bootstrap-js-twtema',get_stylesheet_directory_uri().'/js/bootstrap.js',['jquery-twtema']);
}

//Adicionando action, essa e uma forma de se adicionar funcoes php.
add_action('init','menuAddition'); //Essa action, adiciona os menus.
add_action('init','custonType'); //Essa action adiciona o post do tipo custon Type
add_action('init','banner'); //Adiciona o post do tipo banner
function menuAddition(){
    register_nav_menu('mainMenu','Main Menu'); //Aqui registra o menu no wordpress.
    register_nav_menu('footerMenu','Footer Menu'); //Aqui registra o menu footer no wordpress.
}

function custonType(){
 newType();   
}

function banner(){
 newBanner();   
}


function newType(){ //Aqui e a funcao o post do tipo custom
 $labels = array(
        'name' => 'Custom Post List',
        'singular_name' => 'Custom',
        'add_new' => 'Add new Custom Post',
        'add_new_item' => 'Add new',
        'edit_item' => 'Edit',
        'new item' => 'Add new',
        'view_item' => 'View',
        'search_items' => 'Looking for',
        'not_found'=> 'Not found',
        'not_found_in_trash' => 'Empty trash',
        'parent_item_colon' => '',
        'menu_name' => 'Custom Posts'


);

$args = array( 
     'labels' => $labels, //Adiciona o array criado anteriormente.
      'public' => true, //Se pode ser adicionado aos menus e exibido em buscas.
      'hierarchical' => false, //Se pode ser hierarquico com as paginas
      'menu_position' => 5, //a posicao dele no menu.
      'supports' => array('title','editor','thumbnail','custom-fields','revisions')//Quais recursos usados no metabox.  
        
);


register_post_type('mine', $args); //aqui se registra um novo tipo de post no wordpress
flush_rewrite_rules(); //reescreve as regras do wordpress

}

function newBanner(){ //Adiciona o post do tipo Banner
 $labels = array(
        'name' => 'Banner List',
        'singular_name' => 'Banner',
        'add_new' => 'Add new Banner',
        'add_new_item' => 'Add new',
        'edit_item' => 'Edit',
        'new item' => 'Add new',
        'view_item' => 'View',
        'search_items' => 'Looking for',
        'not_found'=> 'Not found',
        'not_found_in_trash' => 'Empty trash',
        'parent_item_colon' => '',
        'menu_name' => 'Banners'


);

$args = array(
     'labels' => $labels, //Adiciona o array criado anteriormente.
      'public' => true, //Se pode ser adicionado aos menus e exibido em buscas.
      'hierarchical' => false, //Se pode ser hierarquico com as paginas
      'menu_position' => 5, //a posicao dele no menu.
      'supports' => array('title','thumbnail')//Quais recursos usados no metabox.  
        
);

register_post_type('banner', $args);
flush_rewrite_rules(); //reescreve as regras do wordpress
}

register_sidebar([ //Aqui define o funcionamento da sidebar.
    'name' => 'Widget Area', //o nome do menu.
    'id' => 'widget_area', //o id da sidebar, as funcoes usam isso como parametro.
    'description' => 'Area de widget', //descricao do side bar.
    'before_title' => '<h4>', //tag pai de abertura.
    'after_title' => '</h4>' //tag pai de encerramento.

]);

add_theme_support('post-thumbnails'); //Habilita o suporte a thumbnails (imagem destacada).
//Adiciona tamanhos de imagem no wordpress add_image_size('nome',largura, altura, Pode cortar se precisar?);
add_image_size('hiper-small',150,135,true); 
add_image_size('slide-home',458,254,true);
add_action('pre_get_posts','filter_posts');
function filter_posts($query){
    if($query->is_main_query() && is_home()){
        $query->set('ignore_stick_posts',true);
    }
} 
//Aqui habilita outros tipos de post, permitindo que se programe um para a pagina conforme o tipo.
add_theme_support('post-formats',array('aside','gallery','link','image','quote','status','video','audio','chat'));
add_theme_support( 'customize-selective-refresh-widgets' );
