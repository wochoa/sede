
@extends('plantillas.plantilla')

@section('contenido')

<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark titulonot_2"> AUTORIDADES</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item titulonot_2"><a href="/">Inicio</a></li>
          <li class="breadcrumb-item titulonot_2 active ">Autoridades</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<!-- Main content enlaces de interes-->
<div class="content fondo1" style="padding-top:40px;">

  <div class="container">

        
        <div class="row" > 
             <div class="row mb-2">
                {{-- <div class="col-md-6 ">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-dark">
                      <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-warning">PROF. JUAN MANUEL ALVARADO CORNELIO</strong>
                        <h3 class="mb-0 titulonot_2">GOBERNADOR REGIONAL</h3>
                        
                        <p class="card-text mb-auto titulonot_2">Gobernador Regional elegido mediante voluntad popular para el periodo 2019-2022</p>
                        
                      </div>
                      <div class="col-auto d-none d-lg-block">
                        <img src="img/gobervice/5.jpg" alt="" width="200">
                      </div>
                    </div>
                  </div> --}}
                  <div class="col-md-6 ">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-dark">
                      <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-warning">Dr. ERASMO ALEJANDRO FERNANDEZ SIXTO</strong>
                        <h3 class="mb-0 titulonot_2">GOBERNADOR REGIONAL(i)</h3>
                        
                        {{-- <p class="card-text mb-auto titulonot_2">Gobernador Regional elegido mediante voluntad popular para el periodo 2019-2022</p> --}}
                        
                      </div>
                      <div class="col-auto d-none d-lg-block">
                        <img src="img/gobervice/6.jpg" alt="" width="200">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-dark">
                      <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-warning">Dr. ERASMO ALEJANDRO FERNANDEZ SIXTO</strong>
                        <h3 class="mb-0 titulonot_2">VICE GOBERNADOR REGIONAL</h3>
                        {{-- <div class="mb-1 text-muted">Nov 12</div> --}}
                        <p class="card-text mb-auto titulonot_2">Vice Gobernador regional elegido mediante voluntad popular para el periodo 2019-2022</p>
                        {{-- <a href="#" class="stretched-link">Continue reading</a> --}}
                      </div>
                      <div class="col-auto d-none d-lg-block">
                        <img src="img/gobervice/6.jpg" alt="" width="200">
                      </div>
                    </div>
                  </div>
              </div>            
        </div>

        <div class="row">
          <h3>CONSEJEROS</h3>

                    <!-- Default box -->
                <div class="card card-solid titulonot_2" style="padding-top: 20px; padding-bottom: 10px;padding-left: 10px;padding-right: 10px">
                  <div class="card-body pb-0">
                    <div class="row d-flex align-items-stretch">
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-secondary">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>JOHANN AGUIRRE CALDAS <span class="right badge badge-danger">Consejero delegado</span></b></h2>
                                <p class="text-warning text-sm"><b>CONSEJERO: </b> PROVINCIA MARAÑON</p>
                                <ul class="ml-4 mb-0 fa-ul text-warning">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>johann_aguirrec180@hotmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 941638622</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/26.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>VALENTIN SALAZAR HUERTA </b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA DOS DE MAYO</p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>salhuana1607@hotmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 962982810</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/32.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch ">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7 ">
                                <h2 class="lead"><b>PEDRO IBAN ALBORNOZ ORTEGA </b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA DE LAURICOCHA</p>{{-- text-muted --}}
                                <ul class="ml-4 mb-0 fa-ul text-muted">{{-- text-muted --}}
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>ibanpao@hotmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 962989896</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/29.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>JUAN E. FERRER FABIAN</b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA HUÁNUCO </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>juanferrer1@hotmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 9718193682</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/25.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>ASCANIO A. CARDENAS QUISPE</b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA HUÁNUCO </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>americo159159@gmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 952737913</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/31.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>TULA ZÚÑIGA BRICEÑO</b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA HUÁNUCO </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>tulazb3@hotmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 956002148</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/23.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>WALTER D. LOPEZ TUCTO</b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA YAROWILCA </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>wadelot1@hotmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 956819428</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/36.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>JESÚS M. VERA CIPRIANO</b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA YAROWILCA </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>jesusmverac@gmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 942814767</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/27.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>ROBERTO ARRIETA JANAMPA</b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA AMBO </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>robertoarrieta026@gmail.com </li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 957860860</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/30.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>ELIAS FALCÓN PRINCIPE</b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA PUERTO INCA </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>eliasfalconprincipe@gmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 961207066</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/28.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>JAIME OLIVEIRA TELLO</b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA PUERTO INCA </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>jaimeoliveira_07@hotmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 908019342</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/37.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>AMANCIO DEL AGUILA RODRIGUEZ</b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA LEONCIO PRADO</p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>amancionoticias@hotmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 990096646</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/20.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>ROLANDO FLORES MARTIN</b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA LEONCIO PRADO</p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>otoniel292@hotmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 950226973</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/34.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>VALENTIN SALAZAR HUERTA</b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA DOS DE MAYO</p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>salhuana1607@hotmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 962982810</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/32.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>GASPAR ABELIO RUMI BENANCIO</b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA DOS DE MAYO</p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>garube_20@hotmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 962586960</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/33.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>ANTHONY B. VALENZUELA HURTADO</b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA HUACAYBAMBA</p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>elbuenanthony@hotmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 973942327</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/21.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>ROSAURA ROSALES RAMOS</b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA HUAMALÍES</p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>roshuamalies@hotmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 955909555</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/38.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>DILMAR CÉSPEDES SALAS</b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA HUAMALÍES</p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>dilcesa59@hotmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 943800133</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/35.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>VICTOR A. ARÓSTEGUI YALI</b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA PACHITEA</p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>vicalberto5@gmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 920034239</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/24.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            {{-- PROVINCIA HUÁNUCO --}}
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b>RUBEN N. LOREÑA CRISÓSTOMO</b></h2>
                                <p class="text-muted text-sm"><b>CONSEJERO: </b> PROVINCIA PACHITEA</p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>rlorenacrisostomo@gmail.com</li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: 984735303</li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="{{ asset('img/consejeros/22.jpg') }}" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              {{-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> --}}
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Ver  C.V.
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  {{-- <div class="card-footer">
                    <nav aria-label="Contacts Page Navigation">
                      <ul class="pagination justify-content-center m-0">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                      </ul>
                    </nav>
                  </div> --}}
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->         
        </div>

  </div>
</div>



@endsection()