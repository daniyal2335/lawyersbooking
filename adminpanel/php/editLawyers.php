<?php 
include('query.php');
include('sidenav.php');
if(isset($_GET['lid'])){
  $id=$_GET['lid'];
  $query=$pdo->prepare("select * from lawyers where id=:lid");
  $query->bindParam('lid',$id);
  $query->execute();
  $law=$query->fetch(PDO::FETCH_ASSOC);
  }
?>
    <!-- Blank Start -->
    <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center">
                        <h3>This is edit lawyer Page</h3>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="">Name</label>
                              <input type="text" name="lName" value="<?php echo $law['name']?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                            <div class="form-group">
                              <label for="">Email</label>
                              <input type="email" name="lEmail" id="" value="<?php echo $law['email']?>" class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                            <div class="form-group">
                              <label for="">Specialization</label>
                              <input type="text" name="lSpeci" id="" value="<?php echo $law['specialization']?>" class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                            <div class="form-group">
                              <label for="">Des</label>
                              <input type="text" name="lDes" id="" value="<?php echo $law['des']?>"  class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                            <div class="form-group">
                              <label for="">City</label>
                              <input type="text" name="lCity" id=""  value="<?php echo $law['city']?>"   class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                            <div class="form-group">
                              <label for="">contact</label>
                              <input type="tel" name="lCon" id="" value="<?php echo $law['contact']?>"  class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                            <div class="form-group">
                              <label for="">Education</label>
                              <input type="text" name="lEdu" id="" value="<?php echo $law['Education']?>" class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                            <div class="form-group">
                              <label for="">Experience</label>
                              <input type="text" name="lexp" id="" value="<?php echo $law['experience']?>" class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                            <div class="form-group">
                              <label for="">image</label>
                              <input type="file" name="lImage" id="" value="<?php echo $law['image']?>" class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                         
                            <button type="submit" name="updateLawyers" class="btn btn-danger">update Lawyers</button>
                        </form>
                        </div>
                </div>
            </div>
