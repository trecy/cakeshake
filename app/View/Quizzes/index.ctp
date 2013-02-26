<div class="quizzes index">
	<h2><?php echo __('Quizzes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('question'); ?></th>
			<th><?php echo $this->Paginator->sort('answer'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($quizzes as $quiz): ?>
	<tr>
		<td><?php echo h($quiz['Quiz']['id']); ?>&nbsp;</td>
		<td><?php echo h($quiz['Quiz']['question']); ?>&nbsp;</td>
		<td><?php echo h($quiz['Quiz']['answer']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $quiz['Quiz']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $quiz['Quiz']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $quiz['Quiz']['id']), null, __('Are you sure you want to delete # %s?', $quiz['Quiz']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Quiz'), array('action' => 'add')); ?></li>
	</ul>
</div>
