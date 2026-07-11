<?php

declare(strict_types=1);

namespace Ruba\Models\Operations;

use Ruba\Models\Components;
class EventsGetResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var \Psr\Http\Message\ResponseInterface $rawResponse
     */
    public \Psr\Http\Message\ResponseInterface $rawResponse;

    /**
     * Successful Response
     *
     * @var \Ruba\Models\Components\MeterCreditEvent|\Ruba\Models\Components\MeterResetEvent|\Ruba\Models\Components\BenefitGrantedEvent|\Ruba\Models\Components\BenefitCycledEvent|\Ruba\Models\Components\BenefitUpdatedEvent|\Ruba\Models\Components\BenefitRevokedEvent|\Ruba\Models\Components\SubscriptionCreatedEvent|\Ruba\Models\Components\SubscriptionUpdatedEvent|\Ruba\Models\Components\SubscriptionCycledEvent|\Ruba\Models\Components\SubscriptionCanceledEvent|\Ruba\Models\Components\SubscriptionRevokedEvent|\Ruba\Models\Components\SubscriptionUncanceledEvent|\Ruba\Models\Components\SubscriptionProductUpdatedEvent|\Ruba\Models\Components\SubscriptionSeatsUpdatedEvent|\Ruba\Models\Components\SubscriptionBillingPeriodUpdatedEvent|\Ruba\Models\Components\OrderPaidEvent|\Ruba\Models\Components\OrderRefundedEvent|\Ruba\Models\Components\OrderVoidedEvent|\Ruba\Models\Components\CheckoutCreatedEvent|\Ruba\Models\Components\CustomerCreatedEvent|\Ruba\Models\Components\CustomerUpdatedEvent|\Ruba\Models\Components\CustomerDeletedEvent|\Ruba\Models\Components\BalanceOrderEvent|\Ruba\Models\Components\BalanceCreditOrderEvent|\Ruba\Models\Components\BalanceRefundEvent|\Ruba\Models\Components\BalanceRefundReversalEvent|\Ruba\Models\Components\BalanceDisputeEvent|\Ruba\Models\Components\BalanceDisputeReversalEvent|\Ruba\Models\Components\UserEvent|null $event
     */
    public Components\MeterCreditEvent|Components\MeterResetEvent|Components\BenefitGrantedEvent|Components\BenefitCycledEvent|Components\BenefitUpdatedEvent|Components\BenefitRevokedEvent|Components\SubscriptionCreatedEvent|Components\SubscriptionUpdatedEvent|Components\SubscriptionCycledEvent|Components\SubscriptionCanceledEvent|Components\SubscriptionRevokedEvent|Components\SubscriptionUncanceledEvent|Components\SubscriptionProductUpdatedEvent|Components\SubscriptionSeatsUpdatedEvent|Components\SubscriptionBillingPeriodUpdatedEvent|Components\OrderPaidEvent|Components\OrderRefundedEvent|Components\OrderVoidedEvent|Components\CheckoutCreatedEvent|Components\CustomerCreatedEvent|Components\CustomerUpdatedEvent|Components\CustomerDeletedEvent|Components\BalanceOrderEvent|Components\BalanceCreditOrderEvent|Components\BalanceRefundEvent|Components\BalanceRefundReversalEvent|Components\BalanceDisputeEvent|Components\BalanceDisputeReversalEvent|Components\UserEvent|null $event = null;

    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  \Ruba\Models\Components\MeterCreditEvent|\Ruba\Models\Components\MeterResetEvent|\Ruba\Models\Components\BenefitGrantedEvent|\Ruba\Models\Components\BenefitCycledEvent|\Ruba\Models\Components\BenefitUpdatedEvent|\Ruba\Models\Components\BenefitRevokedEvent|\Ruba\Models\Components\SubscriptionCreatedEvent|\Ruba\Models\Components\SubscriptionUpdatedEvent|\Ruba\Models\Components\SubscriptionCycledEvent|\Ruba\Models\Components\SubscriptionCanceledEvent|\Ruba\Models\Components\SubscriptionRevokedEvent|\Ruba\Models\Components\SubscriptionUncanceledEvent|\Ruba\Models\Components\SubscriptionProductUpdatedEvent|\Ruba\Models\Components\SubscriptionSeatsUpdatedEvent|\Ruba\Models\Components\SubscriptionBillingPeriodUpdatedEvent|\Ruba\Models\Components\OrderPaidEvent|\Ruba\Models\Components\OrderRefundedEvent|\Ruba\Models\Components\OrderVoidedEvent|\Ruba\Models\Components\CheckoutCreatedEvent|\Ruba\Models\Components\CustomerCreatedEvent|\Ruba\Models\Components\CustomerUpdatedEvent|\Ruba\Models\Components\CustomerDeletedEvent|\Ruba\Models\Components\BalanceOrderEvent|\Ruba\Models\Components\BalanceCreditOrderEvent|\Ruba\Models\Components\BalanceRefundEvent|\Ruba\Models\Components\BalanceRefundReversalEvent|\Ruba\Models\Components\BalanceDisputeEvent|\Ruba\Models\Components\BalanceDisputeReversalEvent|\Ruba\Models\Components\UserEvent|null  $event
     * @phpstan-pure
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, Components\MeterCreditEvent|Components\MeterResetEvent|Components\BenefitGrantedEvent|Components\BenefitCycledEvent|Components\BenefitUpdatedEvent|Components\BenefitRevokedEvent|Components\SubscriptionCreatedEvent|Components\SubscriptionUpdatedEvent|Components\SubscriptionCycledEvent|Components\SubscriptionCanceledEvent|Components\SubscriptionRevokedEvent|Components\SubscriptionUncanceledEvent|Components\SubscriptionProductUpdatedEvent|Components\SubscriptionSeatsUpdatedEvent|Components\SubscriptionBillingPeriodUpdatedEvent|Components\OrderPaidEvent|Components\OrderRefundedEvent|Components\OrderVoidedEvent|Components\CheckoutCreatedEvent|Components\CustomerCreatedEvent|Components\CustomerUpdatedEvent|Components\CustomerDeletedEvent|Components\BalanceOrderEvent|Components\BalanceCreditOrderEvent|Components\BalanceRefundEvent|Components\BalanceRefundReversalEvent|Components\BalanceDisputeEvent|Components\BalanceDisputeReversalEvent|Components\UserEvent|null $event = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->event = $event;
    }
}