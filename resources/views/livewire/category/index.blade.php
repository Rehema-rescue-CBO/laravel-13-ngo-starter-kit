<div class="p-6">
    <header class="mb-6 flex items-center justify-between">
        <div>
            <flux:heading size="xl">{{ __('Categories') }}</flux:heading>
            <flux:subheading>{{ __('Manage your blog categories.') }}</flux:subheading>
        </div>
        <div class="flex items-center gap-4">
            <flux:button 
                variant="primary" 
                size="sm" 
                x-on:click="document.documentElement.classList.toggle('dark')" 
                icon="moon" 
                aria-label="Toggle Dark Mode"
            />
            <flux:button :href="route('admin.categories.create')" variant="primary" color="blue" wire:navigate>
                {{ __('Add Category') }}
            </flux:button>
        </div>
    </header>

    <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div class="w-full max-w-md">
            <flux:input wire:model.live.debounce.300ms="search" icon="magnifying-glass" :placeholder="__('Search categories...')" clearable />
        </div>
    </div>

{{-- table --}}
<div class="overflow-x-auto rounded-2xl shadow-lg border border-gray-200">
    <table class="min-w-full divide-y divide-gray-200">
        
        <!-- Table Head -->
        <thead class="bg-gray-900 text-white">
            <tr>
                <th class="px-6 py-4 text-left text-sm font-semibold uppercase tracking-wider">
                    ID
                </th>
                <th class="px-6 py-4 text-left text-sm font-semibold uppercase tracking-wider">
                    Name
                </th>
                <th class="px-6 py-4 text-center text-sm font-semibold uppercase tracking-wider">
                    Action
                </th>
            </tr>
        </thead>

        <!-- Table Body -->
        <tbody class="divide-y divide-gray-200">
            
            <!-- Row 1 -->
            <tr class="bg-white hover:bg-gray-50 transition duration-200">
                <td class="px-6 py-4 text-sm text-gray-700 font-medium">
                    01
                </td>
                <td class="px-6 py-4 text-sm text-gray-700">
                    Kelvin Murimi
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center justify-center gap-3">

                        <!-- Edit Button -->
                        <button class="p-2 rounded-lg bg-blue-100 hover:bg-blue-200 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                 class="w-5 h-5 text-blue-600" 
                                 fill="none" 
                                 viewBox="0 0 24 24" 
                                 stroke="currentColor">
                                <path stroke-linecap="round" 
                                      stroke-linejoin="round" 
                                      stroke-width="2" 
                                      d="M11 5h2m-1-1v2m7.586 2.586a2 2 0 010 2.828l-9.172 9.172a4 4 0 01-1.414.943l-3.414 1.138 1.138-3.414a4 4 0 01.943-1.414l9.172-9.172a2 2 0 012.828 0z"/>
                            </svg>
                        </button>

                        <!-- Delete Button -->
                        <button class="p-2 rounded-lg bg-red-100 hover:bg-red-200 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                 class="w-5 h-5 text-red-600" 
                                 fill="none" 
                                 viewBox="0 0 24 24" 
                                 stroke="currentColor">
                                <path stroke-linecap="round" 
                                      stroke-linejoin="round" 
                                      stroke-width="2" 
                                      d="M6 7h12M9 7V4h6v3m-8 0l1 13h6l1-13"/>
                            </svg>
                        </button>

                    </div>
                </td>
            </tr>

            <!-- Row 2 -->
            <tr class="bg-gray-50 hover:bg-gray-100 transition duration-200">
                <td class="px-6 py-4 text-sm text-gray-700 font-medium">
                    02
                </td>
                <td class="px-6 py-4 text-sm text-gray-700">
                    Jane Doe
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center justify-center gap-3">

                        <button class="p-2 rounded-lg bg-blue-100 hover:bg-blue-200 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                 class="w-5 h-5 text-blue-600" 
                                 fill="none" 
                                 viewBox="0 0 24 24" 
                                 stroke="currentColor">
                                <path stroke-linecap="round" 
                                      stroke-linejoin="round" 
                                      stroke-width="2" 
                                      d="M11 5h2m-1-1v2m7.586 2.586a2 2 0 010 2.828l-9.172 9.172a4 4 0 01-1.414.943l-3.414 1.138 1.138-3.414a4 4 0 01.943-1.414l9.172-9.172a2 2 0 012.828 0z"/>
                            </svg>
                        </button>

                        <button class="p-2 rounded-lg bg-red-100 hover:bg-red-200 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                 class="w-5 h-5 text-red-600" 
                                 fill="none" 
                                 viewBox="0 0 24 24" 
                                 stroke="currentColor">
                                <path stroke-linecap="round" 
                                      stroke-linejoin="round" 
                                      stroke-width="2" 
                                      d="M6 7h12M9 7V4h6v3m-8 0l1 13h6l1-13"/>
                            </svg>
                        </button>

                    </div>
                </td>
            </tr>

        </tbody>
    </table>
</div>
{{-- end table --}}




   
</div>
