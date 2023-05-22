<?php

/**
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/home.css">
	<title>Seu João Gerenciamentos</title>
</head>

<body>
	<header class="header">
		<div>
			<img src="/img/seu-joao-logo.png" alt="Logo do Seu João" class="logo">
		</div>

		<nav>
			<ul class="menu">
				<li><?php echo $this->Html->link(__('Consultar Prestadores'), array('controller' => 'prestadores', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Consultar Serviços'), array('controller' => 'servicos', 'action' => 'index')); ?></li>
			</ul>
		</nav>
	</header>
	<div class="container">

		<?php
		session_start();
		date_default_timezone_set('America/Bahia');

		if (!isset($_SESSION['visit_counter'], )) {
			// $_SESSION['start_time'] = time();
			$_SESSION['visit_counter'] = 1;
		}

		$_SESSION['visit-counter'] += 1;

		$_SESSION['startd'] = @$_SESSION['startd'] ?: date("l jS \of F Y h:i:s A");

		?>
	</div>

	<div class="access">
		<?php echo "Acessado em " . $_SESSION['startd'];?>
		<p>
			<?php echo 'Número de acessos: ' . $_SESSION['visit-counter']?>
		</p>
	</div>

</body>

</html>