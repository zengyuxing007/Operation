@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="toolbar" class="navbar-right">
            <form action="{{ route('permission.store') }}" method="post" class="form-horizontal " enctype="multipart/form-data">
                {!! csrf_field() !!}
                <input type="submit" class="btn btn-success" value="重新构建权限" />
            </form>
        </div>
        <div class="table-responsive">
            <table class="table  table-hover table-no-bordered"
                   id="table"
                   data-toolbar="#toolbar"
                   data-select-item-name="select_id"
                   data-toggle="table"
                   data-show-columns="true"
                   data-cookie="true"
                   data-cookie-id-table="permissionId"
                    >
                <thead>
                <tr>
                    <th data-checkbox="true" data-field="select_id"></th>
                    <th data-field="id" data-visible="false">Id</th>
                    <th data-field="name">名字</th>
                    <th data-field="description">描述</th>
                </tr>
                </thead>
                <tbody>
                @foreach($permission_list as $permission)
                    <tr class="odd">
                        <td>
                        </td>
                        <td>{{ $permission->id }}</td>
                        <td>
                            {{ $permission->display_name }}
                        </td>
                        <td>
                            {{ $permission->description }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
            </table>
        </div>
    </div>
    {!! $permission_list->render() !!}
@endsection