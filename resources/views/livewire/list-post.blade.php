<div class="bg-white p-4"> 

{{ $updateId }}
   <!--Tampilkan post data ke dashboard--->
@foreach($posts as $p)
{{ $p->content }}
@endforeach

<button 
wire:click="showUpdateContent({{ $posts->id }})"
class="p-2 bg-teal-400 hover:bg-te text-white rounded-md">Edit</button>
</div>

<div>

@if ($updateId !== $posts->id)
<span>{{ $posts->content }}</span>
@endif

@if ($updateId === $posts->id)
 <!--membuat inputan edit-->   
 <textarea required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300
  placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500
   focus:z-10 sm:text-sm mt-4" rows="3"></textarea>
   <button 
    wire::click="update({{ $post->id }})"  
    class="bg-blue-600 px-4 py-2">
        <!--tombol kriim livewire-->
        Edit
    </button>
    <!--hapus dan konfirmasi hapus, event dibawah jika tekan cancel data tidak bisa dihapus -->
    <button 
    onclick="return confirm('yakin?') || event.stopImmediatePropagation"
    wire::click="delete({{ $post->id }})"  
    class="bg-red-600 px-4 py-2">
        <!--tombol kriim livewire-->
        Delete
    </button>
</div>