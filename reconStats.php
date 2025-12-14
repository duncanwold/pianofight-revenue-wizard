<?php
	# WARNING!!!! This only works if a file already exists with at least one good entry in it. Example:
	/*
	[
		{
			"eventName": "Live Sex SF: 50 Shades of CRAY",
			"eventDate": "Friday March 18 2016 10:30 PM",
			"rentFee": "350",
			"techFee": "50",
			"miscNum": "0",
			"miscTxt": "N\/A",
			"pfProfitSplit": "0",
			"generatedDate": "4\/15\/2016, 9:20:17 AM"
		}
	]
	*/

	$reconVars = $_POST['reconVars'];
	#$reconVarsJson = array(
	#	'eventId' => $reconVars[0],
	#	'eventName' => $reconVars[1],
	#	'eventDate' => $reconVars[2],
	#	'rentFee' => $reconVars[3],
	#	'deposit' => $reconVars[4],
	#	'techFee' => $reconVars[5],
	#	'miscNum1' => $reconVars[6],
	#	'miscTxt1' => $reconVars[7],
	#	'miscNum2' => $reconVars[8],
	#	'miscTxt2' => $reconVars[9],
	#	'miscNum3' => $reconVars[10],
	#	'miscTxt3' => $reconVars[11],
	#	'pfProfitSplit' => $reconVars[12],
	#	'dealType' => $reconVars[13],
	#	'generatedDate' => $reconVars[14]
	#);
	
	$file = "reconStats.JSON";
	$json = json_decode(file_get_contents($file),TRUE);
	#array_push($json, $reconVarsJson);
	$json[$reconVars[0]] = array(
		'eventName' => $reconVars[1],
		'eventDate' => $reconVars[2],
		'rentFee' => $reconVars[3],
		'deposit' => $reconVars[4],
		'techFee' => $reconVars[5],
		'miscNum1' => $reconVars[6],
		'miscTxt1' => $reconVars[7],
		'miscNum2' => $reconVars[8],
		'miscTxt2' => $reconVars[9],
		'miscNum3' => $reconVars[10],
		'miscTxt3' => $reconVars[11],
		'pfProfitSplit' => $reconVars[12],
		'dealType' => $reconVars[13],
		'stage' => $reconVars[14],
		'generatedDate' => $reconVars[15]
	);
	
	file_put_contents("reconStats.JSON", json_encode($json, JSON_PRETTY_PRINT));
?>