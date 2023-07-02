(function ($) {
    $(document).ready(function () {
        var currentForm = localStorage.getItem('currentForm') || '';
        var current_fs, next_fs, previous_fs; // fieldsetsx
        var opacity;
        var current = 1;
        var steps = 6;

        if (currentForm) {
            $('#container-certified-form-' + currentForm).show();
            $('#back').show();
            $('.container-options').hide();
        } else {
            $('.container-options').show();
        }

        $('.budget, .flyer, .businessCard').click(function (e) {
            e.preventDefault();
            var dataValue = $(this).attr('data');
            $('#certified-form-' + dataValue).show();
            $('#container-certified-form-' + dataValue).show();
            localStorage.setItem('currentForm', dataValue);
            $('#back').show();
            $('.container-options').hide();
        });

        $('#back').click(function (e) {
            e.preventDefault();
            location.reload();
            $('[id^="container-certified-form-"]').hide();
            $('[id^="certified-form-"]').hide();
            $('#back').hide();
            $('.container-options').show();
            localStorage.removeItem('currentForm');
        });

        setProgressBar(current);

        $(".next").click(function () {
            current_fs = $(this).closest('fieldset');
            next_fs = $(this).closest('fieldset').next();
            var input = current_fs.find('input[required]');
            var label = current_fs.find('label.error-label');
            var camposIncompletos = input.filter(function () {
                return $(this).val() === '';
            });

            if (camposIncompletos.length > 0) {
                label.text('Por favor, complete todos los campos requeridos.').attr('style', 'color: red;').show();
                camposIncompletos.addClass('error-input').attr('style', 'border-color: red !important;');
                camposIncompletos.first().focus();
                return;
            } else {
                label.hide();
                input.removeClass('error-input').attr('style', '');
            }
            $("[id^='certified-form-']").each(function (index, element) {
                $(element).find("#progressbar li").eq(current).addClass("active");
            });

            next_fs.show();
            current_fs.animate({ opacity: 0 }, {
                step: function (now) {
                    opacity = 1 - now;
                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({ 'opacity': opacity });
                },
                duration: 500
            });
            setProgressBar(++current);
        });

        $(".previous").click(function () {
            current_fs = $(this).closest('fieldset');
            previous_fs = $(this).closest('fieldset').prev();
            var input = current_fs.find('input[required]');
            var label = current_fs.find('label.error-label');
            $("#html-container-previews canvas").remove();

            var containers = document.querySelectorAll("[id^='container-certified-form-']");
            var containerParent = null;
            for (var i = 0; i < containers.length; i++) {
                var container = containers[i];
                if (getComputedStyle(container).display !== 'none') {
                    containerParent = container;
                    break;
                }
            }
            var htmlContainer = containerParent.querySelector("#html-container");
            if (htmlContainer) {
                containerParent.removeChild(htmlContainer);
            }

            label.hide();
            input.removeClass('error-input').attr('style', '').focus();
            $("[id^='certified-form-']").each(function (index, element) {
                $(element).find("#progressbar li").eq(current - 1).removeClass("active");
            });
            previous_fs.show();
            current_fs.animate({ opacity: 0 }, {
                step: function (now) {
                    opacity = 1 - now;
                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({ 'opacity': opacity });
                },
                duration: 500
            });

            setProgressBar(--current);
        });

        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar").css("width", percent + "%")
        }

        $("form").submit(function (event) {
            event.preventDefault();
            var form = event.target;
            var formData = new FormData(form);
            var submitButton = form.querySelector('[type="submit"]');
            var loader = form.querySelector('.loader');

            var current_fs = $(form).closest('form').find('fieldset:last');
            var next_fs = current_fs.next();

            $.ajax({
                type: "POST",
                url: form.action,
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    submitButton.style.display = 'none';
                    loader.style.display = 'block';
                },
                success: function (response) {
                    if (response.success) {
                        $("fieldset").not(current_fs).hide();
                        current_fs.show();
                        current_fs.animate({ opacity: 0 }, {
                            step: function (now) {
                                opacity = 1 - now;
                                current_fs.css({
                                    'display': 'none',
                                    'position': 'relative'
                                });
                                next_fs.css({ 'opacity': opacity });
                            },
                            duration: 500
                        });
                        setProgressBar(++current);
                        $("[id^='certified-form-']").each(function (index, element) {
                            $(element).find("#progressbar li").addClass("active");
                        });

                        $("#html-container-previews canvas").remove();
                        var containers = document.querySelectorAll("[id^='container-certified-form-']");
                        var containerParent = null;

                        for (var i = 0; i < containers.length; i++) {
                            var container = containers[i];
                            if (getComputedStyle(container).display !== 'none') {
                                containerParent = container;
                                break;
                            }
                        }

                        if (containerParent) {
                            var htmlContainer = document.createElement('div');
                            htmlContainer.id = 'html-container';
                            containerParent.appendChild(htmlContainer);

                            htmlContainer.innerHTML = `
                            <div style="text-align: center;">
                              <h2><strong>Registro exitosamente!</strong></h2>
                              <p>Haz clic en el botón de abajo para descargar el PDF:</p>
                              <br>
                              <div class="form-row" style="justify-content: center;">
                                <a href="#" class="buttonPDF" onclick="location.reload()">Crear nueva</a>
                                <a href="${response.download_url}" class="buttonPDF" target="_blank">Descargar PDF</a>
                              </div>
                            </div>
                          `;
                        } else {
                            console.error("No se encontró el contenedor padre adecuado sin estilo 'display: none'.");
                        }

                    } else {
                        htmlContainer.innerHTML = '';
                    }
                },
                error: function (xhr, textStatus, error) {
                    console.log(textStatus);
                    console.log(error);

                },
                complete: function () {
                    submitButton.style.display = 'block';
                    loader.style.display = 'none';
                }
            });
        });
        $(".previews").click(function (event) {
            event.preventDefault();
            var loader = $('.loader');
            var submitButton = $('[type="submit"]');
            $("#html-container-previews canvas").remove();

            var form = $(this).closest('form')[0];
            var formData = new FormData(form);
            formData.append('action', 'previews_result');
            formData.append('certified_form_action', 'previews_result');
            $.ajax({
                type: "POST",
                data: formData,
                url: host.ajaxurl,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    loader.css('display', 'block');
                    submitButton.css('display', 'none')
                },
                success: function (response) {
                    if (response.success) {
                        var pdfContent = response.pdf_content;
                        var pdfDataUri = 'data:application/pdf;base64,' + pdfContent;
                        pdfjsLib.getDocument({ url: pdfDataUri }).promise.then(function (pdf) {
                            var pageNumber = 1;
                            pdf.getPage(pageNumber).then(function (page) {
                                var canvas = document.createElement('canvas');
                                var context = canvas.getContext('2d');
                                var viewport = page.getViewport({ scale: 1 });

                                canvas.width = viewport.width;
                                canvas.height = viewport.height;

                                var renderContext = {
                                    canvasContext: context,
                                    viewport: viewport
                                };

                                page.render(renderContext).promise.then(function () {
                                    var containerParent = null;
                                    var containers = document.querySelectorAll("[id^='container-certified-form-']");

                                    for (var i = 0; i < containers.length; i++) {
                                        var container = containers[i];

                                        if (
                                            getComputedStyle(container).display !== 'none' &&
                                            container.querySelector("[id^='certified-form-']")
                                        ) {
                                            containerParent = container;
                                            break;
                                        }
                                    }

                                    if (containerParent) {
                                        var htmlContainerPreviews = containerParent.querySelector('#html-container-previews');

                                        if (htmlContainerPreviews) {
                                            htmlContainerPreviews.appendChild(canvas);
                                        } else {
                                            console.error("No se encontró el contenedor 'html-container-previews' dentro del contenedor padre.");
                                        }
                                    } else {
                                        console.error("No se encontró el contenedor padre adecuado sin estilo 'display: none' y con hijos que cumplan el criterio.");
                                    }
                                });
                            });
                        });
                    } else {
                        console.error('Error en la generación del PDF: ' + response.message);
                    }
                },
                error: function (xhr, textStatus, error) {
                    // Manejo de errores
                },
                complete: function () {
                    loader.css('display', 'none');
                    submitButton.css('display', 'block')
                }
            });
        });
    });
})(jQuery);
