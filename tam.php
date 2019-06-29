<?php

if (strtolower(substr(PHP_OS, 0, 3)) == "win") {
    $bersih = "cls";
} else {
    $bersih = "clear";
}

date_default_timezone_set('Asia/Jakarta');
$date = date('d~M~Y H:i:s');
$green = "\e[92m";
$red = "\e[91m";
$yellow = "\e[93m";
$blue = "\e[36m";
$cyan = "\e[0;36m";
$purple = "\e[0;35m";
$brown = "\e[0;33m";
$lightgray = "\e[0;37m";
$nick = "XerXez7 Gans";
$darkgray = "\e[1;30m";
$lightblue = "\e[1;34m";
$lightgreen = "\e[1;32m";
$lightcyan = "\e[1;36m";
$lightred = "\e[1;31m";
$lightpurple = "\e[1;35m";
$bg = "\033[41;2;32m";
$gb = "\033[0;0m";
pilih:
    system($bersih);

echo "$darkgray
	            O O
	           dO Ob
	          dOO OOO
	         dOOO OOOb
	        dOOOO OOOOb
	        YOOOO OOOOO
	         YOOO OOOP$lightgreen
	    oOOOOOOOOOOOOb
	 oOOOOOOOOOOOOOOOb
	 oOO$lightred  ●$lightgreen OOOOOOOOOOO
	OOOOOOOOOOOOOOOOOOO
	OOOOOOOOOOOOOOOOOOP
	OOOOOOOOOOOOOOOOOP
	 YOOOOOOOOOOOOOOP
	   YOOOOOOOOOOOP$darkgray
	  %%%%%%%%%%%%%%
	 %%%%%%OOOjgsOOO$lightgreen
╔═╗╔═╗$darkgray ┌─┐┬─┐┌─┐┌─┐┬─┐┌─┐┬─┐$lightgreen
╚═╗║───│$darkgray  ├┬┘├┤$lightgreen ├─┤├┬┘│ │├┬┘$darkgray
╚═╝╚═╝$darkgray └─┘┴└─└─┘┴ ┴┴└─└─┘┴└─$lightgreen
\033[41;2;32m|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~|\033[0;0m $darkgray
$bg| $gb Nama :$lightgreen Dede Aqil$darkgray                                 $bg |$gb
$bg| $gb nick :$lightgreen InYourXerXez$darkgray                              $bg |$gb
$bg| $gb Team :$lightgreen 2e4h-GblgCrew-Bogor BlackHat-Buft         $bg |$gb
\033[41;2;32m|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~|\033[0;0m
     AUTHOR : IyXerXez7
     C0DEX  : IyXerXez7
     Thank  : Hanz-IyS3rv3r-IySite-IyNickName-BIMO
         TOOLS BUAT SHELL UPLOADER+SC DEFACE$lightgreen
    A)$darkgray BUAT SC DEFACE$lightgreen    B)$darkgray BUAT UPLOADER$lightgreen    C)$darkgray NICK SIBER TO KNTL$lightgreen
    D)$darkgray INSTALL BAHAN$lightgreen     I)$darkgray INFO$lightgreen             X)$darkgray EXIT
 ";
