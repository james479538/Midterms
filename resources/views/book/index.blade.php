<table>
    <tr>
        <th>Title</th>
        <th>Total Pages</th>
        <th>Rating</th>
        <th>isbn</th>
        <th>Date Published</th>
    </tr>
@foreach ($books as $books)
<tr>
    <th>{{$books->title}}</th>
    <th>{{$books->totalPages}}</th>
    <th>{{$books->rating}}</th>
    <th>{{$books->isbn}}</th>
    <th>{{$books->publishDate}}</th>
  </tr>
@endforeach
  
</table>

