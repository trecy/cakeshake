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
					<?php $this->Session->flash('auth'); ?>

					<?php echo $this->Form->create('User'); ?>
					<div><?php echo $this->Form->input('username'); ?></div>
					<div><?php echo $this->Form->input('password'); ?></div>
					<?php echo $this->Form->end('login'); ?>
	</div>
	</div>
</body>