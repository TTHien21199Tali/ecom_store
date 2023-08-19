<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<nav class="navbar navbar-inverse navbar-fixed-top" ><!-- navbar navbar-inverse navbar-fixed-top Starts -->

<div class="navbar-header" ><!-- navbar-header Starts -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" ><!-- navbar-ex1-collapse Starts -->


<span class="sr-only" >Toggle Navigation</span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>


</button><!-- navbar-ex1-collapse Ends -->

<a class="navbar-brand" href="index.php?dashboard" >Trang quản trị</a>


</div><!-- navbar-header Ends -->

<ul class="nav navbar-right top-nav" ><!-- nav navbar-right top-nav Starts -->

<li class="dropdown" ><!-- dropdown Starts -->

<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><!-- dropdown-toggle Starts -->

<i class="fa fa-user" ></i>

<?php echo $admin_name; ?> <b class="caret" ></b>


</a><!-- dropdown-toggle Ends -->

<ul class="dropdown-menu" ><!-- dropdown-menu Starts -->

<li><!-- li Starts -->

<a href="index.php?user_profile=<?php echo $admin_id; ?>" >

<i class="fa fa-fw fa-user" ></i> Hồ sơ


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_products" >

<i class="fa fa-fw fa-envelope" ></i> Sản phẩm

<span class="badge" ><?php echo $count_products; ?></span>


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_customers" >

<i class="fa fa-fw fa-gear" ></i> Khách hàng

<span class="badge" ><?php echo $count_customers; ?></span>


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_p_cats" >

<i class="fa fa-fw fa-gear" ></i> Danh mục sản phẩm

<span class="badge" ><?php echo $count_p_categories; ?></span>


</a>

</li><!-- li Ends -->

<li class="divider"></li>

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"> </i> Đăng Xuất

</a>

</li><!-- li Ends -->

</ul><!-- dropdown-menu Ends -->




</li><!-- dropdown Ends -->


</ul><!-- nav navbar-right top-nav Ends -->

<div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

<ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

<li><!-- li Starts -->

<a href="index.php?dashboard">

<i class="fa fa-fw fa-dashboard"></i> Bảng điều khiển

</a>

</li><!-- li Ends -->

<li><!-- Products li Starts -->

<a href="#" data-toggle="collapse" data-target="#products">

<i class="fa fa-fw fa-table"></i> Sản phẩm

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="products" class="collapse">

<li>
<a href="index.php?insert_product"> Thêm sản phẩm </a>
</li>

<li>
<a href="index.php?view_products"> Xem các sản phẩm </a>
</li>


</ul>

</li><!-- Products li Ends -->
<!-- gói san phẩm
<li>

<a href="#" data-toggle="collapse" data-target="#bundles">

<i class="fa fa-fw fa-edit"></i> Gói

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="bundles" class="collapse">

<li>
<a href="index.php?insert_bundle"> Thêm gói </a>
</li>

<li>
<a href="index.php?view_bundles"> Xem các gói </a>
</li>

</ul>

</li>
-->

<!-- Gán sản phẩm cho mối quan hệ nhóm
<li>

<a href="#" data-toggle="collapse" data-target="#relations">

<i class="fa fa-fw fa-retweet"></i> Gán sản phẩm cho mối quan hệ nhóm

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="relations" class="collapse">

<li>

<a href="index.php?insert_rel"> Thêm quan hệ </a>

</li>


<li>

<a href="index.php?view_rel"> Xem các quan hệ </a>

</li>

</ul>


</li>

-->

<li><!-- manufacturer li Starts -->

<a href="#" data-toggle="collapse" data-target="#manufacturers"><!-- anchor Starts -->

<i class="fa fa-fw fa-briefcase"></i> Nhà sản xuất

<i class="fa fa-fw fa-caret-down"></i>


</a><!-- anchor Ends -->

<ul id="manufacturers" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_manufacturer"> Thêm nhà sản xuất </a>
</li>

<li>
<a href="index.php?view_manufacturers"> Xem các nhà sản xuất </a>
</li>

