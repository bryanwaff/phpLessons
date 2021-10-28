<?php
//indexed
//associative
//multidimentional

    //INDEXED ARRAYS
$names = array("waff","jane","oscar","shiko");
echo $names{3};
echo "<br>";
echo $names{0};
echo "<br>";
echo "<br>";


    //ASSOCIATIVE ARRAYS
$cars = array("KCA461J"=>"Mercedes","KDE442S"=>"Audi","KBP337X"=>"Toyata");
echo $cars["KBP337X"];
echo "<br>";
foreach ($cars as $sajili => $gari){
    echo $sajili;
    //echo $gari;
    echo "<br>";
}

    //