@extends('layouts.main')
@section('contnet')
<div class="md:container md:mx-auto  flex flex-wrap m-10 md:space-x-8 justify-between">
@foreach ($reports as $report)

<div class="flex flex-wrap pt-5 ">
   <div class="block max-w-sm p-6 bg-white border border-white-200 rounded-lg shadow hover:bg-white-100 dark:bg-white-800 dark:border-white-700 ">
   <div>
   <p class=" "> 
        <a href="{{route('report.index', $report->id )}}">
            {{ $report->number }}
        </a>
   </div>
    </p>
    <p class=" ">{{ $report->description }}</p>
    

    <form action=" {{ route('reports.destroy', $report->id ) }} " method="POST">
    @csrf 
            @method('delete')
            
            <input type="submit" value="Удалить">
        </form>
   </div>

   

</div>

@endforeach


<div class="container">
    <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Создать новый отчет</h1>

    <form method="POST" action="{{ route('reports.store') }}">
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
@endsection()