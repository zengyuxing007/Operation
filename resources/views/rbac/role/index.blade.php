@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="toolbar">
            <a href="{{ route('role.create') }}" class="navbar-right">添加角色</a>
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
                    <th data-field="email">机器名</th>
                    <th data-field="name">展示名</th>
                    <th data-field="op">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($role_list as $role)
                    <tr class="odd">
                        <td>
                        </td>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->display_name }}</td>
                        <td>
                            @if($role->id >= 2)
                                <a href="{{ route('role.edit',$role->id) }}">编辑</a>
                                <a href="{{ route('role.delete',$role->id) }}">删除</a>
                                <a href="{{ route('role.permission',$role->id) }}">权限</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
            </table>
        </div>
    </div>
    {!! $role_list->render() !!}
@endsection