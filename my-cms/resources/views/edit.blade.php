<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('記事編集') }}
      </h2>
  </x-slot>     
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <form method="post" action="{{ route('article.update', $article->id) }}">
                <div class="p-6 bg-white border-b border-gray-200">
                  <input type="text" name="title" value="{{ old('title', $article->title)}}">
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                  <input type="text" name="body" value="{{ old('body', $article->body)}}">
                </div>
                {{ csrf_field() }}
                <button class="btn btn-success"> 送信 </button>
              </form>
            </div>
        </div>
    </div>
</x-app-layout>