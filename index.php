<?php include_once('header.php');?>

	<section id="slideshow">
		<img class="slides" src="img/slide/1.jpg" />
		<img class="slides" src="img/slide/2.jpg" />
		<img class="slides" src="img/slide/3.jpg" />
		<img class="slides" src="img/slide/4.jpg" />
		<img class="slides" src="img/slide/5.jpg" />
		<button class="btn" onclick="plusIndex(-1)" id="btn1">&#10094;</button>
		<button class="btn" onclick="plusIndex(1)" id="btn2">&#10095;</button>
	</section>
<main>	
	<div class="destaque-categoria">
		<span>Notícias</span><a href="#">Ver mais</a>
		<hr class="hr-small-destaque-categoria" style="" />
		<hr class="hr-large-destaque-categoria" style="width: 70%;border-top: 1px solid #dbdbdb" />
	</div>

	<div class="conteudo">


		<section class="noticias">
			<header>
				<a href="#"><h1>Líder do Governo destaca que Acreprevidência não deixará de pagar pensionistas e aposentados</h1></a>
				<p>02/01/2017</p>
			</header>
				<hr style="color:#656;height: 1px;width: 50%;" />
			<section class="destaques-noticias">
				<article class="noticias-dt">
				<a href="#">
						<h2>Recursos previdenciários de regimes próprios são rigorosamente fiscalizados.</h2>
							<p>02/01/2017</p>
					<img src="img/noticias/img-noticias-principal.png" /></a>

				</article>
				<hr style="max-height:95%;border-left: 1px solid #dbdbdb;margin: 0 12px;" />
				<article class="noticias-dt">
					<a href="#">
						<h2>Líder do Governo destaca que Acreprevidência não deixará de pagar pensionistas e aposentados</h2></a>
					<p>01/01/2017</p><br /><br />
					<a href="#">
						<h3>Líder do Governo destaca que Acreprevidência não deixará de pagar pensionistas e aposentados</h3></a>
						<p>01/01/2017</p>
				</article>
			</section>	
		</section>
		<hr class="hr-vertical" />
		<section class="pagamento">
				<header><span>PAGAMENTOS 2017</span></header>
		<section class="cal-pagamento">
				<ul class="lista-pagamento">
					<li>Janeiro</li>
					<li>Fevereiro</li>
					<li>Março</li>
					<li>Abril</li>
					<li>Maio</li>
					<li>Junho</li>
					<li>Julho</li>
					<li>Agosto</li>
					<li>Setembro</li>
					<li>Outubro</li>
					<li>Novembro</li>
					<li>Dezembro</li>
					<li>13º Salário</li>
				</ul>
				<ul class="lista-pagamento-dia">
					<li>31</li>
					<li>24</li>
					<li>31</li>
					<li>28</li>
					<li>31</li>
					<li>30</li>
					<li>31</li>
					<li>31</li>
					<li>29</li>
					<li>31</li>
					<li>30</li>
					<li>29</li>
					<li>22</li>

				</ul>
			</section>
		</section>
	</div>


	<div class="destaque-categoria">
		<span>Serviços</span>
		<hr style="width: 5%;color:#333;border-top: 5px solid #dbdbdb" />
		<hr style="width: 100%;color:#333;border-top: 1px solid #dbdbdb" />
	</div>
</main>	
<section class="services-all">
	<section class="servicos">
  <!-- Flickity HTML init -->
			<div class="gallery js-flickity">
				<div class="gallery-cell"><a href="#"><img src="img/servicos/box1.png" /><p>Comprovante de rendimentos</p><p>Aposentados e Pensionistas</p></a></div>
			  <div class="gallery-cell"><a href="#"><img src="img/servicos/box2.png" /><p>Comprovante de rendimentos</p><p>Aposentados e Pensionistas</p></a></div>
			  <div class="gallery-cell"><a href="#"><img src="img/servicos/box3.png" /><p>Comprovante de rendimentos</p><p>Aposentados e Pensionistas</p></a></div>
			  <div class="gallery-cell"><a href="#"><img src="img/servicos/box2.png" /><p>Comprovante de rendimentos</p><p>Aposentados e Pensionistas</p></a></div>
			</div>
	</section>
</section>
<div class="wrap-beneficios">
<div class="conteudo-beneficios">
	<div class="destaque-categoria">
		<span>Benefícios</span><a href="#">Ver mais</a>
		<hr style="width: 5%;color:#333;border-top: 5px solid #dbdbdb" />
		<hr style="width: 100%;color:#333;border-top: 1px solid #dbdbdb" />
	</div>


<section class="beneficios">
	<div class="box-header-abril">
		<h4>ABRIL 2017</h4>
		<ul class="box-beneficio">
			<li><strong>Concessões no mês</strong></li>
			<hr style="border-bottom: 1px dashed #dbdbdb;" />
			<li>Aposentadorias: 94</li>
			<li>Pensões: 14</li>
		</ul>

		<ul class="box-beneficio">
			<li><strong>Pagamentos no mês</strong></li>
			<hr style="border-bottom: 1px dashed #dbdbdb;" />
			<li>Aposentadorias: R$ 45.463.286,53</li>
			<li>Pensões: R$ 6.208.637,08</li>
			<li>Total: R$ 51.671.823,61</li>
		</ul> 

	</div>
	<div class="box-header-marco">
		<h4>MARÇO 2017</h4>
		<ul class="box-beneficio">
			<li><strong>Concessões no mês</strong></li>
			<hr style="border-bottom: 1px dashed #dbdbdb;" />
			<li>Aposentadorias: 94</li>
			<li>Pensões: 14</li>
		</ul>

		<ul class="box-beneficio">	
			<li><strong>Pagamentos no mês</strong></li>		
			<hr style="border-bottom: 1px dashed #dbdbdb;" />
			<li>Aposentadorias: R$ 45.463.286,53</li>
			<li>Pensões: R$ 6.208.537,08</li>
			<li><span>Total:</span> R$ 51.671.823,61</li>
		</ul>

	</div>
</section>
</div>
</div>
<?php include_once('footer.php');?>
