@extends('admin.master')
@section('controller')
@section('action','Danh Sách')
@section('content')
<meta name="_token" content="{!! csrf_token() !!}" />
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
    <style type="text/css">
        th{
            text-align: center;
        }
    </style>
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Category Parent</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody class="tbody">
    <?php $stt = 0 ?>
    @foreach($data as $item)
    <?php $stt =$stt +1  ?>
        <tr class="odd gradeX" align="center">
            <td>{!! $stt !!}</td>
            <td>{!! $item['name'] !!}</td>
            <td>
                {!! $item['parent_id'] !!}
             </td>
            <td class="center"><button class="delReview" value="{!! $item['id'] !!}"><i class="fa fa-trash-o  fa-fw"></i> Delete</button></td>
            <div id="content"></div>
            <td class="center"><a href="{!!URL::route('admin.cate.getEdit',$item['id'])!!}"><button><i class="fa fa-pencil fa-fw"></i>Edit</button></a></td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection()