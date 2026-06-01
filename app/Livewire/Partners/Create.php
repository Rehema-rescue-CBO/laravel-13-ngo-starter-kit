<?php

namespace App\Livewire\Partners;

use App\Models\Partner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name = '';
    public $role = '';
    public $website_url = '';
    public $image;
    public $content = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'role' => 'nullable|string|max:255',
        'website_url' => 'required|url',
        'image' => 'required|image|max:5120', // 5MB Max
        'content' => 'required|string',
    ];

    public function save()
    {
        $this->validate();

        $path = $this->image->store('partners', 'public');

        Partner::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'role' => 'partner',
            'website_url' => $this->website_url,
            'image_url' => Storage::url($path),
            'content' => $this->content,
            'user_id' => Auth::id(),
        ]);

        session()->flash('message', __('Partner created successfully.'));

        return $this->redirect(route('admin.partners.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.partners.create');
    }
}
