<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TESTE POSITION STICKY</title>
	<style>
	.container{
		background-color: rgba(122,122,122,0.5);
		min-height: 1000px;
		width: 100%;
	}
	.sticky{
		background-color: rgba(122,122,122,0.5);
		height: 100%;
		width: 50%;
		display: block;
		position: sticky;
		position: -webkit-sticky;
		top: 5px;
	}
	.relative{
		background-color: rgba(122,122,122,0.5);
		height: 100%;
		width: 50%;
		display: block;
		/*position: relative;*/
		/*margin-left: 50%;*/
	}
	</style>
</head>
<body>
	<div class="container">
		CONTAINER
		<div class="sticky row">
			<article class="col-12">
				<div id="lightboxImagemZoom"></div>
			</article>
			<article class="col-12 col-md-6 offset-md-1">
				<div id="imagensProduto" class="carousel slide" data-ride="carousel" data-interval="3500">
					<div class="imgIcons">
						<a onclick="zoomLightbox()" rel="next" title="Zoom" for="imgZoom"><i class="fal fa-search" id="imgZoom"></i></a>
						<a href="#" rel="next" title="Adicione aos seus Produtos Favoritos" for="imgFav"><i class="far fa-heart" id="imgFav"></i></a>
					</div>
					<ol class="carousel-indicators">
						<li title="ver imagem 1 do produto" data-target="#imagensProduto" data-slide-to="0" class="active"></li>
						<li title="ver imagem 2 do produto" data-target="#imagensProduto" data-slide-to="1"></li>
						<li title="ver imagem 3 do produto" data-target="#imagensProduto" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img itemprop="image" onclick="zoomLightbox()" onmousemove="imagemDestacada.forEach(zoom)" onmouseout="imagemDestacada.forEach(semZoom)" class="d-block w-100" src="img/sample/poltrona-tripolina-s-lona-por-estudio-futon-company-destaque2.jpg?auto=yes" alt="Poltrona Tripolina S Lona">
						</div>
						<div class="carousel-item">
							<img itemprop="image" onclick="zoomLightbox()" onmousemove="imagemDestacada.forEach(zoom)" onmouseout="imagemDestacada.forEach(semZoom)" class="d-block w-100" src="img/sample/poltrona-tripolina-s-lona-por-estudio-futon-company-thumb-02.jpg?auto=yes" alt="Poltrona Tripolina S Lona">
						</div>
						<div class="carousel-item">
							<img itemprop="image" onclick="zoomLightbox()" onmousemove="imagemDestacada.forEach(zoom)" onmouseout="imagemDestacada.forEach(semZoom)" class="d-block w-100" src="img/sample/poltrona-tripolina-s-lona-por-estudio-futon-company-thumb-03.jpg?auto=yes" alt="Poltrona Tripolina S Lona">
						</div>
						<div class="carousel-item">
							<img itemprop="image" onclick="zoomLightbox()" onmousemove="imagemDestacada.forEach(zoom)" onmouseout="imagemDestacada.forEach(semZoom)" class="d-block w-100" src="img/sample/poltrona-tripolina-s-lona-por-estudio-futon-company-thumb-04.jpg?auto=yes" alt="Poltrona Tripolina S Lona">
						</div>
						<div class="carousel-item">
							<img itemprop="image" onclick="zoomLightbox()" onmousemove="imagemDestacada.forEach(zoom)" onmouseout="imagemDestacada.forEach(semZoom)" class="d-block w-100" src="img/sample/poltrona-tripolina-s-lona-por-estudio-futon-company-thumb-05.jpg?auto=yes" alt="Poltrona Tripolina S Lona">
						</div>
						<div class="carousel-item">
							<img itemprop="image" onclick="zoomLightbox()" onmousemove="imagemDestacada.forEach(zoom)" onmouseout="imagemDestacada.forEach(semZoom)" class="d-block w-100" src="img/sample/poltrona-tripolina-s-lona-por-estudio-futon-company-thumb-06.jpg?auto=yes" alt="Poltrona Tripolina S Lona">
						</div>
						<div class="carousel-item">
							<img itemprop="image" onclick="zoomLightbox()" onmousemove="imagemDestacada.forEach(zoom)" onmouseout="imagemDestacada.forEach(semZoom)" class="d-block w-100" src="img/sample/poltrona-tripolina-s-lona-por-estudio-futon-company-thumb-01b.jpg?auto=yes" alt="Poltrona Tripolina S Lona">
						</div>
					</div>
					<a class="carousel-control-prev" href="#imagensProduto" role="button" data-slide="prev">
						<!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
						<span class="sr-only">Imagem anterior</span>
					</a>
					<a class="carousel-control-next" href="#imagensProduto" role="button" data-slide="next">
						<!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
						<span class="sr-only">Próxima imagem</span>
					</a>
				</div>
			</article>
		</div>
		<div class="relative row">
			<article class="col-12 col-md-5 container-atributos">

			<!-- ATRIBUTO SELECT - CORES -->
			<div class="atributo cores row">
				<h4 class="col-12">cores</h4>
				<ul class="cores-thumbs col-12">
					<li class="selected"><img src="img/sample/Tecido-Sarja-Peletizada-Cinza-City.jpg" title="Tecido Sarja Peletizada Cinza-City Full" alt="Tecido Sarja Peletizada Cinza-City Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Cru.jpg" title="Tecido Sarja Peletizada Cru Full" alt="Tecido Sarja Peletizada Cru Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Areia.jpg" title="Tecido Sarja Peletizada Areia Full" alt="Tecido Sarja Peletizada Areia Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Coral.jpg" title="Tecido Sarja Peletizada Coral Full" alt="Tecido Sarja Peletizada Coral Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Mimosa.jpg" title="Tecido Sarja Peletizada Mimosa Full" alt="Tecido Sarja Peletizada Mimosa Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Damasco.jpg" title="Tecido Sarja Peletizada Damasco Full" alt="Tecido Sarja Peletizada Damasco Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Safari.jpg" title="Tecido Sarja Peletizada Safari Full" alt="Tecido Sarja Peletizada Safari Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Ciclamen.jpg" title="Tecido Sarja Peletizada Ciclamen Full" alt="Tecido Sarja Peletizada Ciclamen Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Vermilion.jpg" title="Tecido Sarja Peletizada Vermilion Full" alt="Tecido Sarja Peletizada Vermilion Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Vermelho.jpg" title="Tecido Sarja Peletizada Vermelho Full" alt="Tecido Sarja Peletizada Vermelho Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Rosa-Cha.jpg" title="Tecido Sarja Peletizada Rosa-Cha Full" alt="Tecido Sarja Peletizada Rosa-Cha Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Antracite.jpg" title="Tecido Sarja Peletizada Antracite Full" alt="Tecido Sarja Peletizada Antracite Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Azul-Delave.jpg" title="Tecido Sarja Peletizada Azul-Delave Full" alt="Tecido Sarja Peletizada Azul-Delave Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Azul-Marinho.jpg" title="Tecido Sarja Peletizada Azul-Marinho Full" alt="Tecido Sarja Peletizada Azul-Marinho Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Azul-Tiffany.jpg" title="Tecido Sarja Peletizada Azul-Tiffany Full" alt="Tecido Sarja Peletizada Azul-Tiffany Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Horizonte.jpg" title="Tecido Sarja Peletizada Horizonte Full" alt="Tecido Sarja Peletizada Horizonte Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Floresta.jpg" title="Tecido Sarja Peletizada Floresta Full" alt="Tecido Sarja Peletizada Floresta Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Cactus.jpg" title="Tecido Sarja Peletizada Cactus Full" alt="Tecido Sarja Peletizada Cactus Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Kaki.jpg" title="Tecido Sarja Peletizada Kaki Full" alt="Tecido Sarja Peletizada Kaki Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Samambaia.jpg" title="Tecido Sarja Peletizada Samambaia Full" alt="Tecido Sarja Peletizada Samambaia Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Verde-Lagoa.jpg" title="Tecido Sarja Peletizada Verde-Lagoa Full" alt="Tecido Sarja Peletizada Verde-Lagoa Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Plum.jpg" title="Tecido Sarja Peletizada Plum Full" alt="Tecido Sarja Peletizada Plum Full" width="33px" height="auto"></li>
					<li><img src="img/sample/Tecido-Sarja-Peletizada-Preto.jpg" title="Tecido Sarja Peletizada Preto Full" alt="Tecido Sarja Peletizada Preto Full" width="33px" height="auto"></li>
				</ul>
			</div>

			<!-- ATRIBUTO SELECT - TAMANHO -->
			<div class="atributo inputSelect row">
				<label for="tamanho"><h4>tamanho</h4>
					<select name="tamanho" id="tamanho" required>
						<option value="" disabled selected>Selecione um tamanho</option>
						<option value="pequeno">Pequeno</option>
						<option value="medio">Médio</option>
						<option value="grande">Grande</option>
					</select>
				</label>
			</div>

			<!-- ATRIBUTO TEXT - NOME -->
			<div class="atributo inputText row">
				<label for="nomeInput"><h4>nome</h4>
					<input type="text" placeholder=" Insira seu nome" name="nomeInput" id="nomeInput" required>
					<small>pode haver variações na largura de acordo com cada letra</small>
				</label>
			</div>

			<!-- ATRIBUTO UPLOAD - IMAGEM -->
			<div class="atributo row">
				<h4 class="col-12">upload de imagem</h4>
				<input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} arquivos" multiple accept="image/*, .png, .jpg, .gif, .dwg, .pdf"/>
				<label for="file" class="row">
					<span class="col-8 uploadSpan">escolha seu arquivo</span>
					<strong class="col-4 uploadButton">anexar</strong>
				</label>
				<small>para enviar mais de um arquivo pressione Ctrl ao selecioná-los</small>
			</div>

			<!-- ATRIBUTO NUMBER - TAPETE SOB MEDIDA -->
			<div class="atributo inputNumber row">
				<label for="medidas"><h4>medidas do tapete</h4>
					<small>mín: 100 cm e máx: 1500 cm, de 100 em 100 cm</small>
					<div class="input50">
						<h5>Largura (cm)</h5>
						<input onblur="arredondar()" type="number" step="100" min="100" max="1500" maxlength="4" placeholder=" Largura (cm)" name="larguraTapete" id="larguraTapete" required>
					</div>
					<div class="input50">
						<h5>Comprimento (cm)</h5>
						<input onblur="arredondar()" type="number" step="100" min="100" max="1500" maxlength="4" placeholder=" Comprimento (cm)" name="comprimentoTapete" id="comprimentoTapete" required>
					</div>
					<h5>área total: <span id="areaTapete" name="medidas"></span> m²</h5>
				</label>
			</div>

			<!-- ATRIBUTO CHECKBOX - OPCIONAIS -->
			<div class="atributo inputCheckbox row">
				<h4 class="col-12">opcionais</h4>
				<label class="col-6" for="opcional1">
					<img id="opImg1" async src="img/sample/poltrona-tripolina-s-lona-por-estudio-futon-company-thumb-07.jpg" title="Tecido Sarja Peletizada Samambaia Full" alt="Tecido Sarja Peletizada Samambaia Full" width="100%" height="auto">
					<small><input type="checkbox" name="opcional1" id="opcional1" value="opcional1">
					acabamento fosco<span class="precoOpcional">+ R$ 550,00</span></small>
				</label>
				<label class="col-6" for="opcional2">
					<img id="opImg2" async src="img/sample/poltrona-tripolina-s-lona-por-estudio-futon-company-thumb-03.jpg" title="Tecido Sarja Peletizada Plum Full" alt="Tecido Sarja Peletizada Plum Full" width="100%" height="auto">
					<small><input type="checkbox" name="opcional2" id="opcional2" value="opcional2">
					acabamento fosco<span class="precoOpcional">+ R$ 550,00</span></small>
				</label>
				<label  class="col-6" for="opcional3">
					<small><input type="checkbox" name="opcional3" id="opcional3" value="opcional3">
					acabamento fosco<span class="precoOpcional">+ R$ 550,00</span></small>
				</label>
				<label  class="col-6" for="opcional4">
					<small><input type="checkbox" name="opcional4" id="opcional4" value="opcional4">
					tratamento fungicida<span class="precoOpcional">+ R$ 550,00</span></small>
				</label>
			</div>

			<!-- ATRIBUTO RANGE - DENSIDADE COLCHÃO -->
			<div class="atributo inputNumber row">
				<label for="nomeInput"><h4>densidade do colchão</h4>
					<small>quanto maior a densidade, maior a dureza</small>
					<div>
						<div class="slider-wrapper">
							<datalist id="densidades">
								<option class="opcaoDensidade" value="125" label="D20">D20</option>
								<option class="opcaoDensidade" value="250" label="D23">D23</option>
								<option class="opcaoDensidade" value="375" label="D26">D26</option>
								<option class="opcaoDensidade" value="500" label="D28">D28</option>
								<option class="opcaoDensidade" value="625" label="D30">D30</option>
								<option class="opcaoDensidade" value="750" label="D33">D33</option>
								<option class="opcaoDensidade" value="875" label="D40">D40</option>
								<option class="opcaoDensidade" value="1000" label="D45">D45</option>
							</datalist>
							<input type="range" step="125" min="125" max="1000" name="densidadeColchao" id="densidadeColchao" list="densidades">
						</div>
						<h5>densidade escolhida: <span id="densidadeEscolhida"></span></h5>
					</div>
				</label>
			</div>
			
			<!-- VALOR PRODUTO -->
			<div class="preco row" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
				<div class="col-12">
					<h6>valor unitário</h6>
					<strike class="precoAntigo">R$ 5.540,00</strike>
					<p id="preco"> <span itemprop="priceCurrency" content="BRL">R$ </span><span itemprop="price" content="3498.87">3.498,87</span> <span class="parcelas">em 6x de 583,14 s/ juros</span>
						<small><i class="fas fa-star"></i> 1.500 ptos.</small>
				</div>
			</div>

			<!-- QUANTIDADE - INPUT NUMBER -->
			<div class="atributo inputNumber qntPdt row">
				<label for="qntProduto" class="col-2"><h4>qnt</h4><br/>
					<input class="col-2" type="number" required value="1" min="0" steps="1" id="qntProduto" name="qntProduto">
				</label>
				<i class="far fa-heart col-2" id="cartFav"></i>
				<button class="col-8" id="addCart">ADICIONAR AO CARRINHO</button>
			</div>
			<h5>disponível em estoque</h5>
			<!-- <div class="obsCompra" id="obsCompra">
				<p><b>Importante - leia com atenção, por favor</b></p>
				<ul>
					<li>Sobre o prazo
						<ul>
							<li>Contado a partir da aprovação do pagamento</li>
							<li>Inclui tempo de produção, separação e distribuição</li>
							<li>Na compra de diversos produtos, vale o maior prazo</li>
						</ul>
					</li>
					<li>Sobre a entrega
						<ul>
							<li>É necessário haver um responsável para recebimento</li>
							<li>Verifique medidas de portas e elevadores</li>
							<li>Içamento não incluso no frete</li>
						</ul>
					</li>
				</ul>
				<small><input type="checkbox" selected><i>Estou ciente das informações listadas acima</i></small>
				<div class="col-12">
					<a href="#" id="obsCart" title="Clique aqui para ver mais produtos" alt="Clique aqui para ver mais produtos"><button class="col-6">Mais Produtos</button></a>
					<a href="#" id="obsMais" title="Clique aqui para ver o seu carrinho" alt="Clique aqui para ver o seu carrinho"><button class="col-5">Carrinho</button></a>
				</div>
				<br/>
				<small>Em caso de dúvidas, entre em contato conosco. Estaremos à disposição para ajudar!</small>
			</div> -->

			<!-- ATRIBUTO CATEGORIAS - TAXONOMIA -->
			<div class="atributo categorias row">
				<div class="col-6">
					<h4>categoria</h4>
					<a href="#" title="Ver mais de Cadeiras e Poltronas" rel="next" target="_self"><h2 itemprop="category">Cadeiras e Poltronas</h2></a>
				</div>
				<div class="col-6">
					<h4>marca</h4>
					<a href="#" title="Ver mais de Futon Company" rel="next" target="_self"><h2 itemprop="brand">Futon Company</h2></a>
				</div>
				<div class="col-6">
					<h4>designer</h4>
					<a href="#" title="Ver mais de Estúdio Futon Company" rel="next" target="_self"><h2 itemprop="manufacturer">Estúdio Futon Company</h2></a>
				</div>
				<div class="col-6">
					<h4>vendido por</h4>
					<a href="#" title="Ver mais de Futon Company" rel="next" target="_self"><h2>Futon Company</h2></a>
				</div>
			</div>

			<!-- SHARE - REDES SOCIAIS -->
			<div class="atributo share row">
				<div class="col-12">
					<h4>compartilhe</h4>
					<div class="redes-icons">
						<a id="shareFb" href="#" title="Compartilhe esse produto no Facebook" rel="noreferrer" target="_blank"><i class="fab fa-facebook-square"></i></a>
						<a id="sharePin" href="#" title="Compartilhe esse produto no Pinterest" rel="noreferrer" target="_blank"><i class="fab fa-pinterest-square"></i></a>
						<a id="shareGp" href="#" title="Compartilhe esse produto no Google Plus" rel="noreferrer" target="_blank"><i class="fab fa-google-plus-square"></i></a>
						<a id="shareTt" href="#" title="Compartilhe esse produto no Twitter" rel="noreferrer" target="_blank"><i class="fab fa-twitter-square"></i></a>
						<a id="shareWhats" href="#" title="Compartilhe esse produto por Whatsapp" rel="noreferrer" target="_blank"><i class="fab fa-whatsapp-square"></i></a>
						<a id="shareEmail" ref="#" title="Compartilhe esse produto por email" rel="noreferrer" target="_blank"><i class="fas fa-envelope-square"></i></a>
					</div>
				</div>
			</div>
		</article>
		</div>
	</div>
	<div class="container">
		CONTAINER 2
		<div class="relative">
			RELATIVE
		</div>
		<div class="relative">
			RELATIVE
		</div>
	</div>
</body>
</html>