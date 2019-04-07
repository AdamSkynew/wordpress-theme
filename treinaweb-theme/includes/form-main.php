<form class="navbar-form navbar-form-buscar navbar-left" role="search" method='get' action='<?php bloginfo("home"); //retorna o link da pagina principal. ?>'>
	          <div class="form-group">
	            <div class="input-group">
	              <input type="text" name="s" value="<?php echo get_search_query(); //retorna o valor da busca, lembrando que o name sempre deve ser 's'. ?>" class="form-control" placeholder="Buscar...">
	              <span class="input-group-btn">
	                <button class="btn btn-default"><span class="glyphicon glyphicon glyphicon-search" aria-hidden="true"></span></button>
	              </span>
	            </div>
	          </div>
	        </form>
