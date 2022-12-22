@extends('welcome')

@section('content')
<style>
  .image_container{
      height: 120px;
      width: 200px;
      border-radius: 6px;
      overflow: hidden;
      margin: 10px;
  }
  .image_container img{
      height: 100%;
      width: 100%;
      object-fit: cover;
  }
  .image_container span{
      top: -8px;
      right: 8px;
      color: #f8f9fa;
      font-size: 28px;
      font-weight: normal;
      cursor: pointer;
  }
  .addIcon{
      background-color: #e6e6e6;
      font-size: 10px !important;
  }
</style>
    <div class="card">
        <div class="card-header">
            <h3>User Create</h3>
        </div>
        <div class="card-body">
          <form action="{{URL('property/store')}}" id="form" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" name="type" >Type</label>
                        <select name="" id="">
                            <option value="a">a</option>
                            <option value="b">b</option>
                            <option value="c">c</option>
                        </select>
                    </div>
                </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($properties as $index => $property)
                    <tr>
                        <th scope="row">{{$index+1}}</th>
                        <td>{{$property->name}}</td>
                        <td>{{$property->type}}</td>
                    </tr>
            @endforeach
            </tbody>
        </table>
   </div>
@endsection
