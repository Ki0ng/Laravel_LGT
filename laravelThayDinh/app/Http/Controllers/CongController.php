<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CongController extends Controller {
    public function tinhtong(Request $request) {
    //     $sum = $request->input('soA') + $request->input('soB');
    //     return view('sum', compact('sum')); 
    // }

        $soA = $request->input('soA');
        $soB = $request->input('soB');

        // Ensure inputs are numbers before performing addition
        $sum = (int)$soA + (int)$soB;

        return view('sum', compact('sum'));
    }
}
