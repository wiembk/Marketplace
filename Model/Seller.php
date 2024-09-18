<?php

namespace Wamia\Marketplace\Model;

use Magento\Framework\Model\AbstractModel;
use Wamia\Marketplace\Api\Data\SellerInterface;

class Seller extends AbstractModel implements SellerInterface
{
    /**
     * Initialize resource model
     */
    protected function _construct()
    {
        $this->_init(\Wamia\Marketplace\Model\ResourceModel\Seller::class);
    }

    /**
     * Get ID.
     *
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Set ID.
     *
     * @param int $id
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setId($id)
    {
        return $this->setData(self::ENTITY_ID, $id);
    }

    /**
     * Get first name.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->getData(self::FIRST_NAME);
    }

    /**
     * Set first name.
     *
     * @param string $firstName
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setFirstName($firstName)
    {
        return $this->setData(self::FIRST_NAME, $firstName);
    }

    /**
     * Get last name.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->getData(self::LAST_NAME);
    }

    /**
     * Set last name.
     *
     * @param string $lastName
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setLastName($lastName)
    {
        return $this->setData(self::LAST_NAME, $lastName);
    }

    /**
     * Get username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->getData(self::USERNAME);
    }

    /**
     * Set username.
     *
     * @param string $username
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setUsername($username)
    {
        return $this->setData(self::USERNAME, $username);
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * Set email.
     *
     * @param string $email
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * Get date of birth.
     *
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->getData(self::DATE_OF_BIRTH);
    }

    /**
     * Set date of birth.
     *
     * @param string|null $dateOfBirth
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setDateOfBirth($dateOfBirth)
    {
        return $this->setData(self::DATE_OF_BIRTH, $dateOfBirth);
    }

    /**
     * Get gender.
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->getData(self::GENDER);
    }

    /**
     * Set gender.
     *
     * @param string|null $gender
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setGender($gender)
    {
        return $this->setData(self::GENDER, $gender);
    }

    /**
     * Get profile picture.
     *
     * @return string|null
     */
    public function getProfilePic()
    {
        return $this->getData(self::PROFILE_PIC);
    }

    /**
     * Set profile picture.
     *
     * @param string|null $profilePic
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setProfilePic($profilePic)
    {
        return $this->setData(self::PROFILE_PIC, $profilePic);
    }

    /**
     * Get contact number.
     *
     * @return string|null
     */
    public function getContactNumber()
    {
        return $this->getData(self::CONTACT_NUMBER);
    }

    /**
     * Set contact number.
     *
     * @param string|null $contactNumber
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setContactNumber($contactNumber)
    {
        return $this->setData(self::CONTACT_NUMBER, $contactNumber);
    }
    
    /**
     * Get encrypted password.
     *
     * @return string
     */
    public function getPasswordEncrypted()
    {
        return $this->getData(self::PASSWORD_ENCRYPTED);
    }

    /**
     * Set encrypted password.
     *
     * @param string $passwordEncrypted
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setPasswordEncrypted($passwordEncrypted)
    {
        return $this->setData(self::PASSWORD_ENCRYPTED, $passwordEncrypted);
    }

    /**
     * Get address fields.
     *
     * @return string|null
     */
    public function getAddressFields()
    {
        return $this->getData(self::ADDRESS_FIELDS);
    }

    /**
     * Set address fields.
     *
     * @param string|null $addressFields
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setAddressFields($addressFields)
    {
        return $this->setData(self::ADDRESS_FIELDS, $addressFields);
    }

    /**
     * Get social media IDs.
     *
     * @return string|null
     */
    public function getSocialMediaIds()
    {
        return $this->getData(self::SOCIAL_MEDIA_IDS);
    }

    /**
     * Set social media IDs.
     *
     * @param string|null $socialMediaIds
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setSocialMediaIds($socialMediaIds)
    {
        return $this->setData(self::SOCIAL_MEDIA_IDS, $socialMediaIds);
    }

    /**
     * Get shop URL.
     *
     * @return string|null
     */
    public function getShopUrl()
    {
        return $this->getData(self::SHOP_URL);
    }

    /**
     * Set shop URL.
     *
     * @param string|null $shopUrl
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setShopUrl($shopUrl)
    {
        return $this->setData(self::SHOP_URL, $shopUrl);
    }

    /**
     * Get shop title.
     *
     * @return string|null
     */
    public function getShopTitle()
    {
        return $this->getData(self::SHOP_TITLE);
    }

    /**
     * Set shop title.
     *
     * @param string|null $shopTitle
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setShopTitle($shopTitle)
    {
        return $this->setData(self::SHOP_TITLE, $shopTitle);
    }
    /**
     * Get company description.
     *
     * @return string|null
     */
    public function getCompanyDescription()
    {
        return $this->getData(self::COMPANY_DESCRIPTION);
    }

