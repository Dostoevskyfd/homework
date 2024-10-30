<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Reports;

class Status extends Model
{
    use HasFactory;

    public function report():HasMany
    {
        return $this->hasMany(Reports::class);
    }
}
