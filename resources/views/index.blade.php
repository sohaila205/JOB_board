@extends('layouts.master')

@section('content')
<header class="page-header">
    <h2 style="text-align: center;">jobs</h2>
</header>

<div class="col-md-12">
    <section class="panel">

        <div class="panel-body" style="text-align: center;">
            @include('layouts.success')

            <div class="table-responsive">
                <table class="table table-striped mb-none">
                    <thead >
                        <tr>
                            <th  style="text-align: center;">job</th>
                            <th style="text-align: center;" >descripton</th>
                            <th  style="text-align: center;">address</th>
                            <th  style="text-align: center;">approved</th>
                            <th  style="text-align: center;">salary</th>
                            <th  style="text-align: center;">company</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jobs as $job)
                        <tr >
                            <td>{{$job->name}}</td>
                            <td>{{$job->description}}</td>
                            <td>{{$job->address}}</td>
                            <td>
                            @if($job->is_approved==0)
                                <a
                                style=" color: rgb(252, 247, 247);border: 1px solid #008CBA; background-color: #223e7e;"
                                href="{{url('approve', ['id' => $job->id]) }}">approve </a>

                            @else
                            Approved
                            @endif
                            </td>
                            <td>{{$job->salary}}</td>
                            <td>{{$job->company_id}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </section>
</div>
@endsection
