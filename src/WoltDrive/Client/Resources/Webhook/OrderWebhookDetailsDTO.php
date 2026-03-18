<?php
/**
 * Description of OrderWebhookDetailsDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources\Webhook;

use Dots\Data\DTO;
use Dots\WoltDrive\Client\Resources\Courier;
use Dots\WoltDrive\Client\Resources\Price;

class OrderWebhookDetailsDTO extends DTO
{
    protected ?string $id;

    protected ?string $venue_id;

    protected ?string $wolt_order_reference_id;

    protected ?string $tracking_reference;

    protected ?string $merchant_order_reference_id;

    protected ?string $order_number;

    protected ?Price $price;

    protected ?WebhookPickup $pickup;

    protected ?WebhookDropoff $dropoff;

    protected ?Courier $courier;

    protected array $parcels = [];

    protected ?string $purchase_rejected_reason;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getVenueId(): ?string
    {
        return $this->venue_id;
    }

    public function getWoltOrderReferenceId(): ?string
    {
        return $this->wolt_order_reference_id;
    }

    public function getTrackingReference(): ?string
    {
        return $this->tracking_reference;
    }

    public function getMerchantOrderReferenceId(): ?string
    {
        return $this->merchant_order_reference_id;
    }

    public function getOrderNumber(): ?string
    {
        return $this->order_number;
    }

    public function getPrice(): ?Price
    {
        return $this->price;
    }

    public function getPickup(): ?WebhookPickup
    {
        return $this->pickup;
    }

    public function getDropoff(): ?WebhookDropoff
    {
        return $this->dropoff;
    }

    public function getCourier(): ?Courier
    {
        return $this->courier;
    }

    public function getParcels(): array
    {
        return $this->parcels;
    }

    public function getPurchaseRejectedReason(): ?string
    {
        return $this->purchase_rejected_reason;
    }
}
