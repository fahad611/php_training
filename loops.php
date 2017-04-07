<?php

// while loop

$number = 10;

while ($number < 100)
{
	echo "<br />" . $number++;
}

// do while loop

$x = 1;
do
{
	echo "the number is:$x";
	$x++;
}

while ($x < 10);

// for loop

for ($i = 0; $i < 10; $i++)
{
	echo $i;
}

// for each loop

$colors = array(
	"green",
	"red",
	"blue"
);

foreach($colors as $value)
{
	echo $value;
}

?>