<?php

namespace App\Livewire\Donation;

use App\Models\Asbab;
use App\Models\Program;
use Livewire\Component;
use App\Models\Donation;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;

class UpdateDonation extends Component
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

    public $donate_id;

    #[On('donate-update')] 
    public function getAsbabEdit($id)
    {
        $donate = Donation::find($id);
        $this->name = $donate->name;
        $this->nominal = $donate->nominal;
        $this->gender = $donate->gender;
        $this->date = $donate->date;
        $this->program_id = $donate->program_id;
        $this->asbab_id = $donate->asbab_id;
        $this->donate_id = $id;
    }

    public function update()
    {
        $validated = $this->validate();

        try {
            Donation::where('id',$this->donate_id)->update($validated);

            $success = [
                "title"=>"Berhasil",
                "text"=>"Donasi berhasil diupdate",
                "icon"=>"success",
            ];
            $this->dispatch('refresh', data: $success);
        } catch (Exception $e) {
            $error = [
                "title"=>"Gagal",
                "text"=>"Donasi gagal diupdate",
                "icon"=>"error",
            ];
            $this->dispatch('refresh', data: $error);
        }
    }
    
    public function render()
    {
        $programs = Program::get();
        $asbabs = Asbab::get();
        return view('livewire.donation.update-donation',[
            'asbabs'=>$asbabs,
            'programs'=>$programs
        ]);
    }
}
