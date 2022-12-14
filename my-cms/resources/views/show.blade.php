<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('記事詳細') }}
      </h2>
  </x-slot>     
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  {{ $article->title }}
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                  {{ $article->body }}
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                  <a href="{{ route('article.edit', $article->id) }}">Edit</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                  <form onsubmit="return confirm('本当に削除しますか？')" action="{{ route('article.destroy', $article->id) }}" method="post">
                    @csrf 
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>