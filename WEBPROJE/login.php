<?php
$girisdogrumu=false;
if(empty($_POST)==false)
{
   
    $kadi=$_POST["kadi"];
    $sifre=$_POST["sifre"];
    
       if($kadi=="g181210554@sakarya.edu.tr"&& $sifre=="123") 
       {
           echo "Hosgeldin g181210554@sakarya.edu.tr";
           $girisdogrumu=true;
       }
    else
    {
    
        header ("Location:Login.html");

    }
}


?>
