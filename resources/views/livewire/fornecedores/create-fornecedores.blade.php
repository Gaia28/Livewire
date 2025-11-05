<div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-semibold mb-4">Cadastrar Fornecedor</h2>

    @if (session('success'))
        <div class="mb-4 p-2 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="StoreFornecedor" class="space-y-4">
        
        <div>
            <label class="block font-medium text-sm text-gray-700">Nome</label>
            <input type="text" wire:model="name" class="w-full border-gray-300 rounded mt-1" />
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium text-sm text-gray-700">Email</label>
            <input type="email" wire:model="email" class="w-full border-gray-300 rounded mt-1" />
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        
        <div>
            <label class="block font-medium text-sm text-gray-700">Endereço</label>
            <input type="text" wire:model="address" class="w-full border-gray-300 rounded mt-1" />
            @error('address') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium text-sm text-gray-700">CNPJ</label>
            <input type="text" wire:model="cnpj" class="w-full border-gray-300 rounded mt-1" />
            @error('cnpj') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit"
            class="bg-gray-900 text-white px-4 py-2 rounded hover:bg-gray-700 transition">
            Salvar
        </button>
    </form>
</div>