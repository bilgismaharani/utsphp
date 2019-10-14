<?php
class warnet
{
    public $processor = "warnet go";
   public function _construct()
{
    echo "masuk pintu warnet<br>";
    }

public function _destruct()
{
    echo "keluar dari pintu warnet<br>";
 }

}

    class nomorpc extends warnet
{
    public function _construct()
{
    parent ::_construct();
    echo "main di nomor pc<br>";
}
public function op()
{
    echo "tempat per pc :";
}

public function _destruct()
{
    echo "keluar abis billing<br>";
    parent::_destruct();
}
}
$oppo = new hp();
$oppo ->spesifikasi();
echo $oppo ->layar. "<br>";
?>