<?php include 'header.php';
include '../netting/baglan.php';
if (isset($_POST['arama'])) {
  $aranan=$_POST['aranan'];
  $kategorisor=$db->prepare("SELECT * from kategori where kategori_ad LIKE '%$aranan%' order by kategori_id DESC ");
  $kategorisor->execute();
  $say=$kategorisor->rowCount();
  # code...
}
else{
  $kategorisor=$db->prepare("SELECT * from kategori where kategori_alt=:kategori_alt ");
  $kategorisor->execute(array(
    'kategori_alt'=> 0
  ));  
  $say=$kategorisor->rowCount();

}

?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>kategori İşlemleri <small color="red"><?php echo $say; ?> kayıt listelendi...</small></h3> 
        
      </div>
      <div align="right" class="col-md-12">
        <a href="kategoriekle.php"><button style="width: 80px; margin-top: -30px;" class="btn btn-danger btn-xs"><i class="fa fa-plus" aria-hidden="true"></i> yeni ekle</button>
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
                      <th width="20" class="column-title">kategori id </th>

                     <th class="column-title">kategori Ad </th>
                     

                     <th class="column-title">Üst kategori </th>


                     <th width="80" class="column-title"> </th>
                     <th width="80" class="column-title"> </th>


                   </tr>
                 </thead>

                 <tbody>

                  <?php 

                  while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
                    $kategori_id=$kategoricek['kategori_id'];
                    ?>

                    <tr>
                     <td class=" "><?php echo  $kategoricek['kategori_id'];?></td>

                     <td class=" "><?php echo  $kategoricek['kategori_ad'];?></td>

                     <td class=" "><?php echo  $kategoricek['kategori_alt'];?></td>
                   
                    <td class=" "><a href="kategoriduzenle.php?kategori_id=<?php echo  $kategoricek['kategori_id'];?>"><button style="width:80px"  class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Düzenle</button></a></td>
                    <td class=" "> <a href="../netting/islem.php?kategorisil=ok&kategori_id=<?php echo  $kategoricek['kategori_id'];?>&kategori_resimyol=<?php echo $kategoricek['kategori_resimyol']; ?>"> <button style="width:60px"class="btn btn-danger btn-xs"><i class="fa fa-pencil"  aria-hidden="true"></i>  Sil</button></a></td>
                    <?php 
                    $altkategorisor=$db->prepare("SELECT * from kategori where kategori_alt=:kategori_id   ");
                    $altkategorisor->execute(array(
                      'kategori_id'=>$kategori_id
                    ));

                    while ($altkategoricek=$altkategorisor->fetch(PDO::FETCH_ASSOC)) {
                     ?>
                     <tr>
                       <td class=" "><?php echo  $altkategoricek['kategori_id'];?></td>

                       <td class=" ">-----&nbsp;&nbsp;<?php echo  $altkategoricek['kategori_ad'];?></td>


                       <td class=" "><?php echo  $altkategoricek['kategori_alt'];?></td>
                     
                      <td class=" "><a href="kategoriduzenle.php?kategori_id=<?php echo  $altkategoricek['kategori_id'];?>"><button style="width:80px"  class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Düzenle</button></a></td>
                      <td class=" "> <a href="../netting/islem.php?kategorisil=ok&kategori_id=<?php echo  $altkategoricek['kategori_id'];?>&kategori_resimyol=<?php echo $altkategoricek['kategori_resimyol']; ?>"> <button style="width:60px"class="btn btn-danger btn-xs"><i class="fa fa-pencil"  aria-hidden="true"></i>  Sil</button></a></td>




                    </tr>


                  </tr>
                <?php } }?>
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