<?php 
include 'header.php';$slidersor=$db->prepare("SELECT * from slider where slider_id=:slider_id");
$slidersor->execute(array(
    'slider_id'=>$_GET['slider_id']
));
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);
?>

<div class="main-wrapper">
    
     
        <section class="blog-list px-3 py-5 p-md-5">
            <div class="container">
                
                
           
                
                  
            <div role="main" class="float-center">
                <div class="container">
                    <div class="row pt-xl">
                        <div class="col-md-12">
                            <h1 class="mt-xl mb-none"><?php echo $slidercek['slider_ad']; ?></h1>
                            <div class="divider divider-primary divider-small mb-xl">
                                <hr>
                            </div>
                            <p> <?php echo $slidercek['slider_link']; ?></p>
                            

                        </div>
                        
                    </div>
                </div>
            </div>
                
            </div>
        </section>
        
       
        
    </div>
    

               
    <?php include 'footer.php'; ?>
