<div class="chats view">
<h2><?php  echo __('Chat'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($chat['Chat']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User From'); ?></dt>
		<dd>
			<?php echo h($chat['Chat']['user_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User To'); ?></dt>
		<dd>
			<?php echo h($chat['Chat']['user_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($chat['Chat']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sent'); ?></dt>
		<dd>
			<?php echo h($chat['Chat']['sent']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Chat'), array('action' => 'edit', $chat['Chat']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Chat'), array('action' => 'delete', $chat['Chat']['id']), null, __('Are you sure you want to delete # %s?', $chat['Chat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Chats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chat'), array('action' => 'add')); ?> </li>
	</ul>
</div>
