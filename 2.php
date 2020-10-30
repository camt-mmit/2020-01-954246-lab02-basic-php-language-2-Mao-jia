<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
print("multiplication table start from 2 to the given number:");
fscanf(STDIN,"%d",$size);

for ($i=1;$i<=12;$i++){ 
    for ($j=0;$j<($size-1);$j++) { $a=2*$i+$j*$i; printf("%5d",$a);}
    print("\n");}

