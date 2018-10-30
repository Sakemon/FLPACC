@extends ('Layout.Menu')
@section('page_title','Credit Program')
@section('section')
<!-- page content -->
<!-- <div class="row" > -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel" style="margin-top:10px; margin-bottom:10px; height:100%; weight:100%; overflow-y">
      <div class="x_content" >
        <a><center><img src="public/digimart/mgu.jpg" width="400px;" class="img-responsive"/></center></a>
        <p style="font-style: italic; font-size: 8px; text-align: center; margin-top: 10px;">Untuk DANA PEMBIAYAAN jumlah lain, silahkan disampaikan saat petugas kami menghubugi anda</p>
        <br />
        {!! Form::open(['url' => 'LoanEmployee','class'=>'form-horizontal form-label-left input_mask','method'=>'GET']) !!}
        <div class="col-xs-12 col-lg-8">
          <div class="form-group" style="margin-top:0px;">
            
          </div>
          <div class="form-group" style="margin-top:20px;">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: center;">Instalment</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <table>
                <thead>
                  <tr>
                    <th>Apply</th>
					<th>Plafond</th>
                    <th>Tenor</th>
                    <th>First Installment</th>
					<th>Last Installment</th>
                  </tr>
                </thead>
                <tbody style="color: white;">
                  @foreach($tenor as $data)
                  <tr>
                    <td>{{ Form::radio('tenor', $data->idTenor, false) }}<label>&nbsp;</label></td>
                    <td>Rp. {{number_format($data->namaPlafond,2)}}</td>
					{{ Form::hidden('plafond', $data->idPlafond , array('placeholder'=>'', 'class' => 'form-control', 'readonly')) }}
					<td>{{$data->lamaTenor}} Bulan</td>
                    <td>Rp. {{number_format($data->cicilan,2)}}</td>
					<td>Rp. {{number_format($data->cicilan2,2)}}</td>


                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="row">

        </div>

        <div class="row">
          <div class="ln_solid" ></div>
          <div class="form-group" style="text-align:center">
            <div class="col-md-12 col-sm-12 col-xs-12" >
              <!-- <a class="btn btn-primary " href="{{URL::to('viewplafond')}}">Batal</a> -->
              {{Form::submit('Submit',array('type'=>'submit','class'=>'btn btn-primary'))}}
            </div>
          </div>
        </div>

        {{ Form::close() }}
      </div>
    </div>
  <!-- </div> -->
</div>
<style type="text/css">

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid white;
  border-radius: 5px;
  text-align: center;
  padding: 2px;
}

/*tr:nth-child(even) {
background-color: lightgrey;
}*/
tr{
  background-color: #429dff;
}
thead > tr {
  background-color: #429dff;
  color: white;
}

#contact {
  position: relative;
  overflow: hidden;
}
#contact .container-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(69, 174, 214, 0.3);
  z-index: 1;
}
#contact .contact-form {
  background: rgba(255, 255, 255, 0.8);
  padding: 20px;
  margin-right: 50px;
  margin-top: 50px;
}
#contact .contact-form h3 {
  margin-top: 0;
}
/*table > tbody > tr > td{
border: none;
padding: 0px;
}
table > tbody > tr > td > label{
display: block;
border: 1px solid black;
}*/
</style>

<!-- /page content -->
<script src="public/vendors/jquery/dist/jquery.min.js"></script>

<script type="text/javascript">
$.ajaxSetup({

  headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

  }

});
$(document).ready(function(){
  var numberPrice = 0;
  $("#number").bind('keypress',function(e){
    var code = e.keyCode || e.which;
    if(code == 13){
      // GET DATA
      $.ajax({
        type : 'get',
        url : 'searchCredit',
        data : {_token : '<?php echo csrf_token() ?>', number : $("#number").val()},
        // dataType: 'json',
        // cache : false,
        // processData: false,
        success:function(data){
          numberPrice = data;
          console.log(numberPrice);
          $("#cicilan").val(Math.round(numberPrice / 6));
          $("#errors").html("");
        },
        error: function (){
          $("#errors").html("Data not found");
        }
      });
      //===================
    }
  });
  $("select").change(function(){
    $("select option:selected").each(function(){
      console.log($(this).val());
      var valueBulan = $(this).val();
      $("#cicilan").val(Math.round(numberPrice / valueBulan));
    });
  }).trigger("change");
});
</script>
@stop
