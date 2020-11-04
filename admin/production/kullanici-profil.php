<?php 
include 'header.php'; 
include '../netting/baglan.php';

?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Profil <?php echo $kullanicicek['kullanici_adsoyad'] ?></h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Anahtar Kelimeniz...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Ara!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Genel ayarlar <small><?php if ($_GET['durum']=='ok') {?>
                <b style="color:green">Güncelleme başarılı..</b>
              <?php  } elseif ($_GET['durum']=='no') {?>
                <b style="color:red">Güncelleme başarısız..</b>
              <?php   } ?>
              


            </small></h2>

            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <form action="../netting/islem.php" method="POST" enctype="multipart/form-data"data-parsley-validate class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Yüklü logo 313x103 px
                </label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <?php if (strlen($kullanicicek['kullanici_resim'])>0) {?>
                   <img width="200"  src="../../<?php echo $kullanicicek['kullanici_resim']; ?>">
                 <?php  }else{?>
                  <img width="200"  src="../../dimg/logoyok.png">
                <?php } ?> 
              </div>
            </div>
            <div class="form-group">

              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">LOGO
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">

                <input type="file" id="first-name"  name="kullanici_resim" class="form-control col-md-7 col-xs-12">
              </div>

            </div>

            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek ['kullanici_id']; ?>" >

              <input type="hidden" name="eski_yol" value="<?php echo $kullanicicek ['kullanici_resim']; ?>" >

              <button type="submit" name="kresimduzenle" class="btn btn-primary">LOGO Güncelle</button>
            </div>
          </form>
          <br>
          <hr>
          <br>
       <!--   <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
           <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site adresi <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" name="ayar_siteurl" value="<?php echo $ayarcek['ayar_siteurl'] ?>" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site başlığınız <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" name="ayar_title"  value="<?php echo $ayarcek['ayar_title'] ?>"class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Açıklama <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" name="ayar_description" value="<?php echo $ayarcek['ayar_description'] ?>"class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site keywords <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" name="ayar_keywords" value="<?php echo $ayarcek['ayar_keywords'] ?>"class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site yazar <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" value="<?php echo $ayarcek['ayar_author'] ?>" name="ayar_author" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

            <button type="submit" name="genelayarkaydet" class="btn btn-primary">Güncelle</button>
          </div>




        </form>-->



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