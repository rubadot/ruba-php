<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class ListResourceWithCursorPaginationEvent
{
    /**
     * $items
     *
     * @var array<\Ruba\Models\Components\MeterCreditEvent|\Ruba\Models\Components\MeterResetEvent|\Ruba\Models\Components\BenefitGrantedEvent|\Ruba\Models\Components\BenefitCycledEvent|\Ruba\Models\Components\BenefitUpdatedEvent|\Ruba\Models\Components\BenefitRevokedEvent|\Ruba\Models\Components\SubscriptionCreatedEvent|\Ruba\Models\Components\SubscriptionUpdatedEvent|\Ruba\Models\Components\SubscriptionCycledEvent|\Ruba\Models\Components\SubscriptionCanceledEvent|\Ruba\Models\Components\SubscriptionRevokedEvent|\Ruba\Models\Components\SubscriptionUncanceledEvent|\Ruba\Models\Components\SubscriptionProductUpdatedEvent|\Ruba\Models\Components\SubscriptionSeatsUpdatedEvent|\Ruba\Models\Components\SubscriptionBillingPeriodUpdatedEvent|\Ruba\Models\Components\OrderPaidEvent|\Ruba\Models\Components\OrderRefundedEvent|\Ruba\Models\Components\OrderVoidedEvent|\Ruba\Models\Components\CheckoutCreatedEvent|\Ruba\Models\Components\CustomerCreatedEvent|\Ruba\Models\Components\CustomerUpdatedEvent|\Ruba\Models\Components\CustomerDeletedEvent|\Ruba\Models\Components\BalanceOrderEvent|\Ruba\Models\Components\BalanceCreditOrderEvent|\Ruba\Models\Components\BalanceRefundEvent|\Ruba\Models\Components\BalanceRefundReversalEvent|\Ruba\Models\Components\BalanceDisputeEvent|\Ruba\Models\Components\BalanceDisputeReversalEvent|\Ruba\Models\Components\UserEvent> $items
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Ruba\Models\Components\MeterCreditEvent|\Ruba\Models\Components\MeterResetEvent|\Ruba\Models\Components\BenefitGrantedEvent|\Ruba\Models\Components\BenefitCycledEvent|\Ruba\Models\Components\BenefitUpdatedEvent|\Ruba\Models\Components\BenefitRevokedEvent|\Ruba\Models\Components\SubscriptionCreatedEvent|\Ruba\Models\Components\SubscriptionUpdatedEvent|\Ruba\Models\Components\SubscriptionCycledEvent|\Ruba\Models\Components\SubscriptionCanceledEvent|\Ruba\Models\Components\SubscriptionRevokedEvent|\Ruba\Models\Components\SubscriptionUncanceledEvent|\Ruba\Models\Components\SubscriptionProductUpdatedEvent|\Ruba\Models\Components\SubscriptionSeatsUpdatedEvent|\Ruba\Models\Components\SubscriptionBillingPeriodUpdatedEvent|\Ruba\Models\Components\OrderPaidEvent|\Ruba\Models\Components\OrderRefundedEvent|\Ruba\Models\Components\OrderVoidedEvent|\Ruba\Models\Components\CheckoutCreatedEvent|\Ruba\Models\Components\CustomerCreatedEvent|\Ruba\Models\Components\CustomerUpdatedEvent|\Ruba\Models\Components\CustomerDeletedEvent|\Ruba\Models\Components\BalanceOrderEvent|\Ruba\Models\Components\BalanceCreditOrderEvent|\Ruba\Models\Components\BalanceRefundEvent|\Ruba\Models\Components\BalanceRefundReversalEvent|\Ruba\Models\Components\BalanceDisputeEvent|\Ruba\Models\Components\BalanceDisputeReversalEvent|\Ruba\Models\Components\UserEvent>')]
    public array $items;

    /**
     *
     * @var \Ruba\Models\Components\CursorPagination $pagination
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pagination')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\CursorPagination')]
    public CursorPagination $pagination;

    /**
     * @param  array<\Ruba\Models\Components\MeterCreditEvent|\Ruba\Models\Components\MeterResetEvent|\Ruba\Models\Components\BenefitGrantedEvent|\Ruba\Models\Components\BenefitCycledEvent|\Ruba\Models\Components\BenefitUpdatedEvent|\Ruba\Models\Components\BenefitRevokedEvent|\Ruba\Models\Components\SubscriptionCreatedEvent|\Ruba\Models\Components\SubscriptionUpdatedEvent|\Ruba\Models\Components\SubscriptionCycledEvent|\Ruba\Models\Components\SubscriptionCanceledEvent|\Ruba\Models\Components\SubscriptionRevokedEvent|\Ruba\Models\Components\SubscriptionUncanceledEvent|\Ruba\Models\Components\SubscriptionProductUpdatedEvent|\Ruba\Models\Components\SubscriptionSeatsUpdatedEvent|\Ruba\Models\Components\SubscriptionBillingPeriodUpdatedEvent|\Ruba\Models\Components\OrderPaidEvent|\Ruba\Models\Components\OrderRefundedEvent|\Ruba\Models\Components\OrderVoidedEvent|\Ruba\Models\Components\CheckoutCreatedEvent|\Ruba\Models\Components\CustomerCreatedEvent|\Ruba\Models\Components\CustomerUpdatedEvent|\Ruba\Models\Components\CustomerDeletedEvent|\Ruba\Models\Components\BalanceOrderEvent|\Ruba\Models\Components\BalanceCreditOrderEvent|\Ruba\Models\Components\BalanceRefundEvent|\Ruba\Models\Components\BalanceRefundReversalEvent|\Ruba\Models\Components\BalanceDisputeEvent|\Ruba\Models\Components\BalanceDisputeReversalEvent|\Ruba\Models\Components\UserEvent>  $items
     * @param  \Ruba\Models\Components\CursorPagination  $pagination
     * @phpstan-pure
     */
    public function __construct(array $items, CursorPagination $pagination)
    {
        $this->items = $items;
        $this->pagination = $pagination;
    }
}