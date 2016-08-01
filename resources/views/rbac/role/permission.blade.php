@extends('home')

@section('content')
    <div class="panel-body">
        <form action="{{ route('role.perStore',$role->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="permission" class="col-sm-2 control-label">权限</label>
                <div class="col-sm-6">
                    <div id="permission" class="checkbox">
                        @foreach($permission_list as $permission)
                            @if(in_array($permission->id,$has_permission))
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permission[]" checked="checked" value="{{ $permission->id }}"> {{ $permission->display_name }}
                                    </label>
                                </div>
                            @else
                                <div class="checkbox">
                                    <label> <input type="checkbox" name="permission[]" value="{{ $permission->id }}">  {{ $permission->display_name }} </label>
                                </div>
                            @endif
                            <p>{{ $permission->description }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default btn_sure">保存</button>
                </div>
            </div>
        </form>
    </div>
    <div class="box-footer"></div>
@endsection