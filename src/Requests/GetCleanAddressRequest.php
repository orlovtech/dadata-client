<?php

declare(strict_types=1);

namespace OrlovTech\DadataClient\Requests;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use OrlovTech\DadataClient\DataTransferObjects\CleanAddressData;

final class GetCleanAddressRequest extends DadataRequest
{
    /**
     * @param array $address
     *
     * @return Collection<CleanAddressData>
     */
    public function clean(array $address): Collection
    {
        $cleanAddress = Http::withHeaders($this->headers())
            ->post(
                $this->url('clean/address'),
                $address,
            )->json();

        return collect($cleanAddress)
            ->map(fn (array $data) => CleanAddressData::fromArray($data));
    }
}
