<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Status;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Report extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function status():BelongsTo
    {
        return $this->belongsTo(Status::class,'statuses_id','id');
    }
    
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,'users_id','id');
    }
}
