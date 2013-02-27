<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script>
		$(function(){
		  var $form_inputs =   $('form input');
		  var $rainbow_and_border = $('.rain, .border');
		  /* Used to provide loping animations in fallback mode */
		  $form_inputs.bind('focus', function(){
		  	$rainbow_and_border.addClass('end').removeClass('unfocus start');
		  });
		  $form_inputs.bind('blur', function(){
		  	$rainbow_and_border.addClass('unfocus start').removeClass('end');
		  });
		  $form_inputs.first().delay(800).queue(function() {
			$(this).focus();
		  });
		});
	</script>

	<body id="home">
			<div class="rain">
				<div class="border start">
					<div class="users form">
					<?php echo $this->Form->create('User'); ?>
					<fieldset>
						<legend><?php echo __('Add User'); ?></legend>
						<?php
						echo $this->Form->input('username');
						echo $this->Form->input('password');
						echo $this->Form->input('email');
						echo $this->Form->input('sex');
						echo $this->Form->input('birthdate');
						?>
					</fieldset>
					<?php echo $this->Form->end(__('Submit')); ?>
				</div>
				<div class="actions">
					<h3><?php echo __('Actions'); ?></h3>
					<ul>

						<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('List Pictures'), array('controller' => 'pictures', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('New Picture'), array('controller' => 'pictures', 'action' => 'add')); ?> </li>
					</ul>
				</div>
	</div>
	</div>
</body>
