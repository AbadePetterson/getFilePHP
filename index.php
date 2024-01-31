<?php
$token = 'teste'; 

$filename = "tmp/" . $token . ".zip"; 

if (file_exists($filename)) {
    
    header('Content-Type: application/octet-stream');
    header("Content-Disposition: attachment; filename=" . basename($filename));
    header('X-Sendfile: ' . $filename);

    
    readfile($filename);
    exit;
} else {
    
    echo json_encode(array('error' => '1', 'msg' => 'Não foi possível encontrar o arquivo!'));
}
?>
