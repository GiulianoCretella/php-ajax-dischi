<?php include __DIR__.'/database.php';
$switchResult=[];
if(isset($_GET['genere'])){
    foreach($albums as $album){
        if($album['genre'] == $_GET['genere']){
            $switchResult[]= $album;
        };
    };
}else{
    $switchResult = $albums;
};
header('Content-Type: application/json');
echo json_encode($switchResult)
?>