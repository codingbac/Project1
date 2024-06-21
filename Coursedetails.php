<!-- Header -->
<?php
include('./Includes/Header.php');
?>
<!-- End of Header -->


<!-- Start Course Page Banner -->
 <div class="container-fluid bg-dark">
    <div class="row">
        <img src="Image/person-1990906_1920.jpg" alt="courses"
        style="height: 500px; 
        width: 100%; 
        object-fit:cover;
        box-shadow:10px;"/>
    </div>
 </div>
<!-- End Course Page Banner -->

<!-- Start Main Content -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="image/pexels-realtoughcandycom-11035474.jpg" class="card-img-top" alt="python">
        </div>
        <div class="col-md-8">
        <div class="card-body">
        <h5 class="card-title">Course Name: Learn Python</h5>
        <p class="card-text">"Python is a versatile and modern programming language celebrated for its simplicity and productivity, adaptable across diverse platforms. Our course offers comprehensive training to master Python, empowering developers to effortlessly create robust software solutions."</p>
        <p class="card-text">Duration: 10 Days</p>
        <form action="" method="post">
        <p class="card-text d-inline">Price: <small><del>&#8377 1000</del></small>
        <span class="font-weight-bolder">&#8377 300</span></p>
        <button type="submit" class="btn btn-primary text-white font-weight=bolder float-right" name="buy">Buy Now</button>   
        </form>
      </div>
        </div>
    </div>
</div>

<!-- Start Lesson Table -->
<div class="container">
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Lesson No.</th>
                    <th scope="col">Lesson Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Introduction</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

 <!-- End Main Content -->



 
<!-- Footer -->
<?php
include('./Includes/Footer.php');
?>
<!-- End of Footer -->