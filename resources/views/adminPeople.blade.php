@extends('layouts.admin') @section('adminPage')
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="section-heading text-center">
                <h4>People management</h4>
                <table class="table table-striped table-hover">
                    <th class="text-center">name</th>
                    <th class="text-center">chineseName</th>
                    <th class="text-center">nickname</th>
                    <th class="text-center">Jobtitle</th>
                    <th class="text-center">visble</th>
                    <th class="text-center">edit</th>
                    @foreach ($tasks as $key => $user)
                    <tr>
                        <td>{{ $user -> name }} </td>
                        <td>{{ $user -> chineseName }} </td>
                        <td>{{ $user -> nickname }} </td>
                        <td>{{ $user -> Jobtitle }} </td>
                        <td>
                            <i class="fa{{ $user -> visble == 1 ? ' fa-eye':' fa-eye-slash' }}"></i>
                        </td>
                        <td>
                            <a href="#myModal{{ $key }}" class="btn btn-skin" data-toggle="modal">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@foreach ($tasks as $key => $user)
<div class="modal fade" id="myModal{{$key}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form id="contact-form" method="POST" action="{{ url('admin/edit/'.$user->id ) }}">
        {{ csrf_field() }}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="modal-header text-left">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <div class="col-md-12 text-left">
                                    <h4 class="modal-title" id="myModalLabel">{{   $user -> chineseName }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body text-left">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <img src="{{ asset('img/team/'.$user -> photo)}}" class="img-thumbnail" width="150" height="150" />
                                    </div>
                                    <div class="col-md-4">
                                        <span>Login Account</span>
                                        <input type="text" name="name" class="form-control  " value="{{ $user -> name }}">
                                    </div>
                                    <div class="col-md-4">
                                        <span>Chinese Name</span>
                                        <input type="text" name="chineseName" class="form-control " value="{{ $user -> chineseName }}">
                                    </div>
                                    <div class="col-md-4">
                                        <span>Nick Name</span>
                                        <input type="text" name="nickname" class="form-control " value="{{ $user -> nickname }}">
                                    </div>
                                    <div class="col-md-4">
                                        <span>Job Title</span>
                                        <input type="text" name="Jobtitle" class="form-control " value="{{ $user -> Jobtitle }}">
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <span>Google</span>
                                <input type="text" name="google" class="form-control " size="20" value="{{ $user -> google }}">
                                <br>
                            </div>
                            <div class="col-md-4">
                                <span>Twitter</span>
                                <input type="text" name="twitter" class="form-control " size="20" value="{{ $user -> twitter }}">
                            </div>
                            <div class="col-md-4">
                                <span>Facebook</span>
                                <input type="text" name="facebook" class="form-control " size="20" value="{{ $user -> facebook }}">
                            </div>
                            <div class="col-md-12">
                                <span>Email</span>
                                <br>
                                <input type="text" name="email" class="form-control " size="45" value="{{ $user -> email }}">
                            </div>
                            <div class="col-md-12">
                                <span>Simple describe:</span>
                                <br>
                                <input class="form-control" name="introduce" type="text" size=60 value="{{ $user -> introduce }}">
                            </div>
                            <div class="modal-footer">
                                <div class="col-md-1 text-center">
                                    <a href="#myModal{{ $key-1 }}" data-dismiss="modal" data-toggle="modal" class="btn btn-skin"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                </div>
                                <div class="col-md-10 text-center">
                                    <button type="button" class="btn btn-skin" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-skin">Save changes</button>
                                </div>
                                <div class="col-md-1 text-center">
                                    <a href="#myModal{{ $key+1 }}" data-dismiss="modal" data-toggle="modal" class="btn btn-skin"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endforeach @endsection
