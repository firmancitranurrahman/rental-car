@extends('layouts.layouts')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1 class="hidden">
            List Data Klinik 
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i> Pengguna</a></li>
            <li class="active">Tambah Pengguna</li>
          </ol>
    </section><br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-11">
                    <div class="box box-danger">
                        <div class="box-header">
                            <h3 class="box-title">Input masks</h3>
                        </div>
                        <div class="box-body">
                            <form action="{{ route('storeuser') }}" method="post">
                                @csrf
                                
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="nama">Email</label>
                                                <input type="text" class="form-control" name="email">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="nama">Alamat</label>
                                                <textarea type="text" class="form-control" name="alamat"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="nama">Sim</label>
                                                <input type="text" class="form-control" name="sim">
                                            </div>
                                        </div>
                                      
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="nama">Telepon</label>
                                                <input type="text" class="form-control" name="telepon">
                                            </div>
                                        </div>
                    
                                                    
                                    </div>
                                    <button class="btn btn-success"type="submit">simpan</button>
                                </div>   
                                
                            </form>
                        </div>
                    </div>
                </div>
              </div>  
          </div>

    </section>

</div>

   
   
@endsection