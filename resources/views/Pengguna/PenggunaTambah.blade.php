@extends ('Layout.Menu')
@section('page_title','Pengelolaan Pengguna')
@section('section')

        <!-- page content -->
        <div class="row" >
         <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;">
           <div class="x_panel">
             <div class="x_content">
                    <br />
                    {!! Form::open(['url' => 'PenggunaSimpan','class'=>'form-horizontal form-label-left input_mask','method'=>'POST']) !!}
                      <div class="col-xs-6">
                          <div class="form-group" style="margin-top:20px;">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              {{ Form::text('namaPengguna', null, array('placeholder'=>'Nama Lengkap', 'class' => 'form-control')) }}
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              {{ Form::text('username', null, array('placeholder'=>'Username', 'class' => 'form-control')) }}
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              {{ Form::email('email', null, array('placeholder'=>'Email', 'class' => 'form-control')) }}
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">No. HP</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              {{ Form::text('noTelp',null, array('placeholder'=>'No. HP', 'class' => 'form-control')) }}
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Departemen</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              {{ Form::select('namaDepartemen', $departemen, null, ['class' => 'form-control'])}}
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Role</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              {{ Form::select('namaRole', $role, null, ['class' => 'form-control'])}}
                            </div>
                          </div>

                      </div>

                      <div class="row">
                      </div>

                      <div class="row">
                        <div class="ln_solid" ></div>
                          <div class="form-group" style="text-align:center">
                            <div class="col-md-12 col-sm-12 col-xs-12" >
                              <a class="btn btn-primary " href="{{URL::to('PenggunaTampil')}}">Batal</a>
                              {{Form::submit('Tambah',array('class'=>'btn btn-success'))}}
                            </div>
                          </div>
                        </div>
                        {!! Form::close() !!}
                  </div>
                </div>
              </div>
            </div>
@stop
