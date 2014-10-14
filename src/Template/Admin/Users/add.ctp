<div class="row">
	<div class="col-md-3 col-md-push-9">
		<h3><?php __('Actions') ?></h3>
		<ul class="nav nav-pills nav-stacked">
			<li><?php $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
			<li><?php $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
			<li><?php $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
			<li><?php $this->Html->link(__('List Likes'), ['controller' => 'Likes', 'action' => 'index']) ?> </li>
			<li><?php $this->Html->link(__('New Like'), ['controller' => 'Likes', 'action' => 'add']) ?> </li>
		</ul>
	</div>
	<div class="col-md-9 col-md-pull-3">
	<?php $this->Form->create($user) ?>
		<fieldset>
			<legend><?php __('Add User'); ?></legend>
		<?php
			echo $this->Form->input('name');
			echo $this->Form->input('description');
			echo $this->Form->input('photo');
			echo $this->Form->input('email');
			echo $this->Form->input('password');
		?>
		</fieldset>
	<?php $this->Form->button(__('Submit')) ?>
	<?php $this->Form->end() ?>
	</div>
</div>