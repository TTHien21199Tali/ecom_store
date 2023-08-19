<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_image = $row_customer['customer_image'];

$customer_name = $row_customer['customer_name'];

if(!isset($_SESSION['customer_email'])){


}
else {

echo "

<center>

<img src='customer_images/$customer_image' class='img-responsive'>

</center>

<br>

<h3 align='center' class='panel-title'> Tên tài khoản: $customer_name </h3>

";

}

?>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<ul class="nav nav-pills nav-stacked"><!-- nav nav-pills nav-stacked Starts -->

<li class="<?php if(isset($_GET['my_orders'])){ echo "active"; } ?>">

<a href="my_account.php?my_orders"> Đơn đặt hàng của tôi </a>

</li>
<!--
<li class="<?php if(isset($_GET['pay_offline'])){ echo "active"; } ?>">

<a href="my_account.php?pay_offline"> <i class="fa fa-bolt"></i> Thanh toán trực tiếp </a>

</li>
-->
<li class="<?php if(isset($_GET['edit_account'])){ echo "active"; } ?>">

<a href="my_account.php?edit_account"> Chỉnh sửa tài khoản </a>

</li>

<li class="<?php if(isset($_GET['change_pass'])){ echo "active"; } ?>">

<a href="my_account.php?change_pass">Chỉnh sửa mật khẩu </a>

</li>

<li class="<?php if(isset($_GET['my_wishlist'])){ echo "active"; } ?>">

<a href="my_account.php?my_wishlist"> Sản phẩm yêu thích </a>

</li>

<li class="<?php if(isset($_GET['delete_account'])){ echo "active"; } ?>">

<a href="my_account.php?delete_account">  Xóa tài khoản </a>

</li>

<li>

<a href="logout.php"> Đăng xuất </a>

</li>


</ul><!-- nav nav-pills nav-stacked Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default sidebar-menu Ends -->