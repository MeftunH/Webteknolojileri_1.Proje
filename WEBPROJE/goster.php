<?php
if($_GET)
{
   $ad = $_GET["ad"];
   $soyad = $_GET["soyad"];
   $dt = $_GET["dt"];
   $numara = $_GET["numara"];
  $mailadres=$_GET["mailadres"];
$asker = $_GET["asker"];
$digerdil = $_GET["digerdil"];
$digerbeceri =
    $_GET["digerbeceri"];  
echo  "ISIM:  ".$ad."<br />";
echo  "SOYISIM:  ".$soyad."<br />"; 
echo  "DOGUM TARIHI:  ".$dt."<br />";
echo  "NUMARA:  ".$numara."<br />";
echo  "MAIL ADRESINIZ:   ".$mailadres."<br />"; 
$cinsiyet=$_GET["cinsiyet"];
  if ($cinsiyet=="Erkek")
{
echo "CINSIYET  :Erkek";    
}
else
{
echo "CINSIYET  :Kadin";
    
}
}
if($asker!=null)
{
    
   echo  "<br>ASKERLIK DURUMU:  ".$asker."<br />"; 
}
if(isset($_GET['check1']))
{
    echo "<br>SECTIGINIZ DIL: INGILIZCE  ";
}
if(isset($_GET['check2']))
{
    echo "<br>SECTIGINIZ DIL: ALMANCA  ";
}
if(isset($_GET['check1']))
{
    echo "<br>SECTIGINIZ DIL: ARAPCA  ";
}
if($digerdil!=null)
{
    
   echo  "<br>AYRICA BUNU DA SECTINIZ:  ".$digerdil."<br />"; 
}
$uyruk=$_GET['uyruk'];
   echo  "<br>UYRUGUNUZ:  ".$uyruk."<br />";
   
if(isset($_GET['html']))
{
    echo "<br>SU BECERILERE SAHIPSINIZ  : HTML  ";
}
if(isset($_GET['css']))
{
    echo "<br>SU BECERILERE SAHIPSINIZ  : CSS  ";
}
if(isset($_GET['php']))
{
    echo "<br>SU BECERILERE SAHIPSINIZ  : PHP  ";
}
if(isset($_GET['aspnet']))
{
    echo "<br>SU BECERILERE SAHIPSINIZ  : ASP.NET  ";
}
if($digerbeceri!=null)
{
    
   echo  "<br>AYRICA BUNU DA BILIYORSUNUZ:  ".$digerbeceri."<br />"; 
}
$mesaj = $_GET['mesaj'];
$mesaj=$_GET['mesaj'];
echo "<br>MESAJINIZ: ".$mesaj

/*if(isset($_GET['ilgi[]']))
{
$prg=$_GET['ilgi[]'];
echo "SECTIGINIZ HOBI(LER)<br />";
foreach($ilgi as $dil) { echo ' * ' . $dil . ' <br />';}
}
*/
?>
