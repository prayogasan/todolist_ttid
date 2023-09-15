<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\Post\PostService;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Post extends Component
{
    use LivewireAlert;
    public $name;
    public $activity;

    public function store(PostService $postService)
    {
        $this->validate([
            'name' => 'required|string|min:5',
            'activity' => 'required|string|min:5',
        ]);

        $data = [
            'name'      => $this->name,
            'activity'  => $this->activity,
        ];
    
        $postService->create($data);
        $this->alert('success', 'Data Berhasil Disimpan:)');
        $this->resetForms();
    }

    public function delete(PostService $postServices, $id){
        // Melakukan penghapusan data menggunakan PostService
        $kegiatans = $postServices->delete($id);
        $this->alert('success', 'Data Berhasil Dihapus Teman');
    
    }

    public function resetForms(){
        
        $this->name = "";
        $this->activity = "";

    }

    public function render(PostService $postServices)
    {
        $kegiatans = $postServices->getAll();
        return view('livewire.post', compact('kegiatans'))->extends('layouts.app')->section('content');
    }

}