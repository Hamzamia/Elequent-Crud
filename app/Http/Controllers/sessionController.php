<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function getSessionData(Request $request)
    {
        if ($request->session()->has('name')) {
            echo $request->session()->get('name');
        } else {
            echo "session has no data";
        }
    }
    public function storeSessionData(Request $request)
    {
        $request->session()->put('name', 'hamza is stored');
        echo 'hamza stored successfully';
    }

    public function deleteSession(Request $request)
    {
        $request->session()->forget('name');
        echo 'data hsa been deleted from session';
    }
}