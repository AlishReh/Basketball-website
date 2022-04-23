<?php
  $image = $_FILES["image"];
?>
<?php
  move_uploaded_file($image["tmp_name"], "../uploads/" . $image["name"]);
  header("Location:../pages/wallpapers.php");
  exit;
 ?>
