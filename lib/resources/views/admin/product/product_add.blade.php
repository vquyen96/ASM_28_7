@extends('admin.master')
@section('title', 'Add Product')
@section('main')
	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{{ isset($item) ? 'Edit' : 'Add'}} Product</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{ asset('admin') }}">HomePage</a></li>
                        <li class="active">{{ isset($item) ? 'Edit' : 'Add'}} Product</li>
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
			                <strong class="card-title">{{ isset($item) ? 'Edit' : 'Add'}} Product</strong>
			            </div>
			            <div class="card-body">
			              <!-- Credit Card -->
			              <div id="pay-invoice">
			                  <div class="card-body">
			                      <div class="card-title">
			                          <h3 class="text-center">{{ isset($item) ? 'Edit' : 'Add'}} Product</h3>
			                      </div>
			                      <hr>
			                      <form action="{{ isset($item) ? asset('product/'.$item->pro_id) : asset('product')}}" method="post" novalidate="novalidate">
			                      	@if(isset($item))  
			                      	@method('PUT')
			                      	@endif 
			                          {{ csrf_field() }}
			                          <div class="form-group">
			                              <label for="cc-payment" class="control-label mb-1"n>Name</label>
			                              <input id="cc-pament" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ isset($item) ? $item->pro_name : ''}}">
			                          </div>
			                          <div class="form-group">
			                              <label for="cc-payment" class="control-label mb-1"n>Detail</label>
			                              <textarea name="detail" class="form-control" rows="5">{{ isset($item) ? $item->pro_detail : ''}}</textarea>
			                              
			                          </div>
			                          <div class="form-group">
			                              <label for="cc-payment" class="control-label mb-1"n>Category</label>
			                              <select name="cate" id="select" class="form-control">
			                              	@foreach($cates as $cate)
			                                <option value="{{ $cate->cate_id }}" {{ isset($item) && $item->pro_cate_id == $cate->cate_id ? 'selected' : '' }}>{{ $cate->cate_name }}</option>
			                                @endforeach
			                                
			                              </select>
			                              
			                          </div>
			                          <div class="form-group">
			                              <label for="cc-payment" class="control-label mb-1"n>Image</label>
			                              <input type="file" name="img" class="form-control">
			                          </div>
			                          <div>
			                              <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
			                                  <span id="payment-button-amount">{{ isset($item) ? 'Save' : 'Add'}}</span>
			                              </button>
			                          </div>
			                      </form>
			                  </div>
			              </div>

			            </div>
			        </div> <!-- .card -->

		     	</div><!--/.col-->
		  	</div>
		</div>
	</div>
    <!-- Right Panel -->
@stop
