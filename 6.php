<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
printf("input size:");
fscanf(STDIN,"%d",$size);
for ($i=1;$i<=$size;$i++) {
    for($j=1;$j<=($size*2-1);$j++){ if (($i+$j)==($size+1)) printf("*"); else if (($j-$i)==($size-1)) printf("*");else print(" ");}
    printf("\n");}
for ($i=($size+1);$i<=($size*2-1);$i++) { for ($j=1;$j<=($size*2-1);$j++){ if (($i+$j)==($size*3-1)) printf("*"); else if (($i-$j)==($size-1)) printf("*");else print(" ");}
    printf("\n");}

