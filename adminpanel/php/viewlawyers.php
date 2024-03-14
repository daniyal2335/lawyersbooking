<?php
include('query.php');
include('sidenav.php');

?>

 <!-- Blank Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6">
                        <h3>Lawyers view</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>city</th>
                                    <th>Education</th>
                                    <th>Experience</th>
                                    <th>Des</th>
                                    <th>Specialization</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                               $query=$pdo->query("select * from lawyers");
                               $allLawyers=$query->fetchAll(PDO::FETCH_ASSOC);
                               foreach ($allLawyers as $law) {
                                
                               ?>
                                <tr>
                                    <td scope="row"><?php echo $law['name']?></td>
                                    <td><?php echo $law['email']?></td>
                                    <td><?php echo $law['contact']?></td>
                                    <td><?php echo $law['city']?></td>
                                    <td><?php echo $law['Education']?></td>
                                    <td><?php echo $law['experience']?></td>
                                    <td><?php echo $law['des']?></td>
                                    <td><?php echo $law['specialization']?></td>
                                    <td><img height="50px" src="../assets/img/<?php echo $law ['image']?>" alt=""></td>
                                    <td><a href="editLawyers.php?lid=<?php echo $law['id']?>" class="btn btn-info">Edit</a></td>
                                    <td><a href="?ldid=<?php echo $law['id']?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                               }
                               ?>
                            </tbody>
                        </table>
                        </div>
                            </div>
                            </div>
