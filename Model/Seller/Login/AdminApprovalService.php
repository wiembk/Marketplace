<?php

namespace Wamia\Marketplace\Model\Seller\Login;

use Wamia\Marketplace\Api\SellerRepositoryInterface;
use Wamia\Marketplace\Api\Seller\LoginInterface;

class AdminApprovalService
{
    protected $sellerRepository;

    public function __construct(SellerRepositoryInterface $sellerRepository)
    {
        $this->sellerRepository = $sellerRepository;
    }

    public function approveSeller($sellerId)
    {
        $seller = $this->sellerRepository->getById($sellerId);
        $seller->setIsSeller(1); // Using setIsSeller to approve the seller
        $this->sellerRepository->save($seller);
    }
    
}
