<?php
	/*
		template name: Página inicial
	*/
?>


<?php get_header('home'); ?>

<!-- Container -->
  <div class="container">

    <div class="row-fluid">

        <?php
        
            $ratherPost = get_option('sticky_posts'); //Aqui pega os posts em destaques, sera usado como parametro no filtro.
            $query = new WP_Query([ //mudando o filtro
                'posts_per_page' =>4, //o numero maximo de filtro.
                'post__in' => $ratherPost //aqui configura o filtro com base no parametro criado acima.
            ]);
            if(isset($ratherPost[0])):
        ?>

      <!-- Posts -->
      <div class="col-sm-12 blog-main blog-posts" itemscope itemtype="http://schema.org/Article">
        <h2 class="blog-main-title">Posts em Destaque</h2>
        <!-- post -->
        <?php while($query->have_posts()):$query->the_post(); ?>
        <article class="row-fluid posts col-md-3" role="article">
          <h2 itemprop="name" class="posts-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="muted">
            <span>Publicado em</span>
            <a rel="bookmark" title="" href=""><span class="entry-date" itemprop="datePublished"><?php the_date(); ?></span></a>
          </p>
          <p><?php the_excerpt(); //Mostra um resumo do conteudo do post. ?> </p>
          
            <span>Categoria</span>
            <?php the_category(', '); //exibe as categorias, o parametro de entrada eh a forma de separacao entre as N categorias. ?>
          
        </article>
        <?php endwhile; ?>
        <!--/post -->
      </div>
      <!-- Posts -->

      <!-- Cursos -->
        <?php
            $custom = new WP_Query([
            'posts_per_page' => 6,
            'post_type' => 'mine'
            ]);
        ?>
     <div class="col-sm-12 blog-main blog-cursos" itemscope itemtype="http://schema.org/Article">
<h2 class="blog-main-title">Cursos</h2>
<!-- post -->
<?php while ($custom->have_posts()):$custom->the_post();  ?>
    <article class="row-fluid cursos col-md-2 col-sm-3 text-center" role="article">
      <a href="<?php the_permalink(); ?>">
        <div class="cursos-img ci-android">
          <?php the_post_thumbnail('hiper-small'); //aqui eh exibida uma thumbnail com base no tipo de thumbnail definido no functions.php ?>
        </div>
        <h2 itemprop="name" class="cursos-title"><?php the_title(); //retorna o conteudo dos textos. ?></h2>
      </a>
    </article>
<?php endwhile; ?>
        <!--/post -->
      </div>
        <?php endif; ?>
      <!-- Cursos -->
      
    </div>
  </div>

<?php get_footer(); ?>
