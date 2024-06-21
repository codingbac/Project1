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

<!-- Start Payment Status -->
 <br>
 <div class="container">
<h2 class="text-center my-4"><u>Payment Status</u></h2><br>
<form method="post" action="">
    <div class="form-group" style="display: flex; margin: auto;">
        <label class="offset-sm-3 col-form-label">Order ID: </label>
        <div class="col-auto">
            <input type="text" class="form-control mx-3">
        </div>
        <div class="col-auto">
            <input type="submit" class="btn btn-primary mx-4" value="View">
        </div>
    </div>
</form>
</div>
<!-- End of Payment Status -->

<!-- Footer -->
<?php
include('./Includes/Footer.php');
?>
<!-- End of Footer -->


<!-- Contact Us -->
<br>
<?php
include('./contact.php');
?>
<!-- End of contact Us -->


