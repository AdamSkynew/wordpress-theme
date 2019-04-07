 <!-- post -->
<?php while(have_posts()):the_post(); ?>
        <article class="row-fluid posts" role="article">
          <h2 itemprop="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="muted">
            <span>Publicado em</span>
            <a rel="bookmark" title="" href=""><span class="entry-date" itemprop="datePublished"><?php the_time('d'); ?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?></span></a>
          </p>
          <p><?php the_content(); ?></p>
          <p class="muted">
            <span>Categoria</span>
            <a rel="category" title="" href="" itemprop="articleSection"><?php the_category(', '); ?></a>
          </p>
        </article>
<?php endwhile; ?>

<div>
    <a href="<?php comments_link(); ?>">
    <?php comments_number('Nenhum comentario', 'Apenas um comentario', '% Comentarios');//Essa tag php libera o formulario do comentario, aceita 3 parametros o texto para 0, 1 ou mais comentarios, sendo % o caracter coringa. ?>
    </a>
</div>
<div>
    <?php comments_template(); //aqui mostra os comentarios da galera. ?>
</div>
       

      
