@extends('admin.master')
@section('title', 'ListCate')
@section('main')
	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>ListCate</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{ asset('admin') }}">HomePage</a></li>
                        <li class="active">ListCate</li>
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
                            <strong class="card-title">Basic Table</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Detail</th>
                                  <th scope="col">Option</th>
	                              </tr>
	                          </thead>
	                          <tbody>
	                          	@foreach($items as $item)
	                            <tr>
	                              <th scope="row">{{ $item->cate_id }}</th>
	                              <td>{{ $item->cate_name }}</td>
	                              <td><a href="{{ asset('cate/'.$item->cate_id) }}">Chi tiết</a></td>
	                              <td>
	                              	<a href="{{ asset('cate/'.$item->cate_id.'/edit') }}">Sửa</a>
	                              	<a href="{{ asset('cate') }}" onclick="return confirm('Bạn chắc chắn muốn xóa')">Xóa</a>
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
