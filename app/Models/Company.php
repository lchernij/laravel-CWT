<?php

namespace App\Models;

use Database\Factories\CompanyFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['name'])]
class Company extends Model
{
    /** @use HasFactory<CompanyFactory> */
    use HasFactory, SoftDeletes;

    /**
     * @return HasMany<CompanyWorkingSite, $this>
     */
    public function companyWorkingSites(): HasMany
    {
        return $this->hasMany(CompanyWorkingSite::class);
    }

    /**
     * @return HasManyThrough<User, CompanyWorker, $this>
     */
    public function users(): HasManyThrough
    {
        return $this->hasManyThrough(User::class, CompanyWorker::class);
    }
}
