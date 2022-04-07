<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anketa;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function submit(Request $req){
         
        $contact = new Anketa();
        $contact->user_id = Auth::id();
        $contact->name = $req->input('name');
        $contact->telephone = $req->input('telephone');
        $contact->abonement = $req->input('abonement');;
        $contact->save();
 
        return redirect()->route('home')->with('success', 'Сообщение было добавлено');
    }

    public function showByUser() {
        $contact = new Anketa;
        $data = [];
        $user_id = Auth::user()->id;
        $data = $contact->where('user_id', '=', $user_id)->get();

        return view('home', ['data' => $data ]);
    }

    public function deleteMessage($id) {
        Anketa::find($id)->delete();
        return redirect()->route('home')->with('success', 'Сообщение было удалено');
    }

}
