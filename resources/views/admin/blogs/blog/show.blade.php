@extends('admin.layout.master')
@section('title')
    Blog  Manage
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="header-title float-start mt-2"> ALL Blog  Information</h4>
                            <a href="{{route('blogs.create')}}"><button type="button" data-bs-target="#addCategoryModal" data-bs-toggle="modal"
                                class="btn btn-light float-end">Add New Blog</button></a>
                        </div>
                    </div>
                    <hr />
                    <p class="text-muted font-14">{{ Session::get('success') }}</p>
                    <table id="datatable-buttons" class="table table-striped dt-responsive">
                        <tr>
                            <td>Sl NO</td>
                            <td>{{$blog->id}}</td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td>
                                @if ($blog->image)
                                <img src="{{ asset($blog->image) }}" alt="blog-img" height="60" width="60" />
                            @else
                                <img src="{{asset('admin')}}/assets/images/not_found/not_found_img.png" alt="No Image Available" height="60" width="60" />
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Title</td>
                            <td>{{$blog->title}}</td>
                        </tr>
                        <tr>
                            <td>Blog Category</td>
                            <td>{{ $blog->BlogCategory->name }}</td>
                        </tr>
                        <tr>
                            <td>Created By</td>
                            <td>{{$blog->created_by}}</td>
                        </tr>
                        <tr>
                            <td>Created Date</td>
                            <td>{{ date('F j, Y', strtotime($blog->creating_date)) }}</td>
                        </tr>
                        <tr>
                            <td>Short Description</td>
                            <td>{!!$blog->short_description!!}</td>
                        </tr>
                        <tr>
                            <td>Long Description</td>
                            <td class="w-auto">{!!$blog->long_description!!}</td>
                        </tr>
                        <tr>
                            <td>Facebook</td>
                            <td>{{$blog->facebook}}</td>
                        </tr>
                        <tr>
                            <td>Twitter</td>
                            <td>{{$blog->twitter}}</td>
                        </tr>
                        <tr>
                            <td>Insgagram</td>
                            <td>{{$blog->instagram}}</td>
                        </tr>
                        <tr>
                            <td>Google Plus</td>
                            <td>{{$blog->google_plus}}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>{{$blog->status==1?'Published':'Unpublished'}}</td>
                        </tr>

                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection




