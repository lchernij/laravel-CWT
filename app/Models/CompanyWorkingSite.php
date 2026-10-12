<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['company_id', 'name', 'address', 'city', 'state', 'zip_code', 'country', 'location'])]
class CompanyWorkingSite extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyWorkingSiteFactory> */
    use HasFactory, SoftDeletes;
}
