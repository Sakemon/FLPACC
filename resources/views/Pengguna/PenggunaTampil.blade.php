@extends ('Layout.Menu')
@section('page_title','Pengelolaan Pengguna')
@section('section')

  <div class="form-group" style="margin-top:10px;">
    <a href="{{URL::to('PenggunaTambah')}}" class="btn btn-primary"> Tambah Pengguna</a>
  </div>

  <!-- page content -->
    <div class="row" >
     <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;">
       <div class="x_panel">
         <div class="x_content">
           <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
             <thead>
               <tr>
                 <th>Nama</th>
                 <th>Username</th>
                 <th>Email</th>
                 <th>No. HP</th>
                 <th>Departemen</th>
                 <th>Role</th>
                 <th>Aksi</th>
               </tr>
             </thead>
             <tbody>
                 @foreach($pengguna as $penggunaz)
               <tr>
                 <td>{{$penggunaz->namaPengguna}}</td>
                 <td>{{$penggunaz->username}}</td>
                 <td>{{$penggunaz->email}}</td>
                 <td>{{$penggunaz->noTelp}}</td>
                 <td>{{$penggunaz->namaDepartemen}}</td>
                 <td>{{$penggunaz->namaRole}}</td>
                 <td>
                   <a href="{{ route('Pengguna.Hapus',array($penggunaz->idPengguna))}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                   <a href="{{ route('Pengguna.ResetPassword',array($penggunaz->idPengguna))}}" class="btn btn-warning btn-xs">Reset Password</a>
                  </td>
               </tr>
               @endforeach
             </tbody>
           </table>
         </div>
       </div>
     </div>
   </div>
  <!-- /page content -->
@stop
