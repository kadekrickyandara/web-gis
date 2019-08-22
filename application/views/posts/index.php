<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  
<h2><?= $title ?></h2>



<?php foreach($posts as $post) : ?>

	<h3><?php echo $post['title']; ?></h3>
	<div class="row" style="margin-left:0px; margin-right:0px">
		<div class="col-md-3">
			<img class="img-thumbnail" class="post-thumb" src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>">
		</div>
		<div class="col-md-9">
			<small>Di Publikasikan: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name'] ; ?></strong></small><br>
			<?php echo word_limiter($post['body'], 30); ?>
			<br><br>
			<p><a class="btn btn-default" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Selanjutnya</a></p>
		</div>
	</div>
	
<?php endforeach; ?>
<div class="pagination-links">
	<?php echo $this->pagination->create_links(); ?>
</div>
