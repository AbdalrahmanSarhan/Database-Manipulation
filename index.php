 	<!DOCTYPE html>
 	<html>

 	<head>
 		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<title>Browse Data</title>
 		<?php
			include("./bootstrab.php");
			?>
 	</head>

 	<body>
 		
 		<div class="container">

		 <div>
			 <form action="" method="get">
			 search: <input class="form-control" type="text" name="search" id="">
			<input type="submit" name="submit"> 
			</form>
		 </div>
		 <div>
			<a href="?greatthan=5">display great than 5 $</a>
		 </div>
 			<?php
				$db = new mysqli("127.0.0.1", "test", "passowrd", "test");
				//استقبال المعلومات من المستخدم
				if (isset($_POST['newProduct'])) {
					// $id =$db->real_escape_string($_POST['id']); 
					$name = $db->real_escape_string($_POST['name']);
					$price = $db->real_escape_string($_POST['price']);
					$description =$db->real_escape_string($_POST['description']);
					$quantity =$db->real_escape_string( $_POST['quantity']);
					$create_at =$db->real_escape_string( $_POST['create_at']);

					// echo $name  . ' ' . $price  . ' ' . $description  . ' ' . $quantity . '' . $create_at;

					$db->query("INSERT INTO `product`(`name`, `price`, `description`, `quantity`, `create_at`) VALUES ('$name','$price','$description','$quantity','$create_at')"); //بنعمل اضافه على الداتابيس
				}
				
				?>

 			<?php


				echo "<pre>";
    // استقبال نص البحث عن الاسم ان كان موجود
					if (isset($_GET['search'])) {
						$search = " and name = '" . $_GET['search'] ."'";//
					}else {
						$search = "";
					}

					// استقبال قيمة البحث عن اكبر من 5 للسعر المنتج ان كان موجود
					if (isset($_GET['greatthan']) && $_GET['greatthan'] == "5" ) {
						$greatthan = " and price > 5 ";//
					}else {
						$greatthan = "";
					}



				if (isset($_REQUEST['pageno']))
					$pageno = $_REQUEST['pageno'];
				else
					$pageno = 1;

				$sql = "SELECT * FROM `product`";


				$results = $db->query($sql); //بنعمل اضافه على الداتابيس
				$total_rows = mysqli_num_rows($results); // 11
				$no_of_record_per_page = 10;
				$total_pages = ceil($total_rows / $no_of_record_per_page); // 11/5=3
				$offset = ($pageno - 1) * $no_of_record_per_page;//لحسااب عدد المنتجات الي بدي اتجاوزها
				$sql = "SELECT * FROM `product` where 1=1  " . $search  ."  ". $greatthan ." order by id desc LIMIT $no_of_record_per_page offset $offset";//ازاحة للمنتجات 

//$sql = "select * from product";
				echo $sql ;
				$results = $db->query($sql); //بنعمل اضافه على الداتابيس
				echo "Number of rocords= " . $total_rows;

				// $db = 'SELECT * FROM prodect WHERE id = $id';
				//  $result = $db->query("SELECT * from product");

				// echo "Number of rocords= ".$total_rows;
				echo "<table border=1 class='table'><tr><th>ID </th><th>name </th><th>price </th><th>description </th><th>quantity </th><th>create_at </th>> </tr>";
				$x = 1;
				while ($row = $results->fetch_assoc()) {
					if ($x % 2 == 0) {
						echo "<tr class='table-info'>";
						echo "<td>" .htmlspecialchars( $row['id']) . "</td>";
						echo "<td>" .  htmlspecialchars( $row['name'] ). "</td>";
						echo "<td>" .  htmlspecialchars( $row['price'] ). "</td>";
						echo "<td>" .  htmlspecialchars( $row['description'] ). "</td>";
						echo "<td>" .  htmlspecialchars( $row['quantity'] ). "</td>";
						echo "<td>" .  htmlspecialchars( $row['create_at'] ). "</td>";
	
						echo "</tr>";
					} else {
						echo "<tr class='table-warning'>";
						echo "<td>" .  htmlspecialchars( $row['id'] ). "</td>";
						echo "<td>" .  htmlspecialchars( $row['name'] ). "</td>";
						echo "<td>" .  htmlspecialchars( $row['price'] ). "</td>";
						echo "<td>" .  htmlspecialchars( $row['description'] ). "</td>";
						echo "<td>" .  htmlspecialchars( $row['quantity'] ). "</td>";
						echo "<td>" .  htmlspecialchars( $row['create_at'] ). "</td>";
						
						echo "</tr>";
					}
					$x++;
				}
				echo "</table>";
				?>
 		</div>



 		<nav aria-label="Page navigation example">
 			<ul class="pagination justify-content-center">
 				<li class="page-item 
<?php if ($pageno <= 1)//اذا كان الصفحة الحالية في لينك هي واد تعطل الالينك 
	echo "disabled";       ?>
    ">
 					<a class="page-link" href="<?php

												echo "?pageno=" . ($pageno - 1);

												?>" tabindex="-1" aria-disabled="true">Previous</a>
 				</li>


 				<?php

					for ($x = 1; $x <= $total_pages; $x++) {
						echo "  <li class='page-item'><a class='page-link' href='?pageno=$x'>$x</a></li> ";
					}
					?>
 				<li class="page-item <?php if ($pageno >= $total_pages)
											echo "disabled";       ?>">
 					<a class="page-link" href=" 

<?php
echo "?pageno=" . ($pageno + 1);//

?>">Next</a>
 				</li>
 			</ul>
 		</nav>


 		<div style="padding-bottom: 35%;"></div>
 		<?php
			include("footer.php");

			?>
    <a href="./addproduct.php">go to add product </a>


 	</body>

 	</html>