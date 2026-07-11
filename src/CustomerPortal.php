<?php

declare(strict_types=1);

namespace Ruba;



class CustomerPortal
{
    private SDKConfiguration $sdkConfiguration;
    public RubaBenefitGrants $benefitGrants;

    public RubaCustomers $customers;

    public RubaCustomerMeters $customerMeters;

    public Seats $seats;

    public CustomerSession $customerSession;

    public Downloadables $downloadables;

    public RubaLicenseKeys $licenseKeys;

    public RubaMembers $members;

    public RubaOrders $orders;

    public RubaOrganizations $organizations;

    public RubaSubscriptions $subscriptions;

    public Wallets $wallets;

    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(public SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
        $this->benefitGrants = new RubaBenefitGrants($this->sdkConfiguration);
        $this->customers = new RubaCustomers($this->sdkConfiguration);
        $this->customerMeters = new RubaCustomerMeters($this->sdkConfiguration);
        $this->seats = new Seats($this->sdkConfiguration);
        $this->customerSession = new CustomerSession($this->sdkConfiguration);
        $this->downloadables = new Downloadables($this->sdkConfiguration);
        $this->licenseKeys = new RubaLicenseKeys($this->sdkConfiguration);
        $this->members = new RubaMembers($this->sdkConfiguration);
        $this->orders = new RubaOrders($this->sdkConfiguration);
        $this->organizations = new RubaOrganizations($this->sdkConfiguration);
        $this->subscriptions = new RubaSubscriptions($this->sdkConfiguration);
        $this->wallets = new Wallets($this->sdkConfiguration);
    }
    /**
     * @param  string  $baseUrl
     * @param  array<string, string>  $urlVariables
     *
     * @return string
     */
    public function getUrl(string $baseUrl, array $urlVariables): string
    {
        $serverDetails = $this->sdkConfiguration->getServerDetails();

        if ($baseUrl == null) {
            $baseUrl = $serverDetails->baseUrl;
        }

        if ($urlVariables == null) {
            $urlVariables = $serverDetails->options;
        }

        return Utils\Utils::templateUrl($baseUrl, $urlVariables);
    }

}