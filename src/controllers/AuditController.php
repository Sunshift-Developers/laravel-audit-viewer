<?php

namespace Sunshift\Audits\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use OwenIt\Auditing\Models\Audit;
use Illuminate\Support\Facades\DB;



class AuditController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $audits = Audit::where('user_id', 'like','%'.$search.'%')
                        ->orWhere('auditable_type', 'like','%'.$search.'%')
                        ->orWhere('auditable_id', 'like','%'.$search.'%')
                        ->paginate(20);

        $audits->appends(['search' => $search]);
        $count = $audits->total();

        return view('audits::audits.index', compact('audits','count'));

    }
 


}