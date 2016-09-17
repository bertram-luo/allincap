@extends('layouts.app')

@section('content')

    <div class="container">

<table class="table table-striped table-hover table-bordered">
<thead>
    <th>日期</th>
    <th>标题</th>
    <th>删除</th>
</thead>
    @foreach($news as $new)
    <tr>
        <td >

        {{ $new->created_at }}
        </td>
        <td>
        {{ $new->title }}
        </td>
        <td style="position:relative" >
            <form action="{{ url('/news/'.$new->id) }}" method="POST">
                    {!! csrf_field() !!}
                    {!! method_field('DELETE') !!}
                    <button type="submit" id="delete-task-{{ $new->id }}" class="btn btn-danger">
                        <i class="fa fa-btn fa-trash"></i>Delete
                    </button>
            </form>

        </td>
    </tr>
    @endforeach
    </table>


    {{ $news->links() }}
    </div>
@endsection
