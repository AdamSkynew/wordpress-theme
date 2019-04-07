<!-- Colocando o cabecario do wordpress -->
<?php get_header(); ?>

 <!-- Container -->
  <div class="container">
    <?php if(is_home())://verifica se esta na home page?>    
        <h2>Home Page</h2>
    <?php endif; ?>
    <div class="row-fluid">

     <div class="col-sm-9 blog-main" itemscope itemtype="http://schema.org/Article">
        <?php get_template_part('includes/post','all'); //eh uma forma do wordpress dar include. no caso ele vai procurar na pasta include um arquivo chamado 'post-all.php'?>
    </div>

      <?php get_sidebar();//Carrega a sidebar ?>

    </div>
  </div>
<?php previous_posts_link(); //link para carregar o post anterior. ?>
<?php next_posts_link();//link para carregar o proximo post. ?>
  <!-- Fim Container -->
<!-- Colocando o rodape do wordpress no site. -->
<?php get_footer(); ?>
