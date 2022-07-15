<?php

namespace App\Builders;

use Illuminate\Database\Eloquent\Builder;

class PropertyBuilder extends Builder
{
    public function rent()
    {
        return $this->where('listing_type', '=', 'Rent');
    }

    public function sale()
    {
        return $this->where('listing_type', '=', 'Sale');
    }
}
