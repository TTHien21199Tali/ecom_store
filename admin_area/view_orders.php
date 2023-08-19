<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts  --->

<li class="active">

<i class="fa fa-dashboard"></i> Bảng điều khiển / Xem các đơn đặt hàng hàng

</li>

</ol><!-- breadcrumb Ends  --->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> Xem các đơn  đặt hàng

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>STT</th>
<th>Email khách hàng</th>
<th>Số hóa đơn</th>
<th>Tên sản phẩm</th>
<th>Số lượng</th>
<th>kích cỡ</th>
<th>Ngày đặt hàng</th>
<th>Tổng thanh toán</th>
<th>Trạng thái</th>
<th>Hoạt động</th>


</tr>


</thead><!-- thead Ends pending, approved, shipping, completed 
            <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
            <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
-->


<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_orders = "select * from pending_orders order by order_id desc";

$run_orders = mysqli_query($con,$get_orders);

while ($row_orders = mysqli_fetch_array($run_orders)) {

$order_id = $row_orders['order_id'];

$c_id = $row_orders['customer_id'];

$invoice_no = $row_orders['invoice_no'];

$product_id = $row_orders['product_id'];

$qty = $row_orders['qty'];

$size = $row_orders['size'];

$order_status = $row_orders['order_status'];

$get_products = "select * from products where product_id='$product_id'";

$run_products = mysqli_query($con,$get_products);

$row_products = mysqli_fetch_array($run_products);

$product_title = $row_products['product_title'];

$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td>
<?php 

$get_customer = "select * from customers where customer_id='$c_id'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_email = $row_customer['customer_email'];

echo $customer_email;

 ?>
 </td>

<td bgcolor="orange" ><?php echo $invoice_no; ?></td>

<td><?php echo $product_title; ?></td>

<td><?php echo $qty; ?></td>

<td><?php echo $size; ?></td>

<td>
<?php

$get_customer_order = "select * from customer_orders where order_id='$order_id'";

$run_customer_order = mysqli_query($con,$get_customer_order);

$row_customer_order = mysqli_fetch_array($run_customer_order);

$order_date = $row_customer_order['order_date'];

$due_amount = $row_customer_order['due_amount'];

echo $order_date;

?>
</td>

<td><?php echo $due_amount; ?>.000 VNĐ</td>

<td>
<?php

// echo "<script>alert('hey $order_status hey')</script>";

$sta='';
switch ($order_status)
{
    case 'pending':
        $sta = "<b style='color:red;'>Chưa giải quyết</b>";
        break;
    case 'confirm':
        $sta = "<b style='color:Blue;'>Xác nhận</b>";
        break;
    case 'Shipping':
        $sta = "<b style='color:Fuchsia;'>Giao hàng</b>";
        break;
    case 'Complete':
        $sta = "<b style='color:Lime;'>Hoàn thành</b>";
    default :
        // $sta='Completed';
        break;
}
echo $sta;
// if($order_status=='pending'){

// echo '<div style="color:red;">Pending</div>';

// }
// else{

// echo 'Completed';

// }


?>
</td>
<!-- thead Ends pending, confirm, shipping, completed 
            <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
            <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
-->
<td>
    <?php
    if($order_status=='pending'){

        echo '
        <a href="order_upda.php?order_upda='.$order_id.'" >
        <button type="button" class="btn btn-success btn-sm btn-round" >Xác nhận
        </button>
        </a>
        <a href="index.php?order_delete='.$order_id.'" >
        <button type="button" class="btn btn-danger btn-sm btn-round">
        Cancel
        </button>
        </a>';

    }
    else if($order_status=='confirm'){
        echo '
        <a href="order_upda.php?order_upda='.$order_id.'" >
        <button type="button" class="btn btn-info btn-sm btn-round" >Giao Hàng
        </button>
        </a>
        <a href="index.php?order_delete='.$order_id.'" >
        <button type="button" class="btn btn-danger btn-sm btn-round">
        Cancel
        </button>
        </a>';
    }
    else if($order_status=='Shipping'){
        echo '
        <a href="order_upda.php?order_upda='.$order_id.'" >
        <button type="button" class="btn btn-warning btn-sm btn-round" >Hoàn thành
        </button>
        </a>
        <a href="index.php?order_delete='.$order_id.'" >
        <button type="button" class="btn btn-danger btn-sm btn-round">
        Cancel
        </button>
        </a>';
    }
   
    ?>
    


</td>


</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


<?php } ?>