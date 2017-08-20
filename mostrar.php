<html>
	<head>
		<style>
			*{padding:0; margin:0; border:0;}
			table {border:0; border-spacing: 10px;}
			table tr td{padding:0; margin:0}
		</style>
	</head>
	<body>
		<table>
		<?php
			$cont = 0;
			$rand = range(1,48);
			shuffle($rand);
				for($linha=1;$linha<=6;$linha++) :?>
				<tr>
					<?php for($coluna=1; $coluna<=8; $coluna++): 	
						$cont++;
					?>
					<td><img src="imagens/<?php echo $rand[$cont-1]?>.jpg" /></td>
					<?php endfor;?>
				</tr>
				<?php endfor;?>				
		</table><br />
		<p><a href="atualizar_imagem.php">Carregar outra imagem</a></p><br />
		<p><a href="resolver.php">Mostrar quebra cabeça resolvido</a></p>
	</body>
</html>



