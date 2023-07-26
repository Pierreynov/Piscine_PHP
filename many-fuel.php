<?php
    class Car 
    {
        private float $tank;

        public function __construct(int $s= 0){
            $this->tank = $s;
        }

        public function getTank():float{
            return $this->tank;
        }

        public function setTank(int $tank):self {
            $this->tank = $tank;
            return $this;
        }

        public function ride(float $f ){
            $res = $f/20;
            $this->tank = $this->tank - $res;
            return $this;
        }
    }
?>