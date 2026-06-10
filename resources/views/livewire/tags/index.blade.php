<div class="p-6">
    <header class="mb-6 flex items-center justify-between">
        <div>
            <flux:heading size="xl">{{ __('Tags') }}</flux:heading>
            <flux:subheading>{{ __('Manage tags for your programs and blog posts.') }}</flux:subheading>
        </div>

        <flux:button :href="route('admin.tags.create')" variant="primary" color="blue" wire:navigate>
            {{ __('Add Tag') }}
        </flux:button>
    </header>

    <div class="mb-4">
        <flux:input wire:model.live.debounce.300ms="search" icon="magnifying-glass" placeholder="{{ __('Search tags...') }}" />
    </div>

    @if (session()->has('message'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg flex items-center justify-between">
            {{ session('message') }}
            <button type="button" x-on:click="$el.parentElement.remove()" class="text-green-900 font-bold">&times;</button>
        </div>
    @endif

    <div class="bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden">
        <flux:table>
            <flux:column>{{ __('Name') }}</flux:column>
            <flux:column>{{ __('Slug') }}</flux:column>
            <flux:column>{{ __('Programs') }}</flux:column>
            <flux:column>{{ __('Created At') }}</flux:column>
            <flux:column></flux:column>

            @forelse ($tags as $tag)
                <flux:row :key="$tag->id">
                    <flux:cell class="font-medium text-zinc-900 dark:text-white">{{ $tag->name }}</flux:cell>
                    <flux:cell>{{ $tag->slug }}</flux:cell>
                    <flux:cell>
                        <flux:badge size="sm" color="zinc" inset="left">{{ $tag->programs_count }}</flux:badge>
                    </flux:cell>
                    <flux:cell>{{ $tag->created_at->format('M d, Y') }}</flux:cell>
                    <flux:cell>
                        <div class="flex justify-end gap-2">
                            <flux:button icon="pencil-square" :href="route('admin.tags.edit', $tag)" variant="ghost" size="sm" wire:navigate />
                            <flux:button icon="trash" wire:click="openDeleteModal({{ $tag->id }})" variant="ghost" color="red" size="sm" />
                        </div>
                    </flux:cell>
                </flux:row>
            @empty
                <flux:row>
                    <flux:cell colspan="5" class="text-center py-8 text-zinc-500">{{ __('No tags found.') }}</flux:cell>
                </flux:row>
            @endforelse
        </flux:table>
    </div>

    <div class="mt-4">
        {{ $tags->links() }}
    </div>

    <flux:modal name="delete-tag" variant="filled" class="min-w-[22rem]">
        <form wire:submit="confirmDelete" class="space-y-6">
            <div>
                <flux:heading size="lg">{{ __('Delete Tag?') }}</flux:heading>
                <flux:subheading>{{ __('Are you sure you want to delete this tag? This may affect associated programs.') }}</flux:subheading>
            </div>
            <div class="flex gap-2">
                <flux:spacer />
                <flux:modal.close><flux:button variant="ghost">{{ __('Cancel') }}</flux:button></flux:modal.close>
                <flux:button type="submit" variant="primary" color="red">{{ __('Delete Tag') }}</flux:button>
            </div>
        </form>
    </flux:modal>
</div>
