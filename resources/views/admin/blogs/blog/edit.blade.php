@extends('admin.layout.master')
@section('title') Blogs  Edit @endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Blog form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal"  action="{{route('blogs.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        
                        <div class="row mb-3">
                            <label for="image" class="col-md-3  col-form-label">Blog Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="image" id="image"
                                    accept="image/*" />
                                    <div class="mt-1"><img src="{{asset($blog->image)}}" style="width: 70px; height:70px "></div>
                                    <div class="text-danger">@error('image')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="depeartment" class="col-md-3 col-form-label">Blog Category </label>
                            <div class="col-md-9">
                                <select class="form-select" name="blog_category_id" aria-label="Default select example">
                                    <option  disabled>---Select Blog Category---</option>
                                    @foreach ($blogCats as $blogCat )
                                    <option value="{{$blogCat->id}}" {{$blogCat->id==$blog->blog_category_id?'selected':''}}>{{$blogCat->name}}</option>
                                    @endforeach
                                  </select>
                                  <div class="text-danger">@error('blog_category_id')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="depeartment" class="col-md-3 col-form-label">Created By </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$blog->created_by}}" name="created_by" placeholder="Created By">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Blog Title</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$blog->title}}" class="form-control" name="title" id="name"
                                    placeholder="Blog TItle" />
                                    <div class="text-danger">@error('title')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Creating Date</label>
                            <div class="col-md-9">
                                <input type="date" class="form-control" value="{{$blog->creating_date}}"  name="creating_date" id="name" />
                                    <div class="text-danger">@error('creating_date')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Short Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="short_description" cols="3" rows="3" placeholder="Short Description" >{!!$blog->short_description!!}</textarea>
                                <div class="text-danger">@error('short_description')  {{$message}} @enderror</div>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Long Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control"  id="summernote" name="long_description" cols="3" rows="3" placeholder="Long Description" >{!!$blog->long_description!!}</textarea>
                                <div class="text-danger">@error('long_description')  {{$message}} @enderror</div>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Facebook</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$blog->facebook}}" name="facebook" id="name"
                                    placeholder="Facebook " />
                                    <div class="text-danger">@error('facebook')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Twitter</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$blog->twitter}}" name="twitter" id="name"
                                    placeholder="Twitter " />
                                    <div class="text-danger">@error('twitter')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Instagram</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$blog->instagram}}" name="instagram" id="name"
                                    placeholder="Instagram " />
                                    <div class="text-danger">@error('facebook')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Google Plus</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$blog->google_plus}}" name="google_plus" id="name"
                                    placeholder="Google Plus " />
                                    <div class="text-danger">@error('google_plus')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-end">
                            <label class="col-md-3">Publication Status</label>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input type="radio" {{$blog->status==1?'checked':''}} id="status_published" name="status" value="1"
                                         class="form-check-input" />
                                    <label class="form-check-label" for="status_published">Published</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" {{$blog->status==0?'checked':''}} id="status_unpublished" name="status" value="0"
                                        class="form-check-input" />
                                    <label class="form-check-label" for="status_unpublished">Unpublished</label>
                                </div>
                            </div>
                        </div>
                        <div class="justify-content-end row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-info addTeacher">Create New Blog</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
