<?php
/*ID: 602110199
Name: Cai Anmin(Sandwich)
Wechat: Sandwich*/

/*
You can create grade data with with the following structure:

$gradeData = [
    'A' => [],
    'B' => [],
    'C' => [],
    'D' => [],
    'F' => [],
];

Then you can check valid grade and store student with the following code:

if(array_key_exists($g, $gradeData)) {
    $gradeData[$g][] = $n;
} else {
    printf("Please input A, B, C, D or F for grade!!!\n");
}


And for print them out:

foreach($gradeData as $g => $students) {
    printf("%s (%2d): %s\n", $g, count($students), implode(', ', $students));
}

*/

$arrayA=[];
$arrayB=[];
$arrayC=[];
$arrayD=[];
$arrayF=[];
for($i=0;;$i++){
    echo"Student  ",$i+1,": (name grade, enter for end of data): ";
    $n=null;
    $g=null;
    fscanf(STDIN,"%s %s",$n,$g);
    if($n==null){
    break;
    }elseif($g!="A"&&$g!="B"&&$g!="C"&&$g!="D"&&$g!="F"){
        echo"Please input A, B, C, D or F for grade!!!\n";
        $i--;
    }elseif($g=="A"){
        $arrayA[]=$n;
    }elseif($g=="B"){
        $arrayB[]=$n;
    }elseif($g=="C"){
        $arrayC[]=$n;
    }elseif($g=="D"){
        $arrayD[]=$n;
    }elseif($g=="F"){
        $arrayF[]=$n;
    }
}echo"A ( ",count($arrayA),"): ";
/*
For easier way simply use:

echo implode(', ', $arrayA);
*/
for($i=0;$i<count($arrayA);$i++){
    $i<count($arrayA)-1?$c=", ":$c="";
    echo$arrayA[$i],$c;
}echo"\nB ( ",count($arrayB),"): ";

/*
For easier way simply use:

echo implode(', ', $arrayB);
*/
for($i=0;$i<count($arrayB);$i++){
    $i<count($arrayB)-1?$c=", ":$c="";
    echo$arrayB[$i],$c;
}echo"\nC ( ",count($arrayC),"): ";

/*
For easier way simply use:

echo implode(', ', $arrayC);
*/
for($i=0;$i<count($arrayC);$i++){
    $i<count($arrayC)-1?$c=", ":$c="";
    echo$arrayC[$i],$c;
}echo"\nD ( ",count($arrayD),"): ";

/*
For easier way simply use:

echo implode(', ', $arrayD);
*/
for($i=0;$i<count($arrayD);$i++){
    $i<count($arrayD)-1?$c=", ":$c="";
    echo$arrayD[$i],$c;
}echo"\nF ( ",count($arrayF),"): ";

/*
For easier way simply use:

echo implode(', ', $arrayF);
*/
for($i=0;$i<count($arrayF);$i++){
    $i<count($arrayF)-1?$c=", ":$c="";
    echo$arrayF[$i],$c;
}
?>