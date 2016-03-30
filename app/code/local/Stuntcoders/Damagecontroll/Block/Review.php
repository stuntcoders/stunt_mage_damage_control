<?php

class Stuntcoders_Damagecontroll_Block_Review extends Mage_Core_Block_Template
{
    protected function getDamageControll()
    {
        return Mage::registry('sc_damage_controll');
    }
}