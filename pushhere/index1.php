<!--?php
	$colorArray = array("Red","Green","Blue","Cyan","Yellow","Orange","Neon","Black","Purple","Violet");
	
	//$randColor = $colorArray[array_rand($colorArray, 4)];
	for($i = 0; $i < 4; $i++):
		$randColor = $colorArray[array_rand($colorArray, 1)];
		echo "<div align='center' style='background:$randColor; padding:10px; width:5em; color:#393939;display:inline-block;margin-left:20px;'><b>array<span style='color:#393939;'> ",$i+1,"</span></b></div>";
	endfor;
	
	if(isset($_GET['go'])){
		//$str = "<h2>Hello, $_GET['name'])</h2>";
		echo "hello ", $_GET['name']," ", $_GET['lname'];
	}else{
?>
<form method1="post">
	name: <input name="name"><br>
	lname: <input name="lname"><br>
	<input type="submit" name="go" value="register">
	
</form>
<!?php
}
?>
<html>
	<div style="width:20px; height:20px; background:yellow;">
	</div>
</html-->
	<?php 
    $colors = array("red","blue","green","black","purple");
    shuffle($colors);
    for($i=0;$i<sizeof($colors);$i++){
        echo "<div style='width:100px; height:100px;background:$colors[$i]'></div>";
    }   
    ?>  