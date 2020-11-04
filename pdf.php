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

                    <?php
                    $pdfsor=$db->prepare("SELECT * from pdf ");
                    $pdfsor->execute();
                    $say=$pdfsor->rowCount();?>

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
                
 <table class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr class="headings">
                      <th class="column-title">pdf ad</th>

<th></th>
                      

                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <?php 

                      while ($pdfcek=$pdfsor->fetch(PDO::FETCH_ASSOC)) {
                       ?>
                       <td class=" "><?php echo  $pdfcek['pdf_ad'];?></td>



                       

                      <td class=" "> <a href="<?php echo  $pdfcek['pdf_yol'];?>" open _blank><button style="width:100px,color:red"  class="btn btn-primary btn-xs"><i class="fa fa-file" aria-hidden="true"></i> İndir</button></a></td>
                   


                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
        </section>


    </div><!--//main-wrapper-->





    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  


    <!-- Javascript -->          
    <?php include 'footer.php'; ?>
