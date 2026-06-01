<?php

namespace App\Livewire\Partners;

use App\Models\Partner;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public Partner $partner;
    public $name = '';
    public $role = '';
    public $website_url = '';
    public $image;
    public $content = '';

    public function mount(Partner $partner)
    {
        $this->partner = $partner;
        $this->name = $partner->name;
        $this->role = $partner->role;
        $this->website_url = $partner->website_url;
        $this->content = $partner->content;
    }

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'role' => 'nullable|string|max:255',
            'website_url' => 'required|url',
            'image' => 'nullable|image|max:5120', // 5MB Max
            'content' => 'required|string',
        ];
    }

    public function save()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'role' => $this->role,
            'website_url' => $this->website_url,
            'content' => $this->content,
        ];

        if ($this->image) {
            $path = $this->image->store('partners', 'public');
            $data['image_url'] = Storage::url($path);
        }

        $this->partner->update($data);

        session()->flash('message', __('Partner updated successfully.'));

        return $this->redirect(route('admin.partners.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.partners.edit');
    }
}