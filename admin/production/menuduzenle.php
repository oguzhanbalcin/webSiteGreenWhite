<?php 
include 'header.php'; 
include '../netting/baglan.php';
$menusor=$db->prepare("SELECT * from menu where menu_id=:menu_id");
$menusor->execute(array(
  'menu_id'=>$_GET['menu_id'] ));
$menucek=$menusor->fetch(PDO::FETCH_ASSOC);

?>

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
            <h2>Menü düzenleme</h2>

            <div class="clearfix"></div>
          </div> 

          <div class="x_content">

            <form action="../netting/islem.php" method="POST" enctype="multipart/form-data"data-parsley-validate class="form-horizontal form-label-left">
              <input type="hidden" name="menu_id" value="<?php echo $menucek ['menu_id']; ?>" >

              

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Ad <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" name="menu_ad" class="form-control col-md-7 col-xs-12" value="<?php echo $menucek['menu_ad']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü url <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" name="menu_url" value="<?php echo $menucek['menu_url']; ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü seourl <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" name="menu_seourl" value="<?php echo $menucek['menu_seourl']; ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">menü Detay <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">


                 <textarea class="ckeditor" name="menu_detay">
                  <?php echo $menucek['menu_detay']; ?>

                </textarea>                 


              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">menu durum <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <select id="heard" class="form-control" name="menu_durum" required>
                <?php if ($menucek['menu_durum']==1) {?>
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

          <button type="submit" name="menuduzenle" class="btn btn-primary">Kaydet</button>
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
<!-- /page content -->

<?php include 'footer.php'; ?>