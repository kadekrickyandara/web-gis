
		<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
		<script src="http://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<?php echo form_open('users/login'); ?>
	<div class="row" style="margin-left:0px; margin-right:0px;">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?php echo $title; ?></h1>
			<div class="form-group">
				<input type="text" class="form-control" type="text" name="username" placeholder="Enter Username" required autofocus>
				<input class="form-control" type="password" name="password" placeholder="Enter Password" required autofocus>
				<button class="btn btn-primary btn-block">
					Login
				</button>
			</div>
		</div>
	</div>
<?php echo form_close(); ?>