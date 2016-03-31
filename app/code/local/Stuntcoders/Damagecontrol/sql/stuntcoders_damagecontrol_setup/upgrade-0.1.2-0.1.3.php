<?php

$installer = $this;

$installer->startSetup();

$installer->getConnection()
    ->addColumn($installer->getTable('stuntcoders_damagecontrol/email'), 'mark', array(
        'type' => Varien_Db_Ddl_Table::TYPE_INTEGER,
        'nullable' => true,
        'comment' => 'Mark',
    ));

$installer->getConnection()
    ->addColumn($installer->getTable('stuntcoders_damagecontrol/email'), 'comment', array(
        'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
        'nullable' => true,
        'comment' => 'Comment',
    ));

$installer->endSetup();
