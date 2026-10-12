<?php

namespace App\Models;

use Database\Factories\WorkerAttendanceWorkingSiteFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['worker_id', 'company_working_site_id', 'attendance_date', 'attendance_time', 'attendance_status'])]
class WorkerAttendanceWorkingSite extends Model
{
    /** @use HasFactory<WorkerAttendanceWorkingSiteFactory> */
    use HasFactory, SoftDeletes;

    /** @return BelongsTo<User, $this> */
    public function worker(): BelongsTo
    {
        return $this->belongsTo(User::class, 'worker_id', 'id');
    }

    /** @return BelongsTo<CompanyWorkingSite, $this> */
    public function companyWorkingSite(): BelongsTo
    {
        return $this->belongsTo(CompanyWorkingSite::class, 'company_working_site_id');
    }
}
