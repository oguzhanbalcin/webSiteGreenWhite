<?php 
include 'header.php';
$hakkimizdasor=$db->prepare("select * from hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
?>

<div class="main-wrapper">
    
     
        <section class="blog-list px-3 py-5 p-md-5">
            <div class="container">
                
                
           
                
                  
            <div role="main" class="float-center">
                <div class="container">
                    <div class="row pt-xl">
                        <div class="col-md-12">
                            <h1 class="mt-xl mb-none"><?php echo $hakkimizdacek['hakkimizda_baslik']; ?></h1>
                            <div class="divider divider-primary divider-small mb-xl">
                                <hr>
                            </div>
                            <p> <?php echo $hakkimizdacek['hakkimizda_icerik']; ?></p>
                            

                        </div>
                        
                    </div>
                </div>
            </div>
                
            </div>
        </section>
        
       
        
    </div>
    

               
    <?php include 'footer.php'; ?>
