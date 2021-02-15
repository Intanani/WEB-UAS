<h2>Edit Tentang</h2>
        <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Successfully Updated !
</div>
      <?php
  }  
 } 
?> 
         <form method="post" action="php/uabout.php">
         <div class="form-row">
             <div class="form-group col-md-12">
    <label for="ptitle">Professional Heading</label>
    <input type="text" name="ptitle" value="<?=$data['heading']?>" class="form-control" id="ptitle" placeholder="Masukan Data">
  </div>
        <div class="form-group col-md-12">
    <label for="psubtitle">Subheading</label>
    <input type="text" name="psubtitle" value="<?=$data['subheading']?>" class="form-control" id="psubtitle" placeholder="Masukan Data">
  </div>
    <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Nama Toko </label>
    <textarea class="form-control" name="shortdesc" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Data"><?=$data['shortdesc'];?></textarea>
  </div>
        <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Deskripsi Toko</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="longdesc" placeholder="Masukan Data"><?=$data['longdesc'];?>
    </textarea>
  </div>    
        
        <div class="form-group col-md-6">
    <label for="bd">Instagram toko</label>
    <input type="text" name="dob" value="<?=$data['dob']?>" class="form-control" id="dob" placeholder="Tanggal Bulan, Tahun">
  </div>
        
     <div class="form-group col-md-6">
    <label for="website">Website</label>
    <input type="text" name="website" value="<?=$data['website']?>" class="form-control" id="website" placeholder="https://bebas.com">
  </div>
         </div>
         <input type="submit" name="save" class="btn btn-primary" value="Simpan Perubahan">
