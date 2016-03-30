<?php

$installer = $this;

$installer->startSetup();

$installer->getConnection()
    ->addColumn($installer->getTable('stuntcoders_damagecontroll/email'), 'reading_date', array(
        'type' => Varien_Db_Ddl_Table::TYPE_DATETIME,
        'nullable' => false,
        'comment' => 'Reading Date',
        'after' => 'sending_date',
    ));

$installer->endSetup();