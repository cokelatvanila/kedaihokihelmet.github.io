<?php

	include "pages/header.php";

?>
<!-----HEADER----->

<!------MAIN----->
<!--content-->
<!--script-->
<script>$(document).ready(function(c) {
	$('.close1').on('click', function(c){
		$('.cart-header').fadeOut('slow', function(c){
			$('.cart-header').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.close2').on('click', function(c){
		$('.cart-header1').fadeOut('slow', function(c){
			$('.cart-header1').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.close3').on('click', function(c){
		$('.cart-header2').fadeOut('slow', function(c){
			$('.cart-header2').remove();
		});
	});	  
});
</script>
<!--script-->
<!--checkout-->
<div class="check-out">
	<div class="container">
		<div class="bs-example4" data-example-id="simple-responsive-table">
			<div class="table-responsive">
				<table class="table-heading simpleCart_shelfItem">
					<tr>
						<th class="table-grid">Item</th>
						<th>Prices</th>
						<th >Delivery</th>
						<th>Subtotal</th>
					</tr>
					<tr class="cart-header">
						<td class="ring-in">
							<a href="single.php" class="at-in">
								<img src="images/ch.jpg" class="img-responsive" alt="">
							</a>
							<div class="sed">
								<h5>
									<a href="single.php">Sed ut perspiciatis unde</a>
								</h5>
								<p>(At vero eos et accusamus et iusto odio dignissimos ducimus ) </p>
							</div>
							<div class="clearfix"></div>
							<div class="close1"></div>
						</td>
						<td>$100.00</td>
						<td>FREE SHIPPING</td>
						<td class="item_price">$100.00</td>
						<td class="add-check">
							<a class="item_add hvr-skew-backward" href="#">Add To Cart</a>
						</td>
					</tr>
					<tr class="cart-header1">
						<td class="ring-in">
							<a href="single.php" class="at-in">
								<img src="images/ch2.jpg" class="img-responsive" alt="">
							</a>
							<div class="sed">
								<h5>
									<a href="single.php">Sed ut perspiciatis unde</a>
								</h5>
								<p>(At vero eos et accusamus et iusto odio dignissimos ducimus ) </p>
							</div>
							<div class="clearfix"> </div>
							<div class="close2"> </div></td>
							<td>$100.00</td>
							<td>FREE SHIPPING</td>
							<td class="item_price">$100.00</td>
							<td class="add-check">
								<a class="item_add hvr-skew-backward" href="#">Add To Cart</a>
							</td>
						</tr>
						<tr class="cart-header2">
							<td class="ring-in">
								<a href="single.php" class="at-in">
									<img src="images/ch1.jpg" class="img-responsive" alt="">
								</a>
								<div class="sed">
									<h5>
										<a href="single.php">Sed ut perspiciatis unde</a>
									</h5>
									<p>(At vero eos et accusamus et iusto odio dignissimos ducimus ) </p>
								</div>
								<div class="clearfix"></div>
								<div class="close3"></div>
							</td>
							<td>$100.00</td>
							<td>FREE SHIPPING</td>
							<td class="item_price">$100.00</td>
							<td class="add-check">
								<a class="item_add hvr-skew-backward" href="#">Add To Cart</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="produced">
				<a href="single.php" class="hvr-skew-backward">Produced To Buy</a>
			</div>
		</div>
	</div>
</div>
<!--checkout-->

<!--brand-->
<div class="container">
	<div class="brand">
		<div class="clearfix"></div>
	</div>
</div>
<!--brand-->
<!--content-->
<!------MAIN----->

<!------FOOTER----->
<?php include "pages/footer.php"; ?>
<?php ?>