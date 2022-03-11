@php
$urltema=route('tema');
$tematm = json_decode(getRemoteFile($urltema), true);
$dnsserver='http://gestionportales.regionhuanuco.gob.pe';//$tematm["dnsserver"];
@endphp

@extends('plantillas.plantilla')

@section('contenido')

<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark titulonot_2"> ANUNCIOS <small> | Anucnios de alertas de la página</small></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item titulonot_2"><a href="/">Inicio</a></li>
          <li class="breadcrumb-item titulonot_2 active ">ANUNCIOS</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<!-- Main content enlaces de interes-->
<div class="content fondo1" style="padding-top:40px;">

  <div class="container">

        
        <div class="row" > 
             <div class="col-md-12">
              <div class="card">
                <div class="card-header bg-gray">
                  <h3 class="card-title titulonot_2"><strong>Listado anuncios</strong></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body titulonot_2" style="padding: 25px">
                  {{-- <h3>Decreto Ley N. 25650</h3> --}}
                 <table id="#" class="table table-sm table-bordered" style="width: 100%;margin-bottom: 20px">
                      <thead>
                        <tr>
                          <th>N</th>                    
                          <th>titulo de publicacion</th>
                          <th>Fecha publiacion</th>
                          <th>imagen</th>
                          <th>Enlace</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                       @php
                       $i=1;
                       @endphp
                        @foreach($publicacion as $direct)
                        
                         <tr>
                          <td>{{$i}}</td>
                          <td>Publicación: <strong>{{$direct->titulopopup }}</strong></td>
                          <td>{{$direct->created_at}}</td>
                          {{-- <td><a href="img/fag/{{$direct->img}}" title="" target="_blank"> Ver archivo</a></td> --}}
                          <td><img src="{{ $dnsserver}}/storage/{{substr($direct->nompopup,7) }}" width="100" height="100" /></td>
                          @if($direct->enlace_popup<>'#')
                          <td><a href="{{ $direct->enlace_popup }}" title="" target="_blank"> Ver enlace</a></td>
                          @endif
                          
                          {{-- <td></td> --}}
                          
                          
                         </tr>
                         @php
                         $i++;
                         @endphp
                        @endforeach
                      </tbody>
                    </table>
                    {{-- {{ $listafag->render() }} --}}
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            
          </div>
  </div>
</div>

@endsection()