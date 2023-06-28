<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Link extends Controller
{

    // public $slug;

    // public function mount($slug)
    // {
    //     $this->slug = $slug;
    // }

    public function render($slug)
    {
        $data = DB::table('requests')
        ->join('bdrs', 'requests.bdrs_id', '=', 'bdrs.id_bdrs')
        ->join('users', 'requests.user_id', '=', 'users.id')
        ->where('requests_status', '=', '1')
        ->where('requests_slug', '=', $slug)
        ->first();
        if($data){
            return view('livewire.link', compact('data'));
        }else{
           return redirect()->route('index');
        }
    }

    public function ps()
    {
        $data = DB::table('settings')
        ->where('id', '=', 1)
        ->first();
        return redirect()->intended($data->playstore);
    }
}
