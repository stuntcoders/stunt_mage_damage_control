<?php

$installer = $this;

$installer->startSetup();

$table = $installer->getConnection()
    ->newTable($installer->getTable('stuntcoders_damagecontroll/email'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Email id')
    ->addColumn('order_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'nullable'  => false,
    ), 'Order id')
    ->addColumn('sending_date', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
        'nullable'  => false,
    ), 'Sending date');

$installer->getConnection()->createTable($table);

$installer->endSetup();