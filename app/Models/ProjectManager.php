<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectManager extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function basicInformations()
    {
        return $this->hasMany(BasicInformation::class);
    }
}
