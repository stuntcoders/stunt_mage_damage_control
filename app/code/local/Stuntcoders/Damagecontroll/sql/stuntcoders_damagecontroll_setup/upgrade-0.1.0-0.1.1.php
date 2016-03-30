<?php

$installer = $this;

$installer->startSetup();

$table = $installer->getConnection()
    ->addColumn($installer->getTable('stuntcoders_damagecontroll/email'), 'link_id', array(
        'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
        'nullable' => false,
        'comment' => 'Link id',
    ));

$installer->endSetup();