<?php
$green  = "\e[92m";
$fgreen = "\e[32m";
$red    = "\e[91;1m";
$cyan = "\e[36m";
$bold   = "\e[1m";
function mbanner(){
  echo "\e[1m \e[91;1m
        
              *    (                     )       (       ) (              )  (     
          (  `   )\ ) (  (          ( /(   (   )\ ) ( /( )\ )  *   ) ( /(  )\ )  
          )\))( (()/( )\))(     (   )\())  )\ (()/( )\()|()/(` )  /( )\())(()/(  
         ((_)()\ /(_)|(_)()\    )\ ((_)\ (((_) /(_)|(_)\ /(_))( )(_)|(_)\  /(_)) 
         (_()((_|_))_ (()((_)  ((_) _((_))\___(_))__ ((_|_)) (_(_())  ((_)(_)_)   
         |  \/  ||   \ | __|   | __| \| ((/ __| _ \ \ / / _ \|_   _| / _ \| _ \  
         | |\/| || |) ||__ \   | _|| .` || (__|   /\ V /|  _/  | |  | (_) |   /  
         |_|  |_||___/ |___/   |___|_|\_| \___|_|_\ |_| |_|    |_|   \___/|_|_\  
   \n\e[36m              \e[91;1m  -=! The Fucking Tools For Encryption Text To MD5 Hash !=- \n         \e[36;1m            {C} Coded By Blacklist_Cyber - Anon Cyber Team. 
\n \e[93m               Greetz to : Mr.Tenwap | Zero_S | Bee.lzebub | P3NY3ND1R1              
                          FirewalL21 | 4Wsec | Mr.Who | Loyo-ID | Mr.Jak
                          Mr.SyntaxError | And All member Anon Cyber Team\n";
}
system('clear');
mbanner();

start:
echo "\n";
echo "\e[91;1mMasukkan kata:\e[93;1m ";
$hash = trim(fgets(STDIN));
echo "\e[31;1mHasil: \e[36;1m".MD5($hash). " ($hash)"  ;
echo "\n";
echo "\n";
exit;
?>