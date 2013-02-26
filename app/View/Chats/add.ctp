<div class="chats form">
<?php echo $this->Form->create('Chat'); ?>
	<fieldset>
		<legend><?php echo __('Add Chat'); ?></legend>
	<?php
		echo $this->Form->input('user_from');
		echo $this->Form->input('user_to');
		echo $this->Form->input('message');
		echo $this->Form->input('sent');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Chats'), array('action' => 'index')); ?></li>
	</ul>
</div>
