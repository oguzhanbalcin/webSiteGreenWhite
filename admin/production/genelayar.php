<?php 
include 'header.php'; 
include '../netting/baglan.php';
$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ayarlar</h3>
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
                  <?php if (strlen($ayarcek['ayar_logo'])>0) {?>
                   <img width="200"  src="../../<?php echo $ayarcek['ayar_logo']; ?>">
                 <?php  }else{?>
                  <img width="200"  src="../../assets/images/">
                <?php } ?> 
              </div>
            </div>
            <div class="form-group">

              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">LOGO
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">

                <input type="file" id="first-name"  name="ayar_logo" class="form-control col-md-7 col-xs-12">
              </div>

            </div>

            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <input type="hidden" name="ayar_id" value="<?php echo $ayarcek ['ayar_id']; ?>" >

              <input type="hidden" name="eski_yol" value="<?php echo $ayarcek ['ayar_logo']; ?>" >

              <button type="submit" name="logoduzenle" class="btn btn-primary">LOGO Güncelle</button>
            </div>
          </form>
          <br>
          <hr>
          <br>

          <form action="../netting/islem.php" method="POST" enctype="multipart/form-data"data-parsley-validate class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Yüklü logo 313x103 px
                </label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <?php if (strlen($ayarcek['ayar_titlelogo'])>0) {?>
                   <img width="200"  src="../../<?php echo $ayarcek['ayar_titlelogo']; ?>">
                 <?php  }else{?>
                  <img width="200"  src="../../assets/images/">
                <?php } ?> 
              </div>
            </div>
            <div class="form-group">

              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sekmedeki LOGO
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">

                <input type="file" id="first-name"  name="ayar_titlelogo" class="form-control col-md-7 col-xs-12">
              </div>

            </div>

            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <input type="hidden" name="ayar_id" value="<?php echo $ayarcek ['ayar_id']; ?>" >

              <input type="hidden" name="eski_yol1" value="<?php echo $ayarcek ['ayar_titlelogo']; ?>" >

              <button type="submit" name="titlelogoduzenle" class="btn btn-primary">Logo Güncelle</button>
            </div>
          </form>
           <br>
          <hr>
          <br>
          <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
           <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Logo altındaki yazı <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" name="ayar_yazi" value="<?php echo $ayarcek['ayar_yazi'] ?>" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Logo üstündeki yazı <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" name="ayar_sitead"  value="<?php echo $ayarcek['ayar_sitead'] ?>"class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Sekme Adı <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" name="ayar_title" value="<?php echo $ayarcek['ayar_title'] ?>"class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          
          

          <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

            <button type="submit" name="genelayarkaydet" class="btn btn-primary">Güncelle</button>
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