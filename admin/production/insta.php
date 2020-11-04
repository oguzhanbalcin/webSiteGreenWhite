<?php include 'header.php';
include '../netting/baglan.php';
if (isset($_POST['arama'])) {
  $aranan=$_POST['aranan'];
  $instasor=$db->prepare("SELECT * from insta where insta_zaman LIKE '%$aranan%' order by insta_zaman DESC ");
  $instasor->execute();
  $say=$instasor->rowCount();
  # code...
}
else{
  $instasor=$db->prepare("select * from insta order by insta_id DESC ");
  $instasor->execute();
  $say=$instasor->rowCount();

}

?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>icerik İşlemleri <small color="red"><?php echo $say; ?> kayıt listelendi...</small></h3> 
        
      </div>
      <div align="right" class="col-md-12">
        <a href="instaekle.php"><button style="width: 80px; margin-top: -30px;" class="btn btn-danger btn-xs"><i class="fa fa-plus" aria-hidden="true"></i> yeni ekle</button>
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

                      <th width="120" class="column-title">icerik traih </th>
                      <th class="column-title">icerik Ad </th>

                      <th width="80" class="column-title"> </th>
                      <th width="80" class="column-title"> </th>
                      

                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <?php 

                      while ($instacek=$instasor->fetch(PDO::FETCH_ASSOC)) {
                       ?>
                       <td class=" "><?php echo  $instacek['insta_data'];?></td>

                       <td class=" "><?php echo  $instacek['insta_acik'];?></td>
                       
                   
                       <td class=" "><a href="instaduzenle.php?insta_id=<?php echo  $instacek['insta_id'];?>"><button style="width:80px"  class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Düzenle</button></a></td>
                       <td class=" "> <a href="../netting/islem.php?instasil=ok&insta_id=<?php echo  $instacek['insta_id'];?>"> <button style="width:60px"class="btn btn-danger btn-xs"><i class="fa fa-pencil"  aria-hidden="true"></i>  Sil</button></a></td>



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