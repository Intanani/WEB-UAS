<h2>Edit Penghasilan</h2>
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
         <form method="post" action="php/useo.php">
          </form>
         <hr>
         <h4 ID="skillsection">Keuntungan</h4>
         
         <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>No</th>
              <th>Bulan</th>
              <th>Tingkat Keuntungan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
         <?php
$query2="SELECT * FROM skills";
$queryrun2=mysqli_query($db,$query2);
$count=1;         
while($data2=mysqli_fetch_array($queryrun2)){
    ?>
     <tr>
         <div class="modal fade" id="modal<?=$data2['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Edit</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="skilleditbox">
       <form method="post" action="php/supdate.php">
       <input type="hidden" name="id" value="<?=$data2['id']?>">
        <div class="form-row">
            <div class="form-group col-md-6">
    <label for="website">Bulan</label>
    <input type="text" name="skill" value="<?=$data2['skill']?>" class="form-control" id="website" placeholder="Masukan Skill Anda">
  </div>
       <div class="form-group col-md-6">
    <label for="website">Tingkat Keuntungan</label>
    <input type="text" name="score" value="<?=$data2['score']?>" class="form-control" id="website" placeholder="1-100">
  </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="supdate" value="Update">
          </form>
      </div>
    </div>
  </div>
</div>   
          <td>#<?=$count?></td>
              <td><?=$data2['skill']?></td>
         <td><?=$data2['score']?>%</td>
         <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?=$data2['id']?>">
  Edit
</button> <a href="php/supdate.php?del=<?=$data2['id']?>"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  Delete
             </button></a></td>
            </tr>            
         <?php $count++;
} ?>
             </tbody></table>
             <form action="php/supdate.php" method="post">
                 <div class="form-row">
                     <div class="form-group col-md-5">
    <label for="sn">Bulan</label>
    <input type="text" name="skill" class="form-control" id="website" placeholder="Masukan Skill Anda" required>
  </div><div class="form-group col-md-5">
    <label for="website">Tingkat Keuntungan</label>
    <input type="text" name="score" class="form-control" id="website" placeholder="1-100" required>
  </div>
   <div class="form-group col-md-2">
     <label class="text-white">submit</label>
      <input type="submit" name="addskill" class="btn btn-primary form-control" value="Tambah Skill"> 
   </div>
                
                 </div>
             </form>