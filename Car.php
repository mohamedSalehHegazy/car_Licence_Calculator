<?php 
  class Car {

        private $ownername;
        private $plotNo;
        private $Brand;
        private $Model;
        private $bodyNo;
        private $motorNo;
        private $motorCapacity;
        private $color;
        private $fuelType;
        private $startDate;
        private $endDate;
        private $transimisionType;

        public function __construct($ownername,$plotNo,$Model,$bodyNo,$motorNo,$motorCapacity,$color,$fuelType,$startDate,$endDate,$transimisionType){
            $this->ownername=$ownername;
            $this->plotNo=$plotNo;
            $this->Model=$Model;
            $this->bodyNo=$bodyNo;
            $this->motorNo=$motorNo;
            $this->motorCapacity=$motorCapacity;
            $this->color=$color;
            $this->fuelType=$fuelType;
            $this->startDate=$startDate;
            $this->endDate=$endDate;
            $this->transimisionType=$transimisionType;

        }
        // 
        public function setownername($ownername){
            $this->ownername=$ownername;
        }

        public function getownername(){
            return $this->ownername;
        }
        // 
        public function setplotNo($plotNo){
            $this->plotNo=$plotNo; 
        }

        public function getplotNo(){
            return $this->plotNo;
        }
        // 
        public function setModel($Model){
            $this->Model=$Model; 
        }

        public function getModel(){
            return $this->Model;
        }
        // 
        public function setbodyNo($bodyNo){
            $this->bodyNo=$bodyNo;
        }

        public function getbodyNo(){
            return $this->bodyNo;
        }
        // 
        public function setmotorNo($motorNo){
            $this->motorNo=$motorNo; 
        }
        
        public function getmotorNo(){
            return $this->motorNo;
        }
        // 
        public function setmotorCapacity($motorCapacity){
            $this->motorCapacity=$motorCapacity;
        }

        public function getmotorCapacity(){
            return $this->motorCapacity;
        }
        // 
        public function setcolor($color){
            $this->color=$color;
        }

        public function getcolor(){
            return $this->color;
        }
        // 
        public function setfuelType($fuelType){
            $this->fuelType=$fuelType; 
        }

        public function getfuelType(){
            return $this->fuelType; 
        }
        // 
        public function setstartDate($startDate){
            $this->startDate=$startDate; 
        }

        public function getstartDate(){
            return $this->startDate; 
        }
        // 
        public function setendDate($endDate){
            $this->endDate=$endDate; 
        }

        public function getendDate(){
            return $this->endDate; 
        }
         // 
         public function settransimisionType($transimisionType){
            $this->transimisionType=$transimisionType;
        }

        public function gettransimisionType(){
            return $this->transimisionType;
        }

    }
?>