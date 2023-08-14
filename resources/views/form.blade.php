<x-guest-layout>
    <form method="POST" action="{{ route('product.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" value="name" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"  required autofocus autocomplete="username" />
        </div>

        <!-- description -->
        <div>
            <x-input-label for="name" value="description" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="name"  required autofocus autocomplete="username" />
        </div>


        <div class="flex items-center justify-between mt-4">
            <x-primary-button class="ml-3">
                {{ 'Create Product' }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>