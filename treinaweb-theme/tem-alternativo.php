<?php /* Template Name: Sem side Bar */?>

<?php
 get_header(); ?>

 <!-- Container -->
  <div class="container">
    <?php if(is_home()):?>    
        <h2>Home Page</h2>
    <?php endif; ?>
    <div class="row-fluid">

     <?php while(have_posts()):the_post(); ?>
        <article class="row-fluid posts" role="article">
          <h2 itemprop="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="muted">
            <span>Publicado em</span>
            <a rel="bookmark" title="" href=""><span class="entry-date" itemprop="datePublished"><?php the_time('d'); ?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?></span></a>
          </p>
          <p><?php the_content(); ?></p>
         
        </article>
<?php endwhile; ?>


      

    </div>
  </div>
  <!-- Fim Container -->

<?php get_footer(); ?>

<!--
Esse tema eh escolhido pelo usuario quando o mesmo escolhe um tema no post.

the_time('d') -> retorna o dia devidamente formatado.
the_time('f') -> retorna o mes por extenso.
the_time('y') -> mesma coisa que os outros dois so que com ano.
-->
