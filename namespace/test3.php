<?php
    namespace test3;

    require "test1.php";
    require "test2.php";
    
    use test1;
    use test2;
    
   

    //echo  test1\$str."<br>"; Alocona korte hobe bhaiya er sathe
    
    echo "<br>";

    echo test1\hello()."<br>";
    echo test2\hello()."<br>";

    echo "<br>";

    $t1 = new test1\intro();
    $t2 = new test2\intro();

    echo $t1->Introduction()."<br>";
    echo $t2->Introduction()."<br>";