
<center>

<h1>BẠN CÓ MUỐN XÓA TÀI KHOẢN CỦA MÌNH KHÔNG</h1>

<form action="" method="post">

<input class="btn btn-danger" type="submit" name="yes" value="Có, tôi muốn xóa">

<input class="btn btn-primary" type="submit" name="no" value="Không, tôi không muốn xóa">

</form>

</center>

<?php

$c_email = $_SESSION['customer_email'];

if(isset($_POST['yes'])){

$delete_customer = "delete from customers where customer_email='$c_email'";

$run_delete = mysqli_query($con,$delete_customer);

if($run_delete){

session_destroy();

echo "<script>alert('Bạn đã xóa tài khoản thành công')</script>";

echo "<script>window.open('../index.php','_self')</script>";

}

}

if(isset($_POST['no'])){

echo "<script>window.open('my_account.php?my_orders','_self')</script>";

}


?>