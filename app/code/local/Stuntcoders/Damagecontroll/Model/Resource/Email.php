<?php

class Stuntcoders_Damagecontroll_Model_Resource_Email extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('stuntcoders_damagecontroll/email', 'id');
    }

    public function getIdByCode($code)
    {
        $adapter = $this->_getReadAdapter();

        $select = $adapter->select()
            ->from($this->getMainTable(), 'id')
            ->where('code = :code');

        $bind = array(':code' => (string) $code);

        return $adapter->fetchOne($select, $bind);
    }
}