<?php

	//$get_product_title = $_POST['txt_title'];
	//$get_product_body = $_POST['txt_body'];
	//$get_product_vendor = $_POST['txt_vendor'];
	//$get_product_type = $_POST['txt_prod_type'];
	//$get_product_tags = $_POST['txt_tags'];


	$encoded_message = 

	array(
    "title" => "Hellow",
    "body_html" => "THere",
    "vendor" => "I",
    "product_type" => "Was",
    "tags" => "There",
    );

//$encoded_message = json_encode($encoded_message);
//header("Location:https://producty-sync-shop.myshopify.com/admin/$encoded_message");
?>

<script type="text/javascript">
	$('#btn_send').on('click',function(){
		$.post('Location:https://producty-sync-shop.myshopify.com/admin/$encoded_message')
	})
	
</script>



?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Shopify Products
	</title>
</head>
<script type="text/javascript" src="jquery.min.js"></script>
<body>

	<button style="height: 300px;width: 400px" id="get_items"><a>Get JSON Data</a><button>


	<form method="post" >
		<input type="text" name="txt_title" placeholder="Enter Product Title">
		<input type="text" name="txt_body" placeholder="Enter Product Body">
		<input type="text" name="txt_vendor" placeholder="Enter Product vendor">
		<input type="text" name="txt_prod_type" placeholder="Enter Product Type">
		<input type="text" name="txt_tags" placeholder="Enter Tags">

		<input id="btn_send">
	</form>

</body>
</html>
