@extends('admin/layouts/master')
@section('title','All Post - Index')
@section('content')
<div class="col-lg-12 margin-tb p-0">
    <div class="pull-left">
        <h2>  </h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary btn-rounded mb-5" href="{{ route('categories.index') }}" title="Go back"><i class="fas fa-long-arrow-alt-left"></i>&nbsp;Go Back</a>
    </div>
</div>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif
<h1 class="pb-5">Edit Series</h1>
<form method="post" action="{{$series->id}}" >
    @method('POST')
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group p-0">
                <label for="my-input">Title :</label>
                <input id="my-input" class="form-control " value="{{$series->title}}" type="text" name="title">
            </div>

            <div class="form-group p-0">
                <label for="my-input">Description :</label>
                <input id="my-input" class="form-control " value="{{$series->description}}" type="text" name="description">
            </div>

            <div class="form-group p-0">
                <label for="my-input">Vote :</label>
                <input id="my-input" class="form-control " value="{{$series->vote}}" type="text" name="vote">
            </div>

            <button type="submit" class="btn btn-primary btn-rounded btn-lg" > Update </button>
        </div>
        <div class="col-lg-6">
            <div class="form-group p-0">
                <label for="my-input">View :</label>
                <input id="my-input" class="form-control " value="{{$series->view}}" type="text" name="view">
            </div>

            <div class="form-group p-0">
                <label for="my-input">User_id</label>
                <input id="my-input" class="form-control " value="{{$series->user_id}}" type="text" name="user_id">
            </div>
            <div class="form-group p-0">
                <label for="my-input">Status</label>
                <input id="my-input" value="{{$series->status}}" class="form-control " type="text" name="status">
            </div>
        </div>
    </div>   
</form>
@endsection
