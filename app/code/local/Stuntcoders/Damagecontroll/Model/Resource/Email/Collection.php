<?php

class Stuntcoders_Damagecontroll_Model_Resource_Email_Collection
    extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('stuntcoders_damagecontroll/email');
    }
}
