<?php
/*ID: 602110199
Name: Cai Anmin(Sandwich)
Wechat: Sandwich*/

/*
Instead of using separated variables for storing your data,
try to use associative array to store them with the following structure:

[
    [
        'prefix' = > '...',
        'firstName' => '...',
        'lastName' => '...',
        'gender' => '...',
        'phone' => ['...', ... ],
    ],

    [
        'prefix' = > '...',
        'firstName' => '...',
        'lastName' => '...',
        'gender' => '...',
        'phone' => ['...', ... ],
    ],

    ...
]

And for prefix and gender use the following data:

    $prefixData = ['Mr.', 'Miss.', 'Mrs.'];
    $genderData = ['Male', 'Female', 'Transgender'];

Then you do not need if-statement get the real data from code (0, 1).
e.g. in your code you can use:

printf("Gender: %s\n", $genderData[$array4[$i]]);

*/

for($i=0;;$i++){
	echo"Data ",$i+1,"\n";
	$n=$i+1;
	echo"     Name Prefix (0: Mr., 1: Miss., 2: Mrs.): ";
	$np=null;
	fscanf(STDIN,"%s",$np);
	if($np==null){
	break;
	}else{
	$array1[$i]=$np;
	echo"                                  First Name: ";
    fscanf(STDIN,"%s",$fn);
	$array2[$i]=$fn;
	echo"                                   Last Name: ";
	fscanf(STDIN,"%s",$ln);
	$array3[$i]=$ln;
	echo" Gender (0: Male, 1: Female, 2: Transgender): ";
	fscanf(STDIN,"%s",$g);
	$array4[$i]=$g;
	}for($j=0;;$j++){
	echo"                                 Phone Number  ",$j+1,": ";
	$pn=null;
	fscanf(STDIN,"%s",$pn);
	if($pn==null){
	break;
	}else{
	$array5[$i][$j]=$pn;
    }
	}$p[]=$j;
	}echo"\n------------------------------------------------------\n";
for($i=0;$i<$n-1;$i++){
	if($array1[$i]==0){
		echo"Mr.";
	}elseif($array1[$i]==1){
		echo"Miss.";
	}elseif($array1[$i]==2){
		echo"Mrs.";
	}echo$array2[$i]," ",$array3[$i],"\nGender: ";
	if($array4[$i]==0){
		echo"Male\n";
	}elseif($array4[$i]==1){
		echo"Female\n";
	}elseif($array4[$i]==2){
		echo"Transgender\n";
	}echo"Phone Number: ";
/*
You don't need $p in this case juse use:

	count($array5[$i])

instead.

Or the better way, without $j looping, just use implode():

echo implode(', ', $array5[$i]);

*/
	for($j=0;$j<$p[$i];$j++){
		if($j<$p[$i]-1){
			$c=", ";
		}else{
			$c="";
		}echo$array5[$i][$j],$c;
	}echo"\n------------------------------------------------------\n";
}
?>