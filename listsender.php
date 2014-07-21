<?php 
include_once 'include/header.php';
?>
<h1 class="page-header">List Sender</h1>

<?php 
$query = "select * from api_config";
echo $helpers->printMysqlDataToHtml($query, "table table-bordered");

?>
<?php 
include_once 'include/footer.php';
?>