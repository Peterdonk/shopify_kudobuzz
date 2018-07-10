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


	<form method="post" action="add_product.php">
		<input type="text" name="txt_title" placeholder="Enter Product Title">
		<input type="text" name="txt_body" placeholder="Enter Product Body">
		<input type="text" name="txt_vendor" placeholder="Enter Product vendor">
		<input type="text" name="txt_prod_type" placeholder="Enter Product Type">
		<input type="text" name="txt_tags" placeholder="Enter Tags" >
		<input type="submit" name="btn_submit" id="btn_submit">
	</form>

</body>
</html>
