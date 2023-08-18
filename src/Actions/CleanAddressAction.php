<?php

declare(strict_types=1);

namespace OrlovTech\DadataClient\Actions;

use Illuminate\Support\Collection;
use OrlovTech\DadataClient\DataTransferObjects\CleanAddressData;
use OrlovTech\DadataClient\Requests\GetCleanAddressRequest;

final class CleanAddressAction
{
    /**
     * @return Collection<CleanAddressData>
     */
    public function __invoke(array $address): Collection
    {
        return app(GetCleanAddressRequest::class)->clean($address);
    }
}
