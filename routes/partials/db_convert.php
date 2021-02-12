<?php
$data = file_get_contents('../resources/data.json');
$dataEncoded = json_decode($data, true );
$dataFinal = [];
foreach ($dataEncoded['data'] as $data) {
  if (!array_key_exists($data['tipo'],$dataFinal)) {
    $dataFinal[$data['tipo']] = [];
    array_push($dataFinal[$data['tipo']], $data);
  } else {
    array_push($dataFinal[$data['tipo']], $data);
  }
}
$dataEncoded = $dataFinal;
 ?>
