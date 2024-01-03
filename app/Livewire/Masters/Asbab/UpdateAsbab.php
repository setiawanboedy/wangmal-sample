<?php

namespace App\Livewire\Masters\Asbab;

use App\Models\Asbab;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use App\Repositories\AsbabRepository;

class UpdateAsbab extends Component
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

    public $asbab_id;

    #[On('asbab-update')] 
    public function getAsbabEdit($id)
    {
        $asbab = Asbab::find($id);
        $this->nip = $asbab->nip;
        $this->name = $asbab->name;
        $this->gender = $asbab->gender;
        $this->hp = $asbab->hp;
        $this->target = $asbab->target;
        $this->asbab_id = $id;
    }

    public function update()
    {
        $validated = $this->validate();

        try {
            Asbab::where('id',$this->asbab_id)->update($validated);

            session()->flash('success','Asbab berhasil diupdate');
            $success = [
                "title"=>"Berhasil",
                "text"=>"Asbab berhasil diupdate",
                "icon"=>"success",
            ];
            $this->dispatch('refreshAsbab', data: $success);
        } catch (Exception $e) {
            $error = [
                "title"=>"Gagal",
                "text"=>"Asbab gagal diupdate",
                "icon"=>"error",
            ];
            $this->dispatch('refreshAsbab', data: $error);
        }
    }
    public function render()
    {
        return view('livewire.masters.asbab.update-asbab');
    }
}
