@extends('backend.layouts.app')

<!--page level css -->
@section('pagecss')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.colReorder.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.scroller.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap.css')}}" />
    <link href="{{ asset('css/pages/tables.css')}}" rel="stylesheet" type="text/css">
@endsection
<!--end of page level css-->

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <section class="content-header">
            <h1>All Employee</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">
                        <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                        Dashboard
                    </a>
                </li>
                <li class="active">All Employee</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success filterable" style="overflow:auto;">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                Re-order Columns
                            </h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered" id="table2">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>User Name</th>
                                    <th>
                                        User E-mail
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>
                                        JacobThornton
                                    </td>
                                    <td>
                                        JacobThornton@test.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>
                                        Larrythe Bird
                                    </td>
                                    <td>
                                        LarrytheBird@test.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>
                                        Larrythe Bird
                                    </td>
                                    <td>
                                        LarrytheBird@test.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>
                                        Larrythe Bird
                                    </td>
                                    <td>
                                        LarrytheBird@test.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>
                                        Larrythe Bird
                                    </td>
                                    <td>
                                        LarrytheBird@test.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>
                                        Larrythe Bird
                                    </td>
                                    <td>
                                        LarrytheBird@test.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>
                                        Larrythe Bird
                                    </td>
                                    <td>
                                        LarrytheBird@test.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>
                                        Larrythe Bird
                                    </td>
                                    <td>
                                        LarrytheBird@test.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>
                                        Larrythe Bird
                                    </td>
                                    <td>
                                        LarrytheBird@test.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>
                                        Larrythe Bird
                                    </td>
                                    <td>
                                        LarrytheBird@test.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>
                                        Larrythe Bird
                                    </td>
                                    <td>
                                        LarrytheBird@test.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>
                                        Larrythe Bird
                                    </td>
                                    <td>
                                        LarrytheBird@test.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>13.</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>
                                        Larrythe Bird
                                    </td>
                                    <td>
                                        LarrytheBird@test.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>14.</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>
                                        Larrythe Bird
                                    </td>
                                    <td>
                                        LarrytheBird@test.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>15.</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>
                                        Larrythe Bird
                                    </td>
                                    <td>
                                        LarrytheBird@test.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>16.</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>
                                        Larrythe Bird
                                    </td>
                                    <td>
                                        LarrytheBird@test.com
                                    </td>
                                </tr>
                                <tr>
                                    <td>17.</td>
                                    <td>Larryss</td>
                                    <td>the Bird</td>
                                    <td>
                                        Larrythe Bird
                                    </td>
                                    <td>
                                        LarrytheBird@test.com
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--row end-->
        </section>
    </aside>
@endsection
<!-- begining of page level js -->
@section('pagejs')
    <script type="text/javascript" src="{{ asset('vendors/datatables/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/dataTables.tableTools.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/dataTables.colReorder.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/dataTables.scroller.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/dataTables.bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/pages/table-advanced.js')}}"></script>
@endsection
<!-- end of page level js -->
