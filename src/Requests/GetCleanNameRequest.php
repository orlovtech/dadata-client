<?php

declare(strict_types=1);

namespace OrlovTech\DadataClient\Requests;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use OrlovTech\DadataClient\DataTransferObjects\CleanNameData;

final class GetCleanNameRequest extends DadataRequest
{
    /**
     * @param array $name
     *
     * @return Collection<CleanNameData>
     */
    public function clean(array $name): Collection
    {
        $cleanName = Http::withHeaders($this->headers())
            ->post(
                $this->url('clean/name'),
                $name,
            )->json();

        return collect($cleanName)
            ->map(fn (array $data) => CleanNameData::fromArray($data));
    }
}
