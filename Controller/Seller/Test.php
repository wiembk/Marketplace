<?php

namespace Wamia\Marketplace\Controller\Seller;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Wamia\Marketplace\Api\SellerRepositoryInterface;
use Wamia\Marketplace\Api\Data\SellerInterfaceFactory;

class Test extends Action
{
    protected $sellerRepository;
    protected $sellerFactory;

    public function __construct(
        Context $context,
        SellerRepositoryInterface $sellerRepository,
        SellerInterfaceFactory $sellerFactory
    ) {
        $this->sellerRepository = $sellerRepository;
        $this->sellerFactory = $sellerFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        try {
            // Create a seller
            /** @var \Wamia\Marketplace\Api\Data\SellerInterface $seller */
            $seller = $this->sellerFactory->create();
            $seller->setFirstName('John');
            $seller->setLastName('Doe');
            $seller->setEmail('john.doe@example.com');
            $seller->setIsSeller(1);
            // Set other fields as necessary

            $this->sellerRepository->save($seller);

        // Once created, you can access the URL /marketplace/seller/test to test seller creation.           
        
        // Output some confirmation
            echo "Seller created with ID: " . $seller->getId();
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
