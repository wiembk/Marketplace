<?php
namespace Wamia\Marketplace\Api\Data;

interface SellerInterface
{
    const ENTITY_ID = 'entity_id';
    const FIRST_NAME = 'first_name';
    const LAST_NAME = 'last_name';
    const USERNAME = 'username';
    const EMAIL = 'email';
    const DATE_OF_BIRTH = 'date_of_birth';
    const GENDER = 'gender';
    const PROFILE_PIC = 'profile_pic';
    const CONTACT_NUMBER = 'contact_number';
    const PASSWORD_ENCRYPTED = 'password_encrypted';
    const ADDRESS_FIELDS = 'address_fields';
    const SOCIAL_MEDIA_IDS = 'social_media_ids';
    const SHOP_URL = 'shop_url';
    const SHOP_TITLE = 'shop_title';
    const COMPANY_DESCRIPTION = 'company_description';
    const IS_SELLER = 'is_seller';
    const STORE_ID = 'store_id';
    const PAYMENT_SOURCE = 'payment_source';
    const RETURN_POLICY = 'return_policy';
    const SHIPPING_POLICY = 'shipping_policy';
    const PRIVACY_POLICY = 'privacy_policy';
    const ALLOWED_CATEGORIES = 'allowed_categories';
    const META_KEYWORD = 'meta_keyword';
    const META_DESCRIPTION = 'meta_description';
    const BANNER_PIC = 'banner_pic';
    const LOGO_PIC = 'logo_pic';
    const ADMIN_NOTIFICATION = 'admin_notification';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * Get ID.
     *
     * @return int
     */
    public function getId();

    /**
     * Set ID.
     *
     * @param int $id
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setId($id);

    /**
     * Get first name.
     *
     * @return string
     */
    public function getFirstName();

    /**
     * Set first name.
     *
     * @param string $firstName
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setFirstName($firstName);

    /**
     * Get last name.
     *
     * @return string
     */
    public function getLastName();

    /**
     * Set last name.
     *
     * @param string $lastName
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setLastName($lastName);

    /**
     * Get username.
     *
     * @return string
     */
    public function getUsername();

    /**
     * Set username.
     *
     * @param string $username
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setUsername($username);

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail();

    /**
     * Set email.
     *
     * @param string $email
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setEmail($email);

    /**
     * Get date of birth.
     *
     * @return string|null
     */
    public function getDateOfBirth();

    /**
     * Set date of birth.
     *
     * @param string|null $dateOfBirth
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setDateOfBirth($dateOfBirth);

    /**
     * Get gender.
     *
     * @return string|null
     */
    public function getGender();

    /**
     * Set gender.
     *
     * @param string|null $gender
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setGender($gender);

    /**
     * Get profile picture.
     *
     * @return string|null
     */
    public function getProfilePic();

    /**
     * Set profile picture.
     *
     * @param string|null $profilePic
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setProfilePic($profilePic);

    /**
     * Get contact number.
     *
     * @return string|null
     */
    public function getContactNumber();

    /**
     * Set contact number.
     *
     * @param string|null $contactNumber
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setContactNumber($contactNumber);

    /**
     * Get encrypted password.
     *
     * @return string
     */
    public function getPasswordEncrypted();

    /**
     * Set encrypted password.
     *
     * @param string $passwordEncrypted
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setPasswordEncrypted($passwordEncrypted);

    /**
     * Get address fields.
     *
     * @return string|null
     */
    public function getAddressFields();

    /**
     * Set address fields.
     *
     * @param string|null $addressFields
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setAddressFields($addressFields);

    /**
     * Get social media IDs.
     *
     * @return string|null
     */
    public function getSocialMediaIds();

    /**
     * Set social media IDs.
     *
     * @param string|null $socialMediaIds
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setSocialMediaIds($socialMediaIds);

    /**
     * Get shop URL.
     *
     * @return string|null
     */
    public function getShopUrl();

    /**
     * Set shop URL.
     *
     * @param string|null $shopUrl
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setShopUrl($shopUrl);

    /**
     * Get shop title.
     *
     * @return string|null
     */
    public function getShopTitle();

    /**
     * Set shop title.
     *
     * @param string|null $shopTitle
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setShopTitle($shopTitle);

    /**
     * Get company description.
     *
     * @return string|null
     */
    public function getCompanyDescription();

    /**
     * Set company description.
     *
     * @param string|null $companyDescription
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setCompanyDescription($companyDescription);

    /**
     * Get seller status (is seller).
     *
     * @return int
     */
    public function getIsSeller();

    /**
     * Set seller status (is seller).
     *
     * @param int $isSeller
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setIsSeller($isSeller);

    /**
     * Get store ID.
     *
     * @return int
     */
    public function getStoreId();

    /**
     * Set store ID.
     *
     * @param int $storeId
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setStoreId($storeId);

    /**
     * Get payment source (text).
     *
     * @return string|null
     */
    public function getPaymentSource();

    /**
     * Set payment source (text).
     *
     * @param string|null $paymentSource
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setPaymentSource($paymentSource);

    /**
     * Get return policy (text).
     *
     * @return string|null
     */
    public function getReturnPolicy();

    /**
     * Set return policy (text).
     *
     * @param string|null $returnPolicy
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setReturnPolicy($returnPolicy);

    /**
     * Get shipping policy (text).
     *
     * @return string|null
     */
    public function getShippingPolicy();

    /**
     * Set shipping policy (text).
     *
     * @param string|null $shippingPolicy
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setShippingPolicy($shippingPolicy);

    /**
     * Get privacy policy (text).
     *
     * @return string|null
     */
    public function getPrivacyPolicy();

    /**
     * Set privacy policy (text).
     *
     * @param string|null $privacyPolicy
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setPrivacyPolicy($privacyPolicy);

    /**
     * Get allowed categories (text).
     *
     * @return string
     */
    public function getAllowedCategories();

    /**
     * Set allowed categories (text).
     *
     * @param string $allowedCategories
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setAllowedCategories($allowedCategories);

    /**
     * Get meta keywords (text).
     *
     * @return string|null
     */
    public function getMetaKeyword();

    /**
     * Set meta keywords (text).
     *
     * @param string|null $metaKeyword
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setMetaKeyword($metaKeyword);

    /**
     * Get meta description (text).
     *
     * @return string|null
     */
    public function getMetaDescription();

    /**
     * Set meta description (text).
     *
     * @param string|null $metaDescription
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setMetaDescription($metaDescription);

    /**
     * Get banner picture URL.
     *
     * @return string|null
     */
    public function getBannerPic();

    /**
     * Set banner picture URL.
     *
     * @param string|null $bannerPic
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setBannerPic($bannerPic);

    /**
     * Get logo picture URL.
     *
     * @return string|null
     */
    public function getLogoPic();

    /**
     * Set logo picture URL.
     *
     * @param string|null $logoPic
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setLogoPic($logoPic);

    /**
     * Get admin notification flag.
     *
     * @return int
     */
    public function getAdminNotification();

    /**
     * Set admin notification flag.
     *
     * @param int $adminNotification
     * @return \Wamia\Marketplace\Api\Data\SellerInterface
     */
    public function setAdminNotification($adminNotification);

    /**
     * Get creation time.
     *
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Get update time.
     *
     * @return string|null
     */
    public function getUpdatedAt();
    
}