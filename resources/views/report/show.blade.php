<!--@extends('app.layouts')
@section('contnet')
<form  action="{{ route('reports.update', $reports->id) }}" method="POST">
@csrf
  @method('put')
        <div class="mb-4">
        <p class="block text-gray-700 font-bold mb-2">Номер:</p>
        <input type="text" id="number" name="number" placeholder="номер" required value="{{$reports->number}}"
            class="border border-gray-300 rounded-lg p-2">
    </div>
    <div class="mb-4">
        <p class="block text-gray-700 font-bold mb-2">Описание:</p>
        <textarea id="description" name="description" placeholder="описание" required class="border border-gray-300 rounded-lg p-2 ">{{$reports->description}}</textarea>
    </div>
        <button type="submit" class="border-2">Обновить</button>
    </form>

@endsection()-->