
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- Banner -->
  <div id="Carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#Carousel" data-slide-to="0" class="active"></li>
      <li data-target="#Carousel" data-slide-to="1"></li>
      <li data-target="#Carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="assets/images/banner.jpg">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="assets/images/banner.jpg">
        <div class="carousel-caption">
        </div>
      </div>
    
      <div class="item">
        <img src="assets/images/banner.jpg">
        <div class="carousel-caption">
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#Carousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#Carousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
        
<br/><br/><br/>
<div class="row" style="margin-left:0px; margin-right:0px;">
<?php foreach($posts as $post) : ?>
  <div class="col-sm-8 col-md-4">
    <div class="thumbnail">
      <img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="...">
      <div class="caption">
        <h3><?php echo $post['title']; ?></h3>
        <p><?php echo word_limiter($post['body'], 20); ?></p>
        <p><a href="<?php echo site_url('/posts/'.$post['slug']); ?>" class="btn btn-primary" role="button">Selengkapnya</a></p>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>