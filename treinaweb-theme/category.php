<!-- Tudo aqui explicado no index.php -->
<?php get_header(); ?>

 <!-- Container -->
  <div class="container">
    <h2>Exibido por categoria</h2>
    <div class="row-fluid">

     <div class="col-sm-9 blog-main" itemscope itemtype="http://schema.org/Article">
        <?php get_template_part('includes/post','all'); ?>
    </div>

      <?php get_sidebar(); ?>

    </div>
  </div>
  <!-- Fim Container -->

<?php get_footer(); ?>

<!--
Explicando o category, no geral as definicoes de categoria sao carregadas o padrao, exceto que exista um arquivo com esse nome no tema.

-->
