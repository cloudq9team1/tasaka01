<?php
$m = new MongoClient( 'mongodb://localhost:8888');
$cursor = $m->tem->users->find( array( 'name' => 'yutatsk'));
$result = $cursor->getNext();
echo json_encode( $result); 
?>
