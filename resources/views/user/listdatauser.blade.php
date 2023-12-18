@extends('layouts.layouts')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1 class="hidden">
          List Data Klinik 
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-user"></i> User</a></li>
          <li class="active">List Data User</li>
        </ol>
      </section><br>
      <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List Data User</h3>
                    </div>
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Sim</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor=1 ;?>
                                @foreach ($user as $u)
                                <tr>
                                    <td>{{ $nomor }}</td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->sim }}</td>
                                </tr>
                                <?php $nomor++ ;?>
                                @endforeach

                               
                            </tbody>
                        
                        </table>
                    </div>
                </div>
            </div>
        </div>

      </section>
</div>
    
@endsection