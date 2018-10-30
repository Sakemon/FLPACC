@extends ('Layout.Menu')
@section('page_title','Credit Program')
@section('section')
        <!-- page content -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                    {!! Form::open(['url' => 'DepartemenSimpan','class'=>'form-horizontal form-label-left input_mask','method'=>'POST']) !!}
                      <div class="col-xs-6">
                          <div class="form-group" style="margin-top:20px;">
                           <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    Pencairan
                                    <input type="text" name="number" class="form-control" id="number" placeholder="Pencairan" required>
                                </div>
                                <div class="form-group">
                                    Angsuran
                                    <select name="name" class="form-control" placeholder="Angsuran" required>
                                        <option value="6" selected>6 Bulan</option>
                                        <option value="12">12 Bulan</option>
                                        <option value="24">24 Bulan</option>
                                        <option value="36">36 Bulan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    Cicilan
                                    <input type="text" name="number" id="cicilan" class="form-control" placeholder="Cicilan" required>
                                </div>
                               <!--  <button type="submit" class="btn btn-primary">SUBMIT</button> -->
                            </form>
                          </div>
                      </div>

                      <div class="row">
                        <p id="errors" class="text-danger"></p>
                      </div>

                      <div class="row">
                        <div class="ln_solid" ></div>
                          <div class="form-group" style="text-align:center">
                            <div class="col-md-12 col-sm-12 col-xs-12" >
                              <a class="btn btn-primary " href="{{URL::to('DepartemenTampil')}}">Batal</a>
                              {{Form::submit('Tambah',array('class'=>'btn btn-success'))}}
                            </div>
                          </div>
                        </div>
                        {!! Form::close() !!}
                  </div>
                </div>
              </div>
            </div>

    <style type="text/css">
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
