@php
$urltema=route('tema');
$tematm = json_decode(getRemoteFile($urltema), true);
$dnsserver='http://gestionportales.regionhuanuco.gob.pe';//$tematm["dnsserver"];
@endphp

@extends('plantillas.plantilla')
@section('stylos')
<style type="text/css" media="screen">
	.linea td {
  font-size: 2px;
  line-height: 2px;
   background-color: #CCCCCC;
	} 
	td{  border-width: 2px;}
	.org_cont{
	font-size: 13px;
	/*border: solid 2px;*/
	border-radius: 10px;
	background-color: #054a91;/*##94d9ea;*/
	cursor: pointer;
	color:#fff
	}
	.org_conts{
	/* border: solid 2px;*/
	border-radius: 10px 10px 0px 0px;
	text-align: center;
	background-color: #94d9ea;/*#d1ebf1;*/
	cursor:pointer;
	}
	.org_conti{
	/*border: solid 2px;*/
	border-radius: 0px 0px 10px 10px;
	background-color: #5ccbe6;/*#d1ebf1;*/
	cursor:pointer;
	}

	.org_cont:hover{
	background-color: #054a91;
	color:#fff
	}
	.org_conts:hover{
	background-color: #054a91;
	color:#fff
	}
	.org_conti:hover{
	background-color: #054a91;
	color:#fff
	}

	.lh {
	/* [disabled]border-right-style: none; */
	border-top-style: solid;
	}
	.esd {
	border-top-style: solid;
	border-right-style: solid;
	}
	.eii {
	border-bottom-style: solid;
	border-left-style: solid;
	}
	.lv {
	border-right-style: solid;
	}
	.eid {
	border-bottom-style: solid;
	border-right-style: solid;
	}
	.esi {
	border-left-style: solid;
	border-top-style: solid;
	}
	td{text-align: center}
	p{ margin:0px 0px 0px 0px; padding:0px 0px 0px 0px;}
	.title{
	font-size: 21px;
	font-weight: bolder;
	}
	.bold{font-weight: bolder;}
	table{ /*background-color:#fff;*/ color:#2F4D88;}
    </style>
@endsection
@section('contenido')

<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark titulonot_2"> Organigrama <small>| GRH </small></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item titulonot_2"><a href="/">Organigrama</a></li>
          <li class="breadcrumb-item titulonot_2 active ">GRH</li>
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
                  <h3 class="card-title titulonot_2"><strong>Organigrama</strong></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body titulonot_2" style="padding: 25px">
                  <h4> Aprobado mediante Ordenanza Regional Nro 040-2020-GRH-CR. <a href="https://drive.google.com/file/d/1d_UbTmv1ZCLHmGVFTjTMOB_D_jicL9Mg/view" target="_blank" class="btn btn-danger btn-sm"> <i class="fa fa-file"></i> Ver documento</a></h4>
<table width="80%" border="0" cellpadding="0" cellspacing="0" align="center">
                    <tr>
                      <td colspan="91">&nbsp;</td>
                      <td width="5">&nbsp;</td>
                      </tr>
                    <tr>
                      <td width="7">&nbsp;</td>
                      <td colspan="14" rowspan="2"><p>&nbsp;</p></td>
                      <td colspan="54" >&nbsp;</td>
                      <td colspan="22" rowspan="3" ><p>&nbsp;</p></td>
                      <td>&nbsp;</td>
                    </tr>
                    
                    <tr>
                      <td>&nbsp;</td>
                      <td width="33" >&nbsp;</td>
                      <td width="8" >&nbsp;</td>
                      <td width="8" >&nbsp;</td>
                      <td width="8" >&nbsp;</td>
                      <td width="14" >&nbsp;</td>
                      <td width="8" >&nbsp;</td>
                      <td width="8" >&nbsp;</td>
                      <td width="14" >&nbsp;</td>
                      <td width="14" >&nbsp;</td>
                      <td colspan="6" rowspan="2" class="org_cont" >Secretaria del Consejo regional</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="7">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="23" rowspan="4" class="org_cont title" ><p>CONSEJO REGIONAL</p></td>
                      <td width="9">&nbsp;</td>
                      <td width="9">&nbsp;</td>
                      <td width="5">&nbsp;</td>
                      <td width="13">&nbsp;</td>
                      <td width="9">&nbsp;</td>
                      <td width="9">&nbsp;</td>
                      <td width="11">&nbsp;</td>
                      <td width="11">&nbsp;</td>
                      <td width="11">&nbsp;</td>
                      <td width="11">&nbsp;</td>
                      <td width="11">&nbsp;</td>
                      <td width="11">&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="13">&nbsp;</td>
                      <td width="8" >&nbsp;</td>
                      <td width="8" >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td colspan="2" class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td colspan="12" rowspan="2">&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="13" rowspan="8" >&nbsp;</td>
                      <td colspan="2" rowspan="8">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="16">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="16">&nbsp;</td>
                      <td width="16">&nbsp;</td>
                      <td width="28">&nbsp;</td>
                      <td width="14">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="3">&nbsp;</td>
                      <td colspan="19">&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td ><p>&nbsp;</p></td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td width="59" height="19">&nbsp;</td>
                      <td width="57" height="19">&nbsp;</td>
                      <td colspan="2" rowspan="4">&nbsp;</td>
                      <td colspan="34" rowspan="3"><p>&nbsp;</p></td>
                      <td rowspan="3">&nbsp;</td>
                      </tr>
                    <tr>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td colspan="6" rowspan="2" class="org_cont" >Oficina Regional de Control Institucional</td>
                      <td colspan="2"><p>&nbsp;</p>
                      <p>&nbsp;</p></td>
                      <td colspan="11" class="lv" data-id="3">&nbsp;</td>
                      <td colspan="12" data-id="3">&nbsp;</td>
                    </tr>
                    <tr>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td colspan="2" class="esd">&nbsp;</td>
                      <td colspan="23" rowspan="4" class="org_cont title" data-id="3"><p >GOBERNACION REGIONAL</p></td>
    </tr>
                    <tr>
                      <td colspan="16">&nbsp;</td>
                      <td class="lv">&nbsp;</td>
                      <td colspan="6">&nbsp;</td>
                      <td colspan="12" rowspan="3" class="org_cont">Consejo de Coordinación Regional</td>
                      <td width="19">&nbsp;</td>
                      <td width="8">&nbsp;</td>
                      <td width="19">&nbsp;</td>
                      <td width="8">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="8">&nbsp;</td>
                      <td width="8">&nbsp;</td>
                      <td width="8">&nbsp;</td>
                      <td width="8">&nbsp;</td>
                      <td width="22">&nbsp;</td>
                      <td width="8">&nbsp;</td>
                      <td width="8">&nbsp;</td>
                      <td width="10">&nbsp;</td>
                      <td width="8">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td><p>&nbsp;</p></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="6" rowspan="2" class="org_cont">Procuraduría Pública Regional</td>
                      <td height="23" colspan="2" class="eid">&nbsp;</td>
                      <td colspan="2" class="lh">&nbsp;</td>
                      <td colspan="6" class="lh" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td rowspan="2">&nbsp;</td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                      <td colspan="6">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="19">&nbsp;</td>
                      <td colspan="11" rowspan="6" class="lv">&nbsp;</td>
                      <td colspan="12">&nbsp;</td>
                      <td colspan="34">&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="7" rowspan="2">&nbsp;</td>
                      <td colspan="12" data-id="2" ><p>&nbsp;</p></td>
                      <td colspan="15" rowspan="2">&nbsp;</td>
                      <td colspan="45" rowspan="2" >&nbsp;</td>
                      <td width="8" >&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="12" data-id="2" >&nbsp;</td>
                      <td rowspan="78" >&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="19" rowspan="8">&nbsp;</td>
                      <td ><p>&nbsp;</p></td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td colspan="5" rowspan="3" class="org_cont" >Secretaría General</td>
                      <td width="5">&nbsp;</td>
                      <td colspan="10" rowspan="3">&nbsp;</td>
                      <td width="13" rowspan="2">&nbsp;</td>
                      <td width="17" rowspan="2"></td>
                      <td colspan="16" rowspan="3" ></td>
                      <td colspan="17">&nbsp;</td> 
                      <td rowspan="2">&nbsp;</td>
                      </tr>
                    <tr>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td class="esd">&nbsp;</td>
                      <td colspan="17">&nbsp;</td>
                    </tr>
                    <tr>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td class="lv">&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td colspan="17">&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="14" rowspan="2" data-id="22" >&nbsp;</td>
                      <td class="lv">&nbsp;</td>
                      <td colspan="10">&nbsp;</td>
                      <td width="12" class="lv">&nbsp;</td>
                      <td colspan="10">&nbsp;</td>
                      <td >&nbsp;</td>
                      <td colspan="17" rowspan="2">&nbsp;</td>
                      <td colspan="17">&nbsp;</td>
                      <td rowspan="2">&nbsp;</td>
                      </tr>
                    <tr>
                      <td class="lv">&nbsp;</td>
                      <td colspan="10" rowspan="4" class="lh">&nbsp;</td>
                      <td class="esd">&nbsp;</td>
                      <td colspan="10" rowspan="4" >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td colspan="17">&nbsp;</td>
                    </tr>
                    <tr>
                      <td><p>&nbsp;</p></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="5" rowspan="3" class="org_cont">Oficina de Coordinación Lima</td>
                      <td class="lv">&nbsp;</td>
                      <td rowspan="3" class="lv">&nbsp;</td>
                      <td >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="16" rowspan="3" ></td>
                      <td colspan="17">&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td class="eid">&nbsp;</td>
                      <td rowspan="2">&nbsp;</td>
                      <td rowspan="2" >&nbsp;</td>
                      <td colspan="17">&nbsp;</td>
                      <td rowspan="2">&nbsp;</td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="17">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="34" rowspan="3">&nbsp;</td>
                      <td colspan="22" rowspan="3" class="org_cont title" data-id="11"  ><p>GERENCIA GENERAL REGIONAL</p></td>
                      <td colspan="17">&nbsp;</td>
                      <td width="8">&nbsp;</td>
                      <td width="8">&nbsp;</td>
                      <td colspan="11" rowspan="2" class="org_cont">Sub Gerencia de Planeamiento estratégico</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="13" rowspan="6">&nbsp;</td>
                      <td colspan="4" rowspan="6" class="lv">&nbsp;</td>
                      <td colspan="2" class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="17">&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="22" rowspan="2" >&nbsp;</td>
                      <td colspan="6" rowspan="2" class="org_cont" >oficina de gestión de recursos humanos</td>
                      <td height="19" >&nbsp;</td>
                      <td rowspan="6" >&nbsp;</td>
                      <td colspan="3" rowspan="5">&nbsp;</td>
                      <td rowspan="6" >&nbsp;</td>
                      <td colspan="11" rowspan="8" class="lv">&nbsp;</td>
                      <td colspan="11" rowspan="5">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="11" rowspan="2" class="org_cont">Sub Gerencia de Presupuesto Público</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td rowspan="8">&nbsp;</td>
                      </tr>
                    <tr>
                      <td class="lv lh">&nbsp;</td>
                      <td colspan="2" class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
    </tr>
                    <tr>
                      <td colspan="26" >&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                      <td class="lv">&nbsp;</td>
                      <td colspan="17">&nbsp;</td>
    </tr>
                    <tr>
                      <td colspan="22" rowspan="2" >&nbsp;</td>
                      <td colspan="6" rowspan="2" class="org_cont" >oficina de abastecimiento</td>
                      <td class="lv">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="11" rowspan="2" class="org_cont">Sub Gerencia de Modernización y Transformación Digital</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
    </tr>
                    <tr>
                      <td class="lv lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="12" rowspan="2" class="org_cont">Gerencia Regional de Planeamiento, Presupuesto y Acondicionamiento Territorial</td>
                      <td colspan="4" class="lv">&nbsp;</td>
                      <td colspan="2" class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
    </tr>
                    <tr>
                      <td colspan="26" >&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                      <td class="lv">&nbsp;</td>
                      <td colspan="3" rowspan="3" class="org_cont">GERENCIA REGIONAL DE ADMINISTRACION</td>
                      <td colspan="11" rowspan="4" class="lv">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td colspan="4" rowspan="8" class="esd">&nbsp;</td>
                      <td colspan="17">&nbsp;</td>
    </tr>
                    <tr>
                      <td colspan="22" rowspan="2" >&nbsp;</td>
                      <td colspan="6" rowspan="2" class="org_cont" >oficina de contabilidad</td>
                      <td class="lv">&nbsp;</td>
                      <td >&nbsp;</td>
                      <td ></td>
                      <td colspan="13">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="11" rowspan="2" class="org_cont">Sub Gerencia de estudios de Pre Inversiones - OPMI</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
    </tr>
                    <tr>
                      <td class="lh lv">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lv lh"></td>
                      <td>&nbsp;</td>
                      <td colspan="12" rowspan="2" class="org_cont">Gerencia Regional de Asesoría Jurídica</td>
                      <td colspan="2" class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
    </tr>
                    <tr>
                      <td colspan="26" >&nbsp;</td>
                      <td colspan="2" >&nbsp;</td>
                      <td class="lv">&nbsp;</td>
                      <td >&nbsp;</td>
                      <td colspan="2" >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td class="lv">&nbsp;</td>
                      <td colspan="11" class="lv"></td>
                      <td class="lh" ><p></p></td>
                      <td colspan="17">&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="22" rowspan="2" >&nbsp;</td>
                      <td colspan="6" rowspan="2" class="org_cont" >Oficina de tesorería</td>
                      <td class="lv">&nbsp;</td>
                      <td rowspan="4" >&nbsp;</td>
                      <td colspan="3" rowspan="5" class="org_cont">OFICINA REGIONAL DE COMUNICACIONES, IMAGEN Y PROTOCOLO</td>
                      <td rowspan="4" class="lv">&nbsp;</td>
                      <td colspan="11" rowspan="4" class="lv lh">&nbsp;</td>
                      <td colspan="11" rowspan="5" class="esd">&nbsp;</td>
                      <td colspan="13" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="11" rowspan="2" class="org_cont">Sub Gerencia de Cooperación Internacional</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td rowspan="4">&nbsp;</td>
                      </tr>
                    <tr>
                      <td class="lv lh">&nbsp;</td>
                      <td >&nbsp;</td>
                      <td colspan="12" rowspan="2" class="org_cont" >Oficina Regional de Gestión en Conflictos Sociales</td>
                      <td colspan="2" class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
    </tr>
                    <tr>
                      <td colspan="26" >&nbsp;</td>
                      <td colspan="2" >&nbsp;</td>
                      <td class="lv">&nbsp;</td>
                      <td class="lh" >&nbsp;</td>
                      <td colspan="17">&nbsp;</td>
    </tr>
                    <tr>
                      <td colspan="22" rowspan="2" >&nbsp;</td>
                      <td colspan="6" rowspan="2" class="org_cont" >oficina de patrimonio</td>
                      <td class="lv">&nbsp;</td>
                      <td colspan="13" >&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                      <td colspan="11" rowspan="2" class="org_cont">Sub Gerencia de Acondicionamiento territorial</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
    </tr>
                    <tr>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td colspan="11" class="lv">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="12" rowspan="2" class="org_cont">Oficina Regional de Gestion de riesgo de desastres, defensa Nacional y Seguridad Ciudadana</td>
                      <td colspan="4">&nbsp;</td>
                      <td colspan="2" class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
    </tr>
                    
                    <tr>
                      <td colspan="45" class="lv">&nbsp;</td>
                      <td >&nbsp;</td>
                      <td colspan="10" >&nbsp;</td>
                      <td class="lh" >&nbsp;</td>
                      <td width="6" rowspan="2" >&nbsp;</td>
                      <td width="6" rowspan="2" >&nbsp;</td>
                      <td width="6" rowspan="2" >&nbsp;</td>
                      <td width="8" rowspan="2" >&nbsp;</td>
                      <td rowspan="2" >&nbsp;</td>
                      <td rowspan="2" >&nbsp;</td>
                      <td rowspan="2" >&nbsp;</td>
                      <td rowspan="2" >&nbsp;</td>
                      <td rowspan="2" >&nbsp;</td>
                      <td rowspan="2" >&nbsp;</td>
                      <td rowspan="2" >&nbsp;</td>
                      <td rowspan="2" >&nbsp;</td>
                      <td rowspan="2" >&nbsp;</td>
                      <td rowspan="2" >&nbsp;</td>
                      <td rowspan="2" >&nbsp;</td>
                      <td rowspan="2" >&nbsp;</td>
                      <td rowspan="2" >&nbsp;</td>
                      <td rowspan="2" >&nbsp;</td>
                      <td rowspan="2" >&nbsp;</td>
                      <td rowspan="2" >&nbsp;</td>
                      <td rowspan="2" >&nbsp;</td>
                      <td rowspan="2">&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="45" class="lv">&nbsp;</td>
                      <td >&nbsp;</td>
                      <td colspan="10" >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td colspan="11">&nbsp;</td>
                      <td >&nbsp;</td>
    </tr>
                    
                      <tr>
                        <td colspan="10">&nbsp;</td>
                      <td width="17">&nbsp;</td>
                      <td width="8">&nbsp;</td>
                      <td width="8">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td class="lv">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="esd">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td width="5" class="lh">&nbsp;</td>
                      <td width="5" class="lh">&nbsp;</td>
                      <td width="5" class="lh">&nbsp;</td>
                      <td width="5" class="lh">&nbsp;</td>
                      <td width="5" class="lh">&nbsp;</td>
                      <td width="14" class="lh">&nbsp;</td>
                      <td width="5" class="lh">&nbsp;</td>
                      <td width="5" class="lh">&nbsp;</td>
                      <td width="5" class="lh">&nbsp;</td>
                      <td width="5" class="lh">&nbsp;</td>
                      <td class="esd"></td>
                      <td colspan="13" class="lh">&nbsp;</td>
                      <td class="esd">&nbsp;</td>
                      <td colspan="20" class="lh">&nbsp;</td>
                      <td width="35" class="esd">&nbsp;</td>
                      <td colspan="10">&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="10" rowspan="2">&nbsp;</td>
                      <td colspan="15" rowspan="2" class="org_cont title" >GERENCIA REGIONAL DE DESARROLLO ECONÓMICO</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td colspan="13" rowspan="2" class="org_cont title" >GERENCIA REGIONAL DE DESARROLLO SOCIAL</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td rowspan="43" class="lv">&nbsp;</td>
                      <td colspan="5" rowspan="2">&nbsp;</td>
                      <td colspan="18" rowspan="2" class="org_cont title" >GERENCIA REGIONAL DE RECURSOS NATURALES Y GESTION AMBIENTAL</td>
                      <td colspan="4" rowspan="2">&nbsp;</td>
                      <td colspan="17" rowspan="2" class="org_cont title" >GERENCIA REGIONAL DE INFRAESTRUCTURA</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="10">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td class="lv">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="3" class="lv">&nbsp;</td>
                      <td colspan="13">&nbsp;</td>
                      <td colspan="13" class="lv">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="21">&nbsp;</td>
                      <td width="19" class="lv">&nbsp;</td>
                      <td colspan="9">&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="4" rowspan="27" class="lv"><p>&nbsp;</p></td>
                      <td class="lh">&nbsp;</td>
                      <td width="9" class="lh">&nbsp;</td>
                      <td width="5" class="lh">&nbsp;</td>
                      <td width="5" class="lh">&nbsp;</td>
                      <td width="5" class="lh">&nbsp;</td>
                      <td width="5" class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td colspan="5" class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td colspan="2" rowspan="38" class="lv"><p>&nbsp;</p></td>
                      <td colspan="3" class="lh">&nbsp;</td>
                      <td colspan="13">&nbsp;</td>
                      <td colspan="4">&nbsp;</td>
                      <td width="11" rowspan="5" class="lv">&nbsp;</td>
                      <td colspan="8" class="lh">&nbsp;</td>
                      <td colspan="8">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="3" rowspan="11" class="lv"><p>&nbsp;</p></td>
                      <td colspan="6" class="lh">&nbsp;</td>
                      <td colspan="9">&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td height="19" >&nbsp;</td>
                      <td><p>&nbsp;</p></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="10" rowspan="2" class="org_cont">Sub Gerencia de Promoción de la Inversión Privada</td>
                      <td width="16" >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td colspan="11" rowspan="2" class="org_cont" >Sub Gerencia de Inversión y Bienestar Social</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td colspan="4" rowspan="3">&nbsp;</td>
                      <td width="5" data-id="47" ></td>
                      <td colspan="16" rowspan="2" class="org_cont" >				      <p>Sub Gerencia de Recursos Naturales</p></td>
                      <td colspan="5" data-id="49" >&nbsp;</td>
                      <td data-id="52" ss>&nbsp;</td>
                      <td colspan="14" rowspan="2" class="org_cont" data-id="52" ss><p>Sub Gerencia de estudios</p></td>
                      <td rowspan="2">&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="11" class="lh">&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td class="lh" >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td class="lh" data-id="47" ></td>
                      <td colspan="5" data-id="49" >&nbsp;</td>
                      <td class="lh" data-id="52" ss>&nbsp;</td>
    </tr>
                    <tr>
                      <td >&nbsp;</td>
                      <td colspan="20" >&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td colspan="16" data-id="38" >&nbsp;</td>
                      <td data-id="47" ></td>
                      <td colspan="16" data-id="47"></td>
                      <td colspan="5" data-id="49" >&nbsp;</td>
                      <td data-id="52" ss>&nbsp;</td>
                      <td data-id="52" ss>&nbsp;</td>
                      <td data-id="52" ss>&nbsp;</td>
                      <td data-id="52" ss>&nbsp;</td>
                      <td data-id="52" ss>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="9" >&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="15" rowspan="2" class="org_cont">Dirección Regional de Desarrollo Agrario y Riego</td>
                      <td width="16" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="11" rowspan="2" class="org_cont">Sub Gerencia de Juventudes</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="4" rowspan="3">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="16" rowspan="2" class="org_cont">Sub Gerencia de Gestión Ambiental</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="14" rowspan="2" class="org_cont">Sub Gerencia de Obras y Supervision</td>
                      <td rowspan="2">&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="6" class="lh">&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td class="lh">&nbsp;</td>
    </tr>
                    <tr>
                      <td height="19" colspan="21" >&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td colspan="16">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="5">&nbsp;</td>
                      <td width="5">&nbsp;</td>
                      <td width="5">&nbsp;</td>
                      <td width="11">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td width="9">&nbsp;</td>
                      <td colspan="19" rowspan="2" class="org_cont" ><p>Dirección Regional de la Producción</p></td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td ><p>&nbsp;</p></td>
                      <td colspan="11" rowspan="2" class="org_cont" >Sub Gerencia de Comunidades Nativas Campesinas, Identidad Cultural y Poblaciones Vulnerables</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td colspan="8" rowspan="2">&nbsp;</td>
                      <td colspan="11" rowspan="2" data-id="50" ><p>&nbsp;</p></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="14" rowspan="2" class="org_cont">Sub Gerencia de Liquidación</td>
                      <td rowspan="2">&nbsp;</td>
                      </tr>
                    <tr>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td class="lh" >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                    </tr>
                    <tr>
                      <td rowspan="8">&nbsp;</td>
                      <td rowspan="6" class="lv">&nbsp;</td>
                      <td colspan="19">&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="27" rowspan="2">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td rowspan="8">&nbsp;</td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="17" rowspan="2" class="org_cont">Sub Dirección de Pesquería</td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="11" rowspan="2" class="org_cont">Dirección Regional de Salud</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="14" rowspan="2" class="org_cont">Direccion Regional de Transportes y Comunicacion</td>
    </tr>
                    <tr>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="11">&nbsp;</td>
                      <td width="5">&nbsp;</td>
                      <td width="5">&nbsp;</td>
                      <td width="5">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td class="lh">&nbsp;</td>
    </tr>
                    <tr>
                      <td colspan="16">&nbsp;</td>
                      <td colspan="3">&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td colspan="5">&nbsp;</td>
                      <td colspan="11">&nbsp;</td>
                      <td colspan="45" rowspan="26"><p>&nbsp;</p></td>
    </tr>
                    <tr>
                      <td rowspan="2">&nbsp;</td>
                      <td colspan="17" rowspan="3" class="org_cont">Sub Dirección de Industria y Mype</td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="11" rowspan="2" class="org_cont">Dirección Regional de Trabajo y Promocion del Empleo</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td colspan="2" rowspan="11" class="lv">&nbsp;</td>
                      <td colspan="14">&nbsp;</td>
    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="16">&nbsp;</td>
                      <td colspan="3">&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="9" rowspan="2" class="org_cont">Sub Dirección de Prevencion y Soluciones de Conflictos</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="19" rowspan="2" class="org_cont" ><p>Dirección Regional de Energía y Minas</p></td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td class="lh" ></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td rowspan="2">&nbsp;</td>
                      </tr>
                    <tr>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td colspan="3" ></td>
                      <td colspan="11" ></td>
                    </tr>
                    <tr>
                      <td rowspan="7">&nbsp;</td>
                      <td rowspan="5" class="lv">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="15">&nbsp;</td>
                      <td colspan="3">&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="9" rowspan="2" class="org_cont">Sub Dirección de Inspeccion del Trabajo</td>
                      <td ></td>
                      <td ></td>
                      <td ></td>
                      <td ></td>
                      <td rowspan="20">&nbsp;</td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="17" rowspan="2" class="org_cont">Sub Dirección de Minería y Asuntos Ambientales Mineros</td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td ></td>
                      <td ></td>
                      <td ></td>
                      <td ></td>
    </tr>
                    <tr>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="11">&nbsp;</td>
    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="15">&nbsp;</td>
                      <td colspan="3">&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="9" rowspan="2" class="org_cont">Sub Dirección de Promoción y Proteccion de los Derechos Fundamentales y de la Seguridad y Salud en el Trabajo</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="17" rowspan="2" class="org_cont">Sub Dirección de Energía y Asuntos Ambientales Energeticos</td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="11">&nbsp;</td>
    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="16">&nbsp;</td>
                      <td colspan="3">&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="9" rowspan="2" class="org_cont">Sub Dirección de Promoción del Empleo y Capacitacion Laboral</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="19" rowspan="2" class="org_cont" ><p>Dirección Regional de Comercio Exterior y Turismo</p></td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="4">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td colspan="16">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="4" rowspan="6">&nbsp;</td>
                      <td rowspan="6"><p>&nbsp;</p></td>
                      <td rowspan="8" class="lv">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="15">&nbsp;</td>
                      <td colspan="3">&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="11" rowspan="2" class="org_cont">Direccion regional de Vivienda Construcción y saneamiento</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="17" rowspan="2" class="org_cont">Sub Dirección de comercio Exterior</td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
    </tr>
                    <tr>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td colspan="2" rowspan="5" class="lv">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="11">&nbsp;</td>
    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="15">&nbsp;</td>
                      <td colspan="3">&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="9" rowspan="2" class="org_cont">Sub Dirección de Vivienda y Urbanismo</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="17" rowspan="2" class="org_cont">Sub Dirección de turismo</td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
    </tr>
                    <tr>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="11">&nbsp;</td>
    </tr>
                    <tr>
                      <td colspan="4">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="15">&nbsp;</td>
                      <td colspan="3">&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="9" rowspan="2" class="org_cont">Sub Dirección de Construcción y Saneamiento</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="5" rowspan="3">&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="4" rowspan="2">&nbsp;</td>
                      <td rowspan="2">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="17" rowspan="2" class="org_cont">Sub Dirección de Artesania</td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="11">&nbsp;</td>
    </tr>
                    <tr>
                      <td colspan="25">&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="11" rowspan="2" class="org_cont">Aldea Infantil &quot;SAN JUAN BOSCO&quot;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="25">&nbsp;</td>
                      <td width="16" >&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                      <td class="lh">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="41" rowspan="2"><p>&nbsp;</p></td>
                      <td colspan="4">&nbsp;</td>
                      <td rowspan="2">&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="25">&nbsp;</td>
                      <td colspan="6" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="11">&nbsp;</td>
                      <td colspan="5">&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="25">&nbsp;</td>
                      <td colspan="6" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td >&nbsp;</td>
                      <td colspan="12" >&nbsp;</td>
                      <td colspan="14" >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td >&nbsp;</td>
                      <td colspan="23" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="25">&nbsp;</td>
                      <td colspan="6" >&nbsp;</td>
                      <td colspan="9" rowspan="2" class="org_cont">Archivo regional</td>
                      <td colspan="5" class="lv">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="17" rowspan="2" class="org_cont">Oficinas Sub regionales de Desarrollo</td>
                      <td colspan="23" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td colspan="25">&nbsp;</td>
                      <td colspan="6" >&nbsp;</td>
                      <td colspan="5" class="lh">&nbsp;</td>
                      <td colspan="5" class="lh">&nbsp;</td>
                      <td colspan="23" >&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    
                    
                    
                    
                    
                    
  </table>
                    
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            
          </div>
  </div>
</div>

@endsection()