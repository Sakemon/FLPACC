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
			     <th></th>
			     <th>Notes</th>
                 <th>Action</th>
                 <th>Tanggal</th>
                 <th>Nama</th>
                 <th>Email</th>
                 <th>Phone</th>
                 <th>Plafond</th>
                  <th>Tenor</th>
               </tr>
             </thead>
             <tbody>
             	@foreach($data as $dataz)
				
			<tr>
			<td></td>
			<form action="{{route('Customer.Notes',array($dataz->idcustomer))}}" method="GET">
          <td>
		 
            <input type="text" name="Notes" class="form-control" placeholder="Notes" required>
          
		  </td>
          <td>
              <button type="submit" name="action" value="Accept" class="btn btn-success btn-xs">Accept</a>
              <button type="submit" name="action" value="Refuse" class="btn btn-danger btn-xs">Refuse</button>
          </td>
        </form>
        <td>{{$dataz['created_at_c']}}</td>
				<td>{{$dataz['nama']}}</td>
				<td>{{$dataz['email']}}</td>
				<td>{{$dataz['phone']}}</td>
        <td>Rp {{number_format($dataz->namaPlafond, 2)}}</td>
        <td>{{$dataz->lamaTenor}} Bulan - Rp {{number_format($dataz->cicilan, 2)}}</td>
		
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