    /**
     * Set company description.
     *
     * @param string|null $companyDescription
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setCompanyDescription($companyDescription)
    {
        return $this->setData(self::COMPANY_DESCRIPTION, $companyDescription);
    }

    /**
     * Get seller status (is seller).
     *
     * @return int
     */
    public function getIsSeller()
    {
        return $this->getData(self::IS_SELLER);
    }

    /**
     * Set seller status (is seller).
     *
     * @param int $isSeller
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setIsSeller($isSeller)
    {
        return $this->setData(self::IS_SELLER, $isSeller);
    }

    /**
     * Get store ID.
     *
     * @return int
     */
    public function getStoreId()
    {
        return $this->getData(self::STORE_ID);
    }

    /**
     * Set store ID.
     *
     * @param int $storeId
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setStoreId($storeId)
    {
        return $this->setData(self::STORE_ID, $storeId);
    }

    /**
     * Get payment source (text).
     *
     * @return string|null
     */
    public function getPaymentSource()
    {
        return $this->getData(self::PAYMENT_SOURCE);
    }

    /**
     * Set payment source (text).
     *
     * @param string|null $paymentSource
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setPaymentSource($paymentSource)
    {
        return $this->setData(self::PAYMENT_SOURCE, $paymentSource);
    }

    /**
     * Get return policy (text).
     *
     * @return string|null
     */
    public function getReturnPolicy()
    {
        return $this->getData(self::RETURN_POLICY);
    }

    /**
     * Set return policy (text).
     *
     * @param string|null $returnPolicy
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setReturnPolicy($returnPolicy)
    {
        return $this->setData(self::RETURN_POLICY, $returnPolicy);
    }

    /**
     * Get shipping policy (text).
     *
     * @return string|null
     */
    public function getShippingPolicy()
    {
        return $this->getData(self::SHIPPING_POLICY);
    }

    /**
     * Set shipping policy (text).
     *
     * @param string|null $shippingPolicy
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setShippingPolicy($shippingPolicy)
    {
        return $this->setData(self::SHIPPING_POLICY, $shippingPolicy);
    }

    /**
     * Get privacy policy (text).
     *
     * @return string|null
     */
    public function getPrivacyPolicy()
    {
        return $this->getData(self::PRIVACY_POLICY);
    }

    /**
     * Set privacy policy (text).
     *
     * @param string|null $privacyPolicy
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setPrivacyPolicy($privacyPolicy)
    {
        return $this->setData(self::PRIVACY_POLICY, $privacyPolicy);
    }

    /**
     * Get allowed categories (text).
     *
     * @return string
     */
    public function getAllowedCategories()
    {
        return $this->getData(self::ALLOWED_CATEGORIES);
    }

    /**
     * Set allowed categories (text).
     *
     * @param string $allowedCategories
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setAllowedCategories($allowedCategories)
    {
        return $this->setData(self::ALLOWED_CATEGORIES, $allowedCategories);
    }

    /**
     * Get meta keywords (text).
     *
     * @return string|null
     */
    public function getMetaKeyword()
    {
        return $this->getData(self::META_KEYWORD);
    }

    /**
     * Set meta keywords (text).
     *
     * @param string|null $metaKeyword
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setMetaKeyword($metaKeyword)
    {
        return $this->setData(self::META_KEYWORD, $metaKeyword);
    }

    /**
     * Get meta description (text).
     *
     * @return string|null
     */
    public function getMetaDescription()
    {
        return $this->getData(self::META_DESCRIPTION);
    }

    /**
     * Set meta description (text).
     *
     * @param string|null $metaDescription
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setMetaDescription($metaDescription)
    {
        return $this->setData(self::META_DESCRIPTION, $metaDescription);
    }

    /**
     * Get banner picture URL.
     *
     * @return string|null
     */
    public function getBannerPic()
    {
        return $this->getData(self::BANNER_PIC);
    }

    /**
     * Set banner picture URL.
     *
     * @param string|null $bannerPic
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setBannerPic($bannerPic)
    {
        return $this->setData(self::BANNER_PIC, $bannerPic);
    }

    /**
     * Get logo picture URL.
     *
     * @return string|null
     */
    public function getLogoPic()
    {
        return $this->getData(self::LOGO_PIC);
    }

    /**
     * Set logo picture URL.
     *
     * @param string|null $logoPic
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setLogoPic($logoPic)
    {
        return $this->setData(self::LOGO_PIC, $logoPic);
    }

    /**
     * Get admin notification flag.
     *
     * @return int
     */
    public function getAdminNotification()
    {
        return $this->getData(self::ADMIN_NOTIFICATION);
    }

    /**
     * Set admin notification flag.
     *
     * @param int $adminNotification
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setAdminNotification($adminNotification)
    {
        return $this->setData(self::ADMIN_NOTIFICATION, $adminNotification);
    }

    /**
     * Get creation time.
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Get update time.
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }

}