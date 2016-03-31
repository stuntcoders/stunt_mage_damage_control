<?php

$installer = $this;

$installer->startSetup();

$installer->getConnection()
    ->addColumn($installer->getTable('stuntcoders_damagecontrol/email'), 'review_date', array(
        'type' => Varien_Db_Ddl_Table::TYPE_DATETIME,
        'nullable' => false,
        'comment' => 'Review date',
    ));

$installer->endSetup();
