@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('role.store') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">*机器名:</label>
                                <div class="col-sm-6 disabled">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="只允许输入英文字母">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText10" class="col-sm-2 control-label">*角色名:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="display_name" value="{{ old('display_name') }}" placeholder="请输入角色名">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText1" class="col-sm-2 control-label">角色描述:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="请输入关于角色的描述">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default btn_sure">保存</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
