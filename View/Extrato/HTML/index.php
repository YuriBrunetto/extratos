<!doctype html>
<html>
	<head>
		<title>P�gina inicial</title>
		<?php include "includes/head.php"; ?>
	</head>

	<body>
		<?php include "includes/cabecalho.php"; ?>
		
		<div class="conteudo">
			<div class="container">
				<h2 class="title">Seus extratos</h2>
				<p class="texto margin-top-1">
					Bem-vindo aos seus extratos!<br>
					Aqui voc� pode gerenciar os seus extratos e controlar as suas compras de forma f�cil e agilizada.
				</p>
				<?php
				if(!empty($extrato)){
					?>
					<h2 class="title margin-top-15">�ltimo extrato</h2>
					<div class="well margin-top-1">
						<p class="bold"><?=$extrato->getDateFormated()?></p>
						<p><?=$extrato->getDescricao()?></p>
						<p>Tipo: <?=($extrato->getCusto() < 0) ? "D�bito" : "Cr�dito"?></p>
						<p class="bold">Valor: R$ <?=$extrato->getCustoFormated(true) // absolute val?></p>
					</div>
					<?php
				}
				?>
			</div>
		</div>

		<div class="rodape">
		</div>
	</body>
</html>
