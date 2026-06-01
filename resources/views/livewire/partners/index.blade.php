<div class="p-6">
     <header class="mb-6 flex items-center justify-between">
        <div>
            <flux:heading size="xl">{{ __('Partners') }}</flux:heading>
            <flux:subheading>{{ __('Manage your partners Details') }}</flux:subheading>
        </div>

        <flux:button :href="route('admin.partners.create')" variant="primary" color="blue" wire:navigate class="cursor-pointer">
            {{ __('Add Partner') }}
        </flux:button>
    </header>

    {{-- Search --}}
    <div class="mb-4">
        <div class="relative">
            <input
                type="text"
                wire:model.live.debounce.300ms="search"
                class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                placeholder="{{ __('Search partners...') }}"
            />
            <div wire:loading wire:target="search" class="absolute right-3 top-2.5">
                <svg class="h-4 w-4 animate-spin text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h   4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </div>
        </div>
    </div>  
    @if (session()->has('message'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg flex items-center justify-between">
            {{ session('message') }}
            <button type="button" x-on:click="$el.parentElement.remove()" class="text-green-900 font-bold">&times;</button>
        </div>
    @endif  
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">      
        @forelse ($partners as $partner)
            <div wire:key="{{ $partner->id }}" class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4 flex flex-col items-center">
                <img src="{{ $partner->image_url }}" alt="{{ $partner->name }} Logo" class="w-24 h-24 object-contain mb-4">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-2">{{ $partner->name }}</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">{{ $partner->content }}</p>
                <div class="flex gap-2">
                    <flux:button icon="pencil-square" :href="route('admin.partners.edit', $partner)" variant="ghost" size="sm" wire:navigate class="cursor-pointer">
                        {{ __('Edit') }}
                    </flux:button>
                    <flux:button icon="trash" wire:click="openDeleteModal({{ $partner->id }})" variant="ghost" color="red" size="sm" class="cursor-pointer">
                        {{ __('Delete') }}
                    </flux:button>
                </div>
            </div>
        @empty
            <p class="col-span-full text-center text-gray-500">{{ __('No partners found.') }}</p>
        @endforelse
    </div>

    <!-- Delete Confirmation Modal -->
    <flux:modal name="delete-partner" variant="filled" class="min-w-[22rem]">
        <form wire:submit="confirmDelete" class="space-y-6">
            <div>
                <flux:heading size="lg">{{ __('Are you sure?') }}</flux:heading>
                <flux:subheading>
                    {{ __('This action cannot be undone. This will permanently delete the partner.') }}
                </flux:subheading>
            </div>

            <div class="flex gap-2">
                <flux:spacer />
                <flux:modal.close>
                    <flux:button variant="ghost">{{ __('Cancel') }}</flux:button>
                </flux:modal.close>
                <flux:button type="submit" variant="primary" color="red">{{ __('Delete Partner') }}</flux:button>
            </div>
        </form>
    </flux:modal>

    <div class="mt-6">
        {{ $partners->links() }}
    </div>  
</div>
