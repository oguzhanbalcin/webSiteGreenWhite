<?php 
include 'header.php'; 
include '../netting/baglan.php';
$iceriksor=$db->prepare("SELECT * from icerik where icerik_id=:icerik_id");
$iceriksor->execute(array(
  'icerik_id'=>$_GET['icerik_id'] ));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>icerik işlemleri<small><?php if ($_GET['durum']=='ok') {?>
          <b style="color:green">Güncelleme başarılı..</b>
        <?php  } elseif ($_GET['durum']=='no') {?>
          <b style="color:red">Güncelleme başarısız..</b>
        <?php   } ?>



      </small></h3>
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
            <h2>icerik</h2>

            <div class="clearfix"></div>
          </div>

          <div class="x_content">

            <form action="../netting/islem.php" method="POST" enctype="multipart/form-data"data-parsley-validate class="form-horizontal form-label-left">
              <input type="hidden" name="icerik_id" value="<?php echo $icerikcek ['icerik_id']; ?>" >
              <input type="hidden" name="icerik_resimyol" value="<?php echo $icerikcek ['icerik_resimyol']; ?>" >
              <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Yüklü Resim
               </label>
               <div class="col-md-8 col-sm-8 col-xs-12">
                 <img width="200" height="100" src="../../<?php echo $icerikcek['icerik_resimyol']; ?>">
               </div>
             </div>
             <div class="form-group">

              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">icerik resimyol 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="file" id="first-name"  name="icerik_resimyol" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">icerik ad <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" name="icerik_ad" class="form-control col-md-7 col-xs-12" value="<?php echo $icerikcek['icerik_ad']; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">içerik Önceki Tarih <span class="required">*</span>
              </label>

              <div class="col-md-6">
                <input type="datetime" id="first-name" required="required" name="" value="<?php echo $icerikcek['icerik_zaman'] ?>" class="form-control col-md-7 col-xs-12">
              </div>


            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">içerik Tarih <span class="required">*</span>
              </label>

              <div class="col-md-3">
                <input type="date" id="first-name" required="required" name="icerik_tarih" value="<?php echo date('Y-m-d'); ?>" class="form-control col-md-7 col-xs-12">
              </div>
              

            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Detay <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">


               <textarea class="ckeditor" name="icerik_detay">
                <?php echo $icerikcek['icerik_detay']; ?>

              </textarea>                 


            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">icerik durum <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
             <select id="heard" class="form-control" name="icerik_durum" required>
              <?php if ($icerikcek['icerik_durum']==1) {?>
               <option value="1">Aktif</option>
               <option value="0">Pasif</option>

             <?php } else {  ?>

              <option value="0">Pasif</option>
              <option value="1">Aktif</option>                
            <?php } ?>

          </select>
        </div>
      </div>
      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

        <button type="submit" name="icerikduzenle" class="btn btn-primary">Kaydet</button>
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