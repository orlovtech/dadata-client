<?php

declare(strict_types=1);

namespace OrlovTech\DadataClient\Actions;

use Illuminate\Support\Collection;
use OrlovTech\DadataClient\DataTransferObjects\CleanNameData;
use OrlovTech\DadataClient\Requests\GetCleanNameRequest;

final class CleanNameAction
{
    /**
     * @param array $name
     *
     * @return Collection<CleanNameData>
     */
    public function __invoke(array $name): Collection
    {
        return app(GetCleanNameRequest::class)->clean($name);
    }
}
