
$(document).ready(function(){
 brand();
 products();
 category();

function brand(){
		$.ajax({
			url	:	"jquery.php",
			method:	"POST",
			data	:	{brand:1},
			success	:	function(data){
				$("#brand").html(data);
				
			}
		})
	}

	function products(){
		$.ajax({
			url	:	"jquery.php",
			method:	"POST",
			data	:	{products:1},
			success	:	function(data){
				$("#products").html(data);
				
			}
		})
	}

	function category(){
		$.ajax({
			url	:	"jquery.php",
			method:	"POST",
			data	:	{category:1},
			success	:	function(data){
				$("#category").html(data);
				
			}
		})
	}

$("body").delegate(".category","click",function(event){
		$("#products").html("<h3>Loading...</h3>");
		event.preventDefault();
		var cid = $(this).attr('cid');
		
			$.ajax({
			url		:	"jquery.php",
			method	:	"POST",
			data	:	{select_category:1,cat_id:cid},
			success	:	function(data){
				$("#products").html(data);
				if($("body").width() < 480){
					$("body").scrollTop(683);
				}
			}
		})
	
	})

$("body").delegate(".brand","click",function(event){
		$("#products").html("<h3>Loading...</h3>");
		event.preventDefault();
		var bid = $(this).attr('bid');
		
			$.ajax({
			url		:	"jquery.php",
			method	:	"POST",
			data	:	{select_brand:1,brand_id:bid},
			success	:	function(data){
				$("#products").html(data);
				if($("body").width() < 480){
					$("body").scrollTop(683);
				}
			}
		})
	
	})

$("#btn").click(function(){
		$("#products").html("<h3>No Result Found!!</h3>");
		var keyword = $("#search").val();
		if(keyword != ""){
			$.ajax({
			url		:	"jquery.php",
			method	:	"POST",
			data	:	{search:1,keyword:keyword},
			success	:	function(data){ 
				$("#products").html(data);
				 if($("body").width() < 480){
				 	$("body").scrollTop(683);
				 }
			}
		})
		}
	})
	
	function cart_count(){
		$.ajax({
			url	:	"jquery.php",
			method	:	"POST",
			data	:	{cart_count:1},
			success	:	function(data){
				$(".badge").html(data);

			}
		})
	}

cart_count();
$("body").delegate("#product","click",function(event){

		event.preventDefault();
		var p_id = $(this).attr('pid');
		$.ajax({
			url	:	"jquery.php",
			method	:	"POST",
			data	:	{addToProduct:1,proId:p_id},
			success	:	function(data){
				
				 $("#product_msg").html(data);
				 cart_count();
				 
				 
			}
		})
	})


$("#cart_container").click(function(event){
		event.preventDefault();
			$.ajax({
			url	:	"jquery.php",
			method	:	"POST",
			data	:	{cart_product:1},
			success	:	function(data){
				
				 $("#cart_display").html(data);
				 cart_count();
 
				 
			}
		})

})
cart_container();
	function cart_container(){
		$.ajax({
			url	:	"jquery.php",
			method	:	"POST",
			data	:	{get_cart_product:1},
			success	:	function(data){
				$("#cart_product").html(data);
			}
		})
		
	};

cart_check();
	function cart_check(){
		$.ajax({
			url	:	"jquery.php",
			method	:	"POST",
			data	:	{cart_checkout:1},
			success	:	function(data){
				$("#cart_check").html(data);
			
			}
		})
	};


$("body").delegate(".qty","keyup",function(){
		var pid = $(this).attr("pid");
		var qty = $("#qty-"+pid).val();
		var price = $("#price-"+pid).val();
		var total = qty * price;
		$("#total-"+pid).val(total);

	})

	



$("body").delegate(".remove","click",function(event){
		event.preventDefault();
		var pid = $(this).attr("remove_id");
		$.ajax({
			url	:	"jquery.php",
			method	:	"POST",
			data	:	{removeFromCart:1,removeId:pid},
			success	:	function(data){
				$("#cart_msg").html(data);
				cart_check();
				cart_count();
			}
		})
		})



$("body").delegate(".update","click",function(event){
		event.preventDefault();
		var pid = $(this).attr("update_id");
		var qty = $("#qty-"+pid).val();
		var price = $("#price-"+pid).val();
		var total = $("#total-"+pid).val();
		$.ajax({
			url	:"jquery.php",
			method	:	"POST",
			data	:	{updateProduct:1,updateId:pid,qty:qty,price:price,total:total},
			success	:	function(data){
				$("#cart_msg").html(data);
				cart_check();
			}
		})
	})
});
	