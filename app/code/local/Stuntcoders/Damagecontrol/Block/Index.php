<?php
class Stuntcoders_Damagecontrol_Block_Index extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    protected function _prepareLayout()
    {
        $this->setChild('damagecontrol.addnew',
            $this->getLayout()->createBlock('adminhtml/widget_button')->setData(array(
                'label' => Mage::helper('stuntcoders_damagecontrol')->__('Add New Feed'),
                'onclick' => "setLocation('".$this->getUrl('*/*/add')."')",
                'class' => 'add'
            ))
        );
    }
}
