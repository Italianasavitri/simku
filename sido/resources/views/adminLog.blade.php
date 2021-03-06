@extends('layouts.master-admin')

@section('content-header')
<section class="content-header">
    <h3>Log Kegiatan</h3>

    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Log Kegiatan</li>
    </ol>
</section>
@endsection

@section('content')
<div class="row">
            <div class="col-md-12">
                <div class="box">
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Nama User</th>
                        <th>Action</th>
                        <th>Hasil Perubahan</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>22 Nov 2018</td>
                        <td>16.00 AM</td>
                        <td>Devian</td>
                        <td>Edit</td>
                        <td>Folder</td>
                      </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
@endsection

@section('logout')
    <a href="{{ route('admin.logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();"><i class="fa fa-arrow-left"></i>
    Logout
    </a>
    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
    </form>
@endsection