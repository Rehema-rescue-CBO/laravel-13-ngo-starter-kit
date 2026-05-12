<?php

namespace App\Livewire\Category;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteCategory(int $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        session()->flash('success', __('Category deleted successfully.'));
    }

    public function render()
    {
        return view('livewire.category.index', [
            'categories' => Category::query()
                ->when($this->search, fn($query) => $query->where('title', 'like', '%' . $this->search . '%'))
                ->latest()
                ->paginate(10),
        ]);
    }
}
