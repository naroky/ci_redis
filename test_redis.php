<?php 
echo ("test");
$redis  = new \Redis();
$redis->connect('172.17.0.5');
$redis->set('foo', 'bar');

echo ($redis->get('foo'));
?>