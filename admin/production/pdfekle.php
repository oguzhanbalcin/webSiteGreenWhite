<?php 
include 'header.php'; 
include '../netting/baglan.php';
date_default_timezone_set('Europe/Istanbul');
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


  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>İçerik</h2>

            <div class="clearfix"></div>
          </div>

          <div class="x_content">

            <form action="../netting/islem.php" method="POST" enctype="multipart/form-data"data-parsley-validate class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">pdf  <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="first-name" required="required" name="pdf_yol" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">pdf Başlık <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" name="pdf_ad" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

             
             
             <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">pdf durum <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <select id="heard" class="form-control" name="pdf_durum" required>
                 <option value="1">Aktif</option>
                 <option value="0">Pasif</option>

               </select>
             </div>
           </div>
           

           <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

            <button type="submit" name="pdfkaydet" class="btn btn-primary">Kaydet</button>
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



<!-- /page content -->

<?php include 'footer.php'; ?>