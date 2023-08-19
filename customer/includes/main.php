</head>
<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Xin chào: Khách mời"; 
         } 
          else
          { 
            $que = "SELECT customer_name FROM customers where customer_email='".$_SESSION['customer_email']."'";
            $run_products = mysqli_query($con,$que);

            $row_products = mysqli_fetch_array($run_products);

            $csname = $row_products['customer_name'];
            echo "Xin chào: " . $csname. "";
            }
?>
          </a>
        </div>

        <div class="basket">
          <a href="../cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> Sản phẩm
          </a>
        </div>
        
        
        <ul class="login">

          <li class="login__item">
          <?php
          if(!isset($_SESSION['customer_email'])){
            echo '<a href="../customer_register.php" class="login__link">Đăng ký</a>';
          } 
            else
            { 
                echo '<a href="my_account.php?my_orders" class="login__link">Tài khoản của tôi</a>';
            }   
?>  
          </li>


          <li class="login__item">
          <?php
          if(!isset($_SESSION['customer_email'])){
            echo '<a href="../checkout.php" class="login__link">Đăng nhập</a>';
          } 
            else
            { 
                echo '<a href="../logout.php" class="login__link">Đăng xuất</a>';
            }   
?>  
            
          </li>
        </ul>
      
      
      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a class="logo__link" href="../index.php">
            <img class="logo__img" src="../images/alogoweb2.jpg" alt="logo" width="237" height="19">
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">

            <li class="categories__item">
              <a class="categories__link" href="#">
                NAM
                <i class="icon-down-open-1"></i>
              </a>
              </li>

            <li class="categories__item">
              <a class="categories__link" href="#">
                NỮ
            
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link categories__link--active" href="shop.php">
                CỬA HÀNG
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link" href="../about.php">
                VỀ CHÚNG TÔI
              </a>
            </li>


    <!--        
          <li class="categories__item">
              <a class="categories__link" href="#">
                My Account
                <i class="icon-down-open-1"></i>
              </a>
              <div class="dropdown dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <div class="dropdown__heading">Account Settings</div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">My Wishlist</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">My Orders</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">View Shopping Cart</a>
                      </li>
                    </ul>
                  </div>
                  <div class="dropdown__half">
                    <div class="dropdown__heading"></div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Edit Your Account</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Change Password</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Delete Account</a>
                      </li>
                    </ul>
                  </div>
                </div>
             

              </div>

            </li>
          -->


          </ul>
        </nav>
      </div>
    </div>
  </header>