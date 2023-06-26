<?php

namespace App\Http\Livewire\Post;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Artikel extends Component
{

    use WithPagination;

    /**
     * destroy function
     */

     public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $data['news'] = DB::table('news')
        ->where('news.slug', '=', $this->slug)
        ->join('users', 'news.user_id', '=', 'users.id')
        ->first();
        $data['newslist'] = DB::table('news')
        ->join('users', 'news.user_id', '=', 'users.id')
        ->orderBy('news.news_created', 'DESC')
        ->limit(3)
        ->get();
        return view('livewire.artikel', compact('data'));
    }
}
