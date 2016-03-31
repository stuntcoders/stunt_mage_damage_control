<?php

class Stuntcoders_Damagecontrol_Block_View extends Mage_Adminhtml_Block_Template
{
    public function getOrderUrl()
    {
        return $this->getUrl('adminhtml/sales_order/view', array('order_id' => $this->getReview()->getOrderId()));
    }

    public function getCustomerName()
    {
        return $this->getReview()->getOrder()->getCustomerName();
    }

    public function getCustomerEmail()
    {
        return $this->getReview()->getOrder()->getCustomerEmail();
    }

    protected function _prepareLayout()
    {
        $this->setChild('damagecontrol.view',
            $this->getLayout()->createBlock('adminhtml/widget_button')->setData(array(
                'label' => Mage::helper('stuntcoders_damagecontrol')->__('Return to Damage Control'),
                'onclick' => "setLocation('" . $this->getUrl('*/*/index') . "')",
                'class' => 'back'
            ))
        );
    }

    protected function getReview()
    {
        return Mage::registry('sc_damage_control_review');
    }
}
