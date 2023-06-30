@extends('admin.master')
@section('body')
<header class="page-header">
    <h2>تسجيل مدون جديد</h2>

    <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>المدونين</span></li>
        </ol>
        <a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
    </div>
</header>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">بيانات المدون الجديد</h2>
            </header>
            <div class="panel-body">
                <form class="form-horizontal form-bordered" action="{{route('admin.user.create.post')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        <div class="col-md-9">
                          <input type="text" value="{{old('name')}}" placeholder="* الإسم" maxlength="99" name="name" class="form-control input-rounded">
                          {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                        </div>
                        <label class="col-md-3 control-label" for="inputRounded">* الإسم</label>
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                        <div class="col-md-9">
                          <input type="text" value="{{old('email')}}" placeholder="* البريد الإلكتروني"  maxlength="254" name="email" class="form-control input-rounded" id="inputRounded">
                          {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                        </div>
                        <label class="col-md-3 control-label" for="inputRounded">* البريد الإلكتروني</label>
                    </div>
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                        <div class="col-md-9">
                            <input type="password" placeholder="* كلمة لسر" maxlength="254" name="password" class="form-control input-rounded" id="inputRounded">
                            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                        </div>
                        <label class="col-md-3 control-label" for="inputRounded">* كلمة السر</label>
                    </div>
                    <p class="m-md text-center">
                        <button type="submit" class="mb-xs mt-xs mr-xs btn btn-sm btn-primary btn-block"><i class="fa fa-save"></i> تسجيل</button>
                    </p>
                </form>
            </div>
        </section>
    </div>
</div>
@endsection