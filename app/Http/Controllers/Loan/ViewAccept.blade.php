@extends ('Layout.Data')
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
                 <th>Action</th>
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
        <!-- <td>{{$dataz['updated_at']}}</td> -->
				<td>
					@if($dataz->flag=="0")
	                <a href="{{ route('Customer.Accept',array($dataz->idcustomer))}}" class="btn btn-danger btn-xs">Refuse</a>
	                @else
                <a href="{{ route('Customer.Refuse',array($dataz->idcustomer))}}" class="btn btn-success btn-xs">Accept</a>
	                @endif
                   <!-- <label class="switch">
                   	<input type="checkbox">
                   	<div class="switch-btn"></div>
                    </label>
                   <style type="text/css">
                   	.switch{
                   		opacity: 0;
                   	}
                   	.switch-btn{
                   		width: 20px;
                   		height: 10px;
                   		background: #e5e5e5;
                   		position: relative;
                   		cursor: pointer;
                   		border-radius: 20px;
                   	}
                   	.switch-btn:before{
                   		position: absolute;
                   		height: 36px;
                   		width: 36px;
                   		background: #FFF;
                   		border-radius: 50%;	
                   		transition: all 150ms ease-out;
                   	}
                   	input[type=checkbox]:checked + .switch-btn:before{
                   		left: 42px;	
                   	}
                   	input[type=checkbox]:checked + .switch-btn{
                   		background: #47CB8F;
                   	}
                   </style> -->
                </td>
                <td><input type="text" name="notes" style="height: 25px;" placeholder="notes"></td>
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
