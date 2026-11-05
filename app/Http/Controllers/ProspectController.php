<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospect;
use App\Models\ProspectActivity;
use App\Models\Evidence;
use App\Models\PropertyCategory;
use App\Models\PointRule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProspecController extends Controller
{
    public function create()
    {
        $categories = PropertyCategory::all()
        $pointRules = PointRule::all()

        return view('prospect.create', compact('categories', 'pointRules'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'idproperty_categories' => 'required',

        ])
    }
}
