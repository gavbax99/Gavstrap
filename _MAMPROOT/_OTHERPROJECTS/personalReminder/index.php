<?php

// date
date_default_timezone_set("America/Los_Angeles");
$month = date("n");
$day = date("j");

/* FILE PATH
	1: January
	2: Febuary
	3: March
	4: April
	5: May
	6: June
	7: July
	8: August
	9: September
	10: October
	11: November
	12: December
*/

// people
$events = array(
	"TESTCASE" => array(
		"month" => 9,
		"day" => 4,
		"event" => "BirthdayTest",
		"name" => "TESTCASE"
	 ),
	"TESTCASE2" => array(
		"month" => 9,
		"day" => 29,
		"event" => "BirthdayTest",
		"name" => "TESTCASE2"
	 ),
	"TESTCASE3" => array(
		"month" => 10,
		"day" => 1,
		"event" => "BirthdayTest",
		"name" => "TESTCASE3"
	 ),
	"TESTCASE4" => array(
		"month" => 9,
		"day" => 15,
		"score" => 22,
		"event" => "BirthdayTest",
		"name" => "TESTCASE4"
	 ),

	// birthdays: the fam
	"Loren" => array(
	   "month" => 6,
	   "day" => 2,
	   "event" => "Birthday",
	   "name" => "Loren"
	),
	"Mom" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Mom"
	 ),
	"Dad" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Dad"
	 ),

	// birthdays: extended fam
	"Gilda" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Gilda"
	 ),
	"Rosa" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Rosa"
	 ),
	"Ing" => array(
		"month" => 9,
		"day" => 27,
		"event" => "Birthday",
		"name" => "Ing"
	 ),
	"Grandpa" => array(
		"month" => 9,
		"day" => 27,
		"event" => "Birthday",
		"name" => "Grandpa"
	 ),
	"Greta" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Greta"
	 ),
	"Loa" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Loa"
	 ),
	"Sue" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Sue"
	 ),

	 // birthdays: friends
	 "Alexia" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Alexia"
	 ),
	 "Ben S." => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Ben S."
	 ),
	 "Chase" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Chase"
	 ),
	 "Cole" => array(
		"month" => 9,
		"day" => 17,
		"score" => -5,
		"event" => "Birthday",
		"name" => "Cole"
	 ),
	 "Easy" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Easy"
	 ),
	 "Ezra" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Ezra"
	 ),
	 "Ger" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Ger"
	 ),
	 "Hayden" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Hayden"
	 ),
	 "Henry" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Henry"
	 ),
	 "Joel" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Joel"
	 ),
	 "Kenny" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Kenny"
	 ),
	 "Kyle" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Kyle"
	 ),
	 "Life" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Life"
	 ),
	 "Ron" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Ron"
	 ),
	 "Shawn" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Shawn"
	 ),
	 "Travis" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Travis"
	 ),
	 "Tyler C." => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Travis"
	 ),
	 "Zeal" => array(
		"month" => 0,
		"day" => 0,
		"event" => "Birthday",
		"name" => "Zeal"
	 ),

	 // AA bday
	 "Chase" => array(
		"month" => 0,
		"day" => 0,
		"event" => "AA birthday",
		"name" => "Chase"
	 ),
	 "Chris B." => array(
		"month" => 0,
		"day" => 0,
		"event" => "AA birthday",
		"name" => "Chris B."
	 ),
	 "Chris Talahassee" => array(
		"month" => 0,
		"day" => 0,
		"event" => "AA birthday",
		"name" => "Chris Talahassee"
	 ),
	 "Cole" => array(
		"month" => 0,
		"day" => 0,
		"event" => "AA birthday",
		"name" => "Cole"
	 ),
	 "Easy" => array(
		"month" => 0,
		"day" => 0,
		"event" => "AA birthday",
		"name" => "Easy"
	 ),
	 "Ezra" => array(
		"month" => 0,
		"day" => 0,
		"event" => "AA birthday",
		"name" => "Ezra"
	 ),
	 "Gabe" => array(
		"month" => 0,
		"day" => 0,
		"event" => "AA birthday",
		"name" => "Gabe"
	 ),
	 "Hayden" => array(
		"month" => 0,
		"day" => 0,
		"event" => "AA birthday",
		"name" => "Hayden"
	 ),
	 "Henry" => array(
		"month" => 0,
		"day" => 0,
		"event" => "AA birthday",
		"name" => "Henry"
	 ),
	 "Life" => array(
		"month" => 0,
		"day" => 0,
		"event" => "AA birthday",
		"name" => "Life"
	 ),
	 "Nick Y." => array(
		"month" => 0,
		"day" => 0,
		"event" => "AA birthday",
		"name" => "Nick Y."
	 ),
	 "Ross" => array(
		"month" => 0,
		"day" => 0,
		"event" => "AA birthday",
		"name" => "Ross"
	 ),
	 "Sam" => array(
		"month" => 0,
		"day" => 0,
		"event" => "AA birthday",
		"name" => "Sam"
	 ),
	 "Sean" => array(
		"month" => 9,
		"day" => 28,
		"event" => "AA birthday",
		"name" => "Sean"
	 ),
	 "Tony" => array(
		"month" => 0,
		"day" => 0,
		"event" => "AA birthday",
		"name" => "Tony"
	 ),
	 "Travis" => array(
		"month" => 0,
		"day" => 0,
		"event" => "AA birthday",
		"name" => "Travis"
	 ),
	 "Tyler C." => array(
		"month" => 0,
		"day" => 0,
		"event" => "AA birthday",
		"name" => "Travis"
	 ),
	 "Whitey" => array(
		"month" => 0,
		"day" => 0,
		"event" => "AA birthday",
		"name" => "Whitey"
	 ),

	 // other stuff
	//  "Travis" => array(
	// 	"month" => 0,
	// 	"day" => 0
	// 	"event" => "Birthday",
	// 	"name" => "Travis"
	//  ),

);

$wasAThingToday = true;

// today
foreach ($events as $event) {
	if ($event["day"] == $day && $event["month"] == $month) {
		echo ">>> ";
		echo $event["name"];
		echo " has a ";
		echo $event["event"];
		echo " today! ";
		echo "\n";
		$wasAThingToday = true;
	}
}

// spacing
if ($wasAThingToday) {
	echo "\n";
	echo "===============================================\n";
	echo "\n";
}

// this week
foreach ($events as $event) {
	if ($event["day"] > $day && $event["day"] - 8 < $day && $event["month"] == $month) {
		echo "On the ";
		echo $event["day"];
		echo ", ";
		echo $event["name"];
		echo " has a ";
		echo $event["event"];
		echo ".\n";
	}
}

$wasAThingToday = false;

/* FILE PATH
	/usr/local/bin/php /home/gavinbaxter/public_html/personalReminder.php
*/