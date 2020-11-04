<?php include 'header.php';
include '../netting/baglan.php';
if (isset($_POST['arama'])) {
  $aranan=$_POST['aranan'];
  $pdfsor=$db->prepare("select * from pdf where pdf_ad LIKE '%$aranan%' order by pdf_id DESC ");
  $pdfsor->execute();
  $say=$pdfsor->rowCount();
  # code...
}
else{
  $pdfsor=$db->prepare("select * from pdf order by pdf_id DESC ");
  $pdfsor->execute();
  $say=$pdfsor->rowCount();

}

?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>pdf İşlemleri <small color="red"><?php echo $say; ?> kayıt listelendi...</small></h3> 
        
      </div>
      <div align="right" class="col-md-12">
        <a href="pdfekle.php"><button style="width: 80px; margin-top: -30px;" class="btn btn-danger btn-xs"><i class="fa fa-plus" aria-hidden="true"></i> yeni ekle</button>
        </a> </div>

      </div>

    </div>

    <form action="" method="POST">
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" name="aranan" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit" name="arama">Ara!</button>
            </span>
          </div>
        </form>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">


            <div class="x_content">

              <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr class="headings">


                      <th class="column-title">pdf id</th>
                      <th class="column-title">pdf ad</th>

                      <th class="column-title">pdf Durum </th>

                      

                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <?php 

                      while ($pdfcek=$pdfsor->fetch(PDO::FETCH_ASSOC)) {
                       ?>
                       <td class=" "><?php echo  $pdfcek['pdf_id'];?></td>
                       <td class=" "><?php echo  $pdfcek['pdf_ad'];?></td>



                       
                       <td class=" "><?php if ($pdfcek['pdf_durum']==1) {
                         echo "AKTİF";
                       } else{
                        echo "PASİF";
                      }


                      ?></td>
                      <td class=" "><a href="pdfduzenle.php?pdf_id=<?php echo  $pdfcek['pdf_id'];?>"><button style="width:80px"  class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Düzenle</button></a></td>
                      <td class=" "> <a href="../netting/islem.php?pdfsil=ok&pdf_id=<?php echo  $pdfcek['pdf_id'];?>&pdf_yol=<?php echo $pdfcek['pdf_yol']; ?>"> <button style="width:60px"class="btn btn-danger btn-xs"><i class="fa fa-pencil"  aria-hidden="true"></i>  Sil</button></a></td>



                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- /page content -->

<!-- /page content -->

<?php include 'footer.php'; ?>