@extends('admin.master.admin_master')
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        {{-- <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-account-multiple"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter"></span>
                        Total Board Members
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-account-multiple"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter"></span>
                        Total School Members
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- end row -->


        <div class="row">

            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 m-b-15 header-title">Recent Users</h4>
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                <tr>
                                    <td width="34px">Sl.No</td>
                                    <td>Name</td>
                                    <td>Address</td>
                                    <td>Mobile</td>
                                    <td>Plan Name</td>
                                    <td>Payment Status</td>
                                </tr>

                                </thead>
                                <tbody>

                                </tbody>                                                        
                            </table>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-primary btn-sm">View All</a>
                </div>
            </div>

        </div>
        <!-- end row -->

    </div><!-- container-fluid -->


</div>
@endsection