@extends('account.account')

@section('accountAction')
    <style>
        #myTab {
            background-color: #353535;
        }

        .nav-tabs .nav-link:hover {
            border: 1px solid #fb5722;
        }

        .nav-tabs .nav-link.active#edit-tab {
            background-color: #ffc107;
            color: #343a40;
            border: 1px solid #ffc107;
        }

        .nav-tabs .nav-link.active#active-tab {
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
        }

        .nav-tabs .nav-link.active#new-tab {
            background-color: #28a745;
            color: #fff;
            border: 1px solid #28a745;
        }
    </style>
    <h1 class="display-4 text-white">Manage Blog Posts</h1>

    <div class="container-fluid mt-5">
        @if($user->UserRole->roles_id == 1)
        <h1 class="text-white">This section is only available for editor</h1>

        @else
        <div class="mt-5">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="active-tab" data-toggle="tab" href="#active" role="tab" aria-controls="Active" aria-selected="true">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="New" aria-selected="false">New</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="edit-tab" data-toggle="tab" href="#edit" role="tab" aria-controls="Edit" aria-selected="false">Edit</a>
                </li>
            </ul>


            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="active" role="tabpanel" aria-labelledby="active-tab">

                    <h3 class="my-4 text-white">Active Posts</h3>

                    <table class="table table-hover table-dark">
                        <thead>
                        <tr>
                            <th scope="col" class="font-weight-bold text-center">#</th>
                            <th scope="col" class="font-weight-bold text-center">Title</th>
                            <th scope="col" class="font-weight-bold text-center">Created At</th>
                            <th scope="col" class="font-weight-bold text-center">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <span class="d-none">{{$no = 1}}</span>
                        @foreach($blogs as $blog)
                            <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->created_at->toDayDateTimeString()}}</td>
                                <td>
                                    <button class="btn btn-danger">Delete</button>
                                    &nbsp;
                                    <a href="blogs/edit" class="btn btn-warning">Edit</a>
                                    &nbsp;
                                    <a href="/blog/{{$blog->id}}" class="btn btn-primary">See</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

                <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
                    new

                </div>

                <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="edit-tab">
                    edit

                </div>
            </div>
        </div>
        @endif

    </div>

@endsection