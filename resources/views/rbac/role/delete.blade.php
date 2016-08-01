@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('role.destroy',$role->id) }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                <div class="col-sm-6 disabled">
                                    <p>你确定删除该角色么？会同时解除该角色与权限的对应关系</p>
                                </div>
                            </div>
                            {{ method_field('DELETE') }}
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default btn_sure">删除</button>
                                    <a class="btn btn-default btn_sure" href="{{ route('role.index') }}">取消</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
