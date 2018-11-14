<?php
   $this->Paginator->options(array(
      'update' => '#contenedor-platillos',
      'before' => $this->Js->get("#procesando")->effect('fadeIn', array('buffer' => false)),
      'complete' => $this->Js->get("#procesando")->effect('fadeOut', array('buffer' => false))
   ));
?>
<div id="contenedor-platillos">
	<div class="progress oculto" id="procesando">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
			<span class="sr-only">100% Complete</span>
		</div>
	</div>
	<div class="page-header">
		<h2><strong>Categoría: </strong><small><?php echo $nombreCategoria; ?></small></h2>
	</div>
	<?php if(!empty($categoriaPlatillos)): ?>
   		<div class="row">
   			<?php foreach($categoriaPlatillos as $platillo): ?>
				<div class="col col-sm-3">
   					<figure class="platillo">
   						<?php echo $this->Html->image('entrada/entrada-ceviche.jpg', array('width'=>'150')); ?>
					</figure>
					<br>
					<?php echo $this->Html->link($platillo['Platillo']['nombre'], 
												array('controller'=>'platillos', 'action'=>'view', $platillo['Platillo']['id'])
												); ?>  
					<br>
					<?php echo $platillo['Platillo']['precio']; ?> &nbsp;
					<br>
					<br>
				</div>
			<?php endforeach; ?>
		</div>
		<p>
			<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
			?>	
		</p>
		<ul class="pagination">
			<li> <?php echo $this->Paginator->prev('< ' . __('previous'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
			<li> <?php echo $this->Paginator->next(__('next') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
		</ul>
	<?php else: ?>
		<h3>No existen platillos para esta categoría</h3>
	<?php endif; ?>
	<?php echo $this->Js->writeBuffer(); ?>
</div>
<!-- id="contenedor-platillos" -->



