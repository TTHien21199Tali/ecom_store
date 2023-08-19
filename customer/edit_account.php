<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$customer_name = $row_customer['customer_name'];

$customer_email = $row_customer['customer_email'];

$customer_country = $row_customer['customer_country'];

$customer_city = $row_customer['customer_city'];

$customer_contact = $row_customer['customer_contact'];

$customer_address = $row_customer['customer_address'];

$customer_image = $row_customer['customer_image'];

?>

<h1 align="center" > THAY ĐỔI THÔNG TIN TÀI KHOẢN </h1>

<form action="" method="post" enctype="multipart/form-data" ><!--- form Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label> Tên tài khoản: </label>

<input pattern="[A-Za-z0-9._]{4,}" title="Invalid username. for example: thotrang1" type="text" name="c_name" class="form-control" required value="<?php echo $customer_name; ?>">

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> Email: </label>

<input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
      
      title="email is not in the correct format /n user@ave.com"
      
      type="text" name="c_email" class="form-control" required value="<?php echo $customer_email; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> Quốc gia: </label>

<input pattern="[A-Za-z ]{4,}" title="Invalid country: no accents, no special characters" 
        
        type="text" name="c_country" class="form-control" required value="<?php echo $customer_country; ?>">

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> Thành phố: </label>

<input pattern="[A-Za-z ]{4,}" title="Invalid city: no accents, no special characters" 

        type="text" name="c_city" class="form-control" required value="<?php echo $customer_city; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> Liên hệ: </label>

<input pattern="[0]+[0-9]{9}" title="Invalid phone number" 

        type="text" name="c_contact" class="form-control" required value="<?php echo $customer_contact; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> Địa chỉ: </label>

<input pattern="[A-Za-z, ]{4,}" title="Invalid address: no accents, no special characters" 

        type="text" name="c_address" class="form-control" required value="<?php echo $customer_address; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> Hình ảnh: </label>

<input type="file" name="c_image" class="form-control" required ><br>

<img src="customer_images/<?php echo $customer_image; ?>" width="100" height="100" class="img-responsive" >


</div><!-- form-group Ends -->

<div class="text-center" ><!-- text-center Starts -->

<button name="update" class="btn btn-primary" >

<i class="fa fa-user-md" ></i> Cập nhật

</button>


</div><!-- text-center Ends -->


</form><!--- form Ends -->

<?php

if(isset($_POST['update'])){

$update_id = $customer_id;

$c_name = $_POST['c_name'];

$c_email = $_POST['c_email'];

$c_country = $_POST['c_country'];

$c_city = $_POST['c_city'];

$c_contact = $_POST['c_contact'];

$c_address = $_POST['c_address'];

$c_image = $_FILES['c_image']['name'];

$c_image_tmp = $_FILES['c_image']['tmp_name'];

move_uploaded_file($c_image_tmp,"customer_images/$c_image");

$update_customer = "update customers set customer_name='$c_name',customer_email='$c_email',customer_country='$c_country',customer_city='$c_city',customer_contact='$c_contact',customer_address='$c_address',customer_image='$c_image' where customer_id='$update_id'";

$run_customer = mysqli_query($con,$update_customer);

if($run_customer){

echo "<script>alert('Tài khoản của bạn đã được cập nhật thành công, vui lòng đăng nhập lại')</script>";

echo "<script>window.open('logout.php','_self')</script>";

}

}


?>