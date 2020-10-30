<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
do{
printf("1. calculate price\n2. compare 2-numbers\n3. exit\ninput menue number:");
fscanf(STDIN, "%s", $x);
if ($x==1) 
{printf("input price and discount:");
    fscanf(STDIN, "%d %d", $price,$discount);
    $decrease=$price*$discount/100;
    $net=$price-$decrease;
    printf("price: %.2f, discount: %.2f, net price: %.2f \n",$price,$discount,$net);}
else if ($x==2)
{printf("input your first number:");
    fscanf(STDIN, "%s", $first);
    printf("input your second number:");
    fscanf(STDIN, "%s", $second);
    if ($first>$second) printf (" $first greater than $second \n");
    // to compare value use ==
    //else if ($first=$second) printf(" $first equal to $second \n");
    else if ($first==$second) printf(" $first equal to $second \n");
    else if ($first<$second) printf( " $first less than $second \n");
    }
else if($x==3) printf("exit");
else printf("invalid your menue number\n");}

while ($x!=3);


