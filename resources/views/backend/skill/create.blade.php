@extends('backend.layout.master')
@section('title','Skill Add')
@section('content')


<!-- Horizontal Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Skill Add
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="{{route('skill.index')}}" class="btn btn-primary">
                            Skill List
                         </a>

                    </li>
                </ul>
            </div>
            <div class="body">
                <form action="{{route('skill.create')}}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="title">Skill Title</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="title" name="title" required class="form-control" placeholder="Enter Skill Title">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="percentage">Percentage</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" id="percentage" required class="form-control" name="percentage" placeholder="Enter Percentage">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="status">Status</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <input type="radio" name="status" id="status1" value="1" required class="filled-in">
                                <label for="status1">Active</label>
                                <input type="radio" name="status" id="status2" value="0" required class="filled-in">
                                <label for="status2">Inactive</label>
                        </div>
                    </div>



                    <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# Horizontal Layout -->
@endsection
