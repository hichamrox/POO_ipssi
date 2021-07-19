<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    public function index()
    {
        return view('dons.index');
    }

    public function store(Request $request)
    {
        Donation::create([
            'user_id' => Auth::id(),
            'money' => (int) $request->get('don'),
        ]);

        return redirect()->back();
    }
}
