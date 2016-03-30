<?php

class Stuntcoders_Damagecontroll_Block_Index_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('damage_controll_grid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('stuntcoders_damagecontroll/email')->getCollection()->join(
            array('order' => 'sales/order'),
            'order.entity_id = main_table.order_id'
        );
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('id', array(
            'header' => Mage::helper('stuntcoders_damagecontroll')->__('ID'),
            'align' => 'left',
            'width' => '100px',
            'index' => 'id',
        ));

        $this->addColumn('order_id', array(
            'header' => Mage::helper('stuntcoders_damagecontroll')->__('Order'),
            'align' => 'left',
            'width' => '100px',
            'renderer' => 'stuntcoders_damagecontroll/index_grid_renderer_order_link',
        ));

        $this->addColumn('sending_date', array(
            'header' => Mage::helper('stuntcoders_damagecontroll')->__('Send date'),
            'align' => 'left',
            'index' => 'sending_date',
        ));

        $this->addColumn('customer_firstname', array(
            'header' => Mage::helper('stuntcoders_damagecontroll')->__('First name'),
            'align' => 'left',
            'index' => 'customer_firstname',
        ));

        $this->addColumn('customer_lastname', array(
            'header' => Mage::helper('stuntcoders_damagecontroll')->__('Last name'),
            'align' => 'left',
            'index' => 'customer_lastname',
        ));

        $this->addColumn('customer_email', array(
            'header' => Mage::helper('stuntcoders_damagecontroll')->__('Email'),
            'align' => 'left',
            'index' => 'customer_email',
        ));

        $this->addColumn('customer_mark', array(
            'header' => Mage::helper('stuntcoders_damagecontroll')->__('Mark'),
            'align' => 'left',
            'index' => 'mark',
            'width' => '100px',
        ));

        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/view', array('review_id' => $row->getId()));
    }
}