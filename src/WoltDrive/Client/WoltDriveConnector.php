<?php
/**
 * Description of WoltDriveConnector.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client;

use Dots\WoltDrive\Client\DTO\WoltDriveAuthDTO;
use Dots\WoltDrive\Client\Exceptions\WoltDriveException;
use Dots\WoltDrive\Client\Requests\AvailableVenues\DTO\GetAvailableVenuesDTO;
use Dots\WoltDrive\Client\Requests\AvailableVenues\GetAvailableVenuesRequest;
use Dots\WoltDrive\Client\Requests\Deliveries\CreateDeliveryRequest;
use Dots\WoltDrive\Client\Requests\Deliveries\DTO\CreateDeliveryDTO;
use Dots\WoltDrive\Client\Requests\DeliveryAreas\GetDeliveryAreasRequest;
use Dots\WoltDrive\Client\Requests\DeliveryFee\DTO\GetDeliveryFeeDTO;
use Dots\WoltDrive\Client\Requests\DeliveryFee\GetDeliveryFeeRequest;
use Dots\WoltDrive\Client\Requests\DeliveryOrders\CreateDeliveryOrderRequest;
use Dots\WoltDrive\Client\Requests\DeliveryOrders\DTO\CreateDeliveryOrderDTO;
use Dots\WoltDrive\Client\Requests\Orders\CancelOrderRequest;
use Dots\WoltDrive\Client\Requests\Orders\DTO\CancelOrderDTO;
use Dots\WoltDrive\Client\Requests\Orders\GetHandshakeDeliveryRequest;
use Dots\WoltDrive\Client\Requests\ShipmentPromises\CreateShipmentPromiseRequest;
use Dots\WoltDrive\Client\Requests\ShipmentPromises\DTO\CreateShipmentPromiseDTO;
use Dots\WoltDrive\Client\Requests\Webhooks\CreateWebhookRequest;
use Dots\WoltDrive\Client\Requests\Webhooks\DeleteWebhookRequest;
use Dots\WoltDrive\Client\Requests\Webhooks\DTO\CreateWebhookDTO;
use Dots\WoltDrive\Client\Requests\Webhooks\DTO\UpdateWebhookDTO;
use Dots\WoltDrive\Client\Requests\Webhooks\GetWebhookRequest;
use Dots\WoltDrive\Client\Requests\Webhooks\ListWebhooksRequest;
use Dots\WoltDrive\Client\Requests\Webhooks\UpdateWebhookRequest;
use Dots\WoltDrive\Client\Responses\AvailableVenues\AvailableVenuesResponseDTO;
use Dots\WoltDrive\Client\Responses\Deliveries\DeliveryOrderResponseDTO;
use Dots\WoltDrive\Client\Responses\DeliveryAreas\DeliveryAreasResponseDTO;
use Dots\WoltDrive\Client\Responses\DeliveryFee\DeliveryFeeResponseDTO;
use Dots\WoltDrive\Client\Responses\DeliveryOrders\VenuelessDeliveryOrderResponseDTO;
use Dots\WoltDrive\Client\Responses\ErrorResponseDTO;
use Dots\WoltDrive\Client\Responses\Orders\CancelOrderResponseDTO;
use Dots\WoltDrive\Client\Responses\Orders\HandshakeDeliveryResponseDTO;
use Dots\WoltDrive\Client\Responses\ShipmentPromises\ShipmentPromiseResponseDTO;
use Dots\WoltDrive\Client\Responses\Webhooks\WebhookResponseDTO;
use Dots\WoltDrive\Client\Responses\Webhooks\WebhooksListResponseDTO;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;
use Throwable;

class WoltDriveConnector extends Connector
{
    use AlwaysThrowOnErrors;

    private const string BASE_PROD_URL = 'https://daas-public-api.wolt.com';

    private const string BASE_STAGE_URL = 'https://daas-public-api.development.dev.woltapi.com';

    public function __construct(
        private readonly WoltDriveAuthDTO $authDto,
        private readonly bool $stageEnv = true,
    ) {
        $this->withTokenAuth($this->authDto->getMerchantKey());
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }

    // --- Venueful endpoints ---

    /**
     * @throws WoltDriveException
     */
    public function createShipmentPromise(
        string $venueId,
        CreateShipmentPromiseDTO $dto,
    ): ShipmentPromiseResponseDTO {
        return $this->send(new CreateShipmentPromiseRequest($venueId, $dto))->dto();
    }

    /**
     * @throws WoltDriveException
     */
    public function createDelivery(
        string $venueId,
        CreateDeliveryDTO $dto,
    ): DeliveryOrderResponseDTO {
        return $this->send(new CreateDeliveryRequest($venueId, $dto))->dto();
    }

    // --- Venueless endpoints ---

    /**
     * @throws WoltDriveException
     */
    public function getDeliveryFee(
        string $merchantId,
        GetDeliveryFeeDTO $dto,
    ): DeliveryFeeResponseDTO {
        return $this->send(new GetDeliveryFeeRequest($merchantId, $dto))->dto();
    }

    /**
     * @throws WoltDriveException
     */
    public function createDeliveryOrder(
        string $merchantId,
        CreateDeliveryOrderDTO $dto,
    ): VenuelessDeliveryOrderResponseDTO {
        return $this->send(new CreateDeliveryOrderRequest($merchantId, $dto))->dto();
    }

    // --- Available venues ---

    /**
     * @throws WoltDriveException
     */
    public function getAvailableVenues(
        string $merchantId,
        GetAvailableVenuesDTO $dto,
    ): AvailableVenuesResponseDTO {
        return $this->send(new GetAvailableVenuesRequest($merchantId, $dto))->dto();
    }

    // --- Live order management ---

    /**
     * @throws WoltDriveException
     */
    public function cancelOrder(
        string $woltOrderReferenceId,
        CancelOrderDTO $dto,
    ): CancelOrderResponseDTO {
        return $this->send(new CancelOrderRequest($woltOrderReferenceId, $dto))->dto();
    }

    /**
     * @throws WoltDriveException
     */
    public function getHandshakeDelivery(
        string $woltOrderReferenceId,
    ): HandshakeDeliveryResponseDTO {
        return $this->send(new GetHandshakeDeliveryRequest($woltOrderReferenceId))->dto();
    }

    // --- Delivery areas ---

    /**
     * @throws WoltDriveException
     */
    public function getDeliveryAreas(string $merchantId): DeliveryAreasResponseDTO
    {
        return $this->send(new GetDeliveryAreasRequest($merchantId))->dto();
    }

    // --- Webhook management ---

    /**
     * @throws WoltDriveException
     */
    public function createWebhook(
        string $merchantId,
        CreateWebhookDTO $dto,
    ): WebhookResponseDTO {
        return $this->send(new CreateWebhookRequest($merchantId, $dto))->dto();
    }

    /**
     * @throws WoltDriveException
     */
    public function listWebhooks(string $merchantId): WebhooksListResponseDTO
    {
        return $this->send(new ListWebhooksRequest($merchantId))->dto();
    }

    /**
     * @throws WoltDriveException
     */
    public function getWebhook(
        string $merchantId,
        string $webhookId,
    ): WebhookResponseDTO {
        return $this->send(new GetWebhookRequest($merchantId, $webhookId))->dto();
    }

    /**
     * @throws WoltDriveException
     */
    public function updateWebhook(
        string $merchantId,
        string $webhookId,
        UpdateWebhookDTO $dto,
    ): WebhookResponseDTO {
        return $this->send(new UpdateWebhookRequest($merchantId, $webhookId, $dto))->dto();
    }

    /**
     * @throws WoltDriveException
     */
    public function deleteWebhook(
        string $merchantId,
        string $webhookId,
    ): void {
        $this->send(new DeleteWebhookRequest($merchantId, $webhookId));
    }

    public function resolveBaseUrl(): string
    {
        if ($this->stageEnv) {
            return self::BASE_STAGE_URL;
        }

        return self::BASE_PROD_URL;
    }

    public function getRequestException(Response $response, ?Throwable $senderException): ?Throwable
    {
        $errorResponse = ErrorResponseDTO::fromResponse($response);

        return new WoltDriveException($errorResponse);
    }

    public function isStageEnv(): bool
    {
        return $this->stageEnv;
    }

    public function getAuthDTO(): WoltDriveAuthDTO
    {
        return $this->authDto;
    }
}
