@extends('admin.master')
@section('title', 'List Product')
@section('main')
	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>List Product</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{ asset('admin') }}">HomePage</a></li>
                        <li class="active">List Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">List Product</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Category</th>
                                  <th scope="col">Detail</th>

                                  <th scope="col">Option</th>
	                              </tr>
	                          </thead>
	                          <tbody>
	                          	@foreach($items as $item)
	                            <tr>
	                              <th scope="row">{{ $item->pro_id }}</th>
	                              <td>{{ $item->pro_name }}</td>
                                  <td>{{ $item->cate->cate_name }}</td>
	                              <td><a href="{{ asset('product/show/'.$item->pro_id) }}">Chi tiết</a></td>
	                              <td>
	                              	<a href="{{ asset('product/'.$item->pro_id.'/edit') }}">Sửa</a>
	                              	<a href="#">Xóa</a>
	                              </td>
	                          	</tr>
		                        @endforeach 
		                      </tbody>
                  			</table>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Right Panel -->
@stop
