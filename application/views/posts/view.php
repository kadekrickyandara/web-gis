<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  
<h2><?php echo $post['title']; ?></h2>
<small style="padding-left: 10px">Di Publikasikan: <?php echo $post['created_at']; ?></small><br>
<img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?> "style="width:50%; margin-left:10px;" class="img-thumbnail" >

<div class="post-body" style="padding-left: 15px">
<br/>
	<?php echo $post['body']; ?>
</div>

<?php if ($this->session->userdata('user_id') == $post['user_id']) : ?>
	<hr>
	<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
	<?php echo form_open('/posts/delete/'.$post['id']); ?>
		<input type="submit" value="Delete" class="btn btn-danger">
	</form>
<?php endif ?>

<hr>
<h3>Komentar</h3>

<?php if($comments) : ?>
	<?php foreach($comments as $comment) : ?>
		<div class="well">
			<h5><?php echo $comment['body']; ?>[by <strong><?php echo $comment['name']; ?></strong>]</h5>
		</div>
	<?php endforeach ?>
<?php else : ?>
	<p style="padding-left: 15px">Tidak Ada Komentar</p>
<?php endif; ?>


<hr>
<h3>Tambah Komentar</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('/comments/create/'.$post['id']); ?>
	<div class="form-group" style="padding-left: 15px">
		<label>Nama</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group" style="padding-left: 15px">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group" style="padding-left: 15px">
		<label>Kritik & Saran</label>
		<textarea name="body" class="form-control"></textarea>
		<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
		<br/>
		<button class="btn btn-primary">Submit</button>
	</div>
</form>
