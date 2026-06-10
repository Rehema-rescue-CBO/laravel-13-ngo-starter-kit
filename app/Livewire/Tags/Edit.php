<?php

namespace App\Livewire\Tags;

use App\Models\Tag;
use Illuminate\Support\Str;
use Livewire\Component;

class Edit extends Component
{
    public Tag $tag;
    public $name = '';

    public function mount(Tag $tag)
    {
        $this->tag = $tag;
        $this->name = $tag->name;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255|unique:tags,name,' . $this->tag->id,
        ]);

        $this->tag->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);

        session()->flash('message', __('Tag updated successfully.'));
        return redirect()->route('admin.tags.index');
    }

    public function render()
    {
        return view('livewire.tags.edit');
    }
}
