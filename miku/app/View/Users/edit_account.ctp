<div class="container">
	<main role="main" class="add">
		<div class="row">
			<div class="col-md-6">
				<?php echo $this->Form->create('User'); ?>
					<fieldset>
						<legend>
							<strong><?php echo __('Editar cuenta'); ?></strong>
						</legend>
					<?php
						echo $this->Form->input('id');
						echo $this->Form->input('username', array('class' => 'form-control', 
						'label' => 'Usuario', 'value' => $current_user['username']));
						echo $this->Form->input('password', array('class' => 'form-control', 'label' => 'Contraseña' ,'autocomplete' => "off"));
					?>
					</fieldset>
				<p>
					<?php echo $this->Form->end(array('label' => 'Editar Usuario', 'class' =>'btn btn-success')); ?>
				</p>
			</div>
		</div>
	</main>
</div>



