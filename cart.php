<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CMark Store</title>
        <link rel="stylesheet" href="styles/bootstrap-337.min.css">
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <div id="top"><!--Top Begin -->
            
            <div class="container"><!--container Begin -->
                
                <div class="col-md-6 offer"><!--col-md-6 offer Begin -->
                    
                    <a href="#" class="btn btn-success btn-sm">Welcome</a>
                    <a href="checkout.php">4 Items in Your Cart | Total Price: Rs.300</a>
                    
                </div><!--col-md-6 offer Finish -->
                
                <div class="col-md-6"><!--col-md-6 Begin -->
                    
                    <ul class="menu"><!-- menu Begin-->
                        
                        <li>
                            <a href="customer_register.php">Register</a>
                        </li>
                        <li>
                            <a href="customer/my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Go To Cart</a>
                        </li>
                        <li>
                            <a href="checkout.php">Login</a>
                        </li>
                        
                    </ul><!-- menu Begin-->
                    
                </div><!--col-md-6 Finish -->
                
            </div><!--container Finish -->
            
        </div><!--Top Finish -->
        
        <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
            
            <div class="container"><!-- container Begin -->
                
                <div class="navbar-header"><!-- navbar-header Begin -->
                    
                    <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                        
                        <img src="images/ecom-store-logo.png" alt="CMark Store Logo" class="hidden-xs">
                        <img src="images/ecom-store-logo-mobile.png" alt="CMark Store Logo Mobile" class="visible-xs">
                        
                    </a><!-- navbar-brand home Finish -->
                    
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        
                        <span class="sr-only">Toggle Navigation</span>
                        
                        <i class="fa fa-align-justify"></i>
                        
                    </button>
                    
                    
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#serach">
                        
                        <span class="sr-only">Toggle Search</span>
                        
                        <i class="fa fa-search"></i>
                        
                    </button>
                    
                </div><!-- navbar-header Finish -->
                
                <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
                    
                    <div class="padding-nav"><!-- padding-nav Begin -->
                        
                        <ul class="nav navbar-nav left"><!-- nav nabar-nav left Begin -->
                            
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="shop.php">Shop</a>
                            </li>
                            <li>
                                <a href="customer/my_account.php">My Account</a>
                            </li>
                            <li class="active">
                                <a href="cart.php">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact Us</a>
                            </li>
                            
                        </ul><!-- nav nabar-nav left Finish -->
                        
                    </div><!-- padding-nav Finish -->
                    
                    <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary right Begin -->
                        
                        <i class="fa fa-shopping-cart"></i>
                        
                        <span>4 Items in your cart</span>
                        
                    </a><!-- btn navbar-btn btn-primary right Finish -->
                    
                    <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                        
                        <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!--btn btn-primary Begin-->
                            
                            <span class="sr-only">Toogle Search</span> 
                            
                            <i class="fa fa-search"></i>
                            
                        </button><!--btn btn-primary Finish-->
                        
                    </div><!-- navbar-collapse collapse right Finish -->
                    
                    <div class="collapse clearfix" id="search"><!--ollapse clearfix Begin-->
                        
                        <form method="get" action="result.php" class="navbar-form"><!--navbar-form Begin-->
                            
                            <div class="input-group"><!--input-group Begin-->
                                
                                <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                                
                                <span class="input-group-btn"><!--input-group-btn Begin-->
                                
                                <button type="submit" name="search" value="Search" class="btn btn-primary"><!--btn-primary Begin-->
                                    
                                    <i class="fa fa-search"></i>
                                    
                                </button><!--btn-primary Finish-->
                                
                                </span><!--input-group-btn Begin-->
                                
                            </div><!--input-group Finish-->
                            
                        </form><!--navbar-form Finish-->
                        
                    </div><!--ollapse clearfix Finish-->
                    
                </div><!-- navbar-collapse collapse Finish -->
                
            </div><!-- container Finish -->
            
        </div><!-- navbar navbar-default Finish -->
        
        <div id="content"><!-- #content Begin -->
            <div class="container"><!-- container Begin -->
                <div class="col-md-12"><!-- col-md-12 Begin -->
                    
                    <ul class="breadcrumb"><!-- breadcrumb Begin -->
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            Cart
                        </li>
                    </ul><!-- breadcrumb Finish -->
                    
                </div><!-- col-md-12 Finish -->
                
                    <div id="cart" class="col-md-9"><!--col-md-9 Begin-->
                    
                    <div class="box"><!-- box Begin -->
                        
                        <form action="cart.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
                            
                            <h1>Shopping Cart</h1>
                            <p class="text-muted">You currently have 3 item(s) in your cart</p>
                            
                            <div class="table-responsive"><!-- table-responsive Begin -->
                                
                                <table class="table"><!-- table Begin -->
                                    
                                    <thead><!-- thead Begin -->
                                        
                                        <tr><!-- tr Begin -->
                                            
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Size</th>
                                            <th colspan="1">Delete</th>
                                            <th colspan="2">Sub Total</th>
                                            
                                        </tr><!-- tr Finish -->
                                        
                                    </thead><!-- thead Finish -->
                                    
                                    <tbody><!-- tbody Begin -->
                                        
                                        <tr><!-- tr Begin -->
                                            
                                            <td>
                                                
                                                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="product-1">
                                                
                                            </td>
                                            
                                            <td>
                                                
                                                <a href="#">M Dev Polo Men Shirt</a>
                                                
                                            </td>
                                            
                                            <td>
                                                
                                                2
                                                
                                            </td>
                                            
                                            
                                            <td>
                                                
                                                50$
                                                
                                            </td>
                                            
                                             <td>
                                                
                                                Large
                                                
                                            </td>
                                            
                                             <td>
                                                
                                                <input type="checkbox" name="remove[]">
                                                
                                            </td>
                                            
                                             <td>
                                                
                                                100$
                                                
                                            </td>
                                            
                                        </tr><!-- tr Finish -->
                                        
                                    </tbody><!-- tbody Finish -->
                                    
                                    <tbody><!-- tbody Begin -->
                                        
                                        <tr><!-- tr Begin -->
                                            
                                            <td>
                                                
                                                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="product-1">
                                                
                                            </td>
                                            
                                            <td>
                                                
                                                <a href="#">M Dev Polo Men Shirt</a>
                                                
                                            </td>
                                            
                                            <td>
                                                
                                                2
                                                
                                            </td>
                                            
                                            
                                            <td>
                                                
                                                50$
                                                
                                            </td>
                                            
                                             <td>
                                                
                                                Large
                                                
                                            </td>
                                            
                                             <td>
                                                
                                                <input type="checkbox" name="remove[]">
                                                
                                            </td>
                                            
                                             <td>
                                                
                                                100$
                                                
                                            </td>
                                            
                                        </tr><!-- tr Finish -->
                                        
                                    </tbody><!-- tbody Finish -->
                                    
                                    <tbody><!-- tbody Begin -->
                                        
                                        <tr><!-- tr Begin -->
                                            
                                            <td>
                                                
                                                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="product-1">
                                                
                                            </td>
                                            
                                            <td>
                                                
                                                <a href="#">M Dev Polo Men Shirt</a>
                                                
                                            </td>
                                            
                                            <td>
                                                
                                                2
                                                
                                            </td>
                                            
                                            
                                            <td>
                                                
                                                50$
                                                
                                            </td>
                                            
                                             <td>
                                                
                                                Large
                                                
                                            </td>
                                            
                                             <td>
                                                
                                                <input type="checkbox" name="remove[]">
                                                
                                            </td>
                                            
                                             <td>
                                                
                                                100$
                                                
                                            </td>
                                            
                                        </tr><!-- tr Finish -->
                                        
                                    </tbody><!-- tbody Finish -->
                                    
                                    <tfoot><!-- tfoot Begin -->
                                        
                                        <tr><!-- tr Begin -->
                                            
                                            <th colspan="5">Total</th>
                                            <th colspan="2">$100</th>
                                            
                                        </tr><!-- tr Finish -->
                                        
                                    </tfoot><!-- tfoot Finish -->
                                    
                                </table><!-- table Finish -->
                                
                            </div><!-- table-responsive Finish -->
                            
                            <div class="box-footer"><!-- box-footer Begin -->
                                
                                <div class="pull-left"><!-- pull-left Begin -->
                                    
                                    <a href="index.php" class="btn btn-default"><!-- btn btn-default Begin -->
                                        
                                        <i class="fa fa-chevron-left"></i> Continue Shopping
                                        
                                    </a><!-- btn btn-default Finish -->
                                    
                                </div><!-- pull-left Finish -->
                                
                                <div class="pull-right"><!-- pull-right Begin -->
                                    
                                    <button type="submit" name="update" value="Update" class="btn btn-default"><!-- btn btn-default Begin -->
                                        
                                        <i class="fa fa-refresh"></i> Update Cart 
                                        
                                    </button><!-- btn btn-default Finish -->
                                    
                                    <a href="checkout.php" class="btn btn-primary"><!-- btn btn-primary Begin -->
                                        
                                        Proceed Checkout <i class="fa fa-chevron-right"></i>
                                        
                                    </a><!-- btn btn-primary Finish -->
                                    
                                </div><!-- pull-right Finish -->
                                
                            </div><!-- box-footer Finish -->
                            
                            
                        </form><!-- form Finish -->
                        
                    </div><!-- box Finish -->
                    
                      
                      <div id="row same-height-row"><!-- row same-height-row Begin -->
                          <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                              <div class="box same-height headline"><!-- box same-height headline Begin -->
                                  <h3 class="text-center">Product May You Like</h3>
                              </div><!-- box same-height headline Finish -->
                          </div><!-- col-md-3 col-sm-6 Finish -->
                          
                          <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                              <div class="product same-height"><!-- product same-height Begin -->
                                  <a href="details.php">
                                     <img class="img-responsive" src="admin_area/product_images/product-4.jpg" alt="product-4">
                                  </a>
                                  
                                  <div class="text"><!-- text Begin -->
                                      <h3><a href="details.php">M dev Polo</a></h3>
                                      
                                      <p class="price">40$</p>
                                      
                                  </div><!-- text Finish -->
                                  
                              </div><!-- product same-height Finish -->
                          </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                          
                          <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                              <div class="product same-height"><!-- product same-height Begin -->
                                  <a href="details.php">
                                     <img class="img-responsive" src="admin_area/product_images/product-3.jpg" alt="product-3">
                                  </a>
                                  
                                  <div class="text"><!-- text Begin -->
                                      <h3><a href="details.php">M dev Polo</a></h3>
                                      
                                      <p class="price">40$</p>
                                      
                                  </div><!-- text Finish -->
                                  
                              </div><!-- product same-height Finish -->
                          </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                          
                          <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                              <div class="product same-height"><!-- product same-height Begin -->
                                  <a href="details.php">
                                     <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="product-2">
                                  </a>
                                  
                                  <div class="text"><!-- text Begin -->
                                      <h3><a href="details.php">M dev Polo</a></h3>
                                      
                                      <p class="price">40$</p>
                                      
                                  </div><!-- text Finish -->
                                  
                              </div><!-- product same-height Finish -->
                          </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                          
                      </div><!-- row same-height-row Finish -->
                    
                </div><!--col-md-9 Finish-->
                
                <div class="col-md-3"><!-- col-md-3 Begin -->
                    
                    <div id="order-summary" class="box"><!-- box Begin -->
                        
                        <div class="box-header"><!-- box-header Begin -->
                            
                            <h3>Order Summary</h3>
                            
                        </div><!-- box-header Finish -->
                        
                        <p class="text-muted"><!-- text-muted Begin -->
                            
                            Shipping and additional costs are calculated based on value you have entered
                            
                        </p><!-- text-muted Finish -->
                        
                        <div class="table-responsive"><!-- table-responsive Begin -->
                            
                            <table class="table"><!-- table Begin -->
                                
                                <tbody><!-- tbody Begin -->
                                    
                                    <tr><!-- tr Begin -->
                                        
                                        <th>Oreder Sub-Total</th>
                                        <th>$200</th>
                                        
                                    </tr><!-- tr Finish -->
                                    
                                    <tr><!-- tr Begin -->
                                        
                                        <td>Shipping and Handling</td>
                                        <td>$0</td>
                                        
                                    </tr><!-- tr Finish -->
                                    
                                    <tr><!-- tr Begin -->
                                        
                                        <td>Tax</td>
                                        <th>$0</th>
                                        
                                    </tr><!-- tr Finish -->
                                    
                                    <tr class="total"><!-- tr Begin -->
                                        
                                        <td>Total</td>
                                        <th>$200</th>
                                        
                                    </tr><!-- tr Finish -->
                                    
                                </tbody><!-- tbody Finish -->
                                
                            </table><!-- table Finish -->
                            
                        </div><!-- table-responsive Finish -->
                        
                    </div><!-- box Finish -->
                    
                </div><!-- col-md-3 Finish -->
                
            </div><!-- container Finish -->
        </div><!-- #content Finish -->
        
       
        <?php 
        
        include("includes/footer.php");
        
        ?>
        
        <script src="js/jquery-331.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>
        
    </body>
</html>