<?php 
include 'header.php'; 
include '../netting/baglan.php';
date_default_timezone_set('Europe/Istanbul');
?>
<head>

  <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">

</head>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>menu işlemleri<small><?php if ($_GET['durum']=='ok') {?>
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
            <h2>İçerik</h2>

            <div class="clearfix"></div>
          </div>

          <div class="x_content">

            <form action="../netting/islem.php" method="POST" data-parsley-validate class="form-horizontal form-label-left">
             <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Alt kategori</label>
              <div class="col-md-6 col-sm-6 col-xs-9">
                <select class="select2_single form-control" required="" name="kategori_alt" tabindex="-1">
                  <option></option>
                  <option value="0">Üst kategori</option>
                  <?php 
                 $kategorisor=$db->prepare("SELECT * from kategori where kategori_alt=:kategori_alt order by kategori_id  ");
                  $kategorisor->execute(array(
                    'kategori_alt'=> 0
                  ));  
                  while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
                  ?>
                  <option value="<?php echo $kategoricek['kategori_id']; ?>"><?php  echo $kategoricek['kategori_ad']; ?></option>
                <?php } ?>


              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Ekle <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" name="kategori_ad" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
         

       

       <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

        <button type="submit" name="kategorikaydet" class="btn btn-primary">Kaydet</button>
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
<script src="../vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Select2 -->
<script>
  $(document).ready(function() {
    $(".select2_single").select2({
      placeholder: "Select a state",
      allowClear: true
    });
    $(".select2_group").select2({});
    $(".select2_multiple").select2({
      maximumSelectionLength: 4,
      placeholder: "With Max Selection limit 4",
      allowClear: true
    });
  });
</script>
<!-- /Select2 -->

<?php include 'footer.php'; ?>