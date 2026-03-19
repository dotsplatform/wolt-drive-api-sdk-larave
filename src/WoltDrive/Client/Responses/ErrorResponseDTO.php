<?php
/**
 * Description of ErrorResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\WoltDrive\Client\Responses;

class ErrorResponseDTO extends WoltDriveResponseDTO
{
    protected ?string $error_code;

    protected ?string $reason;

    protected ?string $details;

    protected string|array|null $detail;

    public function getErrorCode(): ?string
    {
        return $this->error_code;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function getDetail(): ?string
    {
        if (is_array($this->detail)) {
            return $this->formatDetailFromArray($this->detail);
        }

        return $this->detail;
    }

    public function getMessage(): string
    {
        return $this->reason ?? $this->getDetail() ?? $this->error_code ?? 'Unknown error';
    }

    private function formatDetailFromArray(array $detail): ?string
    {
        $messages = array_filter(
            array_map(fn (array $item) => $item['msg'] ?? null, $detail),
        );

        if (empty($messages)) {
            return null;
        }

        return implode('; ', $messages);
    }
}
