<?php

namespace App\Livewire\Masters\Program;

use App\Models\Program;
use Livewire\Component;
use Livewire\Attributes\Rule;

class CreateProgram extends Component
{
    #[Rule('required', message: 'Program tidak boleh kosong')]
    #[Rule('string')]
    public $name;

    public function store(){
        $validated = $this->validate();
        
        try {
            Program::create($validated);

            $success = [
                "title"=>"Berhasil",
                "text"=>"Program berhasil ditambahkan",
                "icon"=>"success",
            ];
            $this->dispatch('refresh', data: $success);
        } catch (\Exception $e) {
            $error = [
                "title"=>"Gagal",
                "text"=>"Program gagal ditambahkan",
                "icon"=>"error",
            ];
            $this->dispatch('refresh', data: $error);
        }
    }

    public function render()
    {
        return view('livewire.masters.program.create-program');
    }
}
