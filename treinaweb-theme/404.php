<!-- Tudo aqui explicado no index.php -->
<?php get_header(); ?>

 <!-- Container -->
  <div class="container">
    <?php if(is_home()):?>    
        <h2>Home Page</h2>
    <?php endif; ?>
    <div class="row-fluid">

     <div class="col-sm-9 blog-main" itemscope itemtype="http://schema.org/Article">
        <h2>Pagina nao Encontrada! Erro 404. </h2>
    </div>

      <?php get_sidebar(); ?>

    </div>
  </div>
  <!-- Fim Container -->

<?php get_footer(); ?>
