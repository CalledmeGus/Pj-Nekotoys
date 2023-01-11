<?php

function component($product_Name, $product_Detail, $price, $image, $id){
    $element = '<form action="#" method="post">
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
            <div class="productinfo text-center">
            <img src= "' .$image. '" alt=""/>
            <h2> '.$price.' </h2>
            <p>'. $product_Name .'</p>
            <input type="hidden" name = "product_id" value="' .$id.'">
            <a href= "#" class="btn btn-default add-to-cart"> <i class="fa fa-shopping-cart"></i> Add to cart </a>
        </div>  
    <div class="product-overlay">
<div class="overlay-content">
    <h2>'. $price.'</h2>
    <p>'. $product_Detail.'</p>
    <button type"submit" class="btn btn-default add-to-cart" name="p_add"><i class="fa fa-shopping-cart"></i>Add to cart</button>
        </div>
        </div>
</div>
<div class="choose">
<ul class="nav nav-pills nav-justified">
<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
 <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
    </ul>   
</div>
</div>
</div>
</form>';
return $element;
}

function cartElement($product_Name, $product_Detail, $price, $image, $id){
    $element = '
    <tr>
	<td class="cart_product">
		<a href=""><img src="'.$image.'" alt=""></a>
	</td>
	<td class="cart_description">
		<h4><a href="">'.$product_Name.'</a></h4>
		<p>Detail: ' .$product_Detail.'</p>
	</td>
	<td class="cart_price">
		<p>'.$price.'</p>
	</td>
	<td class="cart_delete">
		<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
	</td>
    </tr>';
    return $element;
}
?>