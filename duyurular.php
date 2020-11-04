<?php 
include 'header.php';
?>

<style>
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 4px 12px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  font-size: 12px;
}

.pagination a.active {
  background-color: #5FCB71;
  color: white;
  border: 1px solid #5FCB71;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
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

            <section class="blog-list px-3 py-5 p-md-5">
                <div class="container">



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
                <?php 
                $sayfada=5;
                $sorgu=$db->prepare("SELECT * from icerik");
                $sorgu->execute();
                $toplam_icerik=$sorgu->rowCount();
                $toplam_sayfa=ceil($toplam_icerik/$sayfada);
                $sayfa=isset($_GET['sayfa'])?(int)$_GET['sayfa']:1;
                if($sayfa<1)$sayfa=1;
                if ($sayfa>$toplam_sayfa) {
                    $sayfa=$toplam_sayfa;
                }
                $limit=($sayfa-1)*$sayfada;
                $iceriksor=$db->prepare("SELECT * from icerik order by icerik_zaman DESC limit $limit,$sayfada");
                $iceriksor->execute();


                while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <hr>
                    <div class="item mb-5">
                        <div class="media">
                            <img class="mr-3 img-fluid post-thumb d-md-flex" src="<?php echo  $icerikcek['icerik_resimyol'];?>" alt="image">
                            <div class="media-body">
                                <h3 class="title mb-1"><a href="notlar-<?=seo($icerikcek["icerik_ad"]).'-'.$icerikcek["icerik_id"]?>"><?php echo  $icerikcek['icerik_ad'];?></a></h3>
                                <div class="meta mb-1"><span class="date">Yayınlanma Tarihi</span><span class="time"><?php echo  $icerikcek['icerik_zaman'];?></span></div>
                                <div class="intro"><?php echo substr( $icerikcek['icerik_detay'],0,1010); ?><br><a class="mt-md" href="notlar-<?=seo($icerikcek["icerik_ad"]).'-'.$icerikcek["icerik_id"]?>">Devamını oku<i class="fa fa-long-arrow-right"></i></a>

                                </div><!--//media-body-->
                            </div><!--//media-->
                            <hr>
                            </div><!--//item--><?php  }?>


   



          
       
 
                         <div align="right " class="col-md-12">
                            <ul class="pagination">
                                <?php 
$s=0;
while ($s<$toplam_sayfa) {
  $s++; ?><?php if ($s==$sayfa) {?>
    <a class="active" href="duyurular.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>

<?php }else { ?>
    <a href="duyurular.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a><?php } ?>

          
         <?php } ?>
                                

                            </ul>
                            </div>



                        </div>
                    </section>


                </div><!--//main-wrapper-->





                <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  


                <!-- Javascript -->          
                <?php include 'footer.php'; ?>
