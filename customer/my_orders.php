
<center><!-- center Starts -->

<h1>ĐƠN ĐẶT HÀNG CỦA TÔI</h1>

<p class="lead"> Danh sách đơn hàng của bạn </p>

<p class="text-muted" >


Nếu bạn có bất kỳ câu hỏi nào, vui lòng <a href="../contact.php" > liên hệ với chúng tôi,</a> trung tâm dịch vụ khách hàng làm việc 24/7. Xin chân thành cảm ơn!

</p>


</center><!-- center Ends -->

<hr>

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover" ><!-- table table-bordered table-hover Starts -->

<thead><!-- thead Starts -->

<tr>

<th>STT</th>
<th>Tổng tiền</th>
<th>Hóa đơn</th>
<th>số lượng</th>
<th>kích thước</th>
<th>Ngày đặt hàng</th>
<th>Trạng thái</th>
<!-- <th>Action</th> -->


</tr>

</thead><!-- thead Ends -->

<tbody><!--- tbody Starts --->

<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$get_orders = "select * from customer_orders where customer_id='$customer_id' order by order_date desc";

$run_orders = mysqli_query($con,$get_orders);

$i = 0;

while($row_orders = mysqli_fetch_array($run_orders)){

$order_id = $row_orders['order_id'];

$due_amount = $row_orders['due_amount'];

$invoice_no = $row_orders['invoice_no'];

$qty = $row_orders['qty'];

$size = $row_orders['size'];

$order_date = substr($row_orders['order_date'],0,11);

$order_status = $row_orders['order_status'];

$i++;

$sta = "";

switch ($order_status)
{
    case 'pending':
        $order_status = "<b style='color:red;'>Chưa giải quyết</b>";
        $sta = "pending";
        break;
    case 'confirm':
        $order_status = "<b style='color:Blue;'>Xác nhận</b>";
        break;
    case 'Shipping':
        $order_status = "<b style='color:Fuchsia;'>Giao hàng</b>";
        break;
    case 'Complete':
        $order_status = "<b style='color:Lime;'>Hoàn thành</b>";
    default :
        // $sta='Completed';
        break;
}
?>

<tr><!-- tr Starts -->

<th><?php echo $i; ?></th>

<td><?php echo $due_amount; ?>.000 VNĐ</td>

<td><?php echo $invoice_no; ?></td>

<td><?php echo $qty; ?></td>

<td><?php echo $size; ?></td>

<td><?php echo $order_date; ?></td>

<td><?php echo $order_status; ?></td>
<!-- 
<td>
    <?php
        // if($sta=='pending')
        // {
        //     echo '
            
        //     <a href="" >
        //     <button type="button" class="btn btn-danger btn-sm btn-round">
        //     Cancel
        //     </button>
        //     </a>';
        // }
    ?>
<a href="confirm.php?order_id=<?php #echo $order_id; ?>" target="blank" class="btn btn-success btn-xs" > Confirm If Paid </a>
</td> -->


</tr><!-- tr Ends -->

<?php } ?>

</tbody><!--- tbody Ends --->


</table><!-- table table-bordered table-hover Ends -->

</div><!-- table-responsive Ends -->



