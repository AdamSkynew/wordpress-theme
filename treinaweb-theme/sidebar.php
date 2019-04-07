<!-- se o usuarui ativou a side bar... -->
<?php if(!is_active_sidebar('widget_area')){return;} ?>
<!-- sidebar -->
<aside class="col-sm-3 col-xs-12 blog-sidebar well">
<!--
<div class="sidebar-module">
  <h4>Posts recentes</h4>
  <ol class="list-unstyled">
    <?php $wp_var = new WP_Query('posts_per_page=10'); ?>
    <?php while($wp_var->have_posts()):$wp_var->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
  </ol>
</div>
<div class="sidebar-module">
  <h4>Categorias</h4>
  <ol class="list-unstyled">
   <?php wp_list_categories(['title_li' => '']); ?>
  </ol>
</div>
-->

<ul class="list-unstyle">
    <?php dynamic_sidebar('widget_area'); //retorna a sidebar dinamica, devidamente configurada no function.php, o parametro de entrada eh o ID.?>
</ul>
</aside>
<!--/sidebar -->
