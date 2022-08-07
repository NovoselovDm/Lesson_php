<?php
    echo "task 1 \n\r<br>";

    $a=rand(0, 100);
    $b=rand(0, 900);

    echo "$a + $b=" . ($a+$b);

    echo "<h2>task2</h2><br>";

    function GenerateRandomString ($length=15):string {
        $char='abckdddhkhkhkjhbhbkjkhkhkhkhkhkhkhkkkkkkkkkkkkkhgy';
        $charlength=strlen($char);
        $randomstring='';

        for ($i=0; $i<$length; $i++) {
            $randomstring .= $char[rand(0,$charlength-1)];

        }
        return $randomstring;

    }

    $str_one = GenerateRandomString ();
    $str_two=GenerateRandomString(9);

    echo "$str_one+$str_two=" . $str_one . $str_two;



echo "<h2>task3</h2><br>";


$type_animal="fish";
$dog="Sharik";
$cat="Barsic";
$fish="Nemo";

if (isset ($$type_animal)){
    echo $$type_animal;
}
else {
    echo "Error";
}