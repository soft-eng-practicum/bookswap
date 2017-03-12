@if (count($books) > 0)  @foreach ($books as $books)[{"Title": "{{ $books->title}}"},] @endforeach @endif