</ul><!-- ul collapse Ends -->


</li><!-- manufacturer li Ends -->


<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#p_cat">

<i class="fa fa-fw fa-pencil"></i> Danh mục sản phẩm

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="p_cat" class="collapse">

<li>
<a href="index.php?insert_p_cat"> Thêm danh mục sản phẩm </a>
</li>

<li>
<a href="index.php?view_p_cats"> Xem các danh mục sản phẩm </a>
</li>


</ul>

</li><!-- li Ends -->


<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#cat">

<i class="fa fa-fw fa-arrows-v"></i> Danh mục

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="cat" class="collapse">

<li>
<a href="index.php?insert_cat"> Thêm danh mục </a>
</li>

<li>
<a href="index.php?view_cats"> Xem các danh mục </a>
</li>


</ul>

</li><!-- li Ends -->


<!-- cua hàng
<li>

<a href="#" data-toggle="collapse" data-target="#store">

<i class="fa fa-fw fa-briefcase"></i> Cửa hàng

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="store" class="collapse">

<li>
<a href="index.php?insert_store"> Thêm cửa hàng </a>
</li>

<li>
<a href="index.php?view_store"> Xem các cửa hàng </a>
</li>

</ul>

</li>
-->

<li><!-- contact us li Starts -->

<a href="#" data-toggle="collapse" data-target="#contact_us"><!-- anchor Starts -->

<i class="fa fa-fw fa-pencil"> </i> Liên hệ 

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="contact_us" class="collapse">

<li>

<a href="index.php?edit_contact_us"> Chỉnh sửa thông tin liên hệ </a>

</li>

<li>

<a href="index.php?insert_enquiry"> Thêm loại yêu cầu </a>

</li>

<li>

<a href="index.php?view_enquiry"> Xem các loại yêu cầu </a>

</li>

</ul>

</li><!-- contact us li Ends -->

<li><!-- about us li Starts -->

<a href="index.php?edit_about_us">

<i class="fa fa-fw fa-edit"></i> Chỉnh sửa thông tin trang 

</a>

</li><!-- about us li Ends -->

<!-- gainr giá
<li>

<a href="#" data-toggle="collapse" data-target="#coupons">

<i class="fa fa-fw fa-arrows-v"></i> Giảm giá

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="coupons" class="collapse">

<li>
<a href="index.php?insert_coupon"> Thêm phiếu giảm giá </a>
</li>

<li>
<a href="index.php?view_coupons"> Xem các phiếu giảm giá </a>
</li>

</ul>

</li>

-->

<li><!-- terms li Starts -->

<a href="#" data-toggle="collapse" data-target="#terms" ><!-- anchor Starts -->

<i class="fa fa-fw fa-table"></i> Điều khoản

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="terms" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_term"> Thêm điều khoản </a> 
</li>

<li>
<a href="index.php?view_terms"> Xem các điều khoản </a> 
</li>

</ul><!-- ul collapse Ends -->


</li><!-- terms li Ends -->



<li>

<a href="index.php?view_customers">

<i class="fa fa-fw fa-edit"></i> Xem khách hàng

</a>

</li>

<li>

<a href="index.php?view_orders">

<i class="fa fa-fw fa-list"></i> Xem đơn đặt hàng

</a>

</li>
<!-- xem các khoản thanh toán
<li>

<a href="index.php?view_payments">

<i class="fa fa-fw fa-pencil"></i> Xem các khoản thanh toán

</a>

</li>
-->

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#users">

<i class="fa fa-fw fa-gear"></i> Người quản trị

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="users" class="collapse">

<li>
<a href="index.php?insert_user"> Thêm người quản trị </a>
</li>

<li>
<a href="index.php?view_users"> Xem danh sách người quản trị </a>
</li>

<li>
<a href="index.php?user_profile=<?php echo $admin_id; ?>"> Chỉnh sửa hồ sơ </a>
</li>

</ul>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"></i> Đăng xuất

</a>

</li><!-- li Ends -->

</ul><!-- nav navbar-nav side-nav Ends -->

</div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->

<?php } ?>