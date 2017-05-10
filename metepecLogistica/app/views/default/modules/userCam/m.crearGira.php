 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Gira
      <small>crear</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li><a href="#">Gira</a></li>
      <li class="active">crear</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Datos generales </h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <div class="box-body">
            <div class="col-md-12">
              <div class="pull-right">
                <div class="form-group">
                  <label>Pregira</label>
                    <div class="input-group">
                      <label class="radio-inline">
                        <input type="radio" name="Datos[btnRadioCumplio]" value="SI">SI
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="Datos[btnRadioCumplio]" value="NO">NO
                      </label>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row ">
                <div class="col-md-3 pull-right">
                  <!-- Date -->
                  <div class="form-group">
                    <label>FOLIO:</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-hashtag"></i>
                      </div>
                      <input type="text" class="form-control pull-right" >
                    </div>
                  </div>
                </div>
                <div class="col-md-3 pull-right">
                      <!-- Folio -->
                  <div class="form-group">
                    <label>FECHA:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker">
                      </div>
                  </div>
                </div>
              </div>
            </div>
             <!-- DDAAATOSSO -->
              
              <!-- DDAAATOSSO -->
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>NOMBRE DEL EVENTO</label>
                      <input type="text" class="form-control">
                  </div>
                </div>
              </div>  <!-- /.row -->
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label>COLONIA</label>
                      <select class="form-control">
                        <option>Seleccionar enlace</option>
                      </select>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <label>DOMICILIO</label>
                      <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>ASISTENTES</label>
                      <input type="text" class="form-control">
                  </div>
                </div>
              </div>  <!-- /.row -->

              <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <label>FED</label>
                    <div class="input-group">
                      <input type="text" class="form-control pull-right">
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>GEM</label>
                    <div class="input-group">
                      <input type="text" class="form-control pull-right">
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>MUNICIPAL</label>
                    <div class="input-group">
                      <input type="text" class="form-control pull-right">
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>ONG</label>
                    <div class="input-group">
                      <input type="text" class="form-control pull-right">
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>CBN PRI</label>
                    <div class="input-group">
                      <input type="text" class="form-control pull-right">
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>CDE PRI</label>
                    <div class="input-group">
                      <input type="text" class="form-control pull-right">
                    </div>
                  </div>
                </div>
              </div>               

            </div>
              <!-- /.box-body -->
            <div class="box-footer">
              <button  class="btn btn-success pull-right">Agregar</button>
            </div>
          </div>
          <!-- /.box -->


        <!--DATOSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS-->
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs pull-right">
            <li><a href="#int-pre" data-toggle="tab">Integrantes Presidium</a></li>
            <li><a href="#int-cab" data-toggle="tab">Integrantes Cabildo</a></li>
            <li class="active"><a href="#act-agenda" data-toggle="tab">Actividades Agenda</a></li>
          </ul>
          <div class="tab-content no-padding">  
            <div class="chart tab-pane active" id="act-agenda">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Actividades Agenda </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                  <div class="col-md-12">
                    <div class="pull-right">
                      <div class="form-group">
                        <label>Pregira</label>
                        <div class="input-group">
                          <label class="radio-inline">
                            <input type="radio" name="Datos[btnRadioCumplio]" value="SI">SI
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="Datos[btnRadioCumplio]" value="NO">NO
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>DEPENDENCIA</label>
                          <select name="Datos[selectDependencia]" class="form-control">
                            <option>Seleccionar dependencia</option>
                            <option>Dirección de gobierno</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>ENLACE</label>
                          <select name="Datos[selectEnlace]" class="form-control">
                            <option>Seleccionar enlace</option>
                            <option>Octavio Domiguez Ayala</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>TELEFONO</label>
                          <select name="Datos[selectTelefono]" class="form-control">
                            <option>Seleccionar telefono</option>
                            <option>7233456789</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>EMAIL</label>
                          <select name="Datos[selectEmail]" class="form-control">
                            <option>Seleccionar email</option>
                            <option>prueba@outlook.com</option>
                          </select>
                      </div>
                    </div>
                  </div> <!-- /.row -->

                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>ASISTIÓ</label>
                        <div class="input-group">
                          <label class="radio-inline">
                            <input type="radio" name="Datos[btnRadioAsistencia]" value="SI">SI
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="Datos[btnRadioAsistencia]" value="NO">NO
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>COMISIONES</label>
                          <input type="text" name="Datos[comisiones]" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>CUMPLIÓ</label>
                        <div class="input-group">
                          <label class="radio-inline">
                            <input type="radio" name="Datos[btnRadioCumplio]" value="SI">SI
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="Datos[btnRadioCumplio]" value="NO">NO
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button onclick="agregarConvocados()" class="btn btn-success pull-right">Agregar</button>
                </div>
              </div><!-- /.box -->

          <!--DATOSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS-->        
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h4 class="bg-primary text-center pad-basic no-btm">AGENDA</h4>
                </div>
                <div class="box-body">
                  <div class="col-md-12">
                    <div class="col-lg-12 col-xs-12 table-responsive">
                      <table class="table table-hover table-bordered table-condensed text-center">
                        <thead>
                          <th>DEPENDENCIA</th>
                          <th>ENLACE</th>
                          <th>TELEFONO</th>
                          <th>EMAIL</th>
                          <th>ASISTIO</th>
                          <th>COMISIONES</th>
                          <th>CUMPLIÓ</th>
                          <th>ELIMINAR</th>
                        </thead>
                        <tbody id="filaTbody">
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="box-footer">
                  <div class="pull-right">
                    <input type="submit" name="btnGuardarPregira" class="btn btn-primary disabled" id="bntGuardar">
                  </div>
                </div>
              </div>
            </div>
            <div class="chart tab-pane" id="int-cab">
                  <!--DATOSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS-->        
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Integrantes Cabildo </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>NOMBRE</label>
                        <select name="Datos[selectDependencia]" class="form-control">
                          <option>Seleccionar dependencia</option>
                          <option>Dirección de gobierno</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>CARGO</label>
                          <select name="Datos[selectEnlace]" class="form-control">
                            <option>Seleccionar enlace</option>
                            <option>Octavio Domiguez Ayala</option>
                          </select>
                      </div>
                    </div>   
                  </div> <!-- /.row -->
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>ASISTIÓ</label>
                        <div class="input-group">
                          <label class="radio-inline">
                            <input type="radio" name="Datos[btnRadioAsistencia]" value="SI">SI
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="Datos[btnRadioAsistencia]" value="NO">NO
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>NOMBRE DE REPRESENTANTE </label>
                        <input type="text" name="Datos[comisiones]" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>CUMPLIÓ</label>
                        <div class="input-group">
                          <label class="radio-inline">
                            <input type="radio" name="Datos[btnRadioCumplio]" value="SI">SI
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="Datos[btnRadioCumplio]" value="NO">NO
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button onclick="agregarConvocados()" class="btn btn-success pull-right">Agregar</button>
                </div>
              </div><!-- /.box -->

          <!--DATOSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS-->   
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h4 class="bg-primary text-center pad-basic no-btm">CABILDO</h4>
                </div>
                <div class="box-body">
                  <div class="col-md-12">
                    <div class="col-lg-12 col-xs-12 table-responsive">
                      <table class="table table-hover table-bordered table-condensed text-center">
                        <thead>
                          <th>DEPENDENCIA</th>
                          <th>ENLACE</th>
                          <th>TELEFONO</th>
                          <th>EMAIL</th>
                          <th>ASISTIO</th>
                          <th>COMISIONES</th>
                          <th>CUMPLIÓ</th>
                          <th>ELIMINAR</th>
                        </thead>
                        <tbody id="filaTbody">
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="box-footer">
                  <div class="pull-right">
                    <input type="submit" name="btnGuardarPregira" class="btn btn-primary disabled" id="bntGuardar">
                  </div>
                </div>
              </div>
            </div>
            <div class="chart tab-pane" id="int-pre">
                  <!--DATOSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS-->        
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Integrantes Presidium </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>NOMBRE</label>
                          <select name="Datos[selectDependencia]" class="form-control">
                            <option>Seleccionar dependencia</option>
                            <option>Dirección de gobierno</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>CARGO</label>
                          <select name="Datos[selectEnlace]" class="form-control">
                            <option>Seleccionar enlace</option>
                            <option>Octavio Domiguez Ayala</option>
                          </select>
                      </div>
                    </div>
                  </div> <!-- /.row -->

                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>ASISTIÓ</label>
                        <div class="input-group">
                          <label class="radio-inline">
                            <input type="radio" name="Datos[btnRadioAsistencia]" value="SI">SI
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="Datos[btnRadioAsistencia]" value="NO">NO
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>NOMBRE DE REPRESENTANTE </label>
                        <input type="text" name="Datos[comisiones]" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>CUMPLIÓ</label>
                        <div class="input-group">
                          <label class="radio-inline">
                            <input type="radio" name="Datos[btnRadioCumplio]" value="SI">SI
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="Datos[btnRadioCumplio]" value="NO">NO
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button onclick="agregarConvocados()" class="btn btn-success pull-right">Agregar</button>
                </div>
              </div><!-- /.box -->

          <!--DATOSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS-->   

              <div class="box box-primary">
                <div class="box-header with-border">
                  <h4 class="bg-primary text-center pad-basic no-btm">PRESIDIUM</h4>
                </div>
                <div class="box-body">
                  <div class="col-md-12">
                    <div class="col-lg-12 col-xs-12 table-responsive">
                      <table class="table table-hover table-bordered table-condensed text-center">
                        <thead>
                          <th>DEPENDENCIA</th>
                          <th>ENLACE</th>
                          <th>TELEFONO</th>
                          <th>EMAIL</th>
                          <th>ASISTIO</th>
                          <th>COMISIONES</th>
                          <th>CUMPLIÓ</th>
                          <th>ELIMINAR</th>
                        </thead>
                        <tbody id="filaTbody">
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="box-footer">
                  <div class="pull-right">
                    <input type="submit" name="btnGuardarPregira" class="btn btn-primary disabled" id="bntGuardar">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
        
    </div>
      <!-- /.row -->
  </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->