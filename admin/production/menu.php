<?php include 'header.php';
include '../netting/baglan.php';
if (isset($_POST['arama'])) {
  
  # code...
}
$aranan=$_POST['aranan'];
  $menusor=$db->prepare("SELECT * from menu");
  $menusor->execute();
  $say=$menusor->rowCount();

?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>menu İşlemleri <small color="red"><?php echo $say; ?> kayıt listelendi...</small></h3> 
        
      </div>
      <div align="right" class="col-md-12">
        <a href="menuekle.php"><button style="width: 80px; margin-top: -30px;" class="btn btn-danger btn-xs"><i class="fa fa-plus" aria-hidden="true"></i> yeni ekle</button>
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
                      <th width="20" class="column-title">Menu id </th>

                     <th class="column-title">Menu Ad </th>
                     

                     <th class="column-title">Menu url </th>

                     <th class="column-title">menu detay </th>
                     <th class="column-title">Menu Durum </th>

                     <th width="80" class="column-title"> </th>
                     <th width="80" class="column-title"> </th>


                   </tr>
                 </thead>

                 <tbody>

                  <?php 

                  while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {
                    $menu_id=$menucek['menu_id'];
                    ?>

                    <tr>
                     <td class=" "><?php echo  $menucek['menu_id'];?></td>

                     <td class=" "><?php echo  $menucek['menu_ad'];?></td>

                     <td class=" "><?php echo  $menucek['menu_url'];?></td>
                     <td class=" "><?php echo  $menucek['menu_detay'];?></td>

                     <td class=" "><?php if ($menucek['menu_durum']==1) {
                       echo "AKTİF";
                     } else{
                      echo "PASİF";
                    }


                    ?></td>
                    <td class=" "><a href="menuduzenle.php?menu_id=<?php echo  $menucek['menu_id'];?>"><button style="width:80px"  class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Düzenle</button></a></td>
                    <td class=" "> <a href="../netting/islem.php?menusil=ok&menu_id=<?php echo  $menucek['menu_id'];?>"> <button style="width:60px"class="btn btn-danger btn-xs"><i class="fa fa-pencil"  aria-hidden="true"></i>  Sil</button></a></td>
                    
                    




             
                <?php  }?>
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