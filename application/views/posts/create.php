<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

  <div class="row"style="margin-left:0px; margin-right:0px; padding-left:15px;">
  <h2><?= $title ;?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label>Judul</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Isi</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
  </div>

  <div class="form-group">
  	<label>Kategori</label>
  	<select name="category_id" class="form-control">
  		<?php foreach($posts as $category): ?>
			<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
  		<?php endforeach?>
  	</select>
  </div>

  <div class="form-group">
  	<label>Masukkan Gambar</label>
  	<input type="file" name="userfile">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>