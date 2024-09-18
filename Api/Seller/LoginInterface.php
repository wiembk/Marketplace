<?php

namespace Wamia\Marketplace\Api\Seller;

interface LoginInterface
{
    /**
     * Login a seller using credentials.
     *
     * @param array $credentials
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function loginSeller(array $credentials);

    /**
     * Sign up a new seller using provided data.
     *
     * @param array $sellerData
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function signInSeller(array $sellerData);
}
