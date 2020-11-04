<?php 
include 'header.php'; 
include '../netting/baglan.php';
$hakkimizdasor=$db->prepare("select * from hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
?>
<head><script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
</head>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Hakkımızda Sayfası</h3>
      </div>

      
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Hakkımızda Sayfası Düzenleme <small><?php if ($_GET['durum']=='ok') {?>
                <b style="color:green">Güncelleme başarılı..</b>
             <?php  } elseif ($_GET['durum']=='no') {?>
                <b style="color:red">Güncelleme başarısız..</b>
            <?php   } ?>
              


           </small></h2>

              <div class="clearfix"></div>
            </div>

            <div class="x_content">

              <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
               <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hakkkımızda başlık <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" name="hakkimizda_baslik" value="<?php echo $hakkimizdacek['hakkimizda_baslik'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hakkımızda İçerik <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                  
                    <textarea class="ckeditor" name="hakkimizda_icerik">
                     <?php echo $hakkimizdacek['hakkimizda_icerik']?>
                   </textarea>              


            
                 
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Video <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" name="hakkimizda_video" value="<?php echo $hakkimizdacek['hakkimizda_video'] ?>"class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Vizyon <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" name="hakkimizda_vizyon" value="<?php echo $hakkimizdacek['hakkimizda_vizyon'] ?>"class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Misyon <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" value="<?php echo $hakkimizdacek['hakkimizda_misyon'] ?>" name="hakkimizda_misyon" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                <button type="submit" name="hakkimizdakaydet" class="btn btn-primary">Güncelle</button>
              </div>




            </form>



          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
</div>
</div>
</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>