<?php

declare(strict_types=1);

namespace OrlovTech\DadataClient\Requests;

abstract class DadataRequest
{
    public function __construct(
        private readonly string $uri,
        private readonly string $apiKey,
        private readonly string $secretKey,
    ) {
    }

    protected function headers(array $extra = []): array
    {
        return [
            "Content-Type"  => "application/json",
            "Accept"        => "application/json",
            "Authorization" => "Token " . $this->apiKey,
            "X-Secret"      => $this->secretKey,
            ...$extra,
        ];
    }

    protected function url(string $path): string
    {
        return $this->uri . '/' . $path;
    }
}
