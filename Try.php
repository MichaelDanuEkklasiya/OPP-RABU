<?php
class SocialEngineering
{
  public $cyber,
       $physical;
  public function cetakKolom()
  {
    return "$this->cyber, $this->physical";
  }
  public function __construct($cyber = "kosong",$physical = "kosong")
  {
    $this->cyber = $cyber;
    $this->physical = $physical;
  }
}
class InfoSE
{
  public function cetakInfoSE(SocialEngineering $threat)
  {
    $shortcut="{$threat->cetakKolom()}";
    return $shortcut;
  }
}
$threat1 = new SocialEngineering("<pre>      Virus","             Tailgating</pre>");
$threat2 = new SocialEngineering("<pre>      Hoax","             Eavesdropping</pre>");
$threat3 = new SocialEngineering("<pre>     Phising","          Dumpster Diving</pre>");
$threat4 = new SocialEngineering("<pre>   Watering Hole","      Shoulder Surfing</pre>");
$InfoSE1 = new InfoSE();

echo "<pre>           Social Engineering</pre>";
echo "<b><pre>      Cyber                Physical</pre></b>";
echo $threat1->cetakKolom();
echo $threat2->cetakKolom();
echo $threat3->cetakKolom();
echo $threat4->cetakKolom();
echo "Social Engineering yang paling sukses menyerang target :";
echo "<br>";
echo $InfoSE1->cetakInfoSE($threat1)
?>