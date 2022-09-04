<div>
 <!--membuat inputan-->   
 <textarea required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mt-4" rows="3"></textarea>

<!--tombol-->
<div class="flex justify-content">
    <!--tombol livewire untuk kriim, lalu buat function untuk createPost di http / livewore --->
    <button 
    wire::click="createPost"  
    class="bg-blue-600 px-4 py-2">
        <!--tombol kriim livewire-->
        Send
    </button>
</div>
</div>
