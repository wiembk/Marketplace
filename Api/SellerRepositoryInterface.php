<?php

namespace Wamia\Marketplace\Api;

use Wamia\Marketplace\Api\Data\SellerInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface SellerRepositoryInterface
{
    /**
     * Save a seller.
     *
     * @param SellerInterface $seller
     * @return SellerInterface
     */
    public function save(SellerInterface $seller);

    /**
     * Retrieve a seller by ID.
     *
     * @param int $id
     * @return SellerInterface
     */
    public function getById($id);

    /**
     * Delete a seller.
     *
     * @param SellerInterface $seller
     * @return bool
     */
    public function delete(SellerInterface $seller);

    /**
     * Delete a seller by ID.
     *
     * @param int $id
     * @return bool
     */
    public function deleteById($id);

    /**
     * Retrieve a list of sellers that match the specified criteria.
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return \Magento\Framework\Api\SearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
}
