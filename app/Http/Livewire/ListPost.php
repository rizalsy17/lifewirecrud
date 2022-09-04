<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ListPost extends Component
{
//
public $updateId = 0; 
//isi content saat ini
public $content = 0;
    public function render()
    {
        //menampilkan post
        return view('livewire.list-post', [
        "posts" => Post::latest()->get()
        ]);   
    }
//butuh id untuk identitas yang diedit
public function showUpdateContent($PostId){
//content yang sebelumnya ditampilkan sebelum diedit pada textarea
    $posts = Post::find($PostId);
$this->content = $posts->content;
    $this->updateId = $PostId;
}

public function update($PostId){
    $posts = Post::find($PostId);
    $posts->content = $this->content;
    //save
    $posts->save();
//menutup 
$this->updateId = 0;
}
public function delete($PostId){
    $posts = Post::find($PostId);
    $posts->delete();
}

}
