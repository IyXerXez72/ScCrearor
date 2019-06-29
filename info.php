//GNU nano 4.2                      tam.php
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
                 YOOO OOOP$
            oOOOOOOOOOOOOb
         oOOOOOOOOOOOOOOOb
         oOO$lightred  ●$darkgray OOOOOOOOOOO
        OOOOOOOOOOOOOOOOOOO
        OOOOOOOOOOOOOOOOOOP
        OOOOOOOOOOOOOOOOOP
         YOOOOOOOOOOOOOOP
           YOOOOOOOOOOOP
          %%%%%%%%%%%%%%
         %%%%%%OOOjgsOOO$
  ABIS MAKAN KANGSUBG MINUN ASALAMUALAIKUM ^-^
           MEMBUAT CS DEFACE DAN SHELL UPLOADER
 TOOLS INIDI BUAT PADA 25-JUNI-2019/29-JUNI 2019
KAMU KIGUN PADA $date
 1) NAMA AKU AQIL
 2) NICK XERXEZ7
 3) TEAM : 2E4H-DFA-GBLG CREW-BUFT-BOGOR BLACK HAT
 4) TOOLA INI BWROUNGSI UNTUK DEFACE PADE WEB (ANAK DEFACHER)
 5) RECODE?? MIKIR KAH GAN AKU HUAT SENDIRIAN YA JADI HARGAI LAH
 6) AKU BUAT 5 HARI GAN ITU JUGA AKU TULIS 3 HARI DI AAS BELUM SAMA HIAS YA KALO DI TOTAL 5 HAI LAH
		UNTUK KEMBAMI KE HALAMAN UTAMA KETIK clear
";
