<?php

namespace App\Http\Livewire\Post;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class privacypolicy extends Component
{
  
    /**
     * destroy function
     */

    public function render()
    {
        $data = DB::table('settings')
        ->where('id', '=', 1)
        ->first();
        return view('livewire.privacypolicy', compact('data'));
    }
}
