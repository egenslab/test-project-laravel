@extends('layouts.app-master')

@section('content')
    <div class="row" style="margin-top: 50px">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Products List</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <form action="" method="GET" style="">
        <div class="row">.
            <div class="col-lg-12 d-flex mb-3">
                <div class="col-lg-3">
                    <input name="q" value="" placeholder="Search author name or product" class="form-control" required>
                </div>
                <div class="col-lg-3">
                    <div class='input-group date' id='datetimepicker'>
                        <input type='text' class="form-control" name="date" required/>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <div class="col-lg-3">
                    <input type="submit" class="btn btn-danger btn-sm" value="Filter">
                    <a href="{{ URL::to('admin/product') }}">
                        <input type="button" class="btn btn-danger btn-sm" value="Reset">
                    </a>
                </div>
            </div>

        </div>
    </form>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Author Name</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->author_name }}</td>
                <td>{{ $product->name }}</td>
                <td>${{ $product->price }}</td>
                <td><img src="{{ $product->image }}" style="width: 50px"></td>
                <td>{{ $product->detail }}</td>
                <td>
                    <a class="btn btn-info" href="#">Show</a>
                    <a class="btn btn-primary" href="#">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection
