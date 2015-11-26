<?php

function d3_data() {
	
	$data = new stdClass;
	$data->name = 'flare';
	
	$c1 = new stdClass;
	$c1->name = 'child1';
	$c2 = new stdClass;
	$c2->name = 'child2';
	
	$data->children = array();
	$data->children[] = $c1;
	$data->children[] = $c2;
	
	$g11 = new stdClass;
	$g11->name = 'grandchild1';
	$g11->size = 2000;
	$g12 = new stdClass;
	$g12->name = 'grandchild2';
	$g12->size = 1000;
	$g21 = new stdClass;
	$g21->name = 'grandchild1';
	$g21->size = 500;
	$g22 = new stdClass;
	$g22->name = 'grandchild2';
	$g22->size = 1000;
	
	$c1->children = array();
	$c1->children[] = $g11;
	$c1->children[] = $g12;
	
	$c2->children = array();
	$c2->children[] = $g21;
	$c2->children[] = $g22;
	
	//print_r('<pre>');
	//print_r($data);
	//print_r('</pre>');
	
	return json_encode($data);
}
header('Content-type: application/json');
echo d3_data();
exit();
?>
