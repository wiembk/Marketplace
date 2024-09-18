<?php

namespace Wamia\Marketplace\Api\Seller;

interface AdminApprovalInterface
{
    /**
     * Approve a seller (admin action).
     *
     * @param int $sellerId
     * @return void
     */
    public function approveSeller($sellerId);
}
