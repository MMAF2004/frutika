@extends('layouts.admin')
@section('title')
Dashboard/Products    
@endsection
@section('content')
      
      <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0"><a href="{{route("dashboard")}}"><button type="button" class="btn btn-square btn-outline-danger m-2"><i class="fa fa-home"></i></button></a>Products</h6>
                <a href="#"><button type="button" class="btn btn-success rounded-pill m-2">Add New Product</button></a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Discription</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                            <th scope="col">Updated_at</th>
                            <th scope="col" colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Jhon Doe</td>
                            <td>$123</td>
                            <td>Paid</td>
                            <td>$123</td>
                            <td>01 Jan 2045</td>
                            <td>01 Jan 2045</td>
                            <td>01 Jan 2045</td>
                            <td>
                                <a class="btn btn-sm btn-success" href="">Edit</a>
                                <a class="btn btn-sm btn-primary" href="">Delete</a>
                            </td>
                        </tr>
                     
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
       
@endsection   
