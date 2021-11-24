
@extends('plantillas.plantilla')

@section('contenido')

<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark titulonot_2"> DIRECTORIO <small> | REGIONAL</small></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item titulonot_2"><a href="/">Inicio</a></li>
          <li class="breadcrumb-item titulonot_2 active ">Directorio regional</li>
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
                  <h3 class="card-title titulonot_2"><strong>Directorio Regional</strong></h3>
                </div>
                <!-- /.card-header -->
                <div  class="card-body titulonot_2" style="padding: 25px">

                   <table id="example1" class="table table-sm table-bordered" style="width: 100%">
                      <thead>
                        <tr>
                          
                          <th>Código Unidad</th>                    
                          <th>Oficina</th>                          
                          <th>Cargo</th>
                          <th>Funcionario</th>
                          {{-- <th>Correo</th>
                          <th>Celular</th> --}}
                        </tr>
                      </thead>

                        <tbody>
                        
                        @foreach($directorio as $direct)
                        <tr>

                          
                          <th>{{$direct->iddependencia}}</th>
                          <td>{{$direct->depe_nombre}}</td>
                          <td>{{$direct->depe_cargo}}</td>
                          <td>{{$direct->depe_representante}}</td>
                          {{-- <td>{{$direct->iddependencia}}</td>
                          <td>{{$direct->iddependencia}}</td> --}}
                         </tr>
                        
                        @endforeach
                        
                        
                      </tbody>
                    </table>
                    @php
                      // $rooms = file_get_contents('https://app.regionhuanuco.gob.pe/funcionarios.php', true);
                      //  $directorio=json_decode($rooms);
                    @endphp
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            
          </div>
  </div>
</div>

@endsection()

@section('script')
{{-- <script>
  $(document).ready(function(){
    
    //ajax
    $.ajax({type:'GET',
          url:'https://app.regionhuanuco.gob.pe/funcionarios.php',// esto consulta a la reniec.
          dataType: "json",
           success:function(data){
           //console.log(data);
          
           //alert(data.length);
           for(i=0;i<=data.length;i++)
           {
            $("#datosdirectorio").append('<tr><td>'+i+'</td><td>'+data[i].depe_nombre+'</td><td>'+data[i].cargo+'</td><td>'+data[i].representante+'</td></tr>')
           }
           
          }
        
    });
});
</script> --}}
@endsection