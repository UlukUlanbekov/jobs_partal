<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'positions';

    protected $fillable = ['title', 'description', 'company_id'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}