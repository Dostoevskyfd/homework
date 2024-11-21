@extends('layouts.main')
@section('contnet')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Список заявляний')}}
        </h2>
    </x-slot>

  


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div >
        <div class="md:container md:mx-auto  flex flex-wrap m-10 md:space-x-8 justify-between">
@foreach ($reports as $report)

<p>{{$report->created_at}}</p>
<p>{{$report->number}}</p>
<p>{{$report->description}}</p>
<p>{{$report->name}}</p>

@endforeach


<div class="container">
    <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Создать новый отчет</h1>

    <form method="POST" action="{{ route('report.store') }}">
        @csrf
        <div class="mb-4">
        <p class="block text-gray-700 font-bold mb-2">Номер:</p>
        <input type="text" id="number" name="number" placeholder="номер" required
            class="border border-gray-300 rounded-lg p-2">
    </div>
    <div class="mb-4">
        <p class="block text-gray-700 font-bold mb-2">Описание:</p>
        <textarea id="description" name="description" placeholder="описание" required class="border border-gray-300 rounded-lg p-2 "></textarea>
    </div>
        <button type="submit" class="border-2">Создать</button>
    </form>
</div>
</div>
        </div>
    </div>
</div>
</x-app-layout>


@endsection()