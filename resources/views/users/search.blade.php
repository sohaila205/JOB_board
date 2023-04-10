@extends('admin.master')
@section('body')
<header class="page-header">
    <h2>المدونين</h2>
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
<div class="col-md-12">
    <section class="panel">
        <header class="panel-heading">
            <a href="{{route('admin.user.create')}}"><button type="button" class="mb-xs mt-xs mr-xs btn-sm btn btn-primary"><i class="fa fa-plus"></i>إضافة مدون</button></a>
            <h2 class="panel-title" style="display: inline-block; vertical-align: middle;">نتائج البحث</h2>
        </header>
        <div class="panel-body">
            @include('admin.layouts.success')
            <div class="form-group">
                <div class="col-md-4 pull-right">
                    <div class="input-group input-search">
                        <form action="{{route('admin.user.search')}}">
                            <input type="text" class="form-control" value="{{$_GET['search']}}" name="search" id="q" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
            @if(count($users)>0)
            <div class="table-responsive">
                <table class="table table-striped mb-none text-right">
                    <thead>
                        <tr>
                            <th class="text-right">إجراء</th>
                            <th class="text-right">البريد الإلكتروني</th>
                            <th class="text-right">الإسم</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td class="actions-hover actions-fade">
                              <a href="{{route('admin.user.edit',$user->id)}}"><i class="fa fa-pencil"></i></a>
                              <a href="{{route('admin.user.delete',$user->id)}}" class="delete-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                {{ $users->appends(getRequestBetweenPages())->render() }}
            </div>
            @else
            <div class="well danger text-center">
                No users Found
            </div>
            @endif
        </div>
    </section>
</div>
@endsection
