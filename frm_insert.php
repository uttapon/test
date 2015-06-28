<html>
	<head>
		<title></title>
	</head>

	<body>
		<form action="insert.php" name="frm_insert" method="POST">
			<p>หมายเลขผลิตภัณฑ์:<input type="text" name="prod_id"></p>
			<p>หมายเลขลูกค้า:<input type="text" name="vend_id"></p>
			<p>ชื่อลูกค้า:<input type="text" name="prod_name"></p>
			<p>ราคาสินค้า:<input type="text" name="prod_price"></p>
			<p>รายระเอียดสินค้า:<input type="text" name="prod_desc"></p>
			<button type"submit" name="btn_submit">เพิ่มชื่อ</button>
			<a href="select.php">Back</a>
		</form>
	</body>
</html>