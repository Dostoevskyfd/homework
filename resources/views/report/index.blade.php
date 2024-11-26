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
        
            <p class="text-black">{{$report->number}}</p>
            <p class="text-black">{{$report->description}}</p>
            <p class="text-black">{{$report->name}}</p>
            
           
        @endforeach
        </div>
        </div>
    </div>
</div>
</x-app-layout>


@endsection()