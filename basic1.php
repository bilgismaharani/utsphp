<?php
class komputer
{
    public $processor = "Intel core I 7";
    public function_construct()
    {
        echo "Construct dari komputer <br>";
    }
    public function_destruct()
    {
        echo "Destructor dari komputer<br>";
    }
}
class Laptop extends komputer
{
    public function_construct()
    {
        parent ::_construct();
        echo "Construct dari komputer<br>";
    }
    public function spesifikasi()
    {
        echo "Spesifikasi Laptop :";
    }
    public function_destruct()
    {
        echo "Destruct dari Laptop<br>";
        parent ::_destruct();
    }
}
$asus = new Laptop();
$asus->spesifikasi();
echo $asus->processor . "<br>";
?>