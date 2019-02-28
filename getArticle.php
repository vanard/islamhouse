<?php

require_once 'func.php';
$fc = new func();

$api = $fc->getData("articles");
echo($api);

// if(isset($_POST['country']))
// {
//     $country = $_POST['country'];
//     $th = $fc->detailR($country);
//     echo $th;
// }else{
//     echo "ega tai";
// }

?>