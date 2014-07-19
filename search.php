<?php 
	//include('config/config.php');
?>
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="sidebar-offcanvas" id="sidebar" role="navigation">
			<p class="visible-xs">
					<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">
						<i class="glyphicon search-bar-glyphicon glyphicon-chevron-right"></i>
					</button>
			</p>
			<div class="well sidebar-nav" style="max-width:300px; padding: 10px;">
				<ul class="nav nav-list">
					<li class="divider-search"></li>
					<li><label class="nav-header">Preço</label>
						<ul class="nav nav-list ">
							<li><input type="text" id="slider-price" /></li>
						</ul>
					</li>
					<li class="divider-search"></li>
					<li><label class="nav-header">Km</label>
						<ul class="nav nav-list">
							<li><input type="text" id="slider-km" /></li>
						</ul>
					</li>
					<li class="divider-search"></li>
					<li><label class="nav-header">Ano</label>
						<ul class="nav nav-list">
							<li><input type="text" id="slider-year" /></li>
						</ul>
					</li>
					<li class="divider-search"></li>
					<li><label class="nav-header">Potência</label>
						<ul class="nav nav-list">
							<li><input type="text" id="slider-CV" /></li>
						</ul>
					</li>
					<li class="divider-search"></li>
				</ul>

				<div class="panel-group" id="accordion">
				    <div class="panel panel-default">
				        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseMarca">
				            <h4 class="panel-title">
				                	<i class="fa fa-arrow-right search-bar-glyphicon"></i> Marca
				            </h4>
			                <span class="title-make-search badge">Porche <i class="fa fa-times remove-option-search pull-right"></i></span>
				        </div>
				        <div id="collapseMarca" class="panel-collapse collapse in">
				            <div class="panel-body search-bar-panel-body"><div class="list-group" style="margin-bottom:0px;">
									<a href="#" class="list-group-item">Porche <span class="badge">14</span> </a>
								</div>
				            </div>
				        </div>
					</div>
					<div class="panel panel-default">
					    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseModelo">
					        <h4 class="panel-title">
					            	<i class="fa fa-arrow-right search-bar-glyphicon"></i>Modelo
					        </h4>
					    </div>
						<div id="collapseModelo" class="panel-collapse collapse">
							<div class="panel-body search-bar-panel-body">
								<select id="model_select2">
									<option value="">911 </option>
									<option value="">Cayenne </option>
									<option value="">Boxster </option>
									<option value="">Panamera </option>
									<option value="">mais </option>
								</select>
							</div>
					    </div>
					</div>
				    <div class="panel panel-default">
				        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseSeccao">
				            <h4 class="panel-title">
				                	<i class="fa fa-arrow-right search-bar-glyphicon"></i>Secção
				            </h4>
				        </div>
				        <div id="collapseSeccao" class="panel-collapse collapse">
				            <div class="panel-body search-bar-panel-body">
								<div class="list-group" style="margin-bottom:0px;">
									<a href="#" class="list-group-item">Utilitários/Sedan		<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Carrinha/Combi			<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Desportivo/Coupé		<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Cabrios/Roadster		<span class="badge">14</span></a>
									<a href="#" class="list-group-item">SUV/Monovolume			<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Citadinos				<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Todo-o-terreno/Pick-up	<span class="badge">14</span></a>
								</div>
				            </div>
				        </div>
				    </div>
					<div class="panel panel-default">
					    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseCombustivel">
					        <h4 class="panel-title">
					            	<i class="fa fa-arrow-right search-bar-glyphicon"></i>Combustível
					        </h4>
					    </div>
					    <div id="collapseCombustivel" class="panel-collapse collapse">
					        <div class="panel-body search-bar-panel-body">
								<div class="list-group" style="margin-bottom:0px;">
									<a href="#" class="list-group-item">Gasolina		<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Diesel			<span class="badge">14</span></a>
									<a href="#" class="list-group-item">GPL				<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Híbrido			<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Eléctrico		<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Qualquer Tipo	<span class="badge">14</span></a>
								</div>
					        </div>
					    </div>
					</div>
				    <div class="panel panel-default">
				        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseCaixa">
				            <h4 class="panel-title">
				                	<i class="fa fa-arrow-right search-bar-glyphicon"></i> Tipo de Caixa
				            </h4>
				        </div>
				        <div id="collapseCaixa" class="panel-collapse collapse">
				            <div class="panel-body search-bar-panel-body">
								<div class="list-group" style="margin-bottom:0px;">
									<a href="#" class="list-group-item">Caixa Manual			<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Caixa Semi-Automática	<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Caixa Automática		<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Qualquer Tipo			<span class="badge">14</span></a>
								</div>
							</div>
						</div>
				    </div>
					<div class="panel panel-default">
					    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapsePintura">
					        <h4 class="panel-title">
					            	<i class="fa fa-arrow-right search-bar-glyphicon"></i>Pintura
					        </h4>
					    </div>
					    <div id="collapsePintura" class="panel-collapse collapse">
					        <div class="panel-body search-bar-panel-body">
								<div class="list-group" style="margin-bottom:0px;">
									<a href="#" class="list-group-item">Preto 		<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Cinzento 	<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Azul 		<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Branco 		<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Prata 		<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Outra 		<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Verde 		<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Vermelho 	<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Laranja 	<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Bege 		<span class="badge">14</span></a>
								</div>
					        </div>
					    </div>
					</div>
					<div class="panel panel-default">
					    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseLotacao">
					        <h4 class="panel-title">
					            	<i class="fa fa-arrow-right search-bar-glyphicon"></i>Lotação
					        </h4>
					    </div>
					    <div id="collapseLotacao" class="panel-collapse collapse">
					        <div class="panel-body search-bar-panel-body">
								<div class="list-group" style="margin-bottom:0px;">
									<a href="#" class="list-group-item">2 	<span class="badge">14</span></a>
									<a href="#" class="list-group-item">3 	<span class="badge">14</span></a>
									<a href="#" class="list-group-item">4-5 <span class="badge">14</span></a>
									<a href="#" class="list-group-item">6-7 <span class="badge">14</span></a>
									<a href="#" class="list-group-item">8-9 <span class="badge">14</span></a>
								</div>
					        </div>
					    </div>
					</div>
					<div class="panel panel-default">
					    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapsePortas">
					        <h4 class="panel-title">
					            	<i class="fa fa-arrow-right search-bar-glyphicon"></i>Portas
					        </h4>
					    </div>
					    <div id="collapsePortas" class="panel-collapse collapse">
					        <div class="panel-body search-bar-panel-body">
								<div class="list-group" style="margin-bottom:0px;">
									<a href="#" class="list-group-item">1-3 		<span class="badge">14</span></a>
									<a href="#" class="list-group-item">4-5 		<span class="badge">14</span></a>
									<a href="#" class="list-group-item">6 ou mais 	<span class="badge">14</span></a>
								</div>
					        </div>
					    </div>
					</div>
					<div class="panel panel-default">
					    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseArCondicionado">
					        <h4 class="panel-title">
					            	<i class="fa fa-arrow-right search-bar-glyphicon"></i>Ar Condicionado
					        </h4>
					    </div>
					    <div id="collapseArCondicionado" class="panel-collapse collapse">
					        <div class="panel-body search-bar-panel-body">
								<div class="list-group" style="margin-bottom:0px;">
									<a href="#" class="list-group-item">AC					<span class="badge">14</span></a>
									<a href="#" class="list-group-item">AC Automático		<span class="badge">14</span></a>
									<a href="#" class="list-group-item">AC Independente		<span class="badge">14</span></a>
									<a href="#" class="list-group-item">AC p/ Zona Traseira	<span class="badge">14</span></a>
								</div>
					        </div>
					    </div>
					</div>
					<div class="panel panel-default">
					    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseInserido">
					        <h4 class="panel-title">
					            	<i class="fa fa-arrow-right search-bar-glyphicon"></i>Inserido
					        </h4>
					    </div>
					    <div id="collapseInserido" class="panel-collapse collapse">
					        <div class="panel-body search-bar-panel-body">
								<div class="list-group" style="margin-bottom:0px;">
									<a href="#" class="list-group-item">Ontem		<span class="badge">14</span></a>
									<a href="#" class="list-group-item">há 2 dias	<span class="badge">14</span></a>
									<a href="#" class="list-group-item">há 3 dias	<span class="badge">14</span></a>
									<a href="#" class="list-group-item">há 1 semana	<span class="badge">14</span></a>
									<a href="#" class="list-group-item">há 1 mês	<span class="badge">14</span></a>
								</div>
					        </div>
					    </div>
					</div>
					<div class="panel panel-default">
					    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseAnunciantes">
					        <h4 class="panel-title">
					            	<i class="fa fa-arrow-right search-bar-glyphicon"></i>Anunciantes
					        </h4>
					    </div>
					    <div id="collapseAnunciantes" class="panel-collapse collapse">
					        <div class="panel-body search-bar-panel-body">
								<div class="list-group" style="margin-bottom:0px;">
									<a href="#" class="list-group-item">Particulares	<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Profissionais	<span class="badge">14</span></a>
								</div>
					        </div>
					    </div>
					</div>
					<div class="panel panel-default">
					    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseFarois">
					        <h4 class="panel-title">
					            	<i class="fa fa-arrow-right search-bar-glyphicon"></i>Faróis
					        </h4>
					    </div>
					    <div id="collapseFarois" class="panel-collapse collapse">
					        <div class="panel-body search-bar-panel-body">
								<div class="list-group" style="margin-bottom:0px;">
									<a href="#" class="list-group-item">Faróis Xenón	<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Faróis Bixenón	<span class="badge">14</span></a>
								</div>
					        </div>
					    </div>
					</div>
					<div class="panel panel-default">
					    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseTecto">
					        <h4 class="panel-title">
					            	<i class="fa fa-arrow-right search-bar-glyphicon"></i>Tecto
					        </h4>
					    </div>
					    <div id="collapseTecto" class="panel-collapse collapse">
					        <div class="panel-body search-bar-panel-body">
								<div class="list-group" style="margin-bottom:0px;">
									<a href="#" class="list-group-item">Tecto de Abrir Eléctrico	<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Tecto de Abrir Panorâmico	<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Tecto Panorâmico			<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Tecto de Abrir Manual		<span class="badge">14</span></a>
								</div>
					        </div>
					    </div>
					</div>
				</div>
			</div>
			<!--/.well -->
		</div>
		<!--/col-->
		<p class="pull-right visible-xs">
				<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle Nav</button>
		</p>
	</div>
	<!--/row-->

