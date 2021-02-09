(function() {
    // window.requestAnimFrame = (function(callback) {
    //     return window.requestAnimationFrame ||
    //         window.webkitRequestAnimationFrame ||
    //         window.mozRequestAnimationFrame ||
    //         window.oRequestAnimationFrame ||
    //         window.msRequestAnimaitonFrame ||
    //         function(callback) {
    //             window.setTimeout(callback, 1000 / 60);
    //             // Retrasa la ejecucion de la funcion para mejorar la experiencia
    //         };
    // })();

    // // Traemos el canvas mediante el id del elemento html
    // var canvas = document.getElementById("sig-canvas");
    // var ctx = canvas.getContext("2d");


    // // Activamos MouseEvent para nuestra pagina
    // var drawing = false;
    // var mousePos = { x: 0, y: 0 };
    // var lastPos = mousePos;
    // canvas.addEventListener("mousedown", function(e) {
    //     /*
    //       Mas alla de solo llamar a una funcion, usamos function (e){...}
    //       para mas versatilidad cuando ocurre un evento
    //     */
    //     var tint = document.getElementById("color");
    //     var punta = document.getElementById("puntero");
    //     console.log(e);
    //     drawing = true;
    //     lastPos = getMousePos(canvas, e);
    // }, false);
    // canvas.addEventListener("mouseup", function(e) {
    //     drawing = false;
    // }, false);
    // canvas.addEventListener("mousemove", function(e) {
    //     mousePos = getMousePos(canvas, e);
    // }, false);

    // // Activamos touchEvent para nuestra pagina
    // canvas.addEventListener("touchstart", function(e) {
    //     mousePos = getTouchPos(canvas, e);
    //     console.log(mousePos);
    //     e.preventDefault(); // Prevent scrolling when touching the canvas
    //     var touch = e.touches[0];
    //     var mouseEvent = new MouseEvent("mousedown", {
    //         clientX: touch.clientX,
    //         clientY: touch.clientY
    //     });
    //     canvas.dispatchEvent(mouseEvent);
    // }, false);
    // canvas.addEventListener("touchend", function(e) {
    //     e.preventDefault(); // Prevent scrolling when touching the canvas
    //     var mouseEvent = new MouseEvent("mouseup", {});
    //     canvas.dispatchEvent(mouseEvent);
    // }, false);
    // canvas.addEventListener("touchleave", function(e) {
    //     // Realiza el mismo proceso que touchend en caso de que el dedo se deslice fuera del canvas
    //     e.preventDefault(); // Prevent scrolling when touching the canvas
    //     var mouseEvent = new MouseEvent("mouseup", {});
    //     canvas.dispatchEvent(mouseEvent);
    // }, false);
    // canvas.addEventListener("touchmove", function(e) {
    //     e.preventDefault(); // Prevent scrolling when touching the canvas
    //     var touch = e.touches[0];
    //     var mouseEvent = new MouseEvent("mousemove", {
    //         clientX: touch.clientX,
    //         clientY: touch.clientY
    //     });
    //     canvas.dispatchEvent(mouseEvent);
    // }, false);

    // // Get the position of the mouse relative to the canvas
    // function getMousePos(canvasDom, mouseEvent) {
    //     var rect = canvasDom.getBoundingClientRect();
    //     /*
    //       Devuelve el tamaño de un elemento y su posición relativa respecto
    //       a la ventana de visualización (viewport).
    //     */
    //     return {
    //         x: mouseEvent.clientX - rect.left,
    //         y: mouseEvent.clientY - rect.top
    //     };
    // }

    // // Get the position of a touch relative to the canvas
    // function getTouchPos(canvasDom, touchEvent) {
    //     var rect = canvasDom.getBoundingClientRect();
    //     console.log(touchEvent);
    //     /*
    //       Devuelve el tamaño de un elemento y su posición relativa respecto
    //       a la ventana de visualización (viewport).
    //     */
    //     return {
    //         x: touchEvent.touches[0].clientX - rect.left, // Popiedad de todo evento Touch
    //         y: touchEvent.touches[0].clientY - rect.top
    //     };
    // }

    // // Draw to the canvas
    // function renderCanvas() {
    //     if (drawing) {
    //         var tint = document.getElementById("color");
    //         var punta = document.getElementById("puntero");
    //         ctx.strokeStyle = "#000000";
    //         ctx.beginPath();
    //         ctx.moveTo(lastPos.x, lastPos.y);
    //         ctx.lineTo(mousePos.x, mousePos.y);
    //         //.log(punta.value);
    //         ctx.lineWidth = "3";
    //         ctx.stroke();
    //         ctx.closePath();
    //         lastPos = mousePos;
    //     }
    // }

    // function clearCanvas() {
    //     canvas.width = canvas.width;
    // }

    // // Allow for animation
    // (function drawLoop() {
    //     requestAnimFrame(drawLoop);
    //     renderCanvas();
    // })();

    // function clearCanvas() {
    //     canvas.width = canvas.width;
    // }

    // Set up the UI
    //var sigText = document.getElementById("sig-dataUrl");
    // var sigImage = document.getElementById("sig-image");
    //var clearBtn = document.getElementById("sig-clearBtn");
    var submitBtn = document.getElementById("sig-submitBtn");

    // nomcl.addEventListener("blur", function(event) {
    //     event.target.style.background = "#fff";
    // }, true);

    // clearBtn.addEventListener("click", function(e) {
    //     clearCanvas();
    //     // sigText.innerHTML = "Data URL for your signature will go here!";
    //     // sigImage.setAttribute("src", "");
    // }, false);

    // $(document).on('change', '[name="adjunto"]', function(e) {
    //  //App.uploadFile('adjunto', 'txtAdjTmp');
    //     console.log("aaeweqw");
    //     var file_data = $('[name="adjunto"]').prop('files');
    //     var form_data = new FormData();

    //     if (file_data.length > 0) {
    //         for (i = 0; i < file_data.length; i++) {
    //             form_data.append('file_' + i, file_data[i]);
    //         }

    //         $.ajax({
    //             url: '/upload.php',
    //             dataType: 'text',
    //             cache: false,
    //             contentType: false,
    //             processData: false,
    //             data: form_data,
    //             type: 'post',
    //             success: function(response) {
    //                 $('[name="adjuntopath"]').val(response);
    //                 document.getElementById("listo").innerHTML = 'Carga completa 100%' +'<span class="glyphicon glyphicon-ok">';
    //           }
    //         });
    //     }

    // });
    submitBtn.addEventListener("click", function(e) {
        //   var dataUrl = canvas.toDataURL("image/png");

        var nombre = document.getElementById("nombre").value;
        var ruc = document.getElementById("ruc").value;
        var telefono = document.getElementById("telefono").value;
        var domicilio = document.getElementById("domicilio").value;
        var distrito = document.getElementById("distrito").value;
        var provincia = document.getElementById("provincia").value;
        var departamento = document.getElementById("departamento").value;
        var nombrer = document.getElementById("nombrer").value;
        var rucr = document.getElementById("rucr").value;
        var telefonor = document.getElementById("telefonor").value;
        var domicilior = document.getElementById("domicilior").value;
        var correo = document.getElementById("correo").value;
        var distritor = document.getElementById("distritor").value;
        var provinciar = document.getElementById("provinciar").value;
        var departamentor = document.getElementById("departamentor").value;
        var referenciar = document.getElementById("referenciar").value;
        var dequien = document.getElementById("ddlvendedor").value;
        var pagorealizado = document.getElementById("ddlenvio").value;
        var fechapago = document.getElementById("fecha").value;
        var montopagado = document.getElementById("montopagado").value;
        var observaciones = document.getElementById("observaciones").value;

        var data = {};
        data.nombre = nombre;
        data.ruc = ruc;
        data.telefono = telefono;
        data.domicilo = domicilio;
        data.distrito = distrito;
        data.provincia = provincia;
        data.departamento = departamento;
        data.nombrer = nombrer;
        data.rucr = rucr;
        data.telefonor = telefonor;
        data.domicilior = domicilior;
        data.correo = correo;
        data.distritor = distritor;
        data.provinciar = provinciar;
        data.departamentor = departamentor;
        data.departamentor = departamentor;
        data.referenciar = referenciar;
        data.dequien = dequien;
        data.pagorealizado = pagorealizado;
        data.fechapago = fechapago;
        data.montopagado = montopagado;
        data.observaciones = observaciones;

        data.class = 'EnviosController'
        data.method = 'create'

        $.ajax({
            type: "POST",
            url: 'php/ws.php',
            data: data,
            dataType: "dataType",
            success: function(response) {
                console.log(response);
            }
        });

        // var vehiculo = document.getElementById("vehiculo").value;

        // if (document.getElementById("m5").checked) {
        //     var vm5 = 'si';
        // } else {
        //     vm5 = 'no';
        // }
        // if (document.getElementById("m6").checked) {
        //     var vm6 = 'si';
        // } else {
        //     vm6 = 'no';
        // }
        // var m3 = document.getElementById("m3").value;
        // var m4 = document.getElementById("m4").value;
        // var m5 = document.getElementById("m5").value;
        // var m6 = document.getElementById("m6").value;

        //sigText.innerHTML = dataUrl;
        //sigImage.setAttribute("src", dataUrl);
        dataform = document.createElement("form");
        document.body.appendChild(dataform);
        dataform.setAttribute("action", "mod_pdf.php");
        dataform.setAttribute("enctype", "multipart/form-data");
        dataform.setAttribute("method", "POST");
        dataform.setAttribute("target", "_self");
        // console.log(m2);
        dataform.innerHTML =
            '<input type="text" hidden name="nombre" value="' + nombre + '"/>' +
            '<input type="text" hidden name="ruc" value="' + ruc + '"/>' +
            '<input type="text" hidden name="telefono" value="' + telefono + '"/>' +
            '<input type="text" hidden name="domicilio" value="' + domicilio + '"/>' +
            '<input type="text" hidden name="distrito" value="' + distrito + '"/>' +
            '<input type="text" hidden name="provincia" value="' + provincia + '"/>' +
            '<input type="text" hidden name="departamento" value="' + departamento + '"/>' +
            '<input type="text" hidden name="nombrer" value="' + nombrer + '"/>' +
            '<input type="text" hidden name="rucr" value="' + rucr + '"/>' +
            '<input type="text" hidden name="telefonor" value="' + telefonor + '"/>' +
            '<input type="text" hidden name="domicilior" value="' + domicilior + '"/>' +
            '<input type="text" hidden name="correo" value="' + correo + '"/>' +
            '<input type="text" hidden name="distritor" value="' + distritor + '"/>' +
            '<input type="text" hidden name="provinciar" value="' + provinciar + '"/>' +
            '<input type="text" hidden name="departamentor" value="' + departamentor + '"/>' +
            '<input type="text" hidden name="referenciar" value="' + referenciar + '"/>' +
            '<input type="text" hidden name="dequien" value="' + dequien + '"/>' +
            '<input type="text" hidden name="pagorealizado" value="' + pagorealizado + '"/>' +
            '<input type="text" hidden name="fechapago" value="' + fechapago + '"/>' +
            '<input type="text" hidden name="montopagado" value="' + montopagado + '"/>' +
            '<input type="text" hidden name="observaciones" value="' + observaciones + '"/>';

        // '<input type="text" hidden name="m5" value="' + vm5 + '"/>' +
        // '<input type="text" hidden name="m6" value="' + vm6 + '"/>';

        dataform.submit();
    }, false);

})();