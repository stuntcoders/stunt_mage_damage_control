<?php

class Stuntcoders_Damagecontrol_Model_System_Config_Backend_Marks extends Mage_Core_Model_Config_Data
{
    public function toOptionArray()
    {
        return array(
            '1' => '1 star',
            '2' => '2 stars',
            '3' => '3 stars',
            '4' => '4 stars',
            '5' => '5 stars',
        );
    }
}
