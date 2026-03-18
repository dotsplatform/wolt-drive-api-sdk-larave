<?php
/**
 * Description of WebhookEventType.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Resources\Consts;

enum WebhookEventType: string
{
    case ORDER_RECEIVED = 'order.received';
    case ORDER_REJECTED = 'order.rejected';
    case ORDER_PICKUP_ETA_UPDATED = 'order.pickup_eta_updated';
    case ORDER_PICKUP_STARTED = 'order.pickup_started';
    case ORDER_PICKUP_ARRIVAL = 'order.pickup_arrival';
    case ORDER_PICKED_UP = 'order.picked_up';
    case ORDER_DROPOFF_STARTED = 'order.dropoff_started';
    case ORDER_DROPOFF_ARRIVAL = 'order.dropoff_arrival';
    case ORDER_DROPOFF_COMPLETED = 'order.dropoff_completed';
    case ORDER_DELIVERED = 'order.delivered';
    case ORDER_DROPOFF_ETA_UPDATED = 'order.dropoff_eta_updated';
    case ORDER_HANDSHAKE_DELIVERY = 'order.handshake_delivery';
    case ORDER_LOCATION_UPDATED = 'order.location_updated';
    case ORDER_CUSTOMER_NO_SHOW = 'order.customer_no_show';

    public function isDeliveryCompleted(): bool
    {
        return $this === self::ORDER_DELIVERED;
    }

    public function isOrderRejected(): bool
    {
        return $this === self::ORDER_REJECTED;
    }

    public function isOrderFailed(): bool
    {
        return in_array($this, [
            self::ORDER_REJECTED,
            self::ORDER_CUSTOMER_NO_SHOW,
        ], true);
    }

    public function isLocationUpdate(): bool
    {
        return $this === self::ORDER_LOCATION_UPDATED;
    }

    public function isCourierAssigned(): bool
    {
        return in_array($this, [
            self::ORDER_RECEIVED,
            self::ORDER_PICKUP_STARTED,
            self::ORDER_PICKUP_ARRIVAL,
            self::ORDER_PICKED_UP,
            self::ORDER_DROPOFF_STARTED,
            self::ORDER_DROPOFF_ARRIVAL,
            self::ORDER_DROPOFF_COMPLETED,
            self::ORDER_DELIVERED,
        ], true);
    }
}
