<?php

declare(strict_types=1);

namespace Ruba\Models\Components;


/** AttachedCustomField - Schema of a custom field attached to a resource. */
class AttachedCustomField
{
    /**
     * ID of the custom field.
     *
     * @var string $customFieldId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_field_id')]
    public string $customFieldId;

    /**
     *
     * @var \Ruba\Models\Components\CustomFieldText|\Ruba\Models\Components\CustomFieldNumber|\Ruba\Models\Components\CustomFieldDate|\Ruba\Models\Components\CustomFieldCheckbox|\Ruba\Models\Components\CustomFieldSelect $customField
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_field')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ruba\Models\Components\CustomFieldText|\Ruba\Models\Components\CustomFieldNumber|\Ruba\Models\Components\CustomFieldDate|\Ruba\Models\Components\CustomFieldCheckbox|\Ruba\Models\Components\CustomFieldSelect')]
    #[\Speakeasy\Serializer\Annotation\UnionDiscriminator(field: 'type', map: ['checkbox' => '\Ruba\Models\Components\CustomFieldCheckbox', 'date' => '\Ruba\Models\Components\CustomFieldDate', 'number' => '\Ruba\Models\Components\CustomFieldNumber', 'select' => '\Ruba\Models\Components\CustomFieldSelect', 'text' => '\Ruba\Models\Components\CustomFieldText'])]
    public CustomFieldText|CustomFieldNumber|CustomFieldDate|CustomFieldCheckbox|CustomFieldSelect $customField;

    /**
     * Order of the custom field in the resource.
     *
     * @var int $order
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('order')]
    public int $order;

    /**
     * Whether the value is required for this custom field.
     *
     * @var bool $required
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('required')]
    public bool $required;

    /**
     * @param  string  $customFieldId
     * @param  \Ruba\Models\Components\CustomFieldText|\Ruba\Models\Components\CustomFieldNumber|\Ruba\Models\Components\CustomFieldDate|\Ruba\Models\Components\CustomFieldCheckbox|\Ruba\Models\Components\CustomFieldSelect  $customField
     * @param  int  $order
     * @param  bool  $required
     * @phpstan-pure
     */
    public function __construct(string $customFieldId, CustomFieldText|CustomFieldNumber|CustomFieldDate|CustomFieldCheckbox|CustomFieldSelect $customField, int $order, bool $required)
    {
        $this->customFieldId = $customFieldId;
        $this->customField = $customField;
        $this->order = $order;
        $this->required = $required;
    }
}