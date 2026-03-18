<?php
/**
 * Description of DeliveryOrderResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Responses\Deliveries;

use Dots\WoltDrive\Client\Resources\Consts\DeliveryStatus;
use Dots\WoltDrive\Client\Resources\CustomerSupport;
use Dots\WoltDrive\Client\Resources\Dropoff;
use Dots\WoltDrive\Client\Resources\Pickup;
use Dots\WoltDrive\Client\Resources\Price;
use Dots\WoltDrive\Client\Resources\Recipient;
use Dots\WoltDrive\Client\Resources\Tracking;
use Dots\WoltDrive\Client\Responses\WoltDriveResponseDTO;

class DeliveryOrderResponseDTO extends WoltDriveResponseDTO
{
    protected string $id;

    protected DeliveryStatus $status;

    protected Tracking $tracking;

    protected Pickup $pickup;

    protected Dropoff $dropoff;

    protected Price $price;

    protected Recipient $recipient;

    protected array $parcels = [];

    protected CustomerSupport $customer_support;

    protected ?string $wolt_order_reference_id;

    protected ?string $merchant_order_reference_id;

    protected array $tips = [];

    protected ?string $order_number;

    public function getId(): string
    {
        return $this->id;
    }

    public function getStatus(): DeliveryStatus
    {
        return $this->status;
    }

    public function getTracking(): Tracking
    {
        return $this->tracking;
    }

    public function getPickup(): Pickup
    {
        return $this->pickup;
    }

    public function getDropoff(): Dropoff
    {
        return $this->dropoff;
    }

    public function getPrice(): Price
    {
        return $this->price;
    }

    public function getRecipient(): Recipient
    {
        return $this->recipient;
    }

    public function getParcels(): array
    {
        return $this->parcels;
    }

    public function getCustomerSupport(): CustomerSupport
    {
        return $this->customer_support;
    }

    public function getWoltOrderReferenceId(): ?string
    {
        return $this->wolt_order_reference_id;
    }

    public function getMerchantOrderReferenceId(): ?string
    {
        return $this->merchant_order_reference_id;
    }

    public function getTips(): array
    {
        return $this->tips;
    }

    public function getOrderNumber(): ?string
    {
        return $this->order_number;
    }
}
