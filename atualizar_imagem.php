<html>
	<head>
		<title>Atualizar Imagem</title>
	</head>
	<body>
		<form action="atualizar_imagem_quebra_cabeca.php" method="POST" enctype="multipart/form-data">
			Enviar nova imagem para atualizar<br /> (Tamanho válido: 800x600 | Apenas arquivos com extensão .jpg):
			<br />
			<input name="imagem" type="file" accept="image/jpeg" />
			<br />
			<input type="submit" />
		</form>
	</body>
</html>