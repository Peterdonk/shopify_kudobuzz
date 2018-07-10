<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<button id="create_product"></button>

</body>
</html>




<script type="text/javascript">
    $(document).ready(function(){
        $("#create_product").click(function(){

           $.ajax({
                type: 'POST',
                dataType: 'json',
                url: '.php',
                success: function(data) {
                   console.log(data);
                   

                }
            });
   });
});
</script>