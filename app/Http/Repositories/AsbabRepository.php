<?php

namespace App\Repositories;

use App\Models\Asbab;
use App\Repositories\BaseRepository;

class AsbabRepository extends BaseRepository
{
    protected $fieldSearchable = [
        
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Asbab::class;
    }
}
