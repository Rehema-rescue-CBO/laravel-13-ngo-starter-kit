<div class="p-6">
    <header class="mb-6">
        <flux:heading size="xl">{{ __('Add Partner') }}</flux:heading>
        <flux:subheading>{{ __('Fill in the details to create a new partner entry.') }}</flux:subheading>
    </header>

    <flux:card>
        <form wire:submit="save" class="space-y-6">
            <flux:input wire:model="name" :label="__('Name')" placeholder="{{ __('Enter partner name') }}"  />
            
            <flux:input wire:model="role" :label="__('Role')" placeholder="{{ __('e.g. Strategic Partner') }}"  />

            <flux:input wire:model="website_url" :label="__('Website URL')" type="url" placeholder="https://..."  />

            <div>
                <flux:label>{{ __('Partner Logo') }}</flux:label>
                <input type="file" wire:model="image" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 dark:file:bg-gray-700 dark:file:text-gray-200" />
                <flux:error name="image" />
            </div>

            @if ($image)
                <div class="mt-4">
                    <flux:label>{{ __('Logo Preview') }}</flux:label>
                    <div class="mt-2 relative inline-block">
                        <img src="{{ $image->temporaryUrl() }}" class="h-32 w-auto rounded-lg object-cover shadow-sm border border-gray-200 dark:border-gray-700">
                        <button type="button" wire:click="$set('image', null)" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full p-1 shadow-lg hover:bg-red-600">
                            <flux:icon icon="x-mark" variant="mini" />
                        </button>
                    </div>
                </div>
            @endif

            <flux:textarea wire:model="content" :label="__('Description')" placeholder="{{ __('Briefly describe this partner...') }}"  />

            <div class="flex gap-2">
                <flux:spacer />
                <flux:button :href="route('admin.partners.index')" variant="ghost" wire:navigate>{{ __('Cancel') }}</flux:button>
                <flux:button type="submit" variant="primary">{{ __('Save Partner') }}</flux:button>
            </div>
        </form>
    </flux:card>
</div>
