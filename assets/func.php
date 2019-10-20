<?php
function getAge($i){
	$dateOfBirth = "24-09-1989";
	$today = date("Y-m-d");
	$diff = date_diff(date_create($dateOfBirth), date_create($today));
	
	if($i==0){
	return $diff->format('%y');
	}
	elseif($i==1){
	return $diff->format('%d Days %m Months %y Years');	
	}
}

function getMotto(){
	$motto = array("I make things and build stuff.","I /always/ find a way","Honorary Logic Wizard","100% Not A Robot","Arrays start at 1, right?","All Your Bases Are Belong To Us","Probably not D.B. Cooper","Wonder how much RAM the Matrix is running?","No, I won't fix your printer","Programmers - We're Not All Hackers","Java and JavaScript are the same, right?","Clients will ALWAYS find EVERY bug","Inputs Sanitized on the molecular level","North Dakota Doesn't Exist","Rated R for Strongly Typed Language","Do global variables work on other planets?","Once compiled 'Hello World' with 0 errors.","Author of 3.8TB FizzBuzz Library","Has active restraining order against Visual Basic","Blood Type: C++","Do capital letters in camelCase store water?","100% Not A Clone!","Warning: Contains Trace Amounts Of Lead");
	$val = rand(1,count($motto))-1;
	return $motto[$val];
}
?>