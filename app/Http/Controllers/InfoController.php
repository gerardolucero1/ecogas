<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function update(Request $request)
    {
        $info = Info::find(1);
        $info->registers = $request->registers;
        $info->prizes = $request->prizes;

        $info->save();
    }
}
