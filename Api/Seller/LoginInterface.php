<?php

namespace Wamia\Marketplace\Api\Seller;
/**
 * @api
 * @since 101.0.0
 */
interface LoginInterface
{
    /**
     * Login a seller using credentials.
     *
     * @api
     * @param array $credentials
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function loginSeller(array $credentials);

    /**
     * Sign up a new seller using provided data.
     *
     * @api
     * @param array $sellerData
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function signInSeller(array $sellerData);
}
