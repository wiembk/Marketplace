<?php

namespace Wamia\Marketplace\Model;

use Wamia\Marketplace\Api\SellerRepositoryInterface;
use Wamia\Marketplace\Api\Data\SellerInterface;
use Wamia\Marketplace\Model\ResourceModel\Seller as SellerResource;
use Wamia\Marketplace\Model\ResourceModel\Seller\CollectionFactory;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterfaceFactory;

class SellerRepository implements SellerRepositoryInterface
{
    protected $resource;
    protected $sellerFactory;
    protected $collectionFactory;
    protected $searchResultsFactory;

    public function __construct(
        SellerResource $resource,
        SellerFactory $sellerFactory,
        CollectionFactory $collectionFactory,
        SearchResultsInterfaceFactory $searchResultsFactory
    ) {
        $this->resource = $resource;
        $this->sellerFactory = $sellerFactory;
        $this->collectionFactory = $collectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
    }

    public function save(SellerInterface $seller)
    {
        try {
            $this->resource->save($seller);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }

        return $seller;
    }

    public function getById($id)
    {
        $seller = $this->sellerFactory->create();
        $this->resource->load($seller, $id);
        if (!$seller->getId()) {
            throw new NoSuchEntityException(__('Seller with ID "%1" does not exist.', $id));
        }

        return $seller;
    }

    public function getByEmail($email)
    {
        $collection = $this->sellerCollectionFactory->create();
        $collection->addFieldToFilter('email', $email);
        $seller = $collection->getFirstItem();

        if (!$seller->getId()) {
            throw new \Magento\Framework\Exception\NoSuchEntityException(__('Seller with email "%1" does not exist.', $email));
        }

        return $seller;
    }

    public function delete(SellerInterface $seller)
    {
        try {
            $this->resource->delete($seller);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }

        return true;
    }

    public function deleteById($id)
    {
        $seller = $this->getById($id);
        return $this->delete($seller);
    }

    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->collectionFactory->create();

        // Add filters from search criteria
        foreach ($searchCriteria->getFilterGroups() as $filterGroup) {
            foreach ($filterGroup->getFilters() as $filter) {
                $condition = $filter->getConditionType() ?: 'eq';
                $collection->addFieldToFilter($filter->getField(), [$condition => $filter->getValue()]);
            }
        }

        // Create search results object
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());

        return $searchResults;
    }
}
