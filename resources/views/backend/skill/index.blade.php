@extends('backend.layout.master')
@section('title','Skill')
@section('content')


<div class="row clearfix">
    <!-- Task Info -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Skill List</h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="{{route('skill.create')}}" class="btn btn-primary">
                           Create
                        </a>
                        {{-- <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul> --}}
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover dashboard-task-infos">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Percentage</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skills as $skill)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$skill->title}}</td>
                                <td>{{$skill->percentage}}</td>
                                <td>
                                    @if ($skill->status == 1)
                                    <span class="label bg-green">
                                        Active
                                    </span>
                                    @elseif ($skill->status == 0)
                                    <span class="label bg-danger">
                                    Inactive
                                     </span>
                                     @endif
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Task Info -->

</div>
@endsection
