@extends('layout.master')
@section('css')
<link rel="stylesheet" href="{{asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css')}}">
@endsection
@section('content')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Page Invoice</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">Invoice</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>List</h2>
                        <ul class="header-dropdown">
                            <li><a href="javascript:void(0);" class="btn btn-info" data-toggle="modal" data-target="#add_user">Add User</a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom m-b-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th></th>
                                        <th></th>
                                        <th>Created Date</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="width45">
                                            <img src="../assets/images/xs/avatar1.jpg" class="rounded-circle width35" alt="">
                                        </td>
                                        <td>
                                            <h6 class="mb-0">Marshall Nichols</h6>
                                            <span>marshall-n@gmail.com</span>
                                        </td>
                                        <td><span class="badge badge-danger">Super Admin</span></td>
                                        <td>24 Jun, 2015</td>
                                        <td>CEO and Founder</td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="../assets/images/xs/avatar2.jpg" class="rounded-circle width35" alt="">
                                        </td>
                                        <td>
                                            <h6 class="mb-0">Susie Willis</h6>
                                            <span>sussie-w@gmail.com</span>
                                        </td>
                                        <td><span class="badge badge-info">Admin</span></td>
                                        <td>28 Jun, 2015</td>
                                        <td>Team Lead</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="../assets/images/xs/avatar3.jpg" class="rounded-circle width35" alt="">
                                        </td>
                                        <td>
                                            <h6 class="mb-0">Debra Stewart</h6>
                                            <span>debra@gmail.com</span>
                                        </td>
                                        <td><span class="badge badge-info">Admin</span></td>
                                        <td>21 July, 2015</td>
                                        <td>Team Lead</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="../assets/images/xs/avatar4.jpg" class="rounded-circle width35" alt="">
                                        </td>
                                        <td>
                                            <h6 class="mb-0">Erin Gonzales</h6>
                                            <span>Erinonzales@gmail.com</span>
                                        </td>
                                        <td><span class="badge badge-default">Employee</span></td>
                                        <td>21 July, 2015</td>
                                        <td>Web Developer</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="../assets/images/xs/avatar3.jpg" class="rounded-circle width35" alt="">
                                        </td>
                                        <td>
                                            <h6 class="mb-0">Ava Alexander</h6>
                                            <span>alexander@gmail.com</span>
                                        </td>
                                        <td><span class="badge badge-success">HR Admin</span></td>
                                        <td>21 July, 2015</td>
                                        <td>HR</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-datatable/buttons/buttons.print.min.js')}}"></script>

@endsection
