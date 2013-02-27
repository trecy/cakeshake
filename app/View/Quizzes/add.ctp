<div class="quizzes form">
<?php echo $this->Form->create('Quiz'); ?>
	<fieldset>
		<legend><?php echo __('Add Quiz'); ?></legend>
	<?php
		echo $this->Form->input('question');
		echo $this->Form->input('answer');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Quizzes'), array('action' => 'index')); ?></li>
	</ul>
</div>
