@php
//session_start();
@endphp
@extends('plantillas.plantilla')

@section('contenido')

<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark titulonot_2"> NORMATIVIDAD <small> | REGIONAL</small></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item titulonot_2"><a href="/">Inicio</a></li>
          <li class="breadcrumb-item titulonot_2 active ">Normatividad</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<!-- Main content enlaces de interes-->
<div class="content fondo1" style="padding-top:20px;">

  <div class="container">

        
        <div class="row" > 
          {{-- <div class="col-md-4">
            

            <div class="card">
              <div class="card-header bg-dark">
                <h3 class="card-title titulonot_2">Categoria de documentos normativos</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  @foreach ($tipodoc as $norma) 
                    @if($norma->indreg_tipo!='002o' and $norma->tip_show_portal==1)
                    
                    <li class="nav-item active">
                    <a href="../../lnormatividad/{{$norma->tip_description}}/2015" class="nav-link">
                      <i class="fas fa-file-alt"></i> {{$norma->tip_description}}
                      
                    </a>
                  </li>
                    @endif
                  
                  @endforeach
                  
                </ul>
              </div>
              
            </div>
            

          </div> --}}

             <div class="col-md-12">
              <div class="card">
                <div class="card-header bg-gray">
                  <h3 class="card-title titulonot_2"><strong>Búsqueda de Documentos</strong></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body titulonot_2" style="padding: 25px">

                  
                    <form class="form">
                      <div class="form-gorup">
                        <div class="row">
                          <div class="col-md-5">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Tipo de documento</label>
                              <select class="form-control" id="tipodoc" onchange="cargar();">
                                @php
                                $tipocat=$datocapturados['tipobus'];
                                $tipoanio=$datocapturados['tipanio'];
                                @endphp
                                  @if($tipocat==0)
                                  <option value="0" selected>Todos</option>
                                  @endif
                                

                                @foreach ($tipodoc as $norma) 
                                  @if($norma->indreg_tipo!='002o' and $norma->tip_show_portal==1)
                                    @if($norma->tip_description==$tipocat)
                                      <option value="{{$norma->tip_description}}" selected>{{$norma->tip_description}}</option>
                                      @else
                                        <option value="{{$norma->tip_description}}">{{$norma->tip_description}}</option>
                                    @endif
                                  @endif
                                
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Año</label>
                              <select class="form-control" id="anio" onchange="cargar();">
                                @if($tipoanio==0)
                                  <option value="0" selected>Todos</option>
                                  @endif

                                <?php
                                echo 
                                $anio_min  = 1986;
                                $anio_curr = intval(date("Y"));?>

                                @for ($i = $anio_curr; $i >= $anio_min; $i--) 
                                  @if($tipoanio==$i)
                                  <option value="{{$i}}" selected>{{$i}}</option>
                                  @else
                                    <option value="{{$i}}">{{$i}}</option>
                                  @endif

                                @endfor
                                
                                
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div style="padding-top: 30px">
                              <button type="button" class="btn btn-primary" onclick="cargar();">buscar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  
                    <div class="row">
                     {{--  datatable --}}

                     <div class="col-md-12">
                       <table id="example1" class="table table-sm table-bordered" style="width: 100%">{{-- id="example1"  para datatable--}}
                          <thead>
                          <tr>
                            <th>Documentos</th>
                            
                            <th>Archivo</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach($normatividad as $datos )
                              <tr style="font-size: 14px">
                                <td style="border-bottom: 1px;">
                                  
                                  <table width="100%" style="border:0px; padding:0px; margin:0px; ">
                                    
                                      @if($datos->reg_type!='' and $datos->reg_title!='' and $datos->reg_title<>'')
                                        <tr>
                                            <td width="12%" style="border:0px;"><strong>Doc:</strong></td>
                                            <td width="88%" style="border:0px;">{{html_entity_decode(utf8_encode($datos->reg_type))}} ({{html_entity_decode(utf8_encode($datos->reg_title))}}) </td>
                                        </tr>
                                        <tr>
                                            <td style="border:0px;"><strong>Fecha:</strong></td>
                                            <td style="border:0px;">{{date('d/m/Y',strtotime($datos->reg_date_start))}}</td>
                                        </tr>
                                        <tr>
                                            <td style="border:0px;"><strong>Descripción:</strong></td>
                                            <td style="border:0px;">{{strtoupper(utf8_encode(html_entity_decode($datos->reg_description)))}}</td>
                                        </tr>
                                        @endif
                                    
                                  </table>

                                </td>
                                <td>
                                  <?php
                                   $archivos=json_decode($datos->reg_files,true);
                                  
                                   if(is_array($archivos))
                                   {
                                     $cantidad=count($archivos);
                                     $i=0;
                                     ?>

                                     <span class="badge badge-dark right">{{$cantidad}} Archivos</span>
                                     {{-- @for($i=0;$i<$cantidad;$i++) --}}{{-- {{ $datfiles['file'] }} --}}

                                      @foreach($archivos as $datfiles)
                                        <a href="http://data.regionhuanuco.gob.pe/regulations/?reg={{$datos->idregulation}}&tomo={{$i}}" target="_blank" title=""><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a>
                                        <small class="text-secondary" style="padding-left: 5px">{{ $datfiles['tamanio'] }}MB</small>
                                        
                                        @if(session('idadmin') && (@session('adm_level') == "publicador" || @session('adm_level') == "administrador")) 
                                          <a href="http://www.regionhuanuco.gob.pe/portal/deprecated_/regulations_edit.php?reg={{$datos->idregulation}} &close=true" class="sepV_a" title="Editar" target="_blank">Editar</a>
                                        @endif
                                        {{-- <span class="mailbox-attachment-size clearfix mt-1">
                                        
                                        <a href="#" class="btn btn-default btn-sm float-right"><i class="fa fa-cloud-download-alt"></i></a>
                                        </span> --}}
                                        @php $i++; @endphp
                                      @endforeach
                                     {{--  @endfor --}}
                                  <?php
                                   }
                                   else
                                   {
                                    $cantidad=0;
                                   }
                                   ?>
                                </td>
                                
                              </tr>
                            @endforeach
                          
                          </tbody>
                          <tfoot>
                          <tr>
                            <th>Documentos</th>
                            
                            <th>Archivo</th>
                          </tr>
                          </tfoot>
                     </table>
                     </div>

                        {{-- {{ $normatividad->render() }} --}}

                     {{-- datatables --}}
                    </div>
                </div>
                <!-- /.card-body -->
                <!-- simulacion estado mde carga de pagina -->
                <div class="overlay dark" id="resultadoaviso" style="display: none">
                  <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                </div>
              </div>
            </div>
            
          </div>
  </div>
</div>

@endsection()
