<!-- esse eh o arquivo de configuracao referente a busca -->
<?php get_header(); ?>

 <!-- Container -->
  <div class="container">
    <?php if(is_home()):?>    
        <h2>Home Page</h2>
    <?php endif; ?>
    <div class="row-fluid">
    <h2>Voce buscou por: <?php echo esc_html(get_query_var('s')); // a funcao esc_html ela previne sql injection, e a funcao get ela retorna o valor de s na url. ?></h2>
     <div class="col-sm-9 blog-main" itemscope itemtype="http://schema.org/Article">
        <?php get_template_part('includes/post','all'); //importa o post-all da pasta includes. ?>
    </div>

      <?php get_sidebar(); ?>

    </div>
  </div>
  <!-- Fim Container -->

<?php get_footer(); ?>

<!--
    Esse arquivo cria e lida com o funcionamento do sistema de buscas das paginas.

-->
