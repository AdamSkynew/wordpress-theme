<head>
  <meta charset="<?php bloginfo('charset'); //retorna a codificacao configurada ?>">
  <title><?php bloginfo('name'); //retorna o nome do blog. ?></title>

  <meta name="description" content="<?php bloginfo('description'); //retorna a descricao ?>">
  <meta name="author" content="<?php bloginfo('admin_email'); //retorna o email cadastrado. ?>">
  <meta name="generator" content="Wordpress <?php bloginfo('version'); //retorna a versao do blog ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=1" /> 

  <?php wp_head(); ?>
</head>

 <!-- Topo -->
 <header class="navbar navbar-default topo" >
  <nav class="container-fluid container-topo" role="navigation">
	  <div class="container">
	      <div class="navbar-header" >
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	          <span class="sr-only">Toggle navigation</span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="<?php bloginfo('home'); ?>">Blog TreinaWeb</a>
	      </div>

	      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <?php wp_nav_menu([
	      		'theme_location' => 'twmenu-principal', //nome do menu registrado no functions.php
	      		'container' => 'ul', //a tag referente ao container
	      		'menu_class' => 'nav navbar-nav' //as classes que o container devem ter.
	      ]); ?>
	        
	        <?php get_search_form(); //retorna o formulario de busca devidamente ajustado no arquivo de configuracao dele. ?>

	        <ul class="nav navbar-nav navbar-right">
	          <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu <span class="caret"></span></a>
	            <ul class="dropdown-menu" role="menu">
	              <li><a href="#">Item 1</a></li>
	              <li><a href="#">Item 2</a></li>
	              <li><a href="#">Item 3</a></li>
	              <li class="divider"></li>
	              <li><a href="#">Item separado</a></li>
	            </ul>
	          </li>
	        </ul>
	      </div>
	    </div>
    </nav>
 </header>
  <!-- Topo -->

<!-- Chamada principal -->
<main class="main row-fluid" role="main">
  <div class="container container-main clearfix">
    <div class="hero-unit col-md-7">
      <h1>Nome do Blog</h1>
      <p>Boas vindas</p>
    </div>
    <div class="col-md-5">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

        <?php $banners = new WP_Query([ //Essa nova classe ela muda o filtro do wordpress, por filtro entenda o resultado que o WP pega do Banco de dados.
            'posts_per_page' => 3, //numero de resultados por pagina
            'post_type' => 'banners' //qual eh o tipo? Esse foi o tipo criado no functions.php.
        ]); 

              $i=0;
//conforme anteriormente explicado, lembre-se aqui eh metodo e nao funcao.
              while($banners->have_posts()) : $banners->the_post()
        ?>
          <div class="item <?php echo ($i == 0) ? 'active' : ''; ?>">
            <?php the_post_thumbnail('slide-home'); //aqui eh funcao e nao metodo. ?>
            <div class="carousel-caption">
              <?php the_title(); //aqui eh funcao e nao metodo. ?>
            </div>
          </div>
        <?php $i++; endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- Fim Chamada principal -->
