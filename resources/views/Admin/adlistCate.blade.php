


@extends('layouts.adminlayout')

@section('Admin.content')


@php ($i=1);
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th> Name</th>
                      <th> Slug</th>
                      <th>Image</th>
                      <th>Description</th>
                      <th>Meta Keywords</th>
                      <th>Meta Keywords</th>
                      <th>Created At</th>
                     
                    </tr>
                  </thead>
                    <tbody>
         @foreach($listCate as $pro)   
                    <tr>
                      <td>{{$i}}</td>
                      <td>{{$pro-> name}}</td>
                      <td>{{$pro-> slug}}</td>
                      <td style="width: 240px;"><img src="{{asset('images/')}}/{{$pro-> image}}" alt="" class="img-fluid"></td>

                      <td>{{$pro-> meta_description}}</td>
                      <td>{{$pro-> meta_keywords}}</td>
                      <td>{{$pro-> meta_title}}</td>
                      <td>{{$pro-> created_at}}</td>

                    
                    </tr>
                    @php ($i++);
                  @endforeach
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>



@endsection