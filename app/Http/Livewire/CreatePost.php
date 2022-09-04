<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Console\View\Components\Alert;
use Livewire\Component;


class CreatePost extends Component
{
 
    //konten yang akan dicreate
    public $content;

    public function render()
    {
        return view('livewire.create-post');
    }

    public function createPost(){
  //membuat data(create)
  Post::create([
      "user_id" => Auth::id(),
      'content' => $this->content
  ]);

  $this->content = ""; //buat kalau memasukkan data tombol diklik, kolom kontent kembali dikosongkan
 
}
}
