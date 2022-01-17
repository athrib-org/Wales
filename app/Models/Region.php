<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function local()
    {
        return $this->belongsTo(Local::class);
    }

    public function basicInformations()
    {
        return $this->hasMany(BasicInformation::class);
    }
}
