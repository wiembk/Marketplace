<?php

namespace Wamia\Marketplace\Model\Seller\Login;

use Wamia\Marketplace\Api\SellerRepositoryInterface;
use Magento\Framework\Encryption\EncryptorInterface;

class PasswordResetService
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

    public function generateResetToken($email)
    {
        $seller = $this->sellerRepository->getByEmail($email);
        $token = bin2hex(random_bytes(16)); // Generate random token
        $seller->setResetToken($token); // Assuming reset_token exists in seller_data
        $this->sellerRepository->save($seller);

        return $token;
    }

    public function resetPassword($token, $newPassword)
    {
        $seller = $this->sellerRepository->getByResetToken($token);
        $hashedPassword = $this->encryptor->hash($newPassword, EncryptorInterface::DEFAULT_HASH);
        $seller->setPasswordEncrypted($hashedPassword);
        $seller->setResetToken(null); // Clear reset token
        $this->sellerRepository->save($seller);
    }
}
