<?php

namespace Wamia\Marketplace\Model\Seller\Login;

use Wamia\Marketplace\Api\SellerRepositoryInterface;
use Magento\Framework\Encryption\EncryptorInterface;

class LoginService
{
    protected $sellerRepository;
    protected $encryptor;

    public function __construct(
        SellerRepositoryInterface $sellerRepository,
        EncryptorInterface $encryptor
    ) {
        $this->sellerRepository = $sellerRepository;
        $this->encryptor = $encryptor;
    }

    public function loginSeller($credentials)
    {
        try {
            // Attempt to load the seller by email
            $seller = $this->sellerRepository->getByEmail($credentials["email"]);
        } catch (\Magento\Framework\Exception\NoSuchEntityException $e) {
            // If seller doesn't exist, return an error message
            throw new \Magento\Framework\Exception\LocalizedException(__('User doesn\'t exist. Please sign up.'));
        }
    
        // Verify the password if seller already exists
        if (!$this->encryptor->validateHash($credentials["password"], $seller->getPasswordEncrypted())) {
            throw new \Magento\Framework\Exception\AuthenticationException(__('Invalid login credentials.'));
        }
    
        return $seller; // Return seller object upon successful login
    }
    public function signInSeller($sellerData)
    {
        try {
            // Check if seller already exists
            $this->sellerRepository->getByEmail($sellerData["email"]);
            throw new \Magento\Framework\Exception\LocalizedException(__('User already exists. Please log in.'));
        } catch (\Magento\Framework\Exception\NoSuchEntityException $e) {
            // If seller doesn't exist, create a new seller
            /** @var \Wamia\Marketplace\Api\Data\SellerInterface $seller */
            $seller = $this->sellerFactory->create();
            
            // Set seller data
            $seller->setFirstName($sellerData["first_name"]);
            $seller->setLastName($sellerData["last_name"]);
            $seller->setUsername($sellerData["username"]);
            $seller->setEmail($sellerData["email"]);
            $seller->setDateOfBirth($sellerData["date_of_birth"]);
            $seller->setGender($sellerData["gender"]);
            $seller->setContactNumber($sellerData["contact_number"]);
            
            // Hash the password before saving
            $hashedPassword = $this->encryptor->hash($sellerData["password"], \Magento\Framework\Encryption\EncryptorInterface::DEFAULT_HASH);
            $seller->setPasswordEncrypted($hashedPassword);
            
            $seller->setAddressFields($sellerData["address_fields"]); // Assuming address_fields is a JSON or serialized data
            $seller->setSocialMediaIds($sellerData["social_media_ids"]); // Assuming social_media_ids is a JSON or serialized data
            $seller->setShopTitle($sellerData["shop_title"]);
            $seller->setCompanyDescription($sellerData["company_description"]);
            
            // Set default status (pending approval)
            $seller->setIsSeller(0); // 0 = pending approval

            // Save the new seller
            $this->sellerRepository->save($seller);

            return $seller; // Return newly created seller object
        }
    }   
}
