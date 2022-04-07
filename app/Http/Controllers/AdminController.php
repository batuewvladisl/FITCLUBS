<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Anketa;

class AdminController extends Controller
{
    public function open() {
        $this->authorize('admin');
        return view('admin');
    }
    
    public function showAll() {
        return view('admin', ['data' => Anketa::all()]);
    }

    public function deleteMessage($id) {
        Anketa::find($id)->delete();
        return redirect()->route('admin')->with('success', 'Сообщение было удалено');
    }
}
