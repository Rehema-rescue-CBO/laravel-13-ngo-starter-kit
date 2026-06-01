<div class="p-6">
    <header class="mb-6">
        <flux:heading size="xl">{{ __('Add Partner') }}</flux:heading>
        <flux:subheading>{{ __('Fill in the details to create a new partner entry.') }}</flux:subheading>
    </header>

    <flux:card>
        <form wire:submit="save" class="space-y-6">
            <flux:input wire:model="name" :label="__('Name')" placeholder="{{ __('Enter partner name') }}" required />
            
            <flux:input wire:model="role" :label="__('Role')" placeholder="{{ __('e.g. Strategic Partner') }}" />

            <flux:input wire:model="website_url" :label="__('Website URL')" type="url" placeholder="https://..." />

            <flux:textarea wire:model="content" :label="__('Description')" placeholder="{{ __('Briefly describe this partner...') }}" />

            <div class="flex gap-2">
                <flux:spacer />
                <flux:button :href="route('admin.partners.index')" variant="ghost" wire:navigate>{{ __('Cancel') }}</flux:button>
                <flux:button type="submit" variant="primary">{{ __('Save Partner') }}</flux:button>
            </div>
        </form>
    </flux:card>
</div>