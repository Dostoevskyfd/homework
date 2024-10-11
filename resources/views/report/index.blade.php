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
    <p>{{ $report->created_at }}</p>
    <p>{{ $report->update_at }}</p>
   </div>
</div>

@endforeach
</div>
@endsection()