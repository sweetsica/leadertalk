{{-- Extends layout --}}
@extends('theme.master')
@section('content-header')
    <title>Danh sách câu hỏi - Leader talk</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/images/favicon.png')}}">
    <!-- Datatable -->
    <link href="{{asset('admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
@endsection
@section('content-body')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Danh sách</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Câu hỏi</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh sách câu hỏi</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display min-w850">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Vấn đề thuộc phòng ban</th>
                                <th>Nội dung câu hỏi</th>
                                <th>Mức độ nghiêm trọng</th>
                                <th>Ngày tạo yêu cầu</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($infos as $info)
                                <tr>
                                    <td style="padding-left: 15px">{{$info->id}}</td>
                                    <td style="text-align: center"><a class="fs-14 text-primary font-w500" href="{{route('question.show',$info->id)}}">{{$info->category}}</a></td>
                                    <td style="padding-left: 15px">{{$info->addtional_info}}</td>
                                    <td style="text-align: center">{{$info->level_problem}}</td>
                                    <td style="text-align: center">{{$info->created_at->format('d-m-Y')}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th style="text-align: center">Phòng ban</th>
                                <th style="text-align: center">Nội dung câu hỏi</th>
                                <th style="text-align: center">Mức độ nghiêm trọng</th>
                                <th style="text-align: center">Ngày tạo</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-footer-script')
    <!-- Required vendors -->
    <script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('admin/js/custom.min.js')}}"></script>
    <script src="{{asset('admin/js/deznav-init.js')}}"></script>

    <!-- Datatable -->
    <script src="{{asset('admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins-init/datatables.init.js')}}"></script>
@endsection
