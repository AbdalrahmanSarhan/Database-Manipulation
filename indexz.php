<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php

    $servername = "127.0.0.1";
    $username = "test";
    $password = "passowrd";

    // Create connection
    $conn = new mysqli($servername, $username, $password,"test");

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: {$conn->connect_error}");
    }else{
      echo 'Connected successfully';
    }

//$sql = "select * FROM users;";

// $sql ="CREATE TABLE product (
//     id varchar(255),
//     name varchar(255),
//     price double,
//     description varchar(255),
//     quantity int,
//     create_at date
// )";
 $sql  ='insert into product (id,name,price, description ,quantity,create_at)
 values (11 ,"product2" , 22,"this is product 2",5,"2022-5-6");insert into product (id,name,price, description ,quantity,create_at)
 values (12 ,"product3" , 23,"this is product 3",5,"2022-5-8");insert into product (id,name,price, description ,quantity,create_at)
 values (13 ,"product4" , 12,"this is product 4",5,"2022-5-9");insert into product (id,name,price, description ,quantity,create_at)
 values (14 ,"product5" , 3,"this is product 5",5,"2022-6-7");insert into product (id,name,price, description ,quantity,create_at)
 values (15 ,"product6" , 5,"this is product 6",5,"2022-6-9");insert into product (id,name,price, description ,quantity,create_at)
 values (16 ,"product7" , 5,"this is product 7",5,"2022-6-2");insert into product (id,name,price, description ,quantity,create_at)
 values (17 ,"product8" , 35,"this is product 8",5,"2022-6-1");insert into product (id,name,price, description ,quantity,create_at)
 values (18 ,"product9" , 55,"this is product 9",5,"2022-6-2");insert into product (id,name,price, description ,quantity,create_at)
 values (19 ,"product10" ,21,"this is product 10",5,"2022-6-4");insert into product (id,name,price, description ,quantity,create_at)
 values (20 ,"product11" , 5,"this is product 11",5,"2022-6-5");insert into product (id,name,price, description ,quantity,create_at)
 values (21 ,"product12" , 2,"this is product 12",5,"2022-6-7");insert into product (id,name,price, description ,quantity,create_at)
 values (22 ,"product13" , 1,"this is product 13",5,"2022-7-8");insert into product (id,name,price, description ,quantity,create_at)
 values (23 ,"product14" , 1,"this is product 14",5,"2022-7-8");insert into product (id,name,price, description ,quantity,create_at)
 values (24 ,"product15" , 5,"this is product 15",5,"2022-7-8");insert into product (id,name,price, description ,quantity,create_at)
 values (25 ,"product16" , 5,"this is product 16",5,"2022-9-2");insert into product (id,name,price, description ,quantity,create_at)
 values (26 ,"product17" , 5,"this is product 17",5,"2022-9-9");insert into product (id,name,price, description ,quantity,create_at)
 values (27 ,"product18" , 2,"this is product 18",5,"2022-10-23");insert into product (id,name,price, description ,quantity,create_at)
 values (28 ,"product19" , 1,"this is product 19",5,"2022-10-26");insert into product (id,name,price, description ,quantity,create_at)
 values (29 ,"product20" , 5,"this is product 20",5,"2022-11-4");insert into product (id,name,price, description ,quantity,create_at)
 values (30 ,"product21" , 5,"this is product 21",5,"2022-12-2")';
//$sql = "select * from product";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<br>';
    echo $row['name'] .'<br>';
    echo $row['price'] .'<br>';
    echo $row['description'] .'<br>';
    echo $row['quantity'] .'<br>';
    echo $row['create_at'] .'<br>';
  }
} else {
  echo "0 results";
}
    ?> 

    <a href="./addproduct.php">go to add product </a>
  </body>
</html>