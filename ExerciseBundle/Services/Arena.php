<?php
class Arena
{
    /**
     * @param $firstFighter
     * @param $secondFighter
     * 
     * @return integer 
     */
    public function fight($firstFighter, $secondFighter){
    if ($firstFighter->calculatePowerLevel() > $secondFighter->calculatePowerLevel()) {
            return $firstFighter;
        } 
        else if ($firstFighter->calculatePowerLevel() < $secondFighter->calculatePowerLevel()) {
            return $secondFighter;
        }
        return 0;
    }
}
