<?php 

class dice{
    public $min=1;
    public $max=0;
    public $side=0;

    public function roll()
    {
        $this->max=$_POST['kocka'];
        return rand($this->min,$this->max);
    }
}
