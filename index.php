<?php 
/*
echo "halloword";
echo '<br>';
$test = "hallonoom";
echo $test;
echo "<br>";
$getx=$_GET["x"];
$gety=$_GET["y"];
$getc=$_GET['c'];

if($getc == "a"){
echo $getx+$gety;
} else if($getc == "b"){
echo $getx-$gety ;
} else if ($getc == "c"){
echo $getx*$gety ;
}
else if ($getc == "d"){
echo $getx/$gety ;
}
*/
$postpx = $_POST["px"];
$postpy = $_POST["py"];
$postpc = $_POST["pc"];
if($postpc == "a"){
$result = $postpx+$postpy;
}
else if ($postpc == "b"){
$result = $postpx-$postpy;
}
else if ($postpc == "c"){
$result = $postpx*$postpy;
}
else if ($postpc == "d"){
$result = $postpx/$postpy;
}
//var_dump($_POST);

?>
<html>
<head></head>
<body>
<form method ="post" > 
<input type ="text" name="px"  value="<?php echo $postpx; ?>  "/>
<select name="pc">
<option value="a">บวก</option>
<option value="b">ลบ</option>
<option value="c">คูณ</option>
<option value="d">หาร</option>
</select>
<input type ="text" name="py"  value="<?php echo $postpy; ?>"/>
<input type="submit" value="คำนวน">
<?php echo $result;?>
</form>
</body> 
</html>
