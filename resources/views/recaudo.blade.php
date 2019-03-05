<!DOCTYPE html>
<html>
<head>
<title>Comprobante de Recaudo</title>
</head>
<body>

	<table style="font-size:10px;" cellspacing="0" cellpadding="3" width='100%'>
            <tr>
                <td style="border-left: 1px solid;border-top: 1px solid;border-right: 1px solid;">ARRENDATARIO(A) :</td>
                <td width="50%" align="center" rowspan="5">
                    <img src="images/icon/logo_p.png" alt="logo" height="70" width="175" /><br>
                    <div style="font-size:10px;">
                        CARRERA 11 A No. 93 - 67 OFIC. 204<br>
                        TELS: 7426550 - 7426552&nbsp;&nbsp;&nbsp;&nbsp;NIT 860.000.743-4
                    </div>
                </td>
            </tr>
            <tr><td style="border-left: 1px solid;border-right: 1px solid;font-weight: bold;font-size:14px;">{{ $data[0]->name }}</td></tr>
            <!--tr><td style="border-left: 1px solid;border-right: 1px solid;">DIRECCION : {{ $data[0]->direccion_inmueble }} - BOGOTA - D.C.</td></tr-->
            <!--tr><td style="border-left: 1px solid;border-right: 1px solid;font-weight: bold;font-size:14px;">{{ $data[0]->direccion_inmueble }}</td></tr-->
            <tr><td style="border-left: 1px solid;border-right: 1px solid;border-bottom: 1px solid;">DIRECCION : {{ $data[0]->direccion_inmueble }} - BOGOTA - D.C.</td></tr>
            <!--tr><td style="font-weight: bold">Mensaje para el cliente</td></tr-->
            <tr><td style="border-left: 1px solid;border-right: 1px solid;border-top: 1px solid;">Mensaje para el cliente:</td></tr>
            <tr><td style="border-left: 1px solid;border-right: 1px solid;border-bottom: 1px solid;"></td></tr>
    </table>
        <!--tr><td><div style="border-width: 1px;border-style: solid;"><br><br></div></td></tr-->
        <!--tr><td colspan="2"-->
                <table border="1" cellspacing="0" cellpadding="0" width='100%' style="font-size: 10px;">
                    <tr>
                        <td align="center" width='50%' colspan="2" style="font-weight: bold;">
                            Contrato No: {{ $cuenta }}, Canon de: {{ $data[0]->mes_a_pagar }} de {{ $data[0]->año_mes_a_pagar }}
                        </td>
                        <td width='50%' rowspan="15" valign="top" align="justify" style="font-size:10px;padding: 4px;">
                            1. El pago a traves del banco es una facilidad que brinda LUIS SOTO & CIA S.A. a sus arrendatarios. 
                            pero no modifica ninguna de las clausulas del contrato y de arrendamiento celebrado con la inmobiliaria. 
                            En consecuencia la falta del recibo de pago no exime al arrendatario de la cancelación oportuna del canon del arrendamiento. <br>
                            2. Por no pago en el termino a los cinco primeron días calendario a la fecha de suspensión del contrato, 
                            se cobrará un recargo que corresponde a transacción por incumplimiento.<br>
                            3. El recibo de pago de la inmobiliaria para que sea válido, debe tener el timbre de la registradora y/o el sello de BANCO DAVIVIENDA.<br>
                            4. Cuando la cancelación se haga en cheque, este debe girarse a nombre de LUIS SOTO & CIA S.A. y al respeldo del mismo 
                            se debe anotar el nombre del arrendataria, el número del inmueble y los teléfonos de la residencia y oficina. Al diligenciar 
                            el formato se deberá colocar los datos correspondientes al Código del Banco, Número del Cheque, Valor del Cheque y Convenio.<br>
                            5. Los pagos del arrendamiento pueden efectuarse en cualquier oficina de BANCO DAVIVIENDA a nivel nacional.  Los pagos efectuados en horario adicional 
                            quedarán abonados con fecha del día hábil siguiente.<br>
                            6. Los Cheques no pagados tendrán sanción del 20% y el recibo carecerá de validez e incluirá el recargo por mora.<br>
                            7. Tenga en cuenta que BANCO DAVIVIENDA no recibirá CHEQUES REMESAS.<br>
                            8. Las sanciones practicadas se deberán realizar a nombre del MANDANTE quien es el propietario del inmueble y beneficiario de los arrendamientos. 
                            LUIS SOTO & CIA S.A. unicamente cumple la función de intermediación. Lo anterior para dar cumpliento a lo establecido en el Art. 394 E.T.
                            <br><br>
                            <div>
                                <table border="1" cellspacing="0" width='70%' style="font-size:10px;" align="center">
                                    <tr><td align="center">CLIENTE</td></tr>
                                    <tr><td align="center">{{ $data[0]->name }}</td></tr>
                                    <tr><td align="center" style="font-weight: bold">REFERENCIA:&nbsp;&nbsp;&nbsp;&nbsp;{{ $data[0]->cuenta }}</td></tr>
                                    <tr><td align="center" style="font-weight: bold">BANCO DAVIVIENDA CONVENIO:&nbsp;&nbsp;&nbsp;&nbsp;1227081</td></tr>
                                </table>
                            <div>
                            <br>
                            <div>
                                <table border="1" cellspacing="0" width='70%' style="font-size:10px;" align="center">
                                    <tr>
                                        <td align="center">Cod Banco</td>
                                        <td align="center">Cheque No.</td>
                                        <td align="center">Valor</td>
                                    </tr>
                                    <tr>
                                        <td align="center">&nbsp;</td>
                                        <td align="center">&nbsp;</td>
                                        <td align="center">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align="right" colspan="2">Efectivo</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td align="right" colspan="2">VALOR PAGADO</td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">CANON DE ARRENDAMIENTO :</td>
                        <td align="right">$ {{ $valor_canon_mensual }} +</td>
                    </tr>
                    <tr>
                        <td align="right">ADMINISTRACION P.H :</td>
                        <td align="right">$ 0 +</td>
                    </tr>
                    <tr>
                        <td align="right">IVA 16% :</td>
                        <td align="right">$ {{ $valor_iva_canon }} +</td>
                    </tr>
                    <tr>
                        <td align="right">RETENCION :</td>
                        <td align="right">$ {{ $valor_retefuente }} -</td>
                    </tr>
                    <tr>
                        <td align="right">RETEICA :</td>
                        <td align="right">$ {{ $valor_retencion_ica }} -</td>
                    </tr>
                    <tr>
                        <td align="right">RETEIVA :</td>
                        <td align="right">$ {{ $data[0]->valor_retencion_iva }} -</td>
                    </tr>
                    <!--tr>
                        <td align="right" style="font-weight: bold">TOTAL RETENCIONES :</td>
                        <td align="right">$ 0</td>
                    </tr-->
                    <tr>
                        <td align="right">OTROS :</td>
                        <td align="right">$ 0 +</td>
                    </tr>
                    <tr>
                        <td align="right">SERVICIOS :</td>
                        <td align="right">$ 0 +</td>
                    </tr>
                    <tr>
                        <td align="right">TOTAL :</td>
                        <td align="right">$ 4,264,998</td>
                    </tr>
                    <tr align="center"><td style="font-weight: bold">FECHAS DE PAGO</td><td style="font-weight: bold">VALOR</td></tr>
                    <tr>
                        <td align="center">HASTA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data[0]->fecha_max_recaudo_1 }}</td>
                        <td align="right">$ {{ $valor_neto_1 }}</td>
                    </tr>
                    <tr>
                        <td align="center">HASTA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data[0]->fecha_max_recaudo_2 }}</td>
                        <td align="right">$ {{ $valor_neto_2 }}</td>
                    </tr>
                    <tr>
                        <td align="center">HASTA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data[0]->fecha_max_recaudo_3 }}</td>
                        <td align="right">$ {{ $valor_neto_3 }}</td>
                    </tr>
                    <!--tr>
                        <td align="center" style="font-size: 11px; font-weight: bold">REFERENCIA</td>
                        <td align="center"> {{ $data[0]->cuenta }}</td>
                    </tr>
                    <tr>
                        <td align="center" style="font-size: 11px; font-weight: bold">BANCO DAVIVIENDA CONVENIO</td>
                        <td align="center" style="font-weight: bold">1227081</td>
                    </tr-->
                    <tr>
                        <td colspan="2" style="font-size: 10px;"><br>
                            &nbsp;&nbsp;Sello y Firma del Cajero 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-CLIENTE-
                        </td>
                    </tr>
                </table>

                <table border="1" cellspacing="0" width='100%'>
                    <tr>
                        <td align="center" width="50%">
                            <div style="font-size:7px;" >
                                FECHA: {{ $data[0]->fecha_max_recaudo_1 }}
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                VALOR: $ {{ $valor_neto_1 }}
                            </div>
                            <div>
                                <img src='https://barcode.tec-it.com/barcode.ashx?data=(415)7709998041820(8020)10200008(3900)0000741000(96)20180805&code=EANUCC128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Png&rotation=0&color=%23000000&bgcolor=%23ffffff&qunit=Mm&quiet=0' style="width:300px" />
                                <!--img src="data:image/png;base64, {{$code11}}" /><img src="data:image/png;base64, {{$code12}}" alt="barcode" /><img src="data:image/png;base64, {{$code13}}" alt="barcode" /><img src="data:image/png;base64, {{$code14}}" alt="barcode" /-->
                            </div>
                        </td>
                        <td width='50%' rowspan="3" valign="top">
                            <div style="font-size:7px;" align="center" >
                                LUIS SOTO & CIA S.A.
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                NIT 860.000.743-4
                            </div>
                            <br>
                            <div>
                                <table border="1" cellspacing="0" width='70%' style="font-size:10px;" align="center">
                                    <tr><td align="center">CLIENTE</td></tr>
                                    <tr><td align="center">{{ $data[0]->name }}</td></tr>
                                    <tr><td align="center" style="font-weight: bold">REFERENCIA:&nbsp;&nbsp;&nbsp;&nbsp;{{ $data[0]->cuenta }}</td></tr>
                                    <tr><td align="center" style="font-weight: bold">BANCO DAVIVIENDA CONVENIO:&nbsp;&nbsp;&nbsp;&nbsp;1227081</td></tr>
                                </table>
                            <div>
                            <br>
                            <div>
                                <table border="1" cellspacing="0" width='70%' style="font-size:10px;" align="center">
                                    <tr>
                                        <td align="center">Cod Banco</td>
                                        <td align="center">Cheque No.</td>
                                        <td align="center">Valor</td>
                                    </tr>
                                    <tr>
                                        <td align="center">&nbsp;</td>
                                        <td align="center">&nbsp;</td>
                                        <td align="center">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align="right" colspan="2">Efectivo</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td align="right" colspan="2">VALOR PAGADO</td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                        <div style="font-size:7px;" >
                                FECHA: {{ $data[0]->fecha_max_recaudo_2 }}
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                VALOR: $ {{ $valor_neto_2 }}
                            </div>
                            <div style="padding: 5px">
                                <img src='https://barcode.tec-it.com/barcode.ashx?data=(415)7709998041820(8020)10200008(3900)0000741000(96)20180805&code=EANUCC128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Png&rotation=0&color=%23000000&bgcolor=%23ffffff&qunit=Mm&quiet=0' style="width:300px" />
                                <!--img src="data:image/png;base64, {{$code2}}" alt="barcode" /-->
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                        <div style="font-size:7px;" >
                                FECHA: {{ $data[0]->fecha_max_recaudo_3 }}
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                VALOR: $ {{ $valor_neto_3 }}
                            </div>
                            <div style="padding: 5px">
                                <img src='https://barcode.tec-it.com/barcode.ashx?data=(415)7709998041820(8020)10200008(3900)0000741000(96)20180805&code=EANUCC128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Png&rotation=0&color=%23000000&bgcolor=%23ffffff&qunit=Mm&quiet=0' style="width:300px" />
                                <!--img src="data:image/png;base64, {{$code3}}" alt="barcode" /-->
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2">
                            <br>
                            <div align="center" style="font-size:10px;">
                                &nbsp;&nbsp;Sello y Firma del Cajero 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                -BANCO-</div>
                        </td>
                    </tr>
                </table>
        <!--/td></tr>    
    </table-->
</body>
</html>
