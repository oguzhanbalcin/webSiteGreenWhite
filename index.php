<?php 
include 'header.php';
include 'admin/netting/baglan.php';
 $slidersor=$db->prepare("select * from slider order by slider_durum DESC, slider_sira ASC");
$slidersor->execute(); 
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)

?>

<br><br><br><br>

<div class="main-wrapper">
     <!--   <section class="cta-section theme-bg-light py-5">
            <div class="container text-center">
                <h2 class="heading">DevBlog - A Blog Template Made For Developers</h2>
                <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
                <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>  //container-->
     
        <section class="blog-list px-3 py-5 p-md-8">
            <div class="">
                
                
                
            <!--    <div class="item mb-5">
                    <div class="media">
                        <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="assets/images/blog/blog-post-thumb-3.jpg" alt="image">
                        <div class="media-body">
                            <h3 class="title mb-1"><a href="blog-post.html">High Performance JavaScript</a></h3>
                            <div class="meta mb-1"><span class="date">Published 1 month ago</span><span class="time">8 min read</span><span class="comment"><a href="#">12 comments</a></span></div>
                            <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
                            <a class="more-link" href="blog-post.html">Read more &rarr;</a>
                        </div>//media-body
                    </div>
                </div>-->
                <hr>
                <div class="item mb-12">
                    <div class="media">
                        <div role="main" class="center">
    <div class="">
        <div class="row justify-content-center mb-8">
            <div class="float-md-right">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                   
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                                         <a href="dersprogrami-<?=seo($slidercek["slider_ad"]).'-'.$slidercek["slider_id"]?>"> 

                    <img class="d-block w-100" src="<?php echo  $slidercek['slider_resimyol'];?>"width="100%" height="100%" href=""></a> 
                  </div>
                  <?php while ($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) {
                         ?>
                  <div class="carousel-item">
                 <a href="dersprogrami-<?=seo($slidercek["slider_ad"]).'-'.$slidercek["slider_id"]?>"> 
     <img class="d-block w-100" src="<?php echo  $slidercek['slider_resimyol'];?>" width="100%" height="100%"></a> 
                  </div>
                    <?php } ?>
                  
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>




    </div>


</div>


</div>

</div>
                        </div><!--//media-body-->
                    </div><!--//media-->
                    <hr>
                </div><!--//item-->
                
            
                
                
             
                
            </div>
        </section>
        
      
        
    </div><!--//main-wrapper-->
    
<br><br><br>


<?php include 'footer.php'; ?>
