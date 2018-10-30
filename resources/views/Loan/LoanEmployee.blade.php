@extends ('Layout.Menu')
@section('page_title','Customer Page')
@section('section')
<!-- page content -->
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">

    <div class="x_panel" style="margin-top:10px; margin-bottom:10px; height:100%; weight:100%; overflow-y">
      <div class="x_content">
        <a><center><img src={{($linkplafond->linkPlafond)}} width="400px;" class="img-responsive"/></center></a>
        <br />
        {!! Form::open(['url' => 'EmployeeSave','class'=>'form-horizontal form-label-left input_mask','method'=>'POST']) !!}
		
		
        <div class="col-xs-12 col-lg-8">
		<div class="form-group" style="margin-top:20px;">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Karyawan</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              {{ Form::radio('status', 'Tetap', false) }}<label>&nbsp;Tetap</label>
			  {{ Form::radio('status', 'Kontrak', false) }}<label>&nbsp;Kontrak</label>
			  {{ Form::radio('status', 'Outsource', false) }}<label>&nbsp;Outsource</label>
            </div>
          </div>
          <div class="form-group" style="margin-top:20px;">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Karyawan</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              {{ Form::text('nama', null, array('placeholder'=>'Full Name', 'class' => 'form-control', 'required')) }}
            </div>
          </div>
          <div class="form-group" style="margin-top:20px;">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">NPK</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              {{ Form::text('npk', null, array('placeholder'=>'NPK', 'class' => 'form-control', 'required')) }}
            </div>
          </div>
          <div class="form-group" style="margin-top:20px;">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Cabang</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              {{ Form::text('cabang', null, array('placeholder'=>'Cabang', 'class' => 'form-control', 'required')) }}
            </div>
          </div>
        </div>

        <div class="row">
        </div>

        {{ Form::hidden('plafond', $plafond , array('placeholder'=>'Nama Departemen', 'class' => 'form-control', 'readonly')) }}
        {{ Form::hidden('tenor', $plafond , array('placeholder'=>'Nama Departemen', 'class' => 'form-control', 'readonly')) }}

        <div class="row">
          <div class="ln_solid" ></div>
          <div class="form-group" style="text-align:center">
            <div class="col-md-12 col-sm-12 col-xs-12" >

              {{Form::submit('Submit',array('class'=>'btn btn-primary'))}}
            </div>
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@stop
