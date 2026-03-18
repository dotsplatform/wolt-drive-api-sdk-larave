<?php
/**
 * Description of CreateDeliveryOrderDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Requests\DeliveryOrders\DTO;

use Dots\Data\DTO;

class CreateDeliveryOrderDTO extends DTO
{
    protected array $pickup;

    protected array $dropoff;

    protected array $customer_support;

    protected ?string $merchant_order_reference_id;

    protected bool $is_no_contact;

    protected array $contents = [];

    protected array $tips = [];

    protected int $min_preparation_time_minutes;

    protected ?string $scheduled_dropoff_time;

    protected ?string $order_number;

    protected ?array $cash;

    protected ?array $handshake_delivery;

    public function getPickup(): array
    {
        return $this->pickup;
    }

    public function getDropoff(): array
    {
        return $this->dropoff;
    }

    public function getCustomerSupport(): array
    {
        return $this->customer_support;
    }

    public function getMerchantOrderReferenceId(): ?string
    {
        return $this->merchant_order_reference_id;
    }

    public function isNoContact(): bool
    {
        return $this->is_no_contact;
    }

    public function getContents(): array
    {
        return $this->contents;
    }

    public function getTips(): array
    {
        return $this->tips;
    }

    public function getMinPreparationTimeMinutes(): int
    {
        return $this->min_preparation_time_minutes;
    }

    public function getScheduledDropoffTime(): ?string
    {
        return $this->scheduled_dropoff_time;
    }

    public function getOrderNumber(): ?string
    {
        return $this->order_number;
    }

    public function getCash(): ?array
    {
        return $this->cash;
    }

    public function getHandshakeDelivery(): ?array
    {
        return $this->handshake_delivery;
    }
}
