<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class checkoutController extends Controller
{
    public function checkout()
    {

        return view('user.layouts.checkout');
    }
    public function prosescheckout(Request $request)
    {
        // Generate nobukti
        $nobukti = 'J' . now()->format('YmdHis') . rand(1000, 9999);

        // Validate request
        $request->validate([
            'address' => 'required',
            'phone' => 'required',
        ]);

        $user = Auth::user();

        // Insert into tbjual
        
            DB::table('tbpelanggan')->insert([
                'code' => $nobukti,
                'name' => $user->name,
                'address' => $request->address,
                'phone' => $request->phone,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            return redirect('cart');
    }
}
