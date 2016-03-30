<?php

class Stuntcoders_Damagecontroll_Block_View extends Mage_Adminhtml_Block_Template
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
        $this->setChild('damagecontroll.view',
            $this->getLayout()->createBlock('adminhtml/widget_button')->setData(array(
                'label' => Mage::helper('stuntcoders_damagecontroll')->__('Return to Damage Controll'),
                'onclick' => "setLocation('" . $this->getUrl('*/*/index') . "')",
                'class' => 'back'
            ))
        );
    }

    protected function getReview()
    {
        return Mage::registry('sc_damage_controll_review');
    }
}