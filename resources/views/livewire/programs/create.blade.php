<div class="p-6">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
    
    <style>
        .ql-toolbar.ql-snow {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            border-color: rgb(228 228 231 / 1); /* Zinc 200 */
        } :is(.dark .ql-toolbar.ql-snow) { border-color: rgb(63 63 70 / 1); background-color: rgb(39 39 42 / 1); }
        .ql-container.ql-snow {
            border-bottom-left-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
            border-color: rgb(228 228 231 / 1); /* Zinc 200 */
        } :is(.dark .ql-container.ql-snow) { border-color: rgb(63 63 70 / 1); }
    </style>

    <header class="mb-6">
        <flux:heading size="xl">{{ __('Add Program') }}</flux:heading>
        <flux:subheading>{{ __('Create a new program or initiative for your organization.') }}</flux:subheading>
    </header>

    <form wire:submit="save" class="space-y-6 max-w-2xl">
        <flux:field>
            <flux:label>{{ __('Title') }}</flux:label>
            <flux:input wire:model="title" placeholder="{{ __('Enter program title') }}" />
            <flux:error name="title" />
        </flux:field>

        <flux:field>
            <flux:label>{{ __('Tag') }}</flux:label>
            <flux:select wire:model="tag_id" placeholder="{{ __('Select a tag') }}">
                @foreach($tags as $tag)
                    <flux:select.option value="{{ $tag->id }}">{{ $tag->name }}</flux:select.option>
                @endforeach
            </flux:select>
            <flux:error name="tag_id" />
        </flux:field>

        <flux:field>
            <flux:label>{{ __('Program Image') }}</flux:label>
            <flux:input type="file" wire:model="image" />
            <flux:error name="image" />
            
            @if ($image)
                <div class="mt-2">
                    <img src="{{ $image->temporaryUrl() }}" class="w-48 h-32 object-cover rounded-lg border border-zinc-200 dark:border-zinc-700">
                </div>
            @endif
        </flux:field>

        <flux:field>
            <flux:label>{{ __('Content') }}</flux:label>
            <div wire:ignore>
                <div x-data="{ content: @entangle('content') }" x-init="
                    const quill = new Quill($refs.quillEditor, {
                        theme: 'snow',
                        placeholder: '{{ __('Provide details about the program...') }}'
                    });
                    quill.on('text-change', () => {
                        content = quill.root.innerHTML;
                    });
                ">
                    <div x-ref="quillEditor" class="h-80 bg-white dark:bg-zinc-900 text-zinc-900 dark:text-zinc-100">{!! $content !!}</div>
                </div>
            </div>
            <flux:error name="content" />
        </flux:field>

        <div class="flex gap-2">
            <flux:spacer />
            <flux:button :href="route('admin.programs.index')" variant="ghost" wire:navigate>{{ __('Cancel') }}</flux:button>
            <flux:button type="submit" variant="primary" color="blue">{{ __('Create Program') }}</flux:button>
        </div>
    </form>
</div>
