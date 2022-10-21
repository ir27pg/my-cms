<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('tagの追加') }}
      </h2>
  </x-slot>
<form action="{{route('tags.store')}}" method="POST">
  tag:<br>
  <input name="title">
  {{ csrf_field() }}
  <button class="btn btn-success"> 送信 </button>
</form>
</x-app-layout>