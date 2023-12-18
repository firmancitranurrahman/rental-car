@extends('layouts.layouts')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1 class="hidden">
          List Data Klinik 
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-hospital"></i> Klinik</a></li>
          <li class="active">List Data Klinik</li>
        </ol>
      </section><br>
      <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List Data Klinik</h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Merk</th>
                                    <th>model</th>
                                    <th>Plat Nomor</th>
                                    <th>Harga Sewa</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomer=1 ;?>
                                @foreach ($mobil as $mob)
                                <tr>
                                    <td>{{ $nomer }}</td>
                                    <td>{{ $mob->merk }}</td>
                                    <td>{{$mob->model  }}</td>
                                    <td>{{$mob->plat_nomor  }}</td>
                                    <td>{{ $mob->harga_sewa }}</td>
                                    <td>{{ $mob->status}}</td>
                                </tr>
                                <?php $nomer++ ;?>
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