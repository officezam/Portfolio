@extends('backend.layouts.app')

<!--page level css -->
@section('pagecss')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.colReorder.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.scroller.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap.css')}}" />
    <link href="{{ asset('css/pages/tables.css')}}" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
@endsection
<!--end of page level css-->

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <section class="content-header">
            <h1>Manage All Services</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="/backend">
                        <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                        Dashboard
                    </a>
                </li>
                <li class="active">Manage All Services</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary filterable">
                        <div class="panel-heading clearfix">
                            <div class="panel-title pull-left">
                                <div class="caption">
                                    <i class="livicon"  data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Services
                                </div>
                            </div>
                            <div class="panel-title pull-right">
                                <div class="caption">
                                    <a href="{{route('add-portfolio')}}">
                                        <button class="btn btn-success pull-right">Add Service</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            @if (Session::has('alert-success'))
                                <div class="col-xs-12">
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        {!! Session::get('alert-success') !!}</div>
                                </div>
                            @endif
                            <table class="table table-striped table-responsive" id="table1">
                                <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Title</th>
                                    <th>Short Descrition</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ( $Date as $key => $value )
                                    <tr class="gradeX">
                                        <td>{{++$counter}} </td>
                                        <td>{{$value->title}} </td>
                                        <td>{{ $value->short_desc }}</td>
                                        <td>
                                        <img src="{{ asset('portfolio/fullsize/'.$value->icon) }}" style="width:50%">
                                        </td>
                                        <td>
                                         <a href="{{ url('/backend/portfolio/' . $value->id . '/edit') }}">
                                                <i class="ace-icon fa fa-pencil fa-2x icon-only"></i>
                                            </a> |
                                            <a href="{{ url('/backend/portfolio/' . $value->id . '/delete') }}">
                                                <i class="ace-icon fa fa-trash-o fa-2x icon-only"></i>
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Title</th>
                                    <th>Short Descrition</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- content -->
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
