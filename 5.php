<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
printf("input size:");
fscanf(STDIN,"%d",$size);
for ($i=1;$i<=$size;$i++) { 
    if ($i==1){ for ($j=1;$j<=$size;$j++) {printf("*");}}
    else if ($i==$size) { for ($j=1;$j<=$size;$j++) {printf("*");}}
    else {for ($j=1;$j<=$size;$j++){if($j==1) printf("*");else if($j==$size) printf("*"); else printf(" ");}}
printf("\n");}

