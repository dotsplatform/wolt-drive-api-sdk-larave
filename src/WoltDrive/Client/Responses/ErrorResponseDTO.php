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

    protected ?string $detail;

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
        return $this->detail;
    }

    public function getMessage(): string
    {
        return $this->reason ?? $this->detail ?? $this->error_code ?? 'Unknown error';
    }
}
