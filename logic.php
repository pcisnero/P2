<?php

    if (isset($_POST["count"])) {

		$count=$_POST["count"];
		if(!is_numeric($count)){
			return 'sorry ';
		}
	
	} else {
		$count=0;
	}

	if (isset($_POST["uppercase"])) {

	 	$uppercase=true;

	} else {
		$uppercase = false;
	}

	if (isset($_POST["symbol"])) {

		$symbol=true;

	} else {

		$symbol = false;

	}

	if (isset($_POST["number"])) {

		$number=true;

	} else {

		$number = false;
		
	}

	if( $words = file('words.txt')){
		$selected_words = [];
		$symbols = ['@','#','$','%','!','='];
		$numbers = [1,2,3,4,5,6,7,8,9,0];

		for($i=0; $i <$count ; $i++){
			$max = count ($words) - 1;

			$rand = rand (0,$max);

			$word = $words[$rand];

			

			array_push ($selected_words, $word);
		}
		
if($uppercase){

	foreach ($selected_words as $index => $word) {

    $selected_words[$index]= ucfirst($word);

			//echo $selected_words[$index]. '<br/>' ;


	}


}
if($symbol){

	$index = count($selected_words)-1;
	
	$max = count ($symbols) - 1;

	$rand = rand (0,$max);
		$selected_words[$index] = $selected_words[$index].$symbols[$rand];
	
}

if($number){

	$index = count($selected_words)-1;
	
	$max = count ($number) - 1;

	$rand = rand (0,$max);
		$selected_words[$index] = $selected_words[$index].$numbers[$rand];
	
}

$password=implode("",$selected_words);


		}


