<div class="quizzes view">
<h2><?php  echo __('Quiz'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($quiz['Quiz']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo h($quiz['Quiz']['question']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answer'); ?></dt>
		<dd>
			<?php echo h($quiz['Quiz']['answer']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Quiz'), array('action' => 'edit', $quiz['Quiz']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Quiz'), array('action' => 'delete', $quiz['Quiz']['id']), null, __('Are you sure you want to delete # %s?', $quiz['Quiz']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Quizzes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quiz'), array('action' => 'add')); ?> </li>
	</ul>
</div>
