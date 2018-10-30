@extends ('Layout.MenuEdit')
@section('page_title','Edit Plafond')
@section('section')

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                    {{Form::model($data, array('route'=>array('Plafond.Update', $data->idPlafond),'class'=>'form-horizontal form-label-left input_mask'))}}
                      <div class="col-xs-6">
                          <div class="form-group" style="margin-top:20px;">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              {{ Form::text('namaPlafond', Input::old('namaPlafond'), array('class' => 'form-control')) }}
                            </div>
                          </div>
                      </div>

                      <div class="row">

                      </div>

                      <div class="row">
                        <div class="ln_solid" ></div>
                          <div class="form-group" style="text-align:center">
                            <div class="col-md-12 col-sm-12 col-xs-12" >
                              <a class="btn btn-primary " href="{{URL::to('viewplafond')}}">Batal</a>
                              {{Form::submit('Ubah',array('type'=>'submit','class'=>'btn btn-danger'))}}
                            </div>
                          </div>
                        </div>

                    {{ Form::close() }}
                  </div>
                </div>
              </div>
            </div>

        <!-- /page content -->
@stop
