@extends ('Layout.Admin')
@section('page_title','Customer List')
@section('section')

  <!-- <div class="form-group" style="margin-top:10px;">
    <a href="{{URL::to('DepartemenTambah')}}" class="btn btn-primary"> Tambah Departemen</a>
  </div> -->

  <!-- page content -->
    <div class="row" >
     <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;">
       <div class="x_panel">
         <div class="x_content">
           <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
             <thead>
               <tr>
                 <th>Tanggal</th>
                 <th>Nama</th>
                 <th>Email</th>
                 <th>Phone</th>
                 <!-- <th>Updated</th> -->
                 <!-- <th>Action</th> -->
                 <th>Notes</th>
               </tr>
             </thead>
             <tbody>
             	@foreach($data as $dataz)
			<tr>
        <td>{{$dataz['created_at']}}</td>
				<td>{{$dataz['nama']}}</td>
				<td>{{$dataz['email']}}</td>
				<td>{{$dataz['phone']}}</td>
        <td>{{$dataz['notes']}}</td>
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
