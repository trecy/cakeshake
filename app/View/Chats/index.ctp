<div class="chats index">
	<h2><?php echo __('Chats'); ?></h2>
	<div class="actions">
		<?php foreach ($users as $user): ?>
		<tr>
			<td><?php echo h($user['User']['username']); ?>&nbsp;</td>	
		</tr>
		<?php endforeach; ?>
		<p style="border:1px solid black; width:1300px; height:500px;">
			<?php foreach($chats as $chat): ?>
				<span style="font-weight:bold;"><?php echo h($chat['Chat']['user_from']);?></span><?php echo " : "; ?>
				<?php echo h($chat['Chat']['message'])."<br />"; ?>
			<?php endforeach; ?>
		</p>
	</div>
	
	<?php echo $this->Form->create(null, array(
    	'url' => array('controller' => 'chats', 'action' => 'add')
	)); ?>
	<?php echo $this->Form->input("Message"); ?>
	<?php echo $this->Form->end("Chat now"); ?>
</div>

