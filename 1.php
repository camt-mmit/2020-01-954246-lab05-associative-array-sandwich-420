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
        'phone' => '...',
    ],

    [
        'prefix' = > '...',
        'firstName' => '...',
        'lastName' => '...',
        'gender' => '...',
        'phone' => '...',
    ],

    ...
]

And for prefix and gender use the following data:

    $prefixData = ['Mr.', 'Miss.'];
    $genderData = ['Male', 'Female'];


Then you do not need if-statement get the real data from code (0, 1).
e.g. in your code you can use:

printf("Gender: %s\n", $genderData[$array4[$i]]);

Imagin that if you have 10 posible values: Male, Female, Transgender, Unknow, ...

*/

echo"Input Number of Data: ";
fscanf(STDIN,"%d",$n);
for($i=0;$i<$n;$i++){
	echo"Data ",$i+1,"\n";
	echo"   Name Prefix (0: Mr., 1: Miss.): ";
	fscanf(STDIN,"%s",$np);
	$array1[$i]=$np;
	echo"                       First Name: ";
	fscanf(STDIN,"%s",$fn);
	$array2[$i]=$fn;
	echo"                        Last Name: ";
	fscanf(STDIN,"%s",$ln);
	$array3[$i]=$ln;
	echo"      Gender (0: Male, 1: Female): ";
	fscanf(STDIN,"%s",$g);
	$array4[$i]=$g;
	echo"                     Phone Number: ";
	fscanf(STDIN,"%s",$pn);
	$array5[$i]=$pn;
}echo"------------------------------------------------------\n";
for($i=0;$i<$n;$i++){
	if($array1[$i]==0){
		echo"Mr.";
	}elseif($array1[$i]==1){
		echo"Miss.";
	}echo$array2[$i]," ",$array3[$i],"\nGender: ";
	if($array4[$i]==0){
		echo"Male\n";
	}elseif($array4[$i]==1){
		echo"Female\n";
	}echo"Phone Number: ",$array5[$i],"\n------------------------------------------------------\n";
}
?>
	
	