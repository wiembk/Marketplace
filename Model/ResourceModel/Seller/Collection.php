<?php

namespace Wamia\Marketplace\Model\ResourceModel\Seller;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Wamia\Marketplace\Model\Seller as SellerModel;
use Wamia\Marketplace\Model\ResourceModel\Seller as SellerResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(SellerModel::class, SellerResource::class);
    }
}
