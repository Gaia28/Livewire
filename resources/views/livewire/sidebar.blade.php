<div class="h-screen w-60 bg-gray-900 text-white flex flex-col">
     <!-- Logo -->
    <div class="flex">
        <div class="shrink-0 flex items-center">
        <a href="{{ route('dashboard') }}" wire:navigate>
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
        </a>
    </div>
    <div class="p-4 text-2xl font-bold border-b border-gray-700">
        Painel 
    </div>
    </div>

    <nav class="flex-1 p-4 space-y-2">
        {{-- Dashboard --}}
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
            <span class="text-white  text-2xl">{{ __('Dashboard') }}</span>
        </x-nav-link>

    </nav>

    <nav class="flex-1 p-4 ">
        {{-- Fornecedores --}}
        <x-nav-link :href="route('create.fornecedores')" :active="request()->routeIs('create-fornecedores')" wire:navigate>
            <span class="text-white  text-2xl">{{ __('Fornecedores') }}</span>
        </x-nav-link>

    </nav>



</div>
