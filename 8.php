<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
 printf("input size:");
 fscanf(STDIN,"%d",$size);
if ($size==1) printf("*");
else{
 $s=(2*$size*($size-1)+1);
 for($c=($size+1);$c<=($s*$s);$c+=($size*2-2)){
    $d[] =  $c;}
 for($e=($size-1);$e<=($s*$s);$e+=($size*2-2)){
      $f[] =  $e;}
 
for ($x=1;$x<=$size;$x++){
for ($i=1;$i<=$size;$i++) {
   for($j=1;$j<=$s;$j++){ 
      if ( in_array(($i+$j),$d)) printf("*"); 
      else if ( in_array(($j-$i),$f)) printf("*");
      else print(" ");}
   printf("\n");}

    for ($i=($size+1);$i<=($size*2-2);$i++) { 
       for ($j=1;$j<=$s;$j++){ 
          if (in_array(($i+$j),$d)) printf("*"); 
          else if (in_array(abs($i-$j),$f)) printf("*");
          else print(" ");}
   printf("\n");}}

   for($j=1;$j<=$s;$j++){ 
      if ( in_array(($i+$j),$d)) printf("*"); 
      else if ( in_array(($j-$i),$f)) printf("*");
      else print(" ");}
   printf("\n");}
