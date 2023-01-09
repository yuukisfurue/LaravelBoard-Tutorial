<x-layout>
    <x-slot name="title">
    </x-slot>

    <h1>
    <p> <span>LaravelBoard-Tutorial</span></p>
        <a href="{{ route('posts.create') }}">[登録へ]</a>
    </h1>
#テーブル開始
    <table border="1">
    <tr>
    <td>NO</td>
    <td>氏名</td>
    <td>性別</td>
    <td>都道府県</td>
    <td>職種</td>
    <td>部署</td>
    <td>役職</td>
  </tr>   
  </table>

  @forelse ($posts as $post)
  <table border="1">
  <tr>
    <th>{{ $post->id }}</th>
    <th>{{ $post->name }}</th>
    <th>{{ $post->gender }}</th>
    <th>{{ $post->prefecture }}</th>
    <th>{{ $post->company }}</th>
    <th>{{ $post->jyob }}</th>
    <th>{{ $post->employmentstatus }}</th>
  </tr>
    </table>
        @empty
            <li>post->links();</li>
        @endforelse
        <p class="mt-5">{{ $posts->links() }}</p>
        <a href="{{ route('export') }}">[CSV]</a>
   </x-layout>
