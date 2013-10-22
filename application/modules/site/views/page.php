<?php $this->load->view('header'); ?>
	<div class="container">
		<?php //echo $pagelist; ?>

		<?php if($pagenum>0): ?>

			<?php foreach($page as $row):?>
				<!-- Main hero unit for a primary marketing message or call to action -->
				<div class="row-fluid">
					<div class="wall">
					<?php if($pagenum>1): ?>
					<h3><a href="<?php echo base_url();?>site/page/<?php echo strtolower($row->slug);?>"><?php echo $row->title ?></a> </h3>
					<?php
					elseif($pagenum==1):
							echo "<h2>".$row->title."</h2>";
							echo $row->body; 
						endif;
					?>
					</div>
				<!-- Example row of columns -->
				
					
				</div>
			<?php endforeach;?>

		<?php else: ?>
			<h3>Ups, Halaman tidak ditemukan..</h3>

		<?php endif; ?>
	</div>

<?php $this->load->view('footer'); ?>
