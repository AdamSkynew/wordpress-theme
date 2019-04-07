<!-- Tudo aqui explicado no index.php -->
<?php get_header(); ?>

 <!-- Container -->
  <div class="container">

    <div class="row-fluid">

      <h1>Exclusivo da categoria 2(PHP)</h1>

      <!-- Posts -->
      <div class="col-sm-9 blog-main" itemscope itemtype="http://schema.org/Article">


        <?php get_template_part('includes/loop', 'principal'); ?>

      </div>
      <!-- Posts -->

      <?php get_sidebar(); ?>

    </div>
  </div>
  <!-- Fim Container -->

<?php get_footer(); ?>
