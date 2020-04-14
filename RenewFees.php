<?php 
    include_once "Car.php";
    
    class Renewfees extends Car{
        private $TotalFees;
        private $yearsNo;

        public function YearsCalc($yearsNo,$startDate,$endDate){
            $startDate=substr("$startDate",-8,2);
            $endDate=substr("$endDate",-8,2); 
            return $yearsNo=(int)$endDate-(int)$startDate;

        }

        public function FeesCalc($TotalFees,$motorCapacity,$fuelType,$yearsNo){
            if($motorCapacity<1000){
                switch($fuelType){
                    case "Petrol":
                    return $TotalFees=$yearsNo*225;
                    break;
                    case "Gasoline":
                    return $TotalFees=$yearsNo*450;
                    break;
                }
            }

            else if($motorCapacity>1000){
                if($motorCapacity>1600){
                    switch($fuelType){
                        case "Petrol":
                        return $TotalFees=$yearsNo*3000;
                        break;
                        case "Gasoline":
                        return $TotalFees=$yearsNo*6000;
                        break;
                    }
                }
                else if($motorCapacity>1300){
                    switch($fuelType){
                        case "Petrol":
                        return $TotalFees=$yearsNo*750;
                        break;
                        case "Gasoline":
                        return $TotalFees=$yearsNo*1500;
                        break;
                    }
                }

                else {
                    switch($fuelType){
                        case "Petrol":
                        return $TotalFees=$yearsNo*350;
                        break;
                        case "Gasoline":
                        return $TotalFees=$yearsNo*700;
                        break;
                    }
                }
            }
        }
    }
?>