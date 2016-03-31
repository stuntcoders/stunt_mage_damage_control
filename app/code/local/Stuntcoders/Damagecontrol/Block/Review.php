<?php

class Stuntcoders_Damagecontrol_Block_Review extends Mage_Core_Block_Template
{
    protected function getDamageControl()
    {
        return Mage::registry('sc_damage_control');
    }
}
