<?php
/**
 * Description of LocationWebhookDetailsDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources\Webhook;

use Dots\Data\DTO;

class LocationWebhookDetailsDTO extends DTO
{
    protected ?string $id;

    protected ?string $wolt_order_reference_id;

    protected ?string $merchant_order_reference_id;

    protected ?string $order_number;

    protected ?string $tracking_id;

    protected ?CourierLocation $courier_location;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getWoltOrderReferenceId(): ?string
    {
        return $this->wolt_order_reference_id;
    }

    public function getMerchantOrderReferenceId(): ?string
    {
        return $this->merchant_order_reference_id;
    }

    public function getOrderNumber(): ?string
    {
        return $this->order_number;
    }

    public function getTrackingId(): ?string
    {
        return $this->tracking_id;
    }

    public function getCourierLocation(): ?CourierLocation
    {
        return $this->courier_location;
    }
}
