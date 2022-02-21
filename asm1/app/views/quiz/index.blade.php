@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Danh sách Quiz</h4>
                    <form id="search_form" action="" method="get">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Môn học</label>
                                    <select id="select_subject" name="subject_id" class="form-control">
                                        @foreach ($subjects as $item)
                                            <option {{$item->id == $subjectId ? "selected" : "" }} value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <th>STT</th>
                            <th>Tên Quiz</th>
                            <th>Môn</th>
                            <th>Số câu</th>
                            <th>Điểm trung bình</th>
                            <th>
                                <a href="" class="btn btn-success">Tạo mới</a>
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($quizs as $q)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$q->name}}</td>
                                    <td>{{$q->subject->name}}</td>
                                    <td>{{count($q->questions)}}</td>
                                    <td>
                                        @php
                                            $avgScore = $q->getAvgScore();
                                            $avgScore = $avgScore != null ? round($avgScore, 2) : 0;
                                        @endphp
                                        {{$avgScore}}
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-primary">Sửa</a>
                                        <a href="" class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
<script>
    $('#select_subject').on('change', function(){
        $('form#search_form').trigger('submit');
    })
</script>
@endsection