@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Sửa môn học</h4>
                </div>
                <div class="card-body">
                    <div class="col-4 offset-4">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Tên môn học</label>
                                <input type="text" name="name" value="{{$model->name}}" class="form-control">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>    
        </div>
    </div>    
@endsection
