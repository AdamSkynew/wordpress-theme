<head>
  <meta charset="<?php bloginfo('charset'); //retorna a codificacao configurado no wordpress ?>">
  <!-- <title><?php bloginfo('name'); ?></title>
     - quando sem a tag, o wordpress define isso -->
  <meta name="description" content="<?php bloginfo('description');//retorna a descricao do site configurado no wordpress ?>">
  <meta name="author" content="<?php bloginfo('admin_email'); //retorna o email do admin ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=1" /> 
<!-- Todas as infos do blog info eh informado no geral no meu do wordpress -->
  
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
	        <a class="navbar-brand" href="index.php">Blog TreinaWeb</a>
	      </div>

	      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!--
	        <ul class="nav navbar-nav">
	          <?php wp_list_pages([ //funcao que lista paginas
                    'post_type' => 'page', //aqui listas paginas, o page eh um tipo de post para o WP.
                    'title_li' => '', //sem estilos para a tag li.
                    'sort_column' => 'post_date', //pegando por data
                    'sort_order' => 'ASC' //organizando de maneira crescente
                ]); ?>
	        </ul>
            -->
            <?php wp_nav_menu([ //a funcao que retorna o menu.
                'theme_location'=> 'mainMenu', //o nome do nav_menu registrado no function.php
                'container' => 'ul', //a tag referente ao container.
                'menu_class' => 'nav navbar-nav'//a classe referente aos menus.
            ]); ?>
                

	        <?php get_template_part('includes/form','main'); // carrega um arquivo form-main.php dentro da pasta includes. ?>
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
    <div class="hero-unit col-md-12">
      <h1>Nome do Blog</h1>
      <p>Boas vindas</p>
    </div>
  </div>
 </main>
