<?php

namespace App\Livewire\Masters\Asbab;

use App\Models\Asbab;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Repositories\AsbabRepository;

class TableAsbab extends Component
{
    
    public function editAsbab(int $asbab_id)
    {
        $this->dispatch('asbab-update', id: $asbab_id);
   
    }

    public function deleteAsbab(int $asbab_id)
    {
         $this->dispatch('delete', id: $asbab_id);
        
    }

    #[On('confirm-delete')]
    public function deleteConfirm(int $asbab_id){
        try {
            $asbab = Asbab::find($asbab_id)->delete();
            session()->flash('success','Asbab berhasil dihapus');
            $success = [
                "title"=>"Berhasil",
                "text"=>"Asbab berhasil dihapus",
                "icon"=>"success",
            ];
            $this->dispatch('refresh', data:$success);
        } catch (\Exception $e) {
            $error = [
                "title"=>"Gagal",
                "text"=>"Asbab gagal dihapus",
                "icon"=>"error",
            ];
            $this->dispatch('refresh', data: $error);
        }
    }
    
    #[On('refresh')]
    public function render()
    {
        $asbabs = Asbab::orderBy('id', 'desc')->get();
        return view('livewire.masters.asbab.table-asbab',[
            'asbabs' => $asbabs
        ]);
    }
}
