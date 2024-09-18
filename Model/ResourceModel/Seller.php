<?php

namespace Wamia\Marketplace\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Seller extends AbstractDb
{
    protected function _construct()
    {
        // Initialize with the seller_data table and the primary key field (entity_id)
        $this->_init('seller_data', 'entity_id');
    }
}
