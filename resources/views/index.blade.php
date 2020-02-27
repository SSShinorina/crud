<table>
    <tr>
        <th>name</th>
        <th>type</th>
        <th>author</th>
    </tr>
    @foreach($allBook as $book)
        <tr>
            <td>{{$book->name}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>
                <a href="edit.blade.php">Edit</a>
            </td>
            <td>
                {!! Form::open([

           'route' => ['delete', $book->id]
       ]) !!}
                {!! Form::submit('Delete this book?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
</table>
