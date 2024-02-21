<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'company_id',
        'location',
        'salary'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}

