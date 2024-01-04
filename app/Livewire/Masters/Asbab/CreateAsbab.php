<?php

namespace App\Livewire\Masters\Asbab;

use App\Models\Asbab;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use App\Repositories\AsbabRepository;

class CreateAsbab extends Component
{
    public $nip;

    #[Rule('required', message: 'Nama tidak boleh kosong')]
    #[Rule('string')]
    public $name;

    #[Rule('required', message: 'Jenis kelamin harus dipilih')]
    #[Rule('string')]
    public $gender;

    #[Rule('required', message: 'Nomor handphon harus diisi')]
    #[Rule('integer')]
    public $hp;

    #[Rule('required', message: 'Jumlah target tidak boleh kosong')]
    #[Rule('integer')]
    public $target;

    
    public function store()
    {
        $validated = $this->validate();
        
        try {
            Asbab::create($validated);

            $this->resetInput();

            $success = [
                "title"=>"Berhasil",
                "text"=>"Asbab berhasil ditambahkan",
                "icon"=>"success",
            ];
            $this->dispatch('refresh', data: $success);
        } catch (\Exception $e) {
            $error = [
                "title"=>"Gagal",
                "text"=>"Asbab gagal ditambahkan",
                "icon"=>"error",
            ];
            $this->dispatch('refresh', data: $error);
        }
    }

    
    public function resetInput()
    {
        $this->nip = NULL;
        $this->name = NULL;
        $this->gender = NULL;
        $this->hp = NULL;
        $this->target = NULL;
    }

    public function render()
    {
        return view('livewire.masters.asbab.create-asbab');
    }
}
