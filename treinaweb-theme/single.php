<?php get_header(); ?>

 <!-- Container -->
  <div class="container">

    <div class="row-fluid">

     <div class="col-sm-9 blog-main" itemscope itemtype="http://schema.org/Article">
        <?php get_template_part('includes/post','unique'); //adiciona um arquivo chamado post-unique dentro da pasta includes. ?>
    </div>

      <?php get_sidebar(); ?>

    </div>
  </div>
  <!-- Fim Container -->

<?php get_footer(); ?>
