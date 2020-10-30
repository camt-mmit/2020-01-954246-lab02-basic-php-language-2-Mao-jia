<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
print("input size:");
fscanf(STDIN,"%d",$size);

for ($i=1;$i<=$size;$i++){
    for($j=1;$j<=$size;$j++){
        if ($j<=$i) printf("*"); 
        else printf(" ");}
    print("\n");}