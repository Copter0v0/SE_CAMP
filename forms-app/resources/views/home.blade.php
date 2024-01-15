@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputFirstName1">ชื่อ</label>
              <input type="Text" class="form-control" id="exampleInputFirstName1" placeholder="กรอกชื่อ">
            </div>
            <div class="form-group">
              <label for="exampleInputLastName">สกุล</label>
              <input type="Text" class="form-control" id="exampleInputLastName1" placeholder="กรอกนามสกุล">
            </div>

            <!-- Date dd/mm/yyyy -->
            <div class="form-group">
                <label>วัน/เดือน/ปีเกิด</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                  </div>
                  <input type="Date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label for="exampleInputAge">อายุ</label>
                <input type="Number" class="form-control" id="exampleInputAge1" placeholder="กรอกอายุ">
              </div>
              <!-- radio -->
              <div class="form-group clearfix">
                <label>เพศ</label>
                <div class="icheck-primary d-inline">
                  <input type="radio" id="radioPrimary1" name="r1" checked>
                  <label for="radioPrimary1">
                    ชาย
                  </label>
                </div>
                <div class="icheck-primary d-inline">
                  <input type="radio" id="radioPrimary2" name="r1">
                  <label for="radioPrimary2">
                    หญิง
                  </label>
                </div>
              </div>
              <!-- /.form group -->
            <div class="form-group">
              <label for="exampleInputFile">รูป</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">เลือกรูป</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>
            <!-- textarea -->
            <div class="form-group">
                <label>ที่อยู่</label>
                <textarea class="form-control" rows="3" placeholder="กรอกที่อยู่"></textarea>
            </div>
                <div class="form-group">
                    <label>สีที่ชอบ</label>
                  <select class="custom-select form-control-border" id="exampleSelectBorder">
                    <option value=""
                            disabled
                            selected>-</option>
                    <option style="color: red;">สีแดง</option>
                    <option style="color: rgb(162, 162, 24);">สีเหลือง</option>
                    <option style="color: green">สีเขียว</option>
                    <option>สีขาว</option>
                    <option>สีดำ</option>
                    <option style="color: pink">สีชมพู</option>
                    <option style="color: blue;">สีน้ำเงิน</option>
                    <option style="color: cyan;">สีฟ้า</option>
                    <option style="color: purple;">สีม่วง</option>
                  </select>
            </div>
            <!-- radio -->
            <div class="form-group">
                <label>แนวเพลงที่ชอบ</label>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio1">
                  <label for="customRadio1" class="custom-control-label">เพื่อชีวิต</label>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio2" checked>
                  <label for="customRadio2" class="custom-control-label">ลูกทุ่ง</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" id="customRadio3" name="customRadio3" checked>
                    <label for="customRadio2" class="custom-control-label">อื่นๆ</label>
                  </div>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">ยินยอมให้เก็บข้อมูล</label>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-default float-right">Reset</button>
          </div>
    </div>
    <!-- /.content -->
@endsection
