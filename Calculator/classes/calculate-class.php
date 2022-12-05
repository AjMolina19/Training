<?php 
    require_once ('Calc-Contr.php');
    
    $old = $_POST['old'];
    $num = $_POST['num'];
    $operators = $_POST['operators'];
    
    $class = new CalcController($old, $num, $operators);
        echo $class->calcMethod();
