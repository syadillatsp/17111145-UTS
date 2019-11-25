<div class="login-box pt-5">
	<!-- /.login-logo -->
	<div class="login-box-body">
	<h3 class="text-center mt-0 mb-4">
		<b>LOGIN</b>
	</h3> 
	<div id="infoMessage" class="text-center"><?php echo $message;?></div>

	<?= form_open("auth/cek_login", array('id'=>'login'));?>
		<div class="form-group has-feedback">
			<?= form_input($identity);?>
			<span class="fa fa-envelope form-control-feedback"></span>
			<span class="help-block"></span>
		</div>
		<div class="form-group has-feedback">
			<?= form_input($password);?>
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			<span class="help-block"></span>
		</div>
		<div class="row">
			<div class="col-xs-4">
			<?= form_submit('submit', lang('login_submit_btn'), array('id'=>'submit','class'=>'btn btn-primary btn-block btn-flat'));?>
			</div>
			<!-- /.col -->
		</div>
		
	</div>
</div>

<script type="text/javascript">
	let base_url = '<?=base_url();?>';
</script>
<script src="<?=base_url()?>assets/dist/js/app/auth/login.js"></script>