<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): CompanyResource
    {
        $user = $request->user();
        $companies = $user->companies()->paginate(10);

        return CompanyResource::make($companies);
    }

    public function show(Request $request, Company $company): CompanyResource
    {
        $user = $request->user();

        abort_unless(
            $user->companies()->whereKey($company->getKey())->exists(),
            404
        );

        return CompanyResource::make($company);
    }
}
