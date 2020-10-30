<?php
/*ID: 602110199
Name: Cai Anmin(Sandwich)
Wechat: Sandwich*/

/*
You can create grade data with with the following structure:

$gradeData = [
    'A' => [
        'score' => 4,
        'students' => [],
    ],
    'B' => [
        'score' => 3,
        'students' => [],
    ],
    'C' => [
        'score' => 2,
        'students' => [],
    ],
    'D' => [
        'score' => 1,
        'students' => [],
    ],
    'F' => [
        'score' => 0,
        'students' => [],
    ],
];

Then you can check valid grade and store student with the following code:

if(array_key_exists($g, $gradeData)) {
    $gradeData[$g]['students'][] = $n;
} else {
    printf("Please input A, B, C, D or F for grade!!!\n");
}


And for print them out:

$totalScore = 0;
$totalStudent = 0;
foreach($gradeData as $g => $data) {
    $times = count($data['students']);
    $totalScore += $data['score'] * $times;
    $totalStudent += $times;
    printf("%s (%2d): %s\n", $g, $times, implode(', ', $data['students']));
}
printf("Average Grade Point: %.2f", $totalScore/$totalStudent);
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
for($i=0;$i<count($arrayA);$i++){
    $i<count($arrayA)-1?$c=", ":$c="";
    echo$arrayA[$i],$c;
}echo"\nB ( ",count($arrayB),"): ";
for($i=0;$i<count($arrayB);$i++){
    $i<count($arrayB)-1?$c=", ":$c="";
    echo$arrayB[$i],$c;
}echo"\nC ( ",count($arrayC),"): ";
for($i=0;$i<count($arrayC);$i++){
    $i<count($arrayC)-1?$c=", ":$c="";
    echo$arrayC[$i],$c;
}echo"\nD ( ",count($arrayD),"): ";
for($i=0;$i<count($arrayD);$i++){
    $i<count($arrayD)-1?$c=", ":$c="";
    echo$arrayD[$i],$c;
}echo"\nF ( ",count($arrayF),"): ";
for($i=0;$i<count($arrayF);$i++){
    $i<count($arrayF)-1?$c=", ":$c="";
    echo$arrayF[$i],$c;
}printf("\nAverage Grade Point: %.2f",(count($arrayA)*4+count($arrayB)*3+count($arrayC)*2+count($arrayD)*1)/(count($arrayA)+count($arrayB)+count($arrayC)+count($arrayD)+count($arrayF)));
?>