<?php

declare(strict_types=1);

namespace OrlovTech\DadataClient\DataTransferObjects;

final class CleanNameData
{
    public function __construct(
        public readonly string $result,
        public readonly string $surname,
        public readonly string $name,
        public readonly string $patronymic,
        public readonly string $gender,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['result'],
            $data['surname'],
            $data['name'],
            $data['patronymic'],
            $data['gender'],
        );
    }
}
