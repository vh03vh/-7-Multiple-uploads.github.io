<!DOCTYPE html>
<html>
<head>
<title>Multiple File Upload using Ajax, Jquery and PHP</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
</head>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery_1.5.2.js"></script>
	<script type="text/javascript" src="js/vpb_uploader.js"></script>
	<script type="text/javascript">
$(document).ready(function()
{
	// Call the main function
	new vpb_multiple_file_uploader
	({
		vpb_form_id: "form_id", // Form ID
		autoSubmit: true,
		vpb_server_url: "upload.php" 
	});
});
</script>
<style>
body {
	font-family:Verdana, Geneva, sans-serif; 
}
span{
	color:red;
	cursor:pointer;
}
</style>
<body>

<center>

<h2 style="color:blue; text-align:center;">Multiple Files Upload</h2>

<form name="form_id" id="form_id" action="javascript:void(0);" enctype="multipart/form-data" style="width:800px; margin-top:20px;">  
	<input type="file" name="vasplus_multiple_files" id="vasplus_multiple_files" multiple="multiple" style="padding:5px;"/>      
	<input type="submit" value="Upload" style="padding:5px;"/>
</form>

<table class="table table-striped table-bordered" style="width:60%;" id="add_files">
	<thead>
		<tr>
			<th style="color:blue; text-align:center;">File Name</th>
			<th style="color:blue; text-align:center;">Status</th>
			<th style="color:blue; text-align:center;">File Size</th>
			<th style="color:blue; text-align:center;">Action</th>
		<tr>
	</thead>
	<tbody>
	
	</tbody>
</table>

</center>
	

</body>
</html>