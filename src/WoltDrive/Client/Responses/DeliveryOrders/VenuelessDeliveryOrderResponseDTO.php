<?php
/**
 * Description of VenuelessDeliveryOrderResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Responses\DeliveryOrders;

use Dots\WoltDrive\Client\Resources\Price;
use Dots\WoltDrive\Client\Resources\Tracking;
use Dots\WoltDrive\Client\Responses\WoltDriveResponseDTO;

class VenuelessDeliveryOrderResponseDTO extends WoltDriveResponseDTO
{
    protected ?array $pickup;

    protected ?array $dropoff;

    protected ?string $scheduled_dropoff_time;

    protected ?array $customer_support;

    protected ?bool $is_no_contact;

    protected ?string $merchant_order_reference_id;

    protected array $contents = [];

    protected array $tips = [];

    protected ?Price $price;

    protected ?Tracking $tracking;

    protected ?string $wolt_order_reference_id;

    protected ?int $min_preparation_time_minutes;

    protected ?string $order_number;

    public function getPickup(): ?array
    {
        return $this->pickup;
    }

    public function getDropoff(): ?array
    {
        return $this->dropoff;
    }

    public function getScheduledDropoffTime(): ?string
    {
        return $this->scheduled_dropoff_time;
    }

    public function getCustomerSupport(): ?array
    {
        return $this->customer_support;
    }

    public function isNoContact(): ?bool
    {
        return $this->is_no_contact;
    }

    public function getMerchantOrderReferenceId(): ?string
    {
        return $this->merchant_order_reference_id;
    }

    public function getContents(): array
    {
        return $this->contents;
    }

    public function getTips(): array
    {
        return $this->tips;
    }

    public function getPrice(): ?Price
    {
        return $this->price;
    }

    public function getTracking(): ?Tracking
    {
        return $this->tracking;
    }

    public function getWoltOrderReferenceId(): ?string
    {
        return $this->wolt_order_reference_id;
    }

    public function getMinPreparationTimeMinutes(): ?int
    {
        return $this->min_preparation_time_minutes;
    }

    public function getOrderNumber(): ?string
    {
        return $this->order_number;
    }
}
