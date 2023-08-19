<?php




?>

<?php

include("includes/db.php");

if(isset($_GET['order_upda'])){

    

$delete_id = $_GET['order_upda'];

$que = "select order_status from pending_orders where order_id='$delete_id'";

$kq = mysqli_query($con,$que);

$row_products = mysqli_fetch_array($kq);

$sta = '';

switch ($row_products['order_status'])
{
    case 'pending':
        $sta = 'confirm';
        break;
    case 'confirm':
        $sta = 'Shipping';
        break;
    case 'Shipping':
        $sta = 'Complete';
        break;
    default :
        $sta='';
        break;
}

$delete_order = "update pending_orders set order_status='$sta' where order_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_order);


$delete_order2 = "update customer_orders set order_status='$sta' where order_id='$delete_id'";

$run_delete2 = mysqli_query($con,$delete_order2);

if($run_delete){

echo "<script>alert('Đơn hàng đã được cập nhật $delete_order ')</script>";

echo "<script>window.open('index.php?view_orders','_self')</script>";


}


}



?>


