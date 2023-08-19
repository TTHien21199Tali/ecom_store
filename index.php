<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


  <!-- Cover -->
  <main>
    <!-- <div class="hero">
      <a href="shop.php" class="btn1">View all products
</a>
    </div> -->
    <div><</div>
    <div id="carouselExampleIndicators" class="carousel carousel-fade slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
           
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/a1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./images/a2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./images/a3.jpg" class="d-block w-100">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>




    <!-- Main -->
    <div class="wrapper">
            <h1>SẢN PHẨM HÀNG ĐẦU<h1>
            
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

        <div class="footer-nav__col footer-nav__col--info">
				<div class="footer-nav__heading">THÔNG TIN</div>
				<ul class="footer-nav__list">
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Thương hiệu</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Cửa hàng địa phương</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Dịch vụ khách hàng</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Quyền riêng tư &amp; ghi nhớ</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Cấu trúc trang web</a>
					</li>
				</ul>
			</div>

			<div class="footer-nav__col footer-nav__col--whybuy">
				<div class="footer-nav__heading">LÝ DO CHỌN CHÚNG TÔI</div>
				<ul class="footer-nav__list">
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Vận chuyển &amp; trả hàng</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Vận chuyển an toàn</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Giấy chứng nhận</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Giảm giá</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Giao dịch có đạo đức</a>
					</li>
				</ul>
			</div>

			<div class="footer-nav__col footer-nav__col--account">
				<div class="footer-nav__heading">TÀI KHOẢN CỦA BẠN</div>
				<ul class="footer-nav__list">
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Đăng nhập</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Đăng ký</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Xem giỏ hàng</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Xem sản phẩm</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Theo dõi đơn hàng</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Cập nhật thông tin</a>
					</li>
				</ul>
			</div>


          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">CHI TIẾT LIÊN HỆ</div>
            <address class="address">
            Địa chỉ: Ấp 5, xã Vĩnh Lộc A, huyện Bình Chánh, Tp Hồ Chí Minh<br>
            
          </address>
            <div class="phone">
              Điện thoại:
              <a class="phone__number" href="tel:0123456789">0335.824.824</a>
            </div>
            <div class="email">
              Email:
              <a href="mailto:support@yourwebsite.com" class="email__addr">thanhhien.sb83@gmail.com</a>
            </div>
          </div>

        </div>
      </div>

      <div class="banners">
        <div class="container clearfix">

          <div class="banner-award">
            <span>Cảm ơn bạn đã xem sản phẩm </span><br>  
            Xin chân thành cảm ơn!
          </div>

          <div class="banner-social">
            <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-pinterest-circled"></i>
          </a>
          </div>

        </div>
      </div> 

      <div class="page-footer__subline">
        <div class="container clearfix">
          <div class="footer1">
            Người thực hiện: Trần Thanh Hiền <br>
            Email: thanhhien.sb83@gmail.com <br>
            Xin chân thành cảm ơn!
          </div>

        </div>
      </div>
    </footer>
</body>

</html>
