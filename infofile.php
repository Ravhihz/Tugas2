<?php
$filename = "data.txt";
if (file_exists($filename)) {
	echo "File $filename ADA";
} else {
	echo "File $filename TIDAK ADA";
}
echo "<br>";
echo "Ukuran file <b>$filename</b> = ".filesize($filename). "bytes<br>";
echo "Jenis file <b>$filename</b> = ".filesize($filename). "<br>";
?>