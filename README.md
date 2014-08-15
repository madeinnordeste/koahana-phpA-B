# phpA-B kohana module

## Oficial website of phpA-B:

[phpA-B](http://phpabtest.com/)

	Endless possibilities. Universal results. Introducing A/B testing with PHP

###Example of use:
	
	//inluce lib
    require Kohana::find_file('vendor', 'phpA-B/phpab');
	
	//create variations
    $my_test = new phpab('headline', TRUE); // remove TRUE to turn on GA tracking and maintain variation
    $my_test->add_variation('logos');
    $my_test->add_variation('ethos');
	
	//get segments
    echo $my_test->get_user_segment();


this show: **logos**, **pathos** or **control**

> **OBS:** __control__ variation is added for default !

###More examples

View more examples in **vendor/phpA-B/samples/**
