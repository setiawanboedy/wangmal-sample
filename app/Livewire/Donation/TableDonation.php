<?php

namespace App\Livewire\Donation;

use Livewire\Component;
use App\Models\Donation;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class TableDonation extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';
    
    public function editDonate(int $donate_id)
    {
        $this->dispatch('donate-update', id: $donate_id);
   
    }

    public function deleteDonate(int $donate_id)
    {
         $this->dispatch('delete', id: $donate_id);
        
    }

    #[On('confirm-delete')]
    public function deleteConfirm(int $donate_id){
        try {
            Donation::find($donate_id)->delete();
            $success = [
                "title"=>"Berhasil",
                "text"=>"Donasi berhasil dihapus",
                "icon"=>"success",
            ];
            $this->dispatch('refresh', data:$success);
        } catch (\Exception $e) {
            $error = [
                "title"=>"Gagal",
                "text"=>"Donasi gagal dihapus",
                "icon"=>"error",
            ];
            $this->dispatch('refresh', data: $error);
        }
    }
    
    #[On('refresh')]
    public function render()
    {
        $donations = Donation::orderBy('id', 'desc')->search($this->search)->paginate($this->perPage);
        
        return view('livewire.donation.table-donation',[
            'donations'=>$donations
        ]);
    }
}
