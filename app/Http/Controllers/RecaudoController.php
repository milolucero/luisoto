<?php

namespace App\Http\Controllers;

//use violuke\Barcodes\BarcodeValidator;
//use Ayeo\Barcode;
use CodeItNow\BarcodeBundle\Utils\BarcodeGenerator;
use App\Recaudo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use PDF;

class RecaudoController extends Controller {
    
    public function __construct() {
        $this->middleware('auth');
    }

    public function insert(Request $request) {
        $recaudo = Recaudo::create([
            'name' => '120180824082819volantes.CSV',
        ]);
    }

    public function getRecaudos(Request $request) {
        $recaudos = DB::select(DB::raw("SELECT id, cuenta, documento, valor_neto_1, fecha_max_recaudo_1 FROM recaudos WHERE documento = '".$request->code."'"));
        return datatables()->of($recaudos)
                ->addColumn('actions', function($recaudos) {
                    return '<button class="btn btn-info btn-sm" data-remote="'.$recaudos->documento.'" data-toggle="tooltip" data-placement="top" title="Pdf">
                                <i class="fas fa-file-pdf"></i>
                            </button>';
                })
                ->rawColumns(array("complet_surname", "actions"))
                ->toJson();
    }

    public function export_pdf(Request $request) {
        $data = DB::select(DB::raw("SELECT r.id, r.tipo, r.cuenta, u.name, r.documento, r.valor_neto_1, r.fecha_max_recaudo_1, r.valor_neto_2, 
            r.fecha_max_recaudo_2, r.valor_neto_3, r.fecha_max_recaudo_3, r.nombre, r.direccion_inmueble, r.ciudad_inmueble, 
            r.mes_a_pagar, r.año_mes_a_pagar, r.valor_canon_mensual, r.valor_iva_canon, r.valor_administracion, r.valor_servicios, 
            r.gastos_bancarios, r.valor_retefuente, r.valor_retencion_iva, r.valor_retencion_ica, r.valor_retencion_cree, r.email
        FROM recaudos r, users u 
        WHERE r.documento = '".$request->code."' 
            AND r.documento = u.code"));

        $cuenta = substr($data[0]->cuenta, 0, 6);
        $valor_canon_mensual = 0;
        $valor_iva_canon = 0;
        $valor_retencion_iva = 0;
        $valor_retefuente = 0;
        $valor_retencion_ica = 0;
        
        $valor_neto_1 = 0;
        $valor_neto_2 = 0;
        $valor_neto_3 = 0;
        /*$valor_canon_mensual = number_format($data[0]->valor_canon_mensual, 0);
        $valor_iva_canon = number_format($data[0]->valor_iva_canon, 0);
        $valor_retencion_iva = number_format($data[0]->valor_retencion_iva, 0);
        $valor_retefuente = number_format($data[0]->valor_retefuente, 0);
        $valor_retencion_ica = number_format($data[0]->valor_retencion_ica, 0);
        
        $valor_neto_1 = number_format($data[0]->valor_neto_1, 0);
        $valor_neto_2 = number_format($data[0]->valor_neto_2, 0);
        $valor_neto_3 = number_format($data[0]->valor_neto_3, 0);*/
        

        //$text = '4157707266014651802001012603068039000000006377069620171215';
        //$text = '4157709998041820802005640007390000042454749620180705';

        // 4157709998041820802006370007
        //39000004264998
        //9620180705

        //4157709998041820802005640007
        //39000004264998
        //9620180705

        $text11 = '4157709998041820';
        $text12 = '802005640007';
        $text13 = '39000004264998';
        $text14 = '9620180705';

        //$text  = "41577099980418208020".substr($data[0]->cuenta, 0, 6).explode("-", $data[0]->fecha_max_recaudo_1)[1]."(3900)".str_pad($data[0]->valor_neto_1, 9, "0", STR_PAD_LEFT)."(96)".explode("-", $data[0]->fecha_max_recaudo_1)[0].explode("-", $data[0]->fecha_max_recaudo_1)[1].explode("-", $data[0]->fecha_max_recaudo_1)[2];
        $text2 = "41577099980418208020".substr($data[0]->cuenta, 0, 6).explode("-", $data[0]->fecha_max_recaudo_1)[1]."3900".str_pad($data[0]->valor_neto_2, 9, "0", STR_PAD_LEFT)."96".explode("-", $data[0]->fecha_max_recaudo_2)[0].explode("-", $data[0]->fecha_max_recaudo_2)[1].explode("-", $data[0]->fecha_max_recaudo_2)[2];;
        $text3 = "41577099980418208020".substr($data[0]->cuenta, 0, 6).explode("-", $data[0]->fecha_max_recaudo_1)[1]."(3900)".str_pad($data[0]->valor_neto_3, 9, "0", STR_PAD_LEFT)."(96)".explode("-", $data[0]->fecha_max_recaudo_3)[0].explode("-", $data[0]->fecha_max_recaudo_3)[1].explode("-", $data[0]->fecha_max_recaudo_3)[2];;

        //$builder = new Barcode\Builder();

        $barcode = new BarcodeGenerator();
        $barcode->setType(BarcodeGenerator::Gs1128);
        //$barcode->setNoLengthLimit(true);
        //$barcode->setAllowsUnknownIdentifier(true);
        $barcode->setScale(0);
        $barcode->setThickness(40);
        $barcode->setFontSize(7);
        
        $barcode->setText($text11);$code11 = $barcode->generate();
        $barcode->setText($text12);$code12 = $barcode->generate();
        $barcode->setText($text13);$code13 = $barcode->generate();
        $barcode->setText($text14);$code14 = $barcode->generate();
        
        $barcode->setText($text12);
        $code2 = $barcode->generate();
        
        $barcode->setText($text13);
        $code3 = $barcode->generate();

        
        /*$barcode = '5060411950139';
        $bc_validator = new \violuke\Barcodes\BarcodeValidator($barcode);
        $bc_validator->getGTIN14();
        $bc_validator->getBarcode();
        $code = $bc_validator;
        $code2 = $bc_validator;
        $code3 = $bc_validator;*/

        $path = 'files/'.$request->code.'.pdf';
        PDF::loadView('recaudo', 
        compact('data', 'cuenta', 'valor_canon_mensual', 'valor_iva_canon', 'valor_retencion_iva', 'valor_retefuente', 'valor_retencion_ica', 
        'code11', 'code12', 'code13', 'code14', 'code2', 'code3', 'valor_neto_1', 'valor_neto_2', 'valor_neto_3')
        )->save(public_path().'/'.$path);
        return json_encode($path);
    }

    public function download_pdf() {
        $file = public_path().'/files/_filename.pdf';
        $headers = [
            'Content-Type' => 'application/pdf',
         ];
        return response()->download($file, 'filename.pdf', $headers);
    }
}
