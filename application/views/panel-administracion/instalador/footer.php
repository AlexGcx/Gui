<!-- inicio archivos de javascript -->
	<script src="<?php echo base_url('dist/js/jquery-2.2.4.js') ?>"></script>
	<script src="<?php echo base_url('dist/js/uikit.js') ?>"></script>
	<script src="<?php echo base_url('dist/js/components/tooltip.min.js') ?>"></script>
	<script src="<?php echo base_url('dist/js/gui-instalador.js') ?>"></script>
	<?php  
		if( isset($js) and !empty($js) ){
			foreach ($js as $key => $value) {
				echo "<script src='".base_url("$value")."'></script>".chr(10);
			}
		}
	?>
<!-- fin archivos de javascript -->
</body>
</html>