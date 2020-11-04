<?php 
include 'header.php'; 
include '../netting/baglan.php';
$instasor=$db->prepare("SELECT * from insta where insta_id=:insta_id");
$instasor->execute(array(
  'insta_id'=>$_GET['insta_id'] ));
$instacek=$instasor->fetch(PDO::FETCH_ASSOC);

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
            <h2>İnstagram</h2>

            <div class="clearfix"></div>
          </div>

          <div class="x_content">

            <form action="../netting/islem.php" method="POST" enctype="multipart/form-data"data-parsley-validate class="form-horizontal form-label-left">
              <input type="hidden" name="insta_id" value="<?php echo $instacek ['insta_id']; ?>" >

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">insta Tarih <span class="required">*</span>
                </label>
                
                <div class="col-md-3">
                  <input type="date" id="first-name" required="required" name="insta_tarih" value="<?php echo date('Y-m-d'); ?>" class="form-control col-md-7 col-xs-12">
                </div>
                <div class="col-md-3">
                  <input type="time" id="first-name" required="required" name="insta_saat"  value="<?php echo date('H:i:s'); ?>" class="form-control col-md-7 col-xs-12">
                </div>
                
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">insta data <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" name="insta_data" class="form-control col-md-7 col-xs-12" value="<?php echo $instacek['insta_data']; ?>" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">insta acıklama <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">


                 <textarea class="ckeditor" name="insta_acik">
<?php echo $instacek['insta_acik']; ?>
                 </textarea>                 

                 
               </div>
             </div>



             <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

              <button type="submit" name="instaduzenle" class="btn btn-primary">Kaydet</button>
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