<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>

    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <input type="text" name="title">
        <textarea name="description"></textarea>
        <button type="submit">Submit</button>
    </form>

    @if(isset($post))
    <table>
        <tr>
            <th>SL</th>
            <th>Title</th>
            <th>slug</th>
            <th>Description</th>
        </tr>
        @foreach($post as $key=>$item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->slug }}</td>
            <td>{!! $item->description !!}</td>
        </tr>
        @endforeach
    </table>
    @endif

</body>
</html>
