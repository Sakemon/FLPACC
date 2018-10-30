@extends ('Layout.Menu')
@section('page_title','Customer Page')
@section('section')
        <!-- page content -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                    <!-- {!! Form::open(['url' => 'DepartemenSimpan','class'=>'form-horizontal form-label-left input_mask','method'=>'POST']) !!} -->
                      <div class="col-xs-6">
                          <div class="form-group" style="margin-top:20px;">
                             <form id="main-contact-form" name="contact-form" action="sign-up" method="POST">
                               {{csrf_field()}}
                                <div class="form-group">
                                    Name
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    Email
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    Phone Number
                                    <input type="text" name="number" id="phonenumber" class="form-control" placeholder="Phone Number" required>
                                </div>
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                            </form>
                          </div>
                      </div>

                      <div class="row">
                        @if(Session('msg'))
                          <p>{{Session('msg')}}</p>
                        @elseif($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                      </div>

                      <div class="row">
                        <div class="ln_solid" ></div>
                          <div class="form-group" style="text-align:center">
                            <div class="col-md-12 col-sm-12 col-xs-12" >
                              <a class="btn btn-primary " href="{{URL::to('DepartemenTampil')}}">Batal</a>
                              <!-- {{Form::submit('Tambah',array('class'=>'btn btn-success'))}} -->
                            </div>
                          </div>
                        </div>
                        <!-- {!! Form::close() !!} -->
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
@stop
