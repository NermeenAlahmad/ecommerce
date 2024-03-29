<?php 
	include 'includes/header-user.php'
	?>
		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-01.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								White Shirt Pleat
							</a>

							<span class="header-cart-item-info">
								1 x $19.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-02.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Converse All Star
							</a>

							<span class="header-cart-item-info">
								1 x $39.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-03.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Nixon Porter Leather
							</a>

							<span class="header-cart-item-info">
								1 x $17.00
							</span>
						</div>
					</li>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	

				
				
				

			<!-- section -->

			<!-- Content page -->
	<section class="bg0 p-t-62 p-b-60 mt-5">
		<div class="container">
			<div class="row">
			<div class="col-md-4 col-lg-3 p-b-80">
					<div class="side-menu">
						<div class="bor17 of-hidden pos-relative">
							<input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Search">

							<button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>
						</div>

						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-33">
								Categories
							</h4>

							<ul>
			                <li class="bor18">
							
							<button type="submit" name="all-product-btn">
						    <a href="test.php?category=all" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
								All Products
							</a>
						   </button>
							
					        
					
						   
						
			       </li>
				 
				
							<?php 
					            $result = $conn->query("SELECT * FROM categories") or die($conn->error);
					            while ($row = $result->fetch_assoc()) : ?>
								
								<li class="bor18">
								
									<button type="submit" name="submit-product">
									   <a href="product.php?category=<?php echo $row['category_id'] ?>" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
									     <?php echo $row['category_name'] ?>
									   </a>
									</button>
								
								</li>
								<?php endwhile; ?>
							</ul>
						</div>

						<div class="p-t-50">
							<h4 class="mtext-112 cl2 p-b-27">
								Tags
							</h4>

							<div class="flex-w m-r--5">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Fashion
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Lifestyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Denim
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Streetstyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Crafts
								</a>
							</div>
						</div>
					</div>
				  </div>
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="row d-flex flex-wrap">

					 




					<?php 
					
					//  $result = $conn->query("SELECT * FROM products") or die($conn->error);
					//  while ($row = $result->fetch_assoc()) :
					 ?>
				    <!-- <div class="col-sm-6 col-md-3 col-lg-4 p-b-35 isotope-item women">  -->
					<!-- Block2 -->
					 <!-- <div class="block2"> 
						<div class="block2-pic hov-img0">
							<img src="images/product-01.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						 <div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								<?php 
								// echo $row['product_name']
								 ?>
								</a>
								<span class="stext-105 cl3">
								   <h4 class="d-inline"> $<?php 
								//    echo $row['product_sale_price']
								    ?> </h4> 
								   <del style="color:red">$<?php
								    // echo $row['product_price'] 
									?> </del>
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div> 
					 </div>
				</div>  -->
				<?php 
			  // endwhile;
			  ?>

					<?php 
					
						$id_category_product = $_GET ['category'];
						$result = $conn->query("SELECT * FROM products WHERE category_id='$id_category_product' ") or die($conn->error);
					   while ($row = $result->fetch_assoc()) : ?>
					   <div class="col-sm-6 col-md-3 col-lg-4 p-b-35 isotope-item women"> 
					   <!-- Block2 -->
						<div class="block2"> 
						   <div class="block2-pic hov-img0">
							   <img src="./group-project4/uploads/<?php echo $row['product_main_img'] ?>" alt="IMG-PRODUCT">
   
							   <a href="product-detail.php?product=<?php echo $row['product_id'] ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								    View
							   </a>
						   </div>
   
							<div class="block2-txt flex-w flex-t p-t-14">
							   <div class="block2-txt-child1 flex-col-l ">
								   <a href="product-detail.php?product=<?php echo $row['product_id'] ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								   <?php echo $row['product_name'] ?>
								   </a>
   
								   
								   <span class="stext-105 cl3">
									  <h4 class="d-inline"> $<?php echo $row['product_sale_price'] ?> </h4> 
									  <del style="color:red">$<?php echo $row['product_price'] ?> </del>
								   </span>
								   
							   </div>
   
							   <div class="block2-txt-child2 flex-r p-t-3">
								   <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									   <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									   <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								   </a>
							   </div>
						   </div> 
						</div>
				      </div> 
				   <?php endwhile;  ?>
				
							
					
					
					</div>
				

				</div>
			</div>
		</div>
	</section>	
			<!-- end section -->
		</div>
	</div>
		

	<?php 
	include 'includes/footer-user.php';
	?>