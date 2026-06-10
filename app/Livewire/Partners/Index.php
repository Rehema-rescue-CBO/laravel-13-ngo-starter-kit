<?php

namespace App\Livewire\Partners;

use App\Models\Partner;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $partnerIdBeingDeleted = null;

    public function openDeleteModal($id)
    {
        $this->partnerIdBeingDeleted = $id;
        $this->dispatch('modal-show', name: 'delete-partner');
    }

    public function confirmDelete()
    {
        if ($this->partnerIdBeingDeleted) {
            Partner::find($this->partnerIdBeingDeleted)?->delete();
            session()->flash('danger', __('Partner deleted successfully.'));
        }

        $this->dispatch('modal-hide', name: 'delete-partner');
        $this->partnerIdBeingDeleted = null;
    }

    public function render()
    {
        return view('livewire.partners.index', [
            'partners' => Partner::query()
                ->when($this->search, fn($query) => $query->where('name', 'like', '%' . $this->search . '%'))
                ->latest()
                ->paginate(12),
        ]);
    }
}
