<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
   printf("input size:");
   fscanf(STDIN,"%d",$size);

   for ($d=1;$d<=$size;$d++){
   for ($c=1;$c<=($size*$size-($size-1));$c++) {printf("*"); }printf("\n");
   for ($f=1;$f<=($size-2);$f++){
   for ($b=1;$b<=$size;$b++){
   printf("*");
   for($a=1;$a<=($size-2);$a++) printf(" ");} printf("*"); printf("\n");
   }}
   
   if ($size==1) printf("");
   else {for ($e=1;$e<=($size*$size-($size-1));$e++) printf("*");}