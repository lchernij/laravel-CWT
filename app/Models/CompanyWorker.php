<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['company_id', 'user_id'])]
class CompanyWorker extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyWorkerFactory> */
    use HasFactory, SoftDeletes;

    function company()
    {
        return $this->belongsTo(Company::class);
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
