<?php

namespace App\Http\Controllers;//DB is NOT in this namespace

use Illuminate\Http\Request;
use DB;//this line added to allow the use of DB

class InvoicesController extends Controller
{
    public function index(Request $request) {//the function that is called, must return a view (and maybe other variables)
        
        $query = DB::table('invoices')//allows you to manipulate tables
            ->join('customers', 'invoices.CustomerId', '=', 'customers.CustomerId');//command to join tables

        if ($request->query('search')) {//if 'search' query parameter exists, do something
            $query->where('FirstName', '=', $request->query('search'));//query is the method to access query variables
            $query->orWhere('LastName', '=', $request->query('search'));
        }

    

        $invoices = $query->get();

        return view('invoices', [
            'invoices' => $invoices,
            'search' => $request->query('search')
        ]);
    }
}
