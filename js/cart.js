
// Add items using ajax
// **************************** ADD ITEM TO CART USING AGAJ CALL
// send add to cart request
function ajaxAddToCart(item)
{
		
	// flash the cart
	$(".carttop" ).stop();
	$(".carttop" ).animate({ opacity: 0 },{duration:100,complete: function() {
	    $( this ).animate({ opacity: 1 },500);
	}
	});
		
	var qty=$("#qty").val();
		
	$("#ajaxloadingdiv").stop(true,true).fadeIn(0).html("Adding to cart..");
	$.post("/ajax/addtocart.aspx",
        {
            item:item,
            qty:qty
        },
        function(data,status){
            //alert("Data: " + data + "\nStatus: " + status);
            ajaxAddToCart_response(data);
        });
	return;
		
}
// receive add to cart response.
function ajaxAddToCart_response(req)
{
// the element id is located in header.php
responseString=req;
if (parseInt(responseString))
{
    // update item count in header part
    itemcount=parseInt(req);
    if (document.getElementById('LblNumberOfItemsCart')) {
        document.getElementById('LblNumberOfItemsCart').innerHTML = itemcount;
        $("#ajaxloadingdiv").stop(true, true).show(0).html("Item added.").fadeOut(1000);
    }else
    {
        $("#ajaxloadingdiv").stop(true, true).show(0).html("You must login first").fadeOut(2000);
    }
    
			
			
}else
{
    // ask user to login if he is not logged in
    document.getElementById('ajaxloadingdiv').innerHTML="Please login to add item <BR><a href='signup.php'>Login</a> | <a href='signup.php'>Register</a>";
}
		
}
// **************************** ADD ITEM TO CART USING AGAJ CALL
