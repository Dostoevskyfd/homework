<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Административная панель')}}
        </h2>
    </x-slot>

  


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <table >
  <thead>
    <tr class="bg-sky-400 text-white class="text-center"">
      <th>Дата</th>
      <th>ФИО подававлего</th>
      <th>Номер автомобиля</th>
      <th>Описание заявления</th>
      <th>Статус</th>
    </tr>
  </thead>
  <tbody class="">
  @foreach ($reports as $report)
    <tr class="bg-white pt-10">
      <td><p class="text-black">{{\Carbon\Carbon::parse($report->created_at)-> translatedFormat('j F Y')}}</p></td>
      <td><p class="text-black">{{$report->user->fullName()}}</p></td>
      <td><p class="text-black">{{$report->number}}</p></td>
      <td> <p class="text-black">{{$report->description}}</p></td>
      <td>  @if ($report->status_id==1)
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
            @endif</td>
    </tr>
    @endforeach
  </tbody>

</table>
 
            
           
            
           
       
    </div>
</div>
</x-app-layout>