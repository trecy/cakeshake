<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
	<html>
	<head>
		<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	</head>
		<body>
			<?php debug($me); ?>
			<div id="container">
				<div id="header">
					<h1 style="float:left;"><?php echo $this->Html->link('Users', '/users'); ?></h1>
					<h1 style="float:left;"><?php echo $this->Html->link('Pictures', '/pictures'); ?></h1>
					<h1 style="float:left;"><?php echo $this->Html->link('Quizz', '/quizzes'); ?></h1>
					<h1 style="float:left;"><?php echo $this->Html->link('Chat', '/chats'); ?></h1>
					<h1><?php echo $this->Html->link('cakeshake', '/'); ?></h1>
					<h2><?php echo $me['username']; ?></h2>
				</div>
			 		<?php 

  					if ($me['id'] != 0) {

						echo '<div id="connection">';
        				echo $this->Html->link('Se Déconnecter', '/users/logout', array('class'=>'bouton'));
						echo '</div>';

					}

					else{
						echo '<div id="connection">';

						echo $this->Html->link('Inscription', '/users/add');
							echo'  ';

						echo $this->Html->link('Se connecter', '/users/login'); 

						echo '</div>';
					}
			


	       				?>
			
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	
</body>
</html>
