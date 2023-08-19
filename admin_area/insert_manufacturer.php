<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>


<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Bảng điều khiển / Thêm nhà sản xuất

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"> </i> Thêm nhà sản xuất

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Tên nhà sản xuất </label>

<div class="col-md-6">

<input type="text" name="manufacturer_name" class="form-control" >

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Hiển thị với nhà sản xuất hàng đầu </label>

<div class="col-md-6">

<input type="radio" name="manufacturer_top" value="yes" >

<label> Có </label>

<input type="radio" name="manufacturer_top" value="no" >

<label> Không </label>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Ảnh nhà sản xuất </label>

<div class="col-md-6">

<input type="file" name="manufacturer_image" class="form-control" >

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="submit" class="form-control btn btn-primary" value=" Thêm nhà sản xuất " >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

$manufacturer_name = $_POST['manufacturer_name'];

$manufacturer_top = $_POST['manufacturer_top'];

$manufacturer_image = $_FILES['manufacturer_image']['name'];

$tmp_name = $_FILES['manufacturer_image']['tmp_name'];

move_uploaded_file($tmp_name,"other_images/$manufacturer_image");

$insert_manufacturer = "insert into manufacturers (manufacturer_title,manufacturer_top,manufacturer_image) values ('$manufacturer_name','$manufacturer_top','$manufacturer_image')";

$run_manufacturer = mysqli_query($con,$insert_manufacturer);

if($run_manufacturer){

echo "<script>alert('Nhà sản xuất đã được thêm thành công')</script>";

echo "<script>window.open('index.php?view_manufacturers','_self')</script>";

}

}

?>

<?php } ?>