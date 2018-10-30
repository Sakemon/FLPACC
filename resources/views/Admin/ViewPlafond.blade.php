@extends ('Layout.Admin')
@section('page_title','Plafond List')
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
                 <th>PLafond</th>
                 <th>Action</th>
               </tr>
             </thead>
             <tbody>
             	@foreach($data as $dataz)
			<tr>
				<td>Rp {{ number_format($dataz->namaPlafond, 2) }}</td>
          <td>
              <a href="{{ route('Plafond.Edit',array($dataz->idPlafond))}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
              <a href="{{ route('Tenor.View',array($dataz->idPlafond))}}" class="btn btn-warning btn-xs">Tenor</a>
          </td>
        </form>
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
