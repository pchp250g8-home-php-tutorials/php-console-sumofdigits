<?php
    system("cls");
    echo("Enter an integer number\r\n");
    $strLine = chop(fgets(STDIN));
    $iNum = intval($strLine);
    $iVal = abs($iNum);
    $nSumDigits = 0;
    while ($iVal > 0) 
    {
        $nSumDigits += $iVal % 10;
        $iVal = intdiv($iVal, 10);
    }
    printf("The sum of digits of the number %d is %d\r\n", $iNum, $nSumDigits);
    fgetc(STDIN);
?>