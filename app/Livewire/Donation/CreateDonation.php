<?php

namespace App\Livewire\Donation;

use App\Models\Asbab;
use App\Models\Program;
use Livewire\Component;
use App\Models\Donation;
use Livewire\Attributes\Rule;

class CreateDonation extends Component
{
    #[Rule('required', message: 'Nama tidak boleh kosong')]
    #[Rule('string')]
    public $name;

    #[Rule('required', message: 'Jenis kelamin harus dipilih')]
    public $gender;

    #[Rule('required', message: 'Program harus dipilih')]
    public $program_id;

    #[Rule('required', message: 'Asbab harus dipilih')]
    public $asbab_id;

    #[Rule('required', message: 'Tanggal harus diisi')]
    #[Rule('date')]
    public $date;

    #[Rule('required', message: 'Jumlah nominal tidak boleh kosong')]
    #[Rule('integer')]
    public $nominal;
    
    public function store()
    {
        $validated = $this->validate();
        
        try {
            Donation::create($validated);

            $success = [
                "title"=>"Berhasil",
                "text"=>"Donasi berhasil ditambahkan",
                "icon"=>"success",
            ];
            $this->dispatch('refresh', data: $success);
        } catch (\Exception $e) {
            $error = [
                "title"=>"Gagal",
                "text"=>"Donasi gagal ditambahkan",
                "icon"=>"error",
            ];
            $this->dispatch('refresh', data: $error);
        }
    }

    public function render()
    {
        $programs = Program::get();
        $asbabs = Asbab::get();
        return view('livewire.donation.create-donation',[
            'asbabs'=>$asbabs,
            'programs'=>$programs
        ]);
    }
}
