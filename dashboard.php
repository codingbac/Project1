<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>


     <!-- CSS bootstrap -->
     <link rel="stylesheet" href="CSS/bootstrap.min.css">

<!-- font awesome css -->
<link rel="stylesheet" href="CSS/all.min.css">

<!-- Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

<!-- Custom CSS -->
 <link rel="stylesheet" href="../CSS/dashstyle.css">

</head>

<body>

    <!-- Top Navbar -->
<nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470;">
    <a href="Dashboard.php" class="navbar-brand col-sm-3 col-md-2 mr-0">LeEearn</a>
</nav>

<!-- Side Bar -->
 <div class="container-fluid mb-5" style="margin-top: 40px;">
    <div class="row">
        <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                        <i class="fa-solid fa-gauge"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fa-solid fa-book"></i>Courses
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fa-solid fa-person-chalkboard"></i>
                            Lessons
                        </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="fa-solid fa-graduation-cap"></i>
                        Students
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="fa-brands fa-sellsy"></i>
                        Sell Reports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="fa-solid fa-money-check"></i>
                        Payment Status
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="fa-regular fa-comment"></i>
                        Feedback
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="fa-solid fa-unlock-keyhole"></i>
                        Change Password
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                        Logout
                    </a>
                </li>
                </ul>
                </div>
                </nav> 
             
                <div class="col-sm-9 mt-5">
                    <div class="row mx-5 text-center">
                        <div class="col-sm-4 mt-5">
                            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                                <div class="card-header">Courses</div>
                                <div class="card-body">
                                    <h4 class="card-title">4</h4>
                                    <a href="#" class="btn text-white">View</a>
                                </div>
                            </div>
                        </div>
                    
                <div class="col-sm-4 mt-5">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">Students</div>
                        <div class="card-body">
                            <h4 class="card-title">25</h4>
                            <a href="#" class="btn text-white">View</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-5">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">Sold</div>
                        <div class="card-body">
                            <h4 class="card-title">22</h4>
                            <a href="#" class="btn text-white">View</a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="mx-5 mt-5 text-center">
                <!-- Table -->
                 <p class="bg-dark text-white p-2">Course Ordered</p>
                 <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Course ID</th>
                            <th scope="col">Student Email</th>
                            <th scope="col">Ordered Data</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">22</th>
                            <td>Nirmal</td>
                            <td>nirmal@gmail.com</td>
                            <td>16/10/2059</td>
                            <td>1000</td>
                            <td><button type="submit" class="btn btn-secondary" name="delete" value="Delete">
                                <i class="fa-solid fa-trash"></i>
                            </button></td>
                        </tr>
                    </tbody>
                 </table>
            </div>
        </div>
    </div>
        </div> 
            
        <!-- JQuery and BootStrap JavaScript -->
        <script type="text/javaScript" src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
         <script type="text/javaScript" src="../JS/popper.min.js"></script>
         <script src="../JS/bootstrap.min.js"></script>

         <!-- font awesome js -->
        <script type="text/javaScript" src="../JS/all.min.js"></script>

        <!-- Ajax Call JavaScript -->
         <script type="text/javaScript" src="../JS/signup.js"></script>

         <!-- Custom JS -->
          <script type="text/javaScript" src="../JS/custom.js"></script>


</body>
</html>