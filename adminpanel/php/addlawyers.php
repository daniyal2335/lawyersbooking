<?php
include('query.php');
include('sidenav.php');

?>

            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center">
                        <h3>This is Add lawyers Page</h3>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="">Name</label>
                              <input type="text" name="lName" id="" class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                            <div class="form-group">
                              <label for="">Email</label>
                              <input type="email" name="lEmail" id="" class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                            <div class="form-group">
                              <label for="">Specialization</label>
                              <input type="text" name="lSpeci" id="" class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                            <div class="form-group">
                              <label for="">Des</label>
                              <input type="text" name="lDes" id="" class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                            <div class="form-group">
                              <label for="">City</label>
                              <input type="text" name="lCity" id="" class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                            <div class="form-group">
                              <label for="">contact</label>
                              <input type="tel" name="lCon" id="" class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                            <div class="form-group">
                              <label for="">Education</label>
                              <input type="text" name="lEdu" id="" class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                            <div class="form-group">
                              <label for="">Experience</label>
                              <input type="text" name="lexp" id="" class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                            <div class="form-group">
                              <label for="">image</label>
                              <input type="file" name="lImage" id="" class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                         
                            <button type="submit" name="addLawyers" class="btn btn-danger">Add Lawyers</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->

