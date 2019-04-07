<?php get_header(); ?>

 <!-- Container -->
  <div class="container">
    <?php if(is_page())://eh uma pagina? ?>    
        <h2>Default Page Template</h2>
    <?php endif; ?>
    <div class="row-fluid">

     <div class="col-sm-9 blog-main" itemscope itemtype="http://schema.org/Article">
        <?php get_template_part('includes/post','all'); //chama do arquivo post-all.php dentro da pasta template. ?>
    </div>

      <?php get_sidebar(); //chama a sidebar. ?>

    </div>
  </div>
  <!-- Fim Container -->

<?php get_footer(); //chama o footer do WP. ?>
