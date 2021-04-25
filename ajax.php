<?php 

include "app/contact.php";

$obj = new contact();
$data = $obj->list_contact();

echo json_encode($data);


?>