<?php $estado = $this->request->data['Platillo']['estado'];?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Platillo', array('type'=>'file', 'novalidate'=>'novalidate')); ?>
			<fieldset>
			<legend><?php echo __('Edit Platillo'); ?></legend>
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('categoria_id', array('class'=>'form-control', 'label'=>'Categoría'));
					echo $this->Form->input('nombre', array('class'=>'form-control', 'label'=>'Nombre'));
					echo $this->Form->input('descripcion', array('class'=>'form-control', 'label'=>'Descripción'));
					echo $this->Form->input('precio', array('class'=>'form-control', 'label'=>'Precio'));
					// -----------------------------------------
					echo $this->Form->input('foto', array('type' => 'file', 'label' => 'Foto', 
															'id'=>'foto', 'class'=>'file', 
															'data-show-upload' => 'false', 
															'data-show-caption' => 'true'));
					echo $this->Form->input('foto_dir', array('type' => 'hidden'));
					// -----------------------------------------
					echo $this->Form->radio('estado',
											array( 1 =>'Habilitado', 0 => 'Deshabilitado'), 
											array('legend'=> false, 'value' => $estado));
				?>
			</fieldset>
			<p>
				<?php echo $this->Form->end(array('label'=>'Editar Platillo', 'class'=>'btn btn-success')); ?>
			</p>
			<div class="btn-group">
				<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<?php echo __('Actions'); ?>
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">

					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Platillo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Platillo.id'))); ?></li>
					<li><?php echo $this->Html->link(__('List Platillos'), array('action' => 'index')); ?></li>
					<li class="divider"></li>
					<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
					<li class="divider"></li>
					<li><?php echo $this->Html->link(__('List Item Previos'), array('controller' => 'item_previos', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Item Previo'), array('controller' => 'item_previos', 'action' => 'add')); ?> </li>
					<li class="divider"></li>
					<li><?php echo $this->Html->link(__('List Orden Items'), array('controller' => 'orden_items', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Orden Item'), array('controller' => 'orden_items', 'action' => 'add')); ?> </li>
				</ul>
			</div>
		</div>
	</div>
</div>
