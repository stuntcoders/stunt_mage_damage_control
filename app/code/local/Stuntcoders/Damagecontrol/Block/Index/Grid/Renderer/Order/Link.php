<?php

class Stuntcoders_Damagecontrol_Block_Index_Grid_Renderer_Order_Link
    extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Action
{
    public function render(Varien_Object $row)
    {
        $order = Mage::getModel('sales/order')->load($row->getOrderId());
        $this->getColumn()->setActions(array(array(
            'url' => Mage::helper('adminhtml')
                ->getUrl('adminhtml/sales_order/view', array('order_id' => $row->getOrderId())),
            'caption' => '#' . $order->getIncrementId(),
        )));

        return parent::render($row);
    }
}
