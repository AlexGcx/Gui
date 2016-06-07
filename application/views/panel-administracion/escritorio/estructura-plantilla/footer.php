<script src="<?php echo base_url('dist/js/jquery-2.2.4.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('dist/js/uikit.min.js') ?>" type="text/javascript"></script>
<?php  
	if( isset($js) and !empty($js) ){
		foreach ($js as $key => $value) {
			echo "<script src='".base_url("$value")."'></script>".chr(10);
		}
	}
?>
</body>
</html>