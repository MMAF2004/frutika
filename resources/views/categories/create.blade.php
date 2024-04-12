@extends('layouts.admin')
@section('title')
Dashboard\Categories\create    
@endsection
@section('content')
<div style="margin: 20px auto" class="col-sm-12 col-xl-11">
    <div style="padding: 10px" class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-0"><a href="{{route("dashboard")}}"><button type="button" class="btn btn-square btn-outline-danger m-2"><i class="fa fa-home"></i></button></a>CREATE NEW CATEGORY</h6>
        <form action="{{route("category.store")}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                    placeholder="Name" name="name" required>
                <label for="floatingInput">NAME</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingPassword"
                    placeholder="Dsecription" name="description" required>
                <label for="floatingPassword">Description</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect"
                    aria-label="Floating label select example" name="status" required>
                    <option selected>Open this select menu</option>
                    <option value="show">Show</option>
                    <option value="hide">Hide</option>
                </select>
                <label for="floatingSelect">STATUS</label>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">choose category picture</label>
                <input class="form-control bg-dark" type="file" id="formFileMultiple" required multiple name="picture">
            </div>
            <button type="submit" class="btn btn-outline-warning m-3">Create</button>
        </form>
      
    </div>
</div>

@endsection