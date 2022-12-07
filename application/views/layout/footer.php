<script src="<?php echo base_url() ?>assets/scripts/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/scripts/modernizr.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugin/nprogress/nprogress.js"></script>
	<script src="<?php echo base_url() ?>assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugin/waves/waves.min.js"></script>
	<!-- Sparkline Chart -->
	<script src="<?php echo base_url() ?>assets/plugin/chart/sparkline/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url() ?>assets/scripts/chart.sparkline.init.min.js"></script>

	<!-- Percent Circle -->
	<script src="<?php echo base_url() ?>assets/plugin/percircle/js/percircle.js"></script>

	<!-- Google Chart -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<!-- Chartist Chart -->
	<script src="<?php echo base_url() ?>assets/plugin/chart/chartist/chartist.min.js"></script>
	<script src="<?php echo base_url() ?>assets/scripts/jquery.chartist.init.min.js"></script>

	<!-- FullCalendar -->
	<script src="<?php echo base_url() ?>assets/plugin/moment/moment.js"></script>
	<script src="<?php echo base_url() ?>assets/plugin/fullcalendar/fullcalendar.min.js"></script>
	<script src="<?php echo base_url() ?>assets/scripts/fullcalendar.init.js"></script>

	<script src="<?php echo base_url() ?>assets/scripts/main.min.js"></script>


<script type="text/javascript">
	<?php if(isset($_SESSION['SUCC_MSG'])){ ?>

		Swal.fire({
			icon: 'success',
			titel: '<?php echo $_SESSION['SUCC_MSG'] ?>',
			showConfirmButton: false,
			time: 1500
		});

	<?php } ?>

	<?php if(isset($_SESSION['ERROR_MSG'])){ ?>

		Swal.fire({
			icon: 'warning',
			titel: '<?php echo $_SESSION['ERROR_MSG'] ?>',
			showConfirmButton: false,
			time: 1500
		});

	<?php } ?>
</script>

</body>
</html>