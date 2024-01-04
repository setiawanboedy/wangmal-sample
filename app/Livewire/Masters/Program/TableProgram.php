<?php

namespace App\Livewire\Masters\Program;

use App\Models\Program;
use Livewire\Component;
use Livewire\Attributes\On;

class TableProgram extends Component
{
    public function deleteProgram(int $program_id)
    {
         $this->dispatch('delete', id: $program_id);
        
    }

    #[On('confirm-delete')]
    public function deleteConfirm(int $program_id){
        try {
            $Program = Program::find($program_id)->delete();
            session()->flash('success','Program berhasil dihapus');
            $success = [
                "title"=>"Berhasil",
                "text"=>"Program berhasil dihapus",
                "icon"=>"success",
            ];
            $this->dispatch('refresh', data:$success);
        } catch (\Exception $e) {
            $error = [
                "title"=>"Gagal",
                "text"=>"Program gagal dihapus",
                "icon"=>"error",
            ];
            $this->dispatch('refresh', data: $error);
        }
    }
    
    #[On('refresh')]
    public function render()
    {
        $programs = Program::orderBy('id', 'desc')->get();
        return view('livewire.masters.program.table-program',[
            'programs'=>$programs
        ]);
    }
}
