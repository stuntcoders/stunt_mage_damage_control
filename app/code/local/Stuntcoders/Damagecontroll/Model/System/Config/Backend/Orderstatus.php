<?php

class Stuntcoders_Damagecontroll_Model_System_Config_Backend_OrderStatus
{
    public function toOptionArray()
    {
        $value = array();
        $statuses = Mage::getModel('sales/order_status')->getResourceCollection()->getData();

        foreach ($statuses as $status) {
            $value[] = array(
                'value' => $status['status'],
                'label' => $status['label'],
            );
        }

        return $value;
    }
}