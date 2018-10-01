		<footer class="container-fluid">
			<nav class="row">
				<a class="col-4" href="#" rel="next" title="Busque o produto desejado"><i class="fal fa-search" id="searchFooter"></i></a>
				<a class="col-4" href="#" rel="next" title="Entre em contato com a gente"><i class="far fa-heart" id="heartFooter"></i></i></a>
				<a class="col-4" href="#" rel="next" title="Confira os produtos selecionados"><i class="fal fa-shopping-bag" id="bagFooter"></i><span class="itensCarrinho" id="itensCarrinho"></span></a>
			</nav>
		</footer>
		<!-- JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
		<!-- SCRIPTS FOOTER -->
		<script>

		/* Favoritos */

		const addFavFooter = document.querySelector('#heartFooter');
		addFavFooter.onclick = function(){
			if (addFavFooter.className == "far fa-heart"){
				addFavFooter.style = 'color: #bb0045';
				addFavFooter.className = "fas fa-heart";
				favoritarButton.style = 'color: #bb0045';
				favoritarButton.className = "fas fa-heart col-2";
				favoritarImg.style = 'color: #bb0045';
				favoritarImg.className = "fas fa-heart";
			} else {
				addFavFooter.style = 'color: #000';
				addFavFooter.className = "far fa-heart";
				favoritarButton.style = 'color: #000';
				favoritarButton.className = "far fa-heart col-2";
				favoritarImg.style = 'color: #000';
				favoritarImg.className = "far fa-heart";
			}
		};

		const addCart = document.querySelector('#addCart');
		const itensCarrinho = document.querySelector('#itensCarrinho');
		let x = 0;
		itensCarrinho.style.display = 'none';
		
		addCart.onclick = function(){
			x++;
			itensCarrinho.innerText = x;
			itensCarrinho.style.display = 'block';
		}

		let menuTopo = document.querySelector('#menu-superior')
		window.onscroll = function() {menuRolagem()}
		function menuRolagem() {
			    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
			        menuTopo.style = 'height: 0px !important;opacity:0;padding:0;';
			        menuTopo.child.style.height = '0px !important;padding: 5px;';

			    } else {
			        menuTopo.style = 'height: 32px !important;opacity:1';
			    }
			}

		</script>

	</body>
</html>