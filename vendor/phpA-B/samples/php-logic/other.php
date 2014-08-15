<?php 

require_once('../../phpab.php');

include  '../../../dBug.php';

//$my_test = new phpab('test', TRUE); // remove TRUE to turn on GA tracking and maintain variation
$my_test = new phpab('test'); // remove TRUE to turn on GA tracking and maintain variation
$my_test->add_variation('logos');
$my_test->add_variation('pathos');


/*
for($i=1;$i<=100;$i++){
		new dBug($my_test->get_user_segment());	
}
*/
echo $my_test->get_user_segment();



 ?>