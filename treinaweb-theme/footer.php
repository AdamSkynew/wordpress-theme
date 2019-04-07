<footer class="rodape well">
    <div class="container">
      <div class="col-md-6 col-sm-4">
        <div class="container-facebook">
          <div class="fb-like-box" data-href="https://www.facebook.com/TreinaWeb"  data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
        </div>
      </div>

         <?php
            $custom2 = new WP_Query([
            'posts_per_page' => 6, //Post por paginas, aqui esta setado no maximo 6.
            'post_type' => 'mine' //O tipo de post que esta sendo carregado.
            ]);

            /* O Objeto criado da classe WP_Query ele serve para filtrar os dados carregados do banco de dados. */
        ?>        

      <div class="col-md-3 col-sm-4">
        <h4>Cursos</h4>
        <ol class="list-unstyled">
            <!-- have_post() eh um metodo que retora se tem true se existe post nesse espaco de array-->
            <!-- the_post() move o cursor a proximo elemento do array que contem o post, esse tambem eh metodo. -->
            <?php while ($custom2->have_posts()):$custom2->the_post();  ?>

            <!-- the the_permalink() e the_title() sao funcoes e nao metodos, logo devem ser usadas como tal. -->            
            <!-- the_permalink() retorna o link do post, the_title() retorna o titulo do post -->
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
        </ol>
      </div>
      <div class="col-md-3 col-sm-4">
        <h4>Menu</h4> 
       <?php wp_nav_menu([ //Essa funcao retorna um menu.
                'theme_location'=> 'footerMenu', //o nome do menu footer registrado no functions.php
                'container' => 'ul', //tag html referente ao container do menu.
                'menu_class' => 'list-unstyled' //Aqui contigura estilo do <li> dos menus.
            ]); ?>
      </div>
        <div class="rodape-copyright text-center">
        <hr>
            <p>&copy; TreinaWeb Cursos <?php echo date('Y'); ?></p>
        </div>
    </div>
</footer>
	

<div id="fb-root"></div>
         <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
<?php wp_footer(); ?>
<!-- Explicando o footer, no geral as definicoes de footer sao carregadas o padrao, exceto que exista um arquivo com esse nome no tema. -->  

</body>
</html>

