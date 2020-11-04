<?php 
include 'header.php';$iceriksor=$db->prepare("SELECT * from icerik where icerik_id=:icerik_id");
$iceriksor->execute(array(
    'icerik_id'=>$_GET['icerik_id']
));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);
?>

<div class="main-wrapper">
    
     
        <section class="blog-list px-3 py-5 p-md-5">
            <div class="container">
                
                
           
                
                  
            <div role="main" class="float-center">
                <div class="container">
                    <div class="row pt-xl">
                        <div class="col-md-12">
                            <h1 class="mt-xl mb-none"><?php echo $icerikcek['icerik_ad']; ?></h1>
                            <div class="divider divider-primary divider-small mb-xl">
                                <hr>
                            </div>
                            <p> <?php echo $icerikcek['icerik_detay']; ?></p>
                            

                        </div>
                        
                    </div>
                </div>
            </div>
                
            </div>
        </section>
        
       
        
    </div>
    

               
    <?php include 'footer.php'; ?>
