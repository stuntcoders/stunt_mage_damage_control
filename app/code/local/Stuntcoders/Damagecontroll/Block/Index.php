<?php
class Stuntcoders_Damagecontroll_Block_Index extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    protected function _prepareLayout()
    {
        $this->setChild('damagecontroll.addnew',
            $this->getLayout()->createBlock('adminhtml/widget_button')->setData(array(
                'label' => Mage::helper('stuntcoders_damagecontroll')->__('Add New Feed'),
                'onclick' => "setLocation('".$this->getUrl('*/*/add')."')",
                'class' => 'add'
            ))
        );
    }
}
