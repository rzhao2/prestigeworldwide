<?php

/*
9,1:1,Types,Plain,0,Poppy,0,Cinnamon Raisin,0,Onion,0,Wheat,0,Spinach,0,Pumpernickel,0,Everything,0,Pumpernickel Everything,0
3,0:3,Cream Cheeses,Regular Cream Cheese,49, Lite Cream Cheese,49, Vegetable Cream Cheese,49
2,0:2,Other Condiments,Jelly,20,Butter,20
*/

function numOptionSets($s)
{ /*Takes an encoded item_options and returns how many option sets it has*/

	$array = explode(',', $s);

	$array_length = count($array);

	//Each time we come across an item set, go to the end of the set and see if we haven't run across the array boundary

	$num_sets = 0;

	$current_value = 0;

	while($current_value<$array_length)
	{
		$num_sets++;
		$set_length=$array[$current_value];
		$current_value += 3+(2*$set_length);
	}

	return $num_sets;
	
}

function getOptionSets($s)
{ /*Separates an encoded item_options into its encoded option sets*/

	$array = explode(',', $s);

	$array_length = count($array);

	$i = 0; //Use to iterate down the array.
	
	//First find the total number of options
	$num_sets = numOptionSets($s);

	$optionSets = array_fill(0,$num_sets,0);
	$current_value = 0;

	for($i=0; $i<$num_sets; $i++)
	{
		$set_val = $array[$current_value];
		$optionSets[$i] = implode(",", array_slice($array, $current_value, 3+(2*$set_val) ) );
		$current_value += (3+(2*$set_val));
	}

	return $optionSets;

}

function getOptionName($s)
{ /*Takes an encoded Option Set and returns the name of it*/

	$a = explode(',', $s);
	return $a[2];

}

function getOptionRange($s)
{ /*Takes an encoded Option Set and returns the range of it*/

	//Returns as an array. First element is the lower bound, second element is the upper bound.
	$a = explode(',', $s);
	//echo "<span>".$a[1]."</span>";
	return explode(":", $a[1] );
	
}

function getNumOptions($s)
{ /*Takes an encoded Option Set and returns a 2D array of all the options in it*/

	$array = explode(',', $s);
	return $array[0];
}

function getOptions($s)
{ /*Takes an encoded Option Set and returns a 2D array of all the options in it*/

	$array = explode(',', $s);
	$num_options = $array[0];

	//$ret = array_fill(0,$num_options, array_fill(0,2,0));

	$counter=0;

	for($i=3; $i< (3+2*$num_options); $i+=2)
	{
		$ret[$counter][0] = $array[$i];
		$ret[$counter][1] = $array[$i+1];
		$counter++;
	}

	return $ret;
}

?>