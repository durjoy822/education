@extends('web.layouts.master')
@section('title')
    Student Dashboard
@endsection
@section('body')
    <div class="wrapper">
        @include('web.dashboard.sidebar')
        <div class="content w-100">
            @if (Session::has('success'))
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Student Access permission successfully done.',
                            showConfirmButton: false,
                            timer: 2000
                        });
                    });
                </script>
            @endif

            <div class="content-wrapper pt-5 text-center">
                <h3 class="text-center">Students Dashboard Overview </h3>

                <div class="row py-4 m-3 text-white">
                    <div class="col-md-4 mt-4">
                        <div class="card p-5" style="background-color: #d89849;">
                            <div class="card-body "> <i class="fa fa-heart" aria-hidden="true"></i> Wishlist <h4>10</h4></div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card p-5" style="background-color: #d89849;">
                            <div class="card-body  "> <i class="fa fa-users" aria-hidden="true"></i> Crouse Inroll   <h4>10</h4></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $(document).on('click', function() {
                $("#sidebar").toggleClass('active');
            });
            $("#sidebar").on('click', function(event) {
                event.stopPropagation();
            });
        });
    </script>
@endsection
