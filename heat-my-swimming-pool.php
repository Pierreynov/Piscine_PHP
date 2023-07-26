<?php
interface PoolTempsInterface
{
    public function getActualTemp(): int;
    public function getLastDaysTemps(): array;
    public function setHeater(bool $heater): void;
}
class PoolTemps implements PoolTempsInterface
{
    public bool $isActive;
    private int $currentTemp;
    private array $avg_temps;
    public function __construct(int $currentTemp,array $avg){
        $this->isActive=false;
        $this->currentTemp=$currentTemp;
        $this->avg_temps=$avg;
    }
    public function getActualTemp() : int
    {
        return $this->currentTemp;
    }
    public function getLastDaysTemps() : array
    {
        return $this->avg_temps;
    }
    public function setHeater(bool $heater) : void
    {
        $this->isActive=$heater;
    }
    public function activateHeater() : void
    {
        if ($this::getActualTemp()> 25){
            $this::setHeater(true);
        }else{
            $sum = 0;
            foreach($this->avg_temps as $x => $temperature){
                if ($temperature <= 20){
                    $this::setHeater(false);
                    return;
                }
            }
            $this::setHeater(true);
        }
    }
}
?>