@extends('layouts.main')
<!--шаблон де виводимо номери постів, назву-->
@section('content')
    <table>
        @foreach ($items as $item)
            <tr>

                <td>{{$loop->index+1}}</td>
                <td>{{$item->user->name}}&nbsp;&nbsp;&nbsp;</td>
                <td><a href="{{ route('blog.posts.show', $item->id) }}">{{ $item->title }}</a></td>
            </tr>
        @endforeach
    </table>
@endsection
