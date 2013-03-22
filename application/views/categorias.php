<html>
	<head>
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<h1><?php echo $title; ?></h1>
		<?php
			if(count($categ) > 0){
				foreach ($categ as $linha){
		?>
					<p>ID: <?php echo $linha->id; ?> e com valor: <?php echo $linha->categoria; ?></p>
		<?php
				}
			}else{
				echo "Desculpe nenhuma categoria encontrada.";
		}
		?>
	</body>
</html>