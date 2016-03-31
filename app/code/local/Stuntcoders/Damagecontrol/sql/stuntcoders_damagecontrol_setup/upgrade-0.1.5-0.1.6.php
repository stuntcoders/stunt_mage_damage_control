<?php

$installer = $this;

$installer->startSetup();

$installer->getConnection()
    ->addColumn($installer->getTable('stuntcoders_damagecontrol/email'), 'visits', array(
        'type' => Varien_Db_Ddl_Table::TYPE_INTEGER,
        'nullable' => false,
        'default' => '0',
        'comment' => 'Visits',
    ));

$installer->endSetup();
