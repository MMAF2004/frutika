@extends('layouts.admin')
@section('title')
Dashboard/Categories    
@endsection
@section('content')
<link rel="stylesheet" href="//cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css">
      <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            {{-- <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0"><a href="{{route("dashboard")}}"><button type="button" class="btn btn-square btn-outline-danger m-2"><i class="fa fa-home"></i></button></a>Categories</h6>
                <a href="{{route("category.create")}}"><button type="button" class="btn btn-success rounded-pill m-2">Add New Category</button></a>
            </div> --}}
            <div class="table-responsive">
              <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Discription</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date</th>
                        <th scope="col">picture</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $key => $category)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$category->name}}</td>
                      <td>{{$category->description}}</td>
                      <td>{{$category->status}}</td>
                      <td>{{$category->created_at}}</td>
                      <td><img style="width:60px;height:60px;border-radius:50%" src="{{asset('storage/' .$category->picture)}}" alt="image"></td>
                  </tr>  
                  @endforeach  
                  </tbody>
              </table>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete(event) {
          event.preventDefault();
          var urlToRedirect = event.currentTarget.getAttribute('href');  
          console.log(urlToRedirect); 
          swal({
            title: "Are you sure to Delete this Category",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willCancel) => {
              if (willCancel) {
                  window.location.href = urlToRedirect;
              }  
          })
          console.log(1);
      }
    </script>       
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset("//cdn.datatables.net/2.0.0/js/dataTables.min.js")}}"></script>
<script>
    $("table").DataTable();
</script>
@endsection
 
