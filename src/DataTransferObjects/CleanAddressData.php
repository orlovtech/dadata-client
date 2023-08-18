<?php

declare(strict_types=1);

namespace OrlovTech\DadataClient\DataTransferObjects;

final class CleanAddressData
{
    public function __construct(
        public readonly string $result,
        public readonly string $postal_code,
        public readonly string $fias_id,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['result'],
            $data['postal_code'],
            $data['fias_id'],
        );
    }
}
