@extends('layouts.dashboard')
@section('css-before')
@endsection

@section('css-after')
    <style>
        .card {
            border-top: none !important;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Support Ticket List</h4>
                        <h6 class="card-subtitle">List of ticket opend by customers</h6>
                        <div class="row m-t-40">
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card">
                                    <div class="box bg-info text-center">
                                        <h1 class="font-light text-white">2,064</h1>
                                        <h6 class="text-white">Total Available Services</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card">
                                    <div class="box bg-primary text-center">
                                        <h1 class="font-light text-white">1,738</h1>
                                        <h6 class="text-white">Total No Of Registered Mentor</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card">
                                    <div class="box bg-success text-center">
                                        <h1 class="font-light text-white">1100</h1>
                                        <h6 class="text-white">Total No Of Incubator</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card">
                                    <div class="box bg-dark text-center">
                                        <h1 class="font-light text-white">964</h1>
                                        <h6 class="text-white">Total Client Dealing With</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card">
                                    <div class="box bg-dark text-center">
                                        <h1 class="font-light text-white">964</h1>
                                        <h6 class="text-white">Total Client Dealing With</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card">
                                    <div class="box bg-dark text-center">
                                        <h1 class="font-light text-white">964</h1>
                                        <h6 class="text-white">Total Client Dealing With</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card">
                                    <div class="box bg-dark text-center">
                                        <h1 class="font-light text-white">964</h1>
                                        <h6 class="text-white">Total Client Dealing With</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card">
                                    <div class="box bg-dark text-center">
                                        <h1 class="font-light text-white">964</h1>
                                        <h6 class="text-white">Total Client Dealing With</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <div class="table-responsive">
                            <table id="demo-foo-addrow"
                                   class="table m-t-30 table-hover no-wrap contact-list footable footable-1 footable-paging footable-paging-center breakpoint-lg"
                                   data-paging="true" data-paging-size="7" style="">
                                <thead>
                                <tr class="footable-header">


                                    <th class="footable-first-visible" style="display: table-cell;">ID #</th>
                                    <th style="display: table-cell;">Opened By</th>
                                    <th style="display: table-cell;">Cust. Email</th>
                                    <th style="display: table-cell;">Sbuject</th>
                                    <th style="display: table-cell;">Status</th>
                                    <th style="display: table-cell;">Assign to</th>
                                    <th class="footable-last-visible" style="display: table-cell;">Date</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tr>


                                    <td class="footable-first-visible" style="display: table-cell;">1011</td>
                                    <td style="display: table-cell;">
                                        <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user"
                                                                          class="img-circle"> Genelia Deshmukh</a>
                                    </td>
                                    <td style="display: table-cell;">genelia@gmail.com</td>
                                    <td style="display: table-cell;">How to customize the template?</td>
                                    <td style="display: table-cell;"><span class="label label-warning">New</span></td>
                                    <td style="display: table-cell;">Johnathon</td>
                                    <td class="footable-last-visible" style="display: table-cell;">14-10-2017</td>
                                </tr>
                                <tr>


                                    <td class="footable-first-visible" style="display: table-cell;">1224</td>
                                    <td style="display: table-cell;">
                                        <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user"
                                                                          class="img-circle"> Ritesh Deshmukh</a>
                                    </td>
                                    <td style="display: table-cell;">ritesh@gmail.com</td>
                                    <td style="display: table-cell;">How to change colors</td>
                                    <td style="display: table-cell;"><span class="label label-success">Complete</span>
                                    </td>
                                    <td style="display: table-cell;">Salman khan</td>
                                    <td class="footable-last-visible" style="display: table-cell;">13-10-2017</td>
                                </tr>
                                <tr>


                                    <td class="footable-first-visible" style="display: table-cell;">1024</td>
                                    <td style="display: table-cell;">
                                        <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user"
                                                                          class="img-circle"> Govinda Mauli</a>
                                    </td>
                                    <td style="display: table-cell;">govinda@gmail.com</td>
                                    <td style="display: table-cell;">How to set Horizontal nav</td>
                                    <td style="display: table-cell;"><span class="label label-success">Complete</span>
                                    </td>
                                    <td style="display: table-cell;">Hritik Roshan</td>
                                    <td class="footable-last-visible" style="display: table-cell;">13-10-2017</td>
                                </tr>
                                <tr>


                                    <td class="footable-first-visible" style="display: table-cell;">2124</td>
                                    <td style="display: table-cell;">
                                        <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user"
                                                                          class="img-circle"> Raja Mauli</a>
                                    </td>
                                    <td style="display: table-cell;">bahubali@gmail.com</td>
                                    <td style="display: table-cell;">How this will connect with bahubali</td>
                                    <td style="display: table-cell;"><span class="label label-inverse">Pending</span>
                                    </td>
                                    <td style="display: table-cell;">Hritik Roshan</td>
                                    <td class="footable-last-visible" style="display: table-cell;">12-10-2017</td>
                                </tr>
                                <tr>


                                    <td class="footable-first-visible" style="display: table-cell;">3124</td>
                                    <td style="display: table-cell;">
                                        <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user"
                                                                          class="img-circle"> Rana Dagubati</a>
                                    </td>
                                    <td style="display: table-cell;">ranabati@gmail.com</td>
                                    <td style="display: table-cell;">How to set navigation</td>
                                    <td style="display: table-cell;"><span class="label label-success">Complete</span>
                                    </td>
                                    <td style="display: table-cell;">Hritik Roshan</td>
                                    <td class="footable-last-visible" style="display: table-cell;">12-10-2017</td>
                                </tr>
                                <tr>


                                    <td class="footable-first-visible" style="display: table-cell;">1611</td>
                                    <td style="display: table-cell;">
                                        <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user"
                                                                          class="img-circle"> Tony Deshmukh</a>
                                    </td>
                                    <td style="display: table-cell;">genelia@gmail.com</td>
                                    <td style="display: table-cell;">How to customize the template?</td>
                                    <td style="display: table-cell;"><span class="label label-warning">New</span></td>
                                    <td style="display: table-cell;">Johnathon</td>
                                    <td class="footable-last-visible" style="display: table-cell;">14-10-2017</td>
                                </tr>
                                <tr>


                                    <td class="footable-first-visible" style="display: table-cell;">4224</td>
                                    <td style="display: table-cell;">
                                        <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user"
                                                                          class="img-circle"> Ritesh Deshmukh</a>
                                    </td>
                                    <td style="display: table-cell;">ritesh@gmail.com</td>
                                    <td style="display: table-cell;">How to change colors</td>
                                    <td style="display: table-cell;"><span class="label label-success">Complete</span>
                                    </td>
                                    <td style="display: table-cell;">Salman khan</td>
                                    <td class="footable-last-visible" style="display: table-cell;">13-10-2017</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr class="footable-paging">
                                    <td colspan="7">
                                        <div class="footable-pagination-wrapper">
                                            <ul class="pagination justify-content-center">
                                                <li class="footable-page-nav disabled" data-page="first"><a
                                                        class="footable-page-link" href="#">«</a></li>
                                                <li class="footable-page-nav disabled" data-page="prev"><a
                                                        class="footable-page-link" href="#">‹</a></li>
                                                <li class="footable-page visible active" data-page="1"><a
                                                        class="footable-page-link" href="#">1</a></li>
                                                <li class="footable-page visible" data-page="2"><a
                                                        class="footable-page-link" href="#">2</a></li>
                                                <li class="footable-page visible" data-page="3"><a
                                                        class="footable-page-link" href="#">3</a></li>
                                                <li class="footable-page-nav" data-page="next"><a
                                                        class="footable-page-link" href="#">›</a></li>
                                                <li class="footable-page-nav" data-page="last"><a
                                                        class="footable-page-link" href="#">»</a></li>
                                            </ul>
                                            <div class="divider"></div>
                                            <span class="label label-primary">1 of 3</span></div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar ps ps--theme_default" data-ps-id="407553c6-71ff-e149-6ecf-cf74b5a7039e">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
                </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme working">1</a>
                        </li>
                        <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a>
                        </li>
                        <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a>
                        </li>
                        <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a>
                        </li>
                        <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a>
                        </li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img"
                                                              class="img-circle"> <span>Varun Dhavan <small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img"
                                                              class="img-circle"> <span>Genelia Deshmukh <small
                                        class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img"
                                                              class="img-circle"> <span>Ritesh Deshmukh <small
                                        class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img"
                                                              class="img-circle"> <span>Arijit Sinh <small
                                        class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img"
                                                              class="img-circle"> <span>Govinda Star <small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img"
                                                              class="img-circle"> <span>John Abraham<small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img"
                                                              class="img-circle"> <span>Hritik Roshan<small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img"
                                                              class="img-circle"> <span>Pwandeep rajan <small
                                        class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;">
                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
@endsection

@section('inner-script-files')

@endsection

@section('innerScript')
    <script>

    </script>
@endsection
