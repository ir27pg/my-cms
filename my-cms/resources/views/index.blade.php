<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('記事一覧') }}
      </h2>
  </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
    <table class="border-collapse border border-slate-500 ...">
    <thead>
      <tr>
        <th class="border border-slate-600 ...">記事番号</th>
        <th class="border border-slate-600 ...">記事名</th>
        <th class="border border-slate-600 ...">作成日</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $article)
      <tr>
        <td  class="border border-slate-600 ...">{{ $article->id }}</td>
        <td  class="border border-slate-600 ..."><a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a></td>
        <td  class="border border-slate-600 ...">{{ $article->created_at }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </div>
</div>
{{ $articles->links() }}
    </x-app-layout>
