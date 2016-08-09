<?php 

$memcache=new Memcache;
//var_dump($memcache);
$one=$memcache->connect('localhost', 11211) or die ("Could not connect");
var_dump($one);
$memcache->set('name','lisi');
echo $memcache->get('name');

 ?>

