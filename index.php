<?php
include "./data_manager.php";
$submitted = isset($_POST["UserName"], $_POST["form1"]);
if($submitted){
    $username =  $_POST["UserName"];
    echo $username;
    AddProducts($username, "https://www.sony.com/image/6145c1d32e6ac8e63a46c912dc33c5bb?fmt=pjpeg&wid=330&bgcolor=FFFFFF&bgc=FFFFFF", "Nice Headphones");
}
$submitted1 = isset($_POST["Delete"]);
if($submitted1){
    DeleteProduct(0);
    header("Location:index.php");
}
$products = GetProducts();
foreach($products as $key => $value) {
        ?>
    <div style="border: solid 1px red;">
        <h3><?php echo $value["name"];?></h3>
        <img src="<?php echo $value["image"];?>" alt="" height="100px" width="100px">
        <div>
            <?php echo $value["desc"];?>
        </div>
    </div>
    <?php
}
// var_dump(GetProducts());
?>
<form action="" method="post" >
    <input type="text" name="UserName" placeholder="username">
    <button name="form1">Submit</button>
</form>
<form action="" method="post" >
    <button name="Delete">Click to Delete</button>
</form>