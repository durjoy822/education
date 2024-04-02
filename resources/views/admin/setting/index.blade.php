@extends('admin.layout.master')
@section('title')
   Settings Manage
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="header-title float-start mt-2"> Settings Information</h4>
                            @if($settings->count()<1)
                                <a href="{{route('settings.create')}}">
                                    <button type="button"  class="btn btn-light float-end">Add Setting</button>
                                </a>
                            @endif
                        </div>
                    </div>
                    <hr />
                    <p class="text-muted font-14">{{ Session::get('success') }}</p>
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Dark Logo</th>
                                <th>Light logo</th>
                                <th>Favicon</th>
                                <th>website name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @if ($settings->count() > 0)
                            @foreach ($settings as $index => $setting)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        @if ($setting->dark_logo)
                                            <img src="{{asset($setting->dark_logo) }}" alt="" height="60" width="60" />
                                        @else
                                            <img src="{{asset('admin')}}/assets/images/not_found/not_found_img.png" alt="No Image Available" height="60" width="60" />
                                        @endif
                                    </td>
                                    <td>
                                        @if ($setting->white_logo)
                                            <img src="{{ asset($setting->white_logo) }}" alt="" height="60" width="60" />
                                        @else
                                            <img src="{{asset('admin')}}/assets/images/not_found/not_found_img.png" alt="No Image Available" height="60" width="60" />
                                        @endif
                                    </td>
                                    <td>
                                        @if ($setting->favicon)
                                            <img src="{{ asset($setting->favicon) }}" alt="" height="60" width="60" />
                                        @else
                                            <img src="{{asset('admin')}}/assets/images/not_found/not_found_img.png" alt="No Image Available" height="60" width="60" />
                                        @endif
                                    </td>
                                    <td>{{ $setting->name }}</td>
                                    <td>
                                        <a href="{{route('settings.show',$setting->id)}}" class="btn btn-success btn-sm" title="Edit">
                                            <i class="fa-solid fa-eye"></i> View
                                        </a>
                                        <a href="{{route('settings.edit',$setting->id)}}"
                                        class="btn btn-success btn-sm TeacherUpdateForm"
                                        title="Edit">
                                        <i class="ri-edit-box-fill"></i> Edit
                                        </a>
                                        <form action="{{route('settings.destroy',$setting->id)}}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete this teacher?');">
                                                <i class="ri-chat-delete-fill"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="text-danger text-center">No data found </td>
                            </tr>
                        @endif
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection



