<?php

class PerfectNumber
{
    public function getClassification($integer){

        $integerType = "unknown";

        try {
            if($integer == null || empty($integer)){
                throw new Exception("Value cannot be empty/null.");
            }
            if(!is_int($integer)){
                throw new Exception("Value is not an Integer.");
            }

            $aliquotSum = array_sum(self::getDivisors($integer));

            if ($aliquotSum == $integer) {
                $integerType = "perfect";
            } elseif ($aliquotSum > $integer) {
                $integerType = "abundant";
            } elseif ($aliquotSum < $integer) {
                $integerType = "deficient";
            }
        }catch (Exception $e) {
            return $e;
        }

        return $integerType;
    }

    public function getDivisors($integer) {
        $divisorsArray = [];

        for($i = 1; $i < $integer; $i++){
            if($integer % $i == 0 ){
                array_push($divisorsArray, $i);
            }
        }

        return $divisorsArray;
    }
}