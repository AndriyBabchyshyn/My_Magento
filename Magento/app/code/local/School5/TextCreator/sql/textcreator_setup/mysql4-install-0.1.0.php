<?php
$installer = $this;
$installer->startSetup();
$table = $installer->getConnection()->newTable($installer->getTable('textcreator/blog_posts'))
    ->addColumn('post_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'unsigned' => true,
        'nullable' => false,
        'primary' => true,
        'identity' => true,
    ), 'Post ID')
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable' => false,
    ), 'Post Title')
    ->addColumn('post', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable' => true,
    ), 'Post Body')
    ->addColumn('date', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
    ), 'Post Date')
    ->addColumn('timestamp', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
    ), 'Timestamp')
    ->setComment('New table create test');
$installer->getConnection()->createTable($table);
$installer->endSetup();
