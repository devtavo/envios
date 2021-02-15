<html>

<head>
    <meta charset="euc-jp">
    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css" />
    <link rel="icon" href="assets/app/img/logo.ico" type="image/png" />
    <title>REGISTRO DE ENVIOS IDRA</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="select/bootstrap-select.min.css">
    <link rel="stylesheet" href="daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="tagsinput/bootstrap-tagsinput.css" crossorigin="anonymous">
    <link rel="stylesheet" href="multiselect/multi-select.css" />
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>

    <script type="text/javascript" src="select/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="moment/moment.min.js"></script>
    <script type="text/javascript" src="daterangepicker/daterangepicker.min.js"></script>
    <script type="text/javascript" src="tagsinput/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="select/defaults-es_ES.min.js"></script>
    <script type="text/javascript" src="multiselect/jquery.multi-select.js"></script>
    <script type="text/javascript" src="validator/validator.js"></script>

</head>
<style>
    div {
        border: 0px solid;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <center> <img src="logo.png" style="padding:0px" width="400px" height="90px" />

                <div class="col-lg-12"><br>
                    <h4 class="titulo"><Strong>REGISTRO DE ENVIO IDRA</strong></h4>
                </div>
            </center>

        </div>
    </div>

    <!--<div class="container">-->
    <!--    <div class="row">-->
    <!--        <div class="col-md-10">-->
    <!--            <div class="panel panel-default">-->
    <!--                <div class="panel-heading">Origen y destino</div>-->
    <!--                <div id="m_buscador" class="panel-body">-->
    <!--                    <div class="container">-->
    <!--                        <div class="row">-->
    <!--                            <div class="col-md-9">-->
    <!--                                <div class="row">-->
    <!--                                    <div class="col-md-4">-->
    <!--                                        <div class="form-group">-->
    <!--                                            <label>Fecha entrada / Check in</label>-->
    <!--                                            <div class="input-group">-->
    <!--                                                <input class="input form-control input-sm input-dt" type="text" name="fechaentrada" id="fechaentrada" placeholder="dd/mm/yyyy "><span class="input-group-addon">-->
    <!--                                                    <i class="glyphicon glyphicon-calendar"></i>-->
    <!--                                                </span>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-md-4">-->
    <!--                                        <div class="form-group">-->
    <!--                                            <label>Procedencia / Origin </label>-->
    <!--                                            <input class="input form-control input-sm" type="text" name="procedencia" id="procedencia" placeholder="">-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-md-4">-->
    <!--                                        <div class="form-group">-->
    <!--                                            <label>Habitacion / Room</label>-->
    <!--                                            <input class="input form-control input-sm" type="number" name="habitacion" id="habitacion" placeholder="" disabled>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="container">-->
    <!--                        <div class="row">-->
    <!--                            <div class="col-md-9">-->
    <!--                                <div class="row">-->
    <!--                                    <div class="col-md-4">-->
    <!--                                        <div class="form-group">-->
    <!--                                            <label>Fecha Salida / Check out</label>-->
    <!--                                            <div class="input-group">-->
    <!--                                                <input class="input form-control input-sm input-dt" type="text" name="fechasalida" id="fechasalida" placeholder="dd/mm/yyyy "><span class="input-group-addon">-->
    <!--                                                    <i class="glyphicon glyphicon-calendar"></i>-->
    <!--                                                </span>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-md-4">-->
    <!--                                        <div class="form-group">-->
    <!--                                            <label>Destino / Destination</label>-->
    <!--                                            <input class="input form-control input-sm" type="text" name="destino" id="destino" placeholder="">-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-md-4">-->
    <!--                                        <div class="form-group">-->
    <!--                                            <label>Tarifa / Rate</label>-->
    <!--                                            <input class="input form-control input-sm" type="number" name="tarifa" id="tarifa" placeholder="" disabled>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Datos de Envio</div>
                    <div id="m_buscador" class="panel-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nombre y apellidos</label>
                                                <input class="input form-control input-sm" type="text" name="nombre" id="nombre" placeholder="" value="INSTITUTO DE REALIZACION ACADEMICA S.A.C - IDRAC S.A.C" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>RUC/DNI</label>
                                                <input class="input form-control input-sm" type="number" name="ruc" id="ruc" placeholder="" value="20602630171" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Telefono Celular</label>
                                                <input class="input form-control input-sm" type="number" name="telefono" id="telefono" placeholder="" value="966236570" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Direccion</label>
                                                <input class="input form-control input-sm" size="60" type="text" name="domicilio" id="domicilio" placeholder="" value="CALLE LOS OROPENDOLASs Mz A Lt 9 (DPTO 5 URB SAN JOAQUIN)" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Distrito</label>
                                                <input class="input form-control input-sm" type="text" name="distrito" id="distrito" placeholder="" value="BELLAVISTA" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Provincia</label>
                                                <input class="input form-control input-sm" type="text" name="provincia" id="provincia" placeholder="" value="CALLAO" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Departamento</label>
                                                <input class="input form-control input-sm" type="text" name="departamento" id="departamento" placeholder="" value="LIMA" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Detalles del Envio</div>
                    <div id="m_buscador" class="panel-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nombres y apellidos </label>
                                                <input class="input form-control input-sm" type="text" name="nombrer" id="nombrer" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>RUC/DNI</label>
                                                <input class="input form-control input-sm" type="number" name="rucr" id="rucr" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Telefono Celular</label>
                                                <input class="input form-control input-sm" type="number" name="telefonor" id="telefonor" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Direccion</label>
                                                <input class="input form-control input-sm" size="60" type="text" name="domicilior" id="domicilior" placeholder="">
                                                <!-- <input class="input form-control input-sm" type="text" name="correo" id="correo" placeholder=""><span class="input-group-addon"> <i class="glyphicon glyphicon-envelope"></i></span> -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Correo </label>
                                                    <div class="input-group">
                                                        <input class="input form-control input-sm" type="text" name="correo" id="correo" placeholder=""><span class="input-group-addon"> <i class="glyphicon glyphicon-envelope"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Distrito</label>
                                                <input class="input form-control input-sm" type="text" name="distritor" id="distritor" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Provincia</label>
                                                <input class="input form-control input-sm" type="text" name="provinciar" id="provinciar" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Departamento</label>
                                                <input class="input form-control input-sm" type="text" name="departamentor" id="departamentor" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Referencia</label>
                                                <input class="input form-control input-sm" size="38" type="text" name="referenciar" id="referenciar" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Generado por:</label>
                                                <select name="ddlvendedor"  id="ddlvendedor" class="form-control input-sm" data-actions-box="true">
                                                <option value="0">Seleccione un vendedor</option>
                                                        <option value="1">Karen Leon</option>
                                                        <option value="2">Alberto Maguiña</option>
                                                        <option value="5">IDRA Capacitaciones</option>
                                                        <option value="7">Jesus Vera</option>
                                                        <option value="8">Samantha Salazar</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-4">
                                        <div class="form-group">
                                                <label>Realizaron el pago del envio</label>
                                                <select name="ddlenvio"  id="ddlenvio" class="form-control input-sm" data-actions-box="true">
                                                    <option value="1">Si</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <label>Fecha de registro</label>
                                                    <div class="input-group">
                                                        <input class="input form-control input-sm input-dt" type="text" name="fecha" id="fecha" placeholder="dd/mm/yyyy "><span class="input-group-addon">
                                                            <i class="glyphicon glyphicon-calendar"></i>
                                                        </span>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Monto del pago</label>
                                                <input class="input form-control input-sm" size="38" type="number" step="0.01" name="montopagado" id="montopagado" placeholder="">
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Detalle y/o observaciones</label>
                                                <textarea class="input form-control input-sm" type="text" rows="10" name="observaciones" id="observaciones" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="container">-->
    <!--    <div class="row">-->
    <!--        <div class="col-md-10">-->
    <!--            <div class="panel panel-default">-->
    <!--                <div class="panel-heading">Motivo de viaje / Purpose of Trip</div>-->
    <!--                <div id="m_buscador" class="panel-body">-->
    <!--                    <div class="container">-->
    <!--                        <div class="row">-->
    <!--                            <div class="col-md-9">-->
    <!--                                <div class="row">-->
    <!--                                    <div class="col-md-3">-->
    <!--                                        <div class="form-group">-->
    <!--                                            <input class="form-check-input" type="checkbox" value="si" name="m1" id="m1">-->
    <!--                                            <label class="form-check-label" style="padding-left: 30px;" for="m1">-->
    <!--                                                Turismo / Tourism.-->
    <!--                                            </label>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-md-3">-->
    <!--                                        <div class="form-group">-->
    <!--                                            <input class="form-check-input" type="checkbox" value="si" name="m2" id="m2">-->
    <!--                                            <label class="form-check-label" style="padding-left: 30px;" for="m2">-->
    <!--                                                Negocios / Business.-->
    <!--                                            </label>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-md-3">-->
    <!--                                        <div class="form-group">-->
    <!--                                            <input class="form-check-input" type="checkbox" value="si" name="m3" id="m3">-->
    <!--                                            <label class="form-check-label" style="padding-left: 30px;" for="m3">-->
    <!--                                                Otros / Others.-->
    <!--                                            </label>-->
    <!--                                        </div>-->r
    <!--                                    </div>-->
    <!--                                    <div class="col-md-3">-->
    <!--                                        <div class="form-group">-->
    <!--                                            <input class="form-check-input" type="checkbox" value="si" name="m4" id="m4">-->
    <!--                                            <label class="form-check-label" style="padding-left: 30px;" for="m4">-->
    <!--                                                Acompañante / Companion.-->
    <!--                                            </label>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="container">-->
    <!--    <div class="row">-->
    <!--        <div class="col-md-5">-->
    <!--            <div class="panel panel-default">-->
    <!--                <div class="panel-heading">Firma / Firm</div>-->
    <!--                <div id="m_buscador" class="panel-body">-->
    <!--                    <div class="container">-->
    <!--                        <div class="row">-->
    <!--                            <div class="col-md-4">-->
    <!--                                <canvas id="sig-canvas" width="300" height="160">-->
    <!--                                </canvas>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--        </div>-->
    <!--        <div class="col-md-5">-->
    <!--            <div class="panel panel-default">-->
    <!--                <div class="panel-heading">Adjuntar documento de identidad/ Attached Identity Document</div>-->
    <!--                <div id="m_buscador" class="panel-body">-->
    <!--                    <div class="container">-->
    <!--                        <div class="row">-->
    <!--                            <input type="text" id="adjuntopath" hidden name="adjuntopath">-->
    <!--                            <div class="col-md-4">-->
    <!--                                <input type="file" id="adjunto" name="adjunto" required>-->
    <!--                                <br><div id="listo" name="listo"></div>-->

    <!--                                <br>-->
    <!--                                    <p style="text-align: justify;font-size: 12px;">* Para procesar su reserva, es requisito adjuntar su documento de identidad./ In order to process you reservation, you&#8217;re required to attach your Identity Document.</p>-->
    <!--                                    <p style="text-align: justify;font-size: 12px;">** En caso de pasajeros extranjeros, deber&aacute;n adjuntar la p&aacute;gina del pasaporte con el sello de ingreso al pa&iacute;s, a fin de exonerar el 18% de  I.G.V. / If you&#8217;re a foreign passenger, you must attach the page of your passport with the stamp of entry to the country in order to be exempted of the 18% general sales tax.</p>-->
    <!--                            </div>-->

    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->





    <!--<div class="container">-->
    <!--    <div class="row">-->
    <!--        <div class="col-md-10">-->
    <!--            <div class="panel panel-default">-->
    <!--                <div class="panel-heading">Vehiculo / Vehicle</div>-->
    <!--                <div id="m_buscador" class="panel-body">-->
    <!--                    <div class="container">-->
    <!--                        <div class="row">-->
    <!--                            <div class="col-md-2">-->
    <!--                                <div class="form-group">-->
    <!--                                    <input type="radio" id="male" name="vehiculo" value="si">-->
    <!--                                    <label for="male">Si/Yes </label><br>-->

    <!--                                    <input type="radio" id="female" name="vehiculo" value="no">-->
    <!--                                    <label for="female">No/No </label>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="col-md-3">-->
    <!--                                <div class="form-group">-->
    <!--                                    <label>Tipo / Kind</label>-->
    <!--                                    <input class="input form-control input-sm" type="text" name="tipo" id="tipo" placeholder="">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="col-md-3">-->
    <!--                                <div class="form-group">-->
    <!--                                    <label>Placa / Plate</label>-->
    <!--                                    <input class="input form-control input-sm" type="text" name="placa" id="placa" placeholder="">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->

    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <button type="submit" style="background:#152650;color:white;" class="input form-control" id="sig-submitBtn">ENVIAR DATOS</button>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- </form> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="app.js"></script>
</body>
<script>
    $(function() {
        $('input[name="fecha"]').daterangepicker({
            "locale": {
                "format": "DD-MM-YYYY",
                "separator": " - ",
                "applyLabel": "Guardar",
                "cancelLabel": "Cancelar",
                "fromLabel": "Desde",
                "toLabel": "Hasta",
                "daysOfWeek": [
                    "Do",
                    "Lu",
                    "Ma",
                    "Mi",
                    "Ju",
                    "Vi",
                    "Sa"
                ],
                "monthNames": [
                    "Enero",
                    "Febrero",
                    "Marzo",
                    "Abril",
                    "Mayo",
                    "Junio",
                    "Julio",
                    "Agosto",
                    "Setiembre",
                    "Octubre",
                    "Noviembre",
                    "Diciembre"
                ],
                "firstDay": 1
            },
            showWeekNumbers: true,
            singleDatePicker: true,
            showISOWeekNumbers: true,
            //startDate: moment(),
            minDate: moment()
            //endDate: fecha_final,

        });
    });
    
</script>

</html>