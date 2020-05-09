<?php
$girisdogrumu=false;
if(empty($_POST)==false)
{
   
    $kadi=$_POST["kadi"];
    $sifre=$_POST["sifre"];
    //kontrol
       if($kadi=="g181210554@sakarya.edu.tr"&& $sifre=="123") 
       {
         //dogruysa
           echo "Hosgeldin g181210554@sakarya.edu.tr";
           $girisdogrumu=true;
       }
    else
    {
    //degilse logine geri don
        header ("Location:Login.html");

    }
}


?>
