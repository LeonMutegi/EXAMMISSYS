<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lecturers View</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="lecturer.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Lecturer View <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="lecturer.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
 

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

    

      <!-- Nav Item - Charts -->
     

      <!-- Nav Item - Tables -->
     
      <li class="nav-item">
        <a class="nav-link" href="courselist3.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Course List</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Student List</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
          </form>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

           
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Lecturer</span>
                <img class="img-profile rounded-circle" src="profile.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Student List</h1>
        
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"></h6>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddbuttonModal">ADD DATA</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <?php 
                     $connection = mysqli_connect("localhost","root","");
                     $db = mysqli_select_db($connection, 'exam_mis');

                     $query = "SELECT * FROM students_view1 ";
                     $query_run = mysqli_query($connection,$query);
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				         <thead>
                    <tr>
                      <th>Student ID</th>
                      <th>Student Name</th>
                      <th>Student No</th>
                      <th>Course</th>
                      <th>Attendance</th>
                      <th>Grade</th>  
                      <th>Average</th>   
                      <th>Action</th>                   
					                       
                    </tr>
                  </thead>
                  <?php
                     if($query_run){
                         foreach($query_run as $row){
                  ?>
                  <tbody>
                      <tr>
                          <td><?php echo $row ['SID'];?></td>
                          <td><?php echo $row ['SName'];?></td>
                          <td><?php echo $row ['SNumber'];?></td>   
                          <td><?php echo $row ['CID'];?></td>   
                          <td><?php echo $row ['Attendance'];?></td> 
                          <td><?php echo $row ['Grade'];?></td> 
                          <td><?php echo $row ['Average'];?></td>     
                          <td>
                            <button type="button" class="btn btn-success editbtn">EDIT</button>
                            
                          </td>                      
                      </tr>
				
                  </tbody>
                  <?php
                         }
                     }
                     else{
                         echo "No record found";
                     }
                     
                  ?>
                </table>
                
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!--  -->
      < class="sticky- bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &</span>
          </div>
        </div>
      </>
      <!-- End of  -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!--Addbutton Modal-->
  <div class="modal fade" id="AddbuttonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content ">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="insertstudent1.php" method="POST" style="padding:40px ;">
          <div class="form-group">
            <label>Student Name</label>
            <input type="text" name ="Sname" class="form-control" placeholder="Enter full student name">
          </div>
          <div class="form-group">
            <label> Student No </label>
            <input type="text" name ="SNumber" class="form-control" placeholder="Enter student number">
          </div>
          <div class="form-group">
            <label> Course No </label>
            <input type="text" name ="CID" class="form-control" placeholder="Enter course number">
          </div>
          <div class="form-group">
            <label> Attendance </label>
            <input type="text" name ="SAttendance" class="form-control" placeholder="Enter student attendance">
          </div>
          <div class="form-group">
            <label> Grade </label>
            <select class="form-control" name="SGrade">
              <option value="A">A</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B">B</option>
              <option value="B-">B-</option>
              <option value="C+">C+</option>
              <option value="C">C</option>
              <option value="C-">C-</option>
              <option value="D+">D+</option>
              <option value="D">D</option>
              <option value="D-">D-</option>
              <option value="F">F</option>
            </select>
          </div>
          <div class="form-group">
            <label> Average </label>
            <input type="text" name ="SAverage" class="form-control" placeholder="Enter average">
          </div>
          <button type="submit" name="insertdata" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="padding: 40px;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <h3>Select "Logout" below if you are ready to end your current session.</h3>
        <div class="modal-">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="index.php">Logout</a>
        </div> 
      </div>
    </div>
  </div>
  
   <!--Update Modal-->
   <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" >
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content ">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="updatestudent1.php" method="POST" style="padding:40px ;">
        <input type="hidden" name="update_id" id="update_id">
          <div class="form-group">
            <label>Student Name</label>
            <input type="text" name ="Sname" id="Sname" class="form-control" placeholder="Enter full Student name">
          </div>
          <div class="form-group">
            <label> Student No </label>
            <input type="text" name ="SNumber" id ="SNumber" class="form-control" placeholder="Enter student number">
          </div>
          <div class="form-group">
            <label> Course No </label>
            <input type="text" name ="CID" id ="CID" class="form-control" placeholder="Enter course number">
          </div>
          <div class="form-group">
            <label> Attendance </label>
            <input type="text" name ="SAttendance" id ="SAttendance" class="form-control" placeholder="Enter student attendance">
          </div>
          <div class="form-group">
            <label> Grade </label>
            <select class="form-control" name="SGrade" id="SGrade">
              <option value="A">A</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B">B</option>
              <option value="B-">B-</option>
              <option value="C+">C+</option>
              <option value="C">C</option>
              <option value="C-">C-</option>
              <option value="D+">D+</option>
              <option value="D">D</option>
              <option value="D-">D-</option>
              <option value="F">F</option>
            </select>
          </div>
          <div class="form-group">
            <label> Average </label>
            <input type="text" name ="SAverage" id ="SAverage" class="form-control" placeholder="Enter average">
          </div>
          <button type="submit" name="updatedata" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  
 


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

  

<!-- Edit script -->
<script>
    $(document).ready(function() {
      $('.editbtn').on('click', function() {
          $('#editmodal').modal('show');
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#Sname').val(data[1]);
            $('#SNumber').val(data[2]);
            $('#CID').val(data[3]);
            $('#SAttendance').val(data[4]);
            $('#SGrade').val(data[5]);
            $('#SAverage').val(data[6]);
            
      });
    });
</script>

</body>

</html>
