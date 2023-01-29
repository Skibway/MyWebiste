<?php 
$imageFolder = 'images';
$images = glob("$imageFolder/*.{jpg,gif,png,jpeg}", GLOB_BRACE);
?>

<div class="gallery">
<?php
foreach($images as $image) {
	echo "<div class=\"thumbnail\">";
	echo "<a href=\"$image\">";
	echo "<img src=\"$image\" width=\"300\"/>";
	echo "</a>";
	echo "</div>";
}
?>

</div>