<?php 
	include('config/config.php');
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
					<li><label class="tree-toggler nav-header">Preço</label>
						<ul class="nav nav-list tree">
							<li><input type="text" id="slider-price" /></li>
						</ul>
					</li>
					<li><label class="tree-toggler nav-header">Km</label>
						<ul class="nav nav-list tree">
							<li><input type="text" id="slider-km" /></li>
						</ul>
					</li>
					<li><label class="tree-toggler nav-header">Ano</label>
						<ul class="nav nav-list tree">
							<li><input type="text" id="slider-year" /></li>
						</ul>
					</li>
					<li class="divider"></li>
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
								<div class="list-group" style="margin-bottom:0px;">
									<a href="#" class="list-group-item">911 <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Cayenne <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Boxster <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Panamera <span class="badge">14</span></a>
									<a href="#" class="list-group-item">mais <span class="badge">14</span></a>
								</div>
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
									<a href="#" class="list-group-item">911 <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Cayenne <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Boxster <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Panamera <span class="badge">14</span></a>
									<a href="#" class="list-group-item">mais <span class="badge">14</span></a>
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
									<a href="#" class="list-group-item">911 <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Cayenne <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Boxster <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Panamera <span class="badge">14</span></a>
									<a href="#" class="list-group-item">mais <span class="badge">14</span></a>
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
									<a href="#" class="list-group-item">911 <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Cayenne <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Boxster <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Panamera <span class="badge">14</span></a>
									<a href="#" class="list-group-item">mais <span class="badge">14</span></a>
								</div>
				            </div>
				        </div>
				    </div>
					<div class="panel panel-default">
					    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapsePotencia">
					        <h4 class="panel-title">
					            	<i class="fa fa-arrow-right search-bar-glyphicon"></i>Potência
					        </h4>
					    </div>
					    <div id="collapsePotencia" class="panel-collapse collapse">
					        <div class="panel-body search-bar-panel-body">
								<div class="list-group" style="margin-bottom:0px;">
									<a href="#" class="list-group-item">911 <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Cayenne <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Boxster <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Panamera <span class="badge">14</span></a>
									<a href="#" class="list-group-item">mais <span class="badge">14</span></a>
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
									<a href="#" class="list-group-item">911 <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Cayenne <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Boxster <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Panamera <span class="badge">14</span></a>
									<a href="#" class="list-group-item">mais <span class="badge">14</span></a>
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
									<a href="#" class="list-group-item">911 <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Cayenne <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Boxster <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Panamera <span class="badge">14</span></a>
									<a href="#" class="list-group-item">mais <span class="badge">14</span></a>
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
									<a href="#" class="list-group-item">911 <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Cayenne <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Boxster <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Panamera <span class="badge">14</span></a>
									<a href="#" class="list-group-item">mais <span class="badge">14</span></a>
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
									<a href="#" class="list-group-item">911 <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Cayenne <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Boxster <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Panamera <span class="badge">14</span></a>
									<a href="#" class="list-group-item">mais <span class="badge">14</span></a>
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
									<a href="#" class="list-group-item">911 <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Cayenne <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Boxster <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Panamera <span class="badge">14</span></a>
									<a href="#" class="list-group-item">mais <span class="badge">14</span></a>
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
									<a href="#" class="list-group-item">911 <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Cayenne <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Boxster <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Panamera <span class="badge">14</span></a>
									<a href="#" class="list-group-item">mais <span class="badge">14</span></a>
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
									<a href="#" class="list-group-item">911 <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Cayenne <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Boxster <span class="badge">14</span></a>
									<a href="#" class="list-group-item">Panamera <span class="badge">14</span></a>
									<a href="#" class="list-group-item">mais <span class="badge">14</span></a>
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
