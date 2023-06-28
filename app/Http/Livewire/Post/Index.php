<?php

namespace App\Http\Livewire\Post;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{

    use WithPagination;

    /**
     * destroy function
     */

    public function render()
    {
        $data['user'] = DB::table('users')->count();
        $data['kantong'] = DB::table('requests')->sum('requests_jumlah');
        $data['req'] = DB::table('requests')->count();
        $data['news'] = DB::table('news')
        ->join('users', 'news.user_id', '=', 'users.id')
        ->get();
        return view('livewire.index', compact('data'));
    }

}
