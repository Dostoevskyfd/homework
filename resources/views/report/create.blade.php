<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Создайте нового заявления')}}
        </h2>
    </x-slot>

  


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="md:container md:mx-auto  flex flex-wrap m-10 md:space-x-8 justify-between">
    <form action="{{ route('reports.store') }}" method="post">
    @csrf 
    <div>
        <x-input-label for="number":value="_('Номер автомобиля')" />
        <x-text-input id="number" class="block mt-1" type="text" name="number" required />
        <x-input-error :messages="$errors->get('number')" class="mt-2"/>
    </div>
    <div>
        <x-input-label for="description":value="_('Номер автомобиля')" />
        <x-textarea id="description" class="block mt-1" rows="10" cols="35" name="description" />
        <x-input-error :messages="$errors->get('description')" class="mt-2"/>
    </div>
    <div>
        <x-primary-button class="ms-3">
            {{_('Создать')}}
        </x-primary-button>
    </div>


    </form>
        
        </div>
    </div>
</div>
</x-app-layout>

