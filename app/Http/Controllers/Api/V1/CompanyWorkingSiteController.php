<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyWorkingSiteResource;
use App\Models\Company;
use App\Models\CompanyWorkingSite;
use Illuminate\Http\Request;

class CompanyWorkingSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Company $company): CompanyWorkingSiteResource
    {
        $user = $request->user();

        abort_unless(
            $user->companies()->whereKey($company->getKey())->exists(),
            404
        );

        $companyWorkingSites = $company->companyWorkingSites()->paginate(10);

        return CompanyWorkingSiteResource::make($companyWorkingSites);
    }

    public function show(Request $request, Company $company, CompanyWorkingSite $companyWorkingSite): CompanyWorkingSiteResource
    {
        $user = $request->user();

        abort_unless(
            $user->companies()->whereKey($company->getKey())->exists(),
            404
        );

        return CompanyWorkingSiteResource::make($companyWorkingSite);
    }
}
