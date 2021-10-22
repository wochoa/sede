
@extends('plantillas.plantilla')

@section('contenido')

<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark titulonot_2"> FAG <small> | Fondo de Apoyo Gerencial</small></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item titulonot_2"><a href="/">Inicio</a></li>
          <li class="breadcrumb-item titulonot_2 active ">FAG</li>
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
                  <h3 class="card-title titulonot_2"><strong>Listado Fondo de Apoyo Gerencia</strong></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body titulonot_2" style="padding: 25px">
                  <h3>Decreto Ley N. 25650</h3>
                 <table id="#" class="table table-sm table-bordered" style="width: 100%;margin-bottom: 20px">
                      <thead>
                        <tr>
                          <th>N</th>                    
                          <th>Mes</th>
                          <th>Año</th>
                          <th>Archivo</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                       @php
                       $i=1;
                       @endphp
                        @foreach($listafag as $direct)
                        @php
                        setlocale(LC_ALL, 'es_ES');
                        $monthNum  = $direct->mes;
                        $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                        $monthName = strftime('%B', $dateObj->getTimestamp());
                        @endphp
                         <tr>
                          <td>{{$i}}</td>
                          <td>Publicación: <strong>{{$monthName }}</strong></td>
                          <td>{{$direct->ano}}</td>
                          <td><a href="img/fag/{{$direct->img}}" title="" target="_blank"> Ver archivo</a></td>
                          
                         </tr>
                         @php
                         $i++;
                         @endphp
                        @endforeach
                      </tbody>
                    </table>
                    {{ $listafag->render() }}
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            
          </div>
  </div>
</div>

@endsection()