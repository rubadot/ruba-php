<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class Metrics
{
    /**
     *
     * @var ?\Ruba\Models\Components\Metric $activeSubscriptions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active_subscriptions')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $activeSubscriptions = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $committedSubscriptions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('committed_subscriptions')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $committedSubscriptions = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $monthlyRecurringRevenue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('monthly_recurring_revenue')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $monthlyRecurringRevenue = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $committedMonthlyRecurringRevenue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('committed_monthly_recurring_revenue')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $committedMonthlyRecurringRevenue = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $averageRevenuePerUser
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('average_revenue_per_user')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $averageRevenuePerUser = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $checkouts
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('checkouts')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $checkouts = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $succeededCheckouts
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('succeeded_checkouts')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $succeededCheckouts = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $churnedSubscriptions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('churned_subscriptions')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $churnedSubscriptions = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $churnRate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('churn_rate')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $churnRate = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $orders
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('orders')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $orders = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $revenue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('revenue')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $revenue = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $netRevenue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('net_revenue')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $netRevenue = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $cumulativeRevenue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cumulative_revenue')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $cumulativeRevenue = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $netCumulativeRevenue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('net_cumulative_revenue')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $netCumulativeRevenue = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $costs
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('costs')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $costs = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $cumulativeCosts
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cumulative_costs')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $cumulativeCosts = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $averageOrderValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('average_order_value')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $averageOrderValue = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $netAverageOrderValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('net_average_order_value')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $netAverageOrderValue = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $costPerUser
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cost_per_user')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $costPerUser = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $activeUserByEvent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active_user_by_event')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $activeUserByEvent = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $oneTimeProducts
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('one_time_products')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $oneTimeProducts = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $oneTimeProductsRevenue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('one_time_products_revenue')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $oneTimeProductsRevenue = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $oneTimeProductsNetRevenue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('one_time_products_net_revenue')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $oneTimeProductsNetRevenue = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $newSubscriptions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('new_subscriptions')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $newSubscriptions = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $newSubscriptionsRevenue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('new_subscriptions_revenue')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $newSubscriptionsRevenue = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $newSubscriptionsNetRevenue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('new_subscriptions_net_revenue')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $newSubscriptionsNetRevenue = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $renewedSubscriptions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('renewed_subscriptions')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $renewedSubscriptions = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $renewedSubscriptionsRevenue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('renewed_subscriptions_revenue')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $renewedSubscriptionsRevenue = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $renewedSubscriptionsNetRevenue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('renewed_subscriptions_net_revenue')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $renewedSubscriptionsNetRevenue = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $canceledSubscriptions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('canceled_subscriptions')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $canceledSubscriptions = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $canceledSubscriptionsCustomerService
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('canceled_subscriptions_customer_service')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $canceledSubscriptionsCustomerService = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $canceledSubscriptionsLowQuality
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('canceled_subscriptions_low_quality')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $canceledSubscriptionsLowQuality = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $canceledSubscriptionsMissingFeatures
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('canceled_subscriptions_missing_features')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $canceledSubscriptionsMissingFeatures = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $canceledSubscriptionsSwitchedService
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('canceled_subscriptions_switched_service')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $canceledSubscriptionsSwitchedService = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $canceledSubscriptionsTooComplex
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('canceled_subscriptions_too_complex')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $canceledSubscriptionsTooComplex = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $canceledSubscriptionsTooExpensive
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('canceled_subscriptions_too_expensive')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $canceledSubscriptionsTooExpensive = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $canceledSubscriptionsUnused
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('canceled_subscriptions_unused')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $canceledSubscriptionsUnused = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $canceledSubscriptionsOther
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('canceled_subscriptions_other')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $canceledSubscriptionsOther = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $checkoutsConversion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('checkouts_conversion')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $checkoutsConversion = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $ltv
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ltv')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $ltv = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $grossMargin
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('gross_margin')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $grossMargin = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $grossMarginPercentage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('gross_margin_percentage')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $grossMarginPercentage = null;

    /**
     *
     * @var ?\Ruba\Models\Components\Metric $cashflow
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cashflow')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\Metric|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Metric $cashflow = null;

    /**
     * @param  ?\Ruba\Models\Components\Metric  $activeSubscriptions
     * @param  ?\Ruba\Models\Components\Metric  $committedSubscriptions
     * @param  ?\Ruba\Models\Components\Metric  $monthlyRecurringRevenue
     * @param  ?\Ruba\Models\Components\Metric  $committedMonthlyRecurringRevenue
     * @param  ?\Ruba\Models\Components\Metric  $averageRevenuePerUser
     * @param  ?\Ruba\Models\Components\Metric  $checkouts
     * @param  ?\Ruba\Models\Components\Metric  $succeededCheckouts
     * @param  ?\Ruba\Models\Components\Metric  $churnedSubscriptions
     * @param  ?\Ruba\Models\Components\Metric  $churnRate
     * @param  ?\Ruba\Models\Components\Metric  $orders
     * @param  ?\Ruba\Models\Components\Metric  $revenue
     * @param  ?\Ruba\Models\Components\Metric  $netRevenue
     * @param  ?\Ruba\Models\Components\Metric  $cumulativeRevenue
     * @param  ?\Ruba\Models\Components\Metric  $netCumulativeRevenue
     * @param  ?\Ruba\Models\Components\Metric  $costs
     * @param  ?\Ruba\Models\Components\Metric  $cumulativeCosts
     * @param  ?\Ruba\Models\Components\Metric  $averageOrderValue
     * @param  ?\Ruba\Models\Components\Metric  $netAverageOrderValue
     * @param  ?\Ruba\Models\Components\Metric  $costPerUser
     * @param  ?\Ruba\Models\Components\Metric  $activeUserByEvent
     * @param  ?\Ruba\Models\Components\Metric  $oneTimeProducts
     * @param  ?\Ruba\Models\Components\Metric  $oneTimeProductsRevenue
     * @param  ?\Ruba\Models\Components\Metric  $oneTimeProductsNetRevenue
     * @param  ?\Ruba\Models\Components\Metric  $newSubscriptions
     * @param  ?\Ruba\Models\Components\Metric  $newSubscriptionsRevenue
     * @param  ?\Ruba\Models\Components\Metric  $newSubscriptionsNetRevenue
     * @param  ?\Ruba\Models\Components\Metric  $renewedSubscriptions
     * @param  ?\Ruba\Models\Components\Metric  $renewedSubscriptionsRevenue
     * @param  ?\Ruba\Models\Components\Metric  $renewedSubscriptionsNetRevenue
     * @param  ?\Ruba\Models\Components\Metric  $canceledSubscriptions
     * @param  ?\Ruba\Models\Components\Metric  $canceledSubscriptionsCustomerService
     * @param  ?\Ruba\Models\Components\Metric  $canceledSubscriptionsLowQuality
     * @param  ?\Ruba\Models\Components\Metric  $canceledSubscriptionsMissingFeatures
     * @param  ?\Ruba\Models\Components\Metric  $canceledSubscriptionsSwitchedService
     * @param  ?\Ruba\Models\Components\Metric  $canceledSubscriptionsTooComplex
     * @param  ?\Ruba\Models\Components\Metric  $canceledSubscriptionsTooExpensive
     * @param  ?\Ruba\Models\Components\Metric  $canceledSubscriptionsUnused
     * @param  ?\Ruba\Models\Components\Metric  $canceledSubscriptionsOther
     * @param  ?\Ruba\Models\Components\Metric  $checkoutsConversion
     * @param  ?\Ruba\Models\Components\Metric  $ltv
     * @param  ?\Ruba\Models\Components\Metric  $grossMargin
     * @param  ?\Ruba\Models\Components\Metric  $grossMarginPercentage
     * @param  ?\Ruba\Models\Components\Metric  $cashflow
     * @phpstan-pure
     */
    public function __construct(?Metric $activeSubscriptions = null, ?Metric $committedSubscriptions = null, ?Metric $monthlyRecurringRevenue = null, ?Metric $committedMonthlyRecurringRevenue = null, ?Metric $averageRevenuePerUser = null, ?Metric $checkouts = null, ?Metric $succeededCheckouts = null, ?Metric $churnedSubscriptions = null, ?Metric $churnRate = null, ?Metric $orders = null, ?Metric $revenue = null, ?Metric $netRevenue = null, ?Metric $cumulativeRevenue = null, ?Metric $netCumulativeRevenue = null, ?Metric $costs = null, ?Metric $cumulativeCosts = null, ?Metric $averageOrderValue = null, ?Metric $netAverageOrderValue = null, ?Metric $costPerUser = null, ?Metric $activeUserByEvent = null, ?Metric $oneTimeProducts = null, ?Metric $oneTimeProductsRevenue = null, ?Metric $oneTimeProductsNetRevenue = null, ?Metric $newSubscriptions = null, ?Metric $newSubscriptionsRevenue = null, ?Metric $newSubscriptionsNetRevenue = null, ?Metric $renewedSubscriptions = null, ?Metric $renewedSubscriptionsRevenue = null, ?Metric $renewedSubscriptionsNetRevenue = null, ?Metric $canceledSubscriptions = null, ?Metric $canceledSubscriptionsCustomerService = null, ?Metric $canceledSubscriptionsLowQuality = null, ?Metric $canceledSubscriptionsMissingFeatures = null, ?Metric $canceledSubscriptionsSwitchedService = null, ?Metric $canceledSubscriptionsTooComplex = null, ?Metric $canceledSubscriptionsTooExpensive = null, ?Metric $canceledSubscriptionsUnused = null, ?Metric $canceledSubscriptionsOther = null, ?Metric $checkoutsConversion = null, ?Metric $ltv = null, ?Metric $grossMargin = null, ?Metric $grossMarginPercentage = null, ?Metric $cashflow = null)
    {
        $this->activeSubscriptions = $activeSubscriptions;
        $this->committedSubscriptions = $committedSubscriptions;
        $this->monthlyRecurringRevenue = $monthlyRecurringRevenue;
        $this->committedMonthlyRecurringRevenue = $committedMonthlyRecurringRevenue;
        $this->averageRevenuePerUser = $averageRevenuePerUser;
        $this->checkouts = $checkouts;
        $this->succeededCheckouts = $succeededCheckouts;
        $this->churnedSubscriptions = $churnedSubscriptions;
        $this->churnRate = $churnRate;
        $this->orders = $orders;
        $this->revenue = $revenue;
        $this->netRevenue = $netRevenue;
        $this->cumulativeRevenue = $cumulativeRevenue;
        $this->netCumulativeRevenue = $netCumulativeRevenue;
        $this->costs = $costs;
        $this->cumulativeCosts = $cumulativeCosts;
        $this->averageOrderValue = $averageOrderValue;
        $this->netAverageOrderValue = $netAverageOrderValue;
        $this->costPerUser = $costPerUser;
        $this->activeUserByEvent = $activeUserByEvent;
        $this->oneTimeProducts = $oneTimeProducts;
        $this->oneTimeProductsRevenue = $oneTimeProductsRevenue;
        $this->oneTimeProductsNetRevenue = $oneTimeProductsNetRevenue;
        $this->newSubscriptions = $newSubscriptions;
        $this->newSubscriptionsRevenue = $newSubscriptionsRevenue;
        $this->newSubscriptionsNetRevenue = $newSubscriptionsNetRevenue;
        $this->renewedSubscriptions = $renewedSubscriptions;
        $this->renewedSubscriptionsRevenue = $renewedSubscriptionsRevenue;
        $this->renewedSubscriptionsNetRevenue = $renewedSubscriptionsNetRevenue;
        $this->canceledSubscriptions = $canceledSubscriptions;
        $this->canceledSubscriptionsCustomerService = $canceledSubscriptionsCustomerService;
        $this->canceledSubscriptionsLowQuality = $canceledSubscriptionsLowQuality;
        $this->canceledSubscriptionsMissingFeatures = $canceledSubscriptionsMissingFeatures;
        $this->canceledSubscriptionsSwitchedService = $canceledSubscriptionsSwitchedService;
        $this->canceledSubscriptionsTooComplex = $canceledSubscriptionsTooComplex;
        $this->canceledSubscriptionsTooExpensive = $canceledSubscriptionsTooExpensive;
        $this->canceledSubscriptionsUnused = $canceledSubscriptionsUnused;
        $this->canceledSubscriptionsOther = $canceledSubscriptionsOther;
        $this->checkoutsConversion = $checkoutsConversion;
        $this->ltv = $ltv;
        $this->grossMargin = $grossMargin;
        $this->grossMarginPercentage = $grossMarginPercentage;
        $this->cashflow = $cashflow;
    }
}