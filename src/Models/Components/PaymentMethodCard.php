<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


class PaymentMethodCard
{
    /**
     * The ID of the object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * Creation timestamp of the object.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     *
     * @var \Ruba\Models\Components\PaymentProcessor $processor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('processor')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\PaymentProcessor')]
    public PaymentProcessor $processor;

    /**
     *
     * @var string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_id')]
    public string $customerId;

    /**
     *
     * @var \Ruba\Models\Components\PaymentMethodCardMetadata $methodMetadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('method_metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\PaymentMethodCardMetadata')]
    public PaymentMethodCardMetadata $methodMetadata;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $id
     * @param  \DateTime  $createdAt
     * @param  \Ruba\Models\Components\PaymentProcessor  $processor
     * @param  string  $customerId
     * @param  string  $type
     * @param  \Ruba\Models\Components\PaymentMethodCardMetadata  $methodMetadata
     * @param  ?\DateTime  $modifiedAt
     * @phpstan-pure
     */
    public function __construct(string $id, \DateTime $createdAt, PaymentProcessor $processor, string $customerId, PaymentMethodCardMetadata $methodMetadata, ?\DateTime $modifiedAt = null, string $type = 'card')
    {
        $this->id = $id;
        $this->createdAt = $createdAt;
        $this->processor = $processor;
        $this->customerId = $customerId;
        $this->methodMetadata = $methodMetadata;
        $this->modifiedAt = $modifiedAt;
        $this->type = $type;
    }
}