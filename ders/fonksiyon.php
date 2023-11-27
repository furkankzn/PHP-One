<?php 
$kdv_oran = 1.20;
function kdv($deger){
  global $kdv_oran;
  $deger=$deger*$kdv_oran;
  return $deger;
}
?>