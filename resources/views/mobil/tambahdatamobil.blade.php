@extends('layouts.layouts')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1 class="hidden">
            List Data Klinik 
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-hospital"></i> Dokter</a></li>
            <li class="active">Tambah Dokter</li>
          </ol>
    </section><br>
    <section class="content">
        <div class="row">
        <form method="post" action="/storemobil">
            @csrf
          <div class="col-md-8">
              <div class="box box-danger">
                  <div class="box-header">
                      <h3 class="box-title">Tambah Data Mobil</h3>
                  </div>
                  <div class="box-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">Merk</label>
                                        <input type="text" class="form-control" name="merk">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">Model</label>
                                        <select class="form-control" name="model" id="">
                                           <option value="">Pilih Model</option>
                                           <option value="sedan">Sedan</option>
                                           <option value="pickup">Pic Up</option>
                                        </select>
                                    </div>
                                </div>
                              
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">Plat Nomor</label>
                                        <input type="text" class="form-control" name="plat_nomor">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">Harga Sewa</label>
                                        <input type="text" class="form-control" name="plat_nomor">
                                    </div>
                                </div>        
                                            
                            </div>
                            <button class="btn btn-success"type="submit">simpan</button>
                        </div>                     
                  </div>
              </div>
          </div>
          <div class="col-md-4">
            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">Tambah Foto Profil</h3>
                </div>
            </div>
          </div>
        </form>  
        </div>
  
    </section>

</div>

   
   
@endsection