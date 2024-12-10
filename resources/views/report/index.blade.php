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
    <div class="">
    <form action="{{route('reports.create')}}">
        <button class="w-40 h-10 rounded-md bg-red-600 text-cyan-50" >Создать заявление</button>
    </form>
</div>
        <div >
        <div class="md:container md:mx-auto  flex flex-wrap m-10 md:space-x-8 justify-between">
        @foreach ($reports as $report)
        <div class="flex bg-white w-151 h-32 pt-6 px-8 rounded-md">
            <div class="flex-none w-14">
            <p class="text-black">{{$report->number}}</p>
            </div>
            <div class="flex-initial w-90">
            <p class="text-black">{{$report->description}}</p>
            </div>
            <div class="flex-initial w-32">
            @if ($report->status_id==1)
            <form id="form-update-{{$report->id}}" action="{{route('$reports.update')}}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id" value="{{$report->id}}">
                <select name="status_id" id="document.getElementById('form-update-{{$report->id}}').submit()">
                    @foreach($statuses as $status)
                    <option value="{{$status->id}}">{{$status->name}}</option>
                    @endforeach
                </select>
            </form>
            @else
            <p>{{$report->status->name}}</p>
            @endif
            </div>
        </div>
        
        
       
            
            
            
          
            
           
           
        @endforeach
        </div>
        </div>
    </div>
</div>
</x-app-layout>


@endsection()