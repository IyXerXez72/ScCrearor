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
pilih:
    system($bersih);
echo "Crrxes";
echo "$lightgray
  $darkgray    ________________         .--.
   $darkgray  /\               \              .'_\/_'.
   $darkgray /  \__              \     '. /\ .'
$darkgray   /$lightgray __/o \               \   ||  /\
$darkgray  /$lightgray  \____  \               \ /\ || //\)
$darkgray /$lightgray ------/   \--------------- (/\\||//
$darkgray/$lightgray  __   / \   \ |          |    \||/
__/o \-//--\   \_/         |     ||
\____  ___  \  |  $lightgreen ╔═╗╔═╗┌┬┐┌─┐┌─┐┌─┐┌─┐┌─┐$lightgray
     ||   \ |\ |  $lightgreen ╚═╗║$lightred   ││├┤ ├┤ ├─┤│  ├┤$lightgray
    _||   _||_||  $lightgreen ╚═╝╚═╝─┴┘└─┘└  ┴ ┴└─┘└─┘$lightgray
w ww ww wwwwwwwww
$lightgreen 1) JPG 1 $lightred
$lightgreen 2) JPG 2$lightred
$lightgreen 3) JPG 3$lightred
$lightgreen 4) JOG 4$lightred
$lightgreen 5) JPG 5$lightred
$lightpurple           V) BALIK KE TAMPILAN AWAL
$darkgray 		$date $lightgray
";
