<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Http;
use PDF;
class paginadiversa extends Controller
{
    
    public function visitas()
    {
        $enlace = "http://".request()->server('HTTP_HOST');        
        $iddirweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        //carga las visitas
        $visitas=DB::table('regvisita')->where('iddirecciones_web',$iddirweb)->orderByRaw('idregvisita DESC')->paginate(10);
        return view('visitas',compact('visitas'));
        //var_dump($visitas);
    }

    
    public function verpagina($id)
    {
        $datpagina=DB::table('pagina')->where('id_pagina',$id)->get();

        return view('pagina',compact('datpagina'));

    }

    public function listamenus()
    {
        $enlace = "http://".request()->server('HTTP_HOST');

        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->get();
        $direccionweb=$portalesweb[0]->iddirecciones_web;//3;// 3: direccion regional de educacion -> este dato se saco del registyro de bd de direcciones_web
        $nombredireccionweb=$portalesweb[0]->nom_direcciones_web;

        $menus=DB::table('menus')->where(['iddirecciones_web'=>$direccionweb,'activo_menu'=>1])->orderBy('idmenus','ASC')->get();

        return $menus;
    }
    public function listasubmenu()
    {
        $datsubmenu=DB::table('submenu')->join('menus','submenu.idmenus','=','menus.idmenus')->where('activo_submenu',1)->orderBy('submenu.idmenus','ASC')->get();

        foreach($datsubmenu as $sub)
        {
          $idsubmenu=$sub->idsubmenu;//0
          $nom_submenu=utf8_encode($sub->nom_submenu);//0
          $link_submenu=$sub->link_submenu;//0
          $idpagina=$sub->idpagina;//0
          $idmenus=$sub->idmenus;//0


          $submenu[]=array('idsubmenu'=>$idsubmenu,'nom_submenu'=>$nom_submenu,'link_submenu'=>$link_submenu,'idpagina'=>$idpagina,'idmenus'=>$idmenus);


        }


       return $submenu;
    }

    public function tema()
    {   $dnsserver="http://gestionportales.regionhuanuco.gob.pe";

        $enlace = "http://".request()->server('HTTP_HOST');
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->get();
        $direccionweb=$portalesweb[0]->iddirecciones_web;//3;// 3: direccion regional de educacion -> este dato se saco del registyro de bd de direcciones_web
        $nombredireccionweb=$portalesweb[0]->nom_direcciones_web;

        $tema=DB::table('tema_portal')->where('iddirecciones_web',$direccionweb)->get();
        
        $tmcolor_tema=$tema[0]->color_tema;
        $tmlogo_tema=$tema[0]->logo_tema;
        $tmtop_email=$tema[0]->top_email;
        $tmtop_fono=$tema[0]->top_fono;
        $tmtop_correocorp=$tema[0]->top_correocorp;
        $tmtop_transparencia=$tema[0]->top_transparencia;
        $tmtop_mesapartesvirtual=$tema[0]->top_mesapartesvirtual;
        $tmfooter_f1=utf8_encode($tema[0]->footer_f1);
        $tmfooter_f2=utf8_encode($tema[0]->footer_f2);
        $tmfooter_f3=utf8_encode($tema[0]->footer_f3);
        $tmredes_sociales=utf8_encode($tema[0]->redes_sociales);
        $linkfacebook=$tema[0]->linkpag_facebook;
        $favicon=$tema[0]->favicon;

 
        

        $submenu=array('tmcolor_tema'=>$tmcolor_tema,'tmlogo_tema'=>$tmlogo_tema,'tmtop_email'=>$tmtop_email,'tmtop_fono'=>$tmtop_fono,'tmtop_correocorp'=>$tmtop_correocorp,'tmtop_transparencia'=>$tmtop_transparencia,'tmtop_mesapartesvirtual'=>$tmtop_mesapartesvirtual,'tmfooter_f1'=>$tmfooter_f1,'tmfooter_f2'=>$tmfooter_f2,'tmfooter_f3'=>$tmfooter_f3,'tmredes_sociales'=>$tmredes_sociales,'tmredes_linkface'=>$linkfacebook,'favicons'=>$favicon,'nombredireccionweb'=>$nombredireccionweb,'dnsserver'=>$dnsserver);

        return $submenu;

    }
    public function fag()
    {
        //cargados el directorio regional
        $enlace = "http://".request()->server('HTTP_HOST');        
        $iddirweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        // $listafag=DB::connection('bdgorehco')->table('fag')->orderByRaw('ano DESC')->paginate(12);
        $listafag=DB::table('fag')->where('iddirecciones_web',$iddirweb)->orderByRaw('ano DESC')->paginate(12);
        return view('fag',compact('listafag'));
    }
    public function convocatoria()
    {
        //cargados el directorio regional
        // $data=DB::connection('bdgorehco')->table('archivo_sel_cas')->join('cas_proceso_seleccion','archivo_sel_cas.id_proceso_selec','=','cas_proceso_seleccion.id_proc_sel_cas')->where('cas_proc_sel_uni_eje',1)->orderByRaw('id_proc_sel_cas DESC')->get();

        $enlace = "http://".request()->server('HTTP_HOST');        
        $iddirweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');

        $data=DB::table('archivo_sel_cas')->join('cas_proceso_seleccion','archivo_sel_cas.id_proceso_selec','=','cas_proceso_seleccion.id_proc_sel_cas')->where('iddireccionweb',$iddirweb)->orderByRaw('id_proc_sel_cas DESC')->get();

        return view('convocatoria',compact('data'));
        //print_r($data);
    }

    public function directorio()
    {
        $directorio=DB::connection('pgsql')->table('tram_dependencia')->where(['depe_tipo'=>1,'depe_estado'=>1])->orderBy('iddependencia','ASC')->get();
        return view('directorio',compact('directorio'));
    }
    public function dependencias()
    {
        $directorio=DB::connection('pgsql')->table('tram_dependencia')->where('depe_tipo',1)->orderBy('iddependencia','ASC')->get();
        //return view('directorio',compact('directorio'));
        return $directorio;
    }

    public function dependenciasid($id)
    {
        $directorio=DB::connection('pgsql')->table('tram_dependencia')->where(['depe_tipo'=>1,'iddependencia'=>$id])->orderBy('iddependencia','ASC')->get();
        //return view('directorio',compact('directorio'));
        return $directorio;
    }
    public function anuncios()
    {
        $enlace = "http://".request()->server('HTTP_HOST');
        
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        $direccionweb=$portalesweb;
        $publicacion=DB::table('popup')->where('iddirecciones_web',$direccionweb)->orderBy('idpopup','DESC')->get();

        return view('anuncios',compact('publicacion'));
        //return $publicacion;
        //return view('anuncios');
    }
}
