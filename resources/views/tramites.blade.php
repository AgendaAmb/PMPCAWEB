
@extends('base')

@section('maincontent')
    <section>
        <div id="p-container" class="container px-lg-8.5 px-md-5 pb-5">
            <div class="col-12 col-sm-12"><br>
                <h1><strong>TRÁMITES</strong></h1>
            </div>
            <div class="accordion p-2" id="accordionExample">
                <div class="accordion-item">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>Maestría en Ciencias Ambientales</strong>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse active show" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body" id="accordionTextM"><br>
                            <p><strong>1. Inscripción</strong><br>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/1.1 F_Inscripcion_MCA.pdf')}}"> 1.1 Formato de inscripción a la Maestría en Ciencias Ambientales </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/1.4 F_AltasBajas.pdf')}}"> 1.4 Formato de altas y bajas </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/1.5 FormatoBajatemporales.pdf')}}"> 1.5 Formato de baja temporal </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/1.6 CartaResponsabilidadesAlumnos.pdf')}}"> 1.6 Carta de responsabilidad de alumnos de la UASLP </a>
                                </div>
                            </p>
                            <br><br>
                            <p><strong>2. Tesis y comité tutorial</strong><br>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/2.1_AsignacionDirectorTesis.pdf')}}"> 2.1 Formato para asignación de director de tesis del programa de Maestría en Ciencias Ambientales </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/2.3 ComTutorialTesis.pdf')}}"> 2.3 Formato para el registro de comité tutorial y título de tesis para el programa de Maestría en Ciencias Ambientales </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/2.6 CambioComiteTutorial.pdf')}}"> 2.6 Formato para el cambio de comité tutorial </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/2.7 AdecuacionTituloTesis.pdf')}}"> 2.7 Formato para adecuación de título de tesis </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/2.8 CambioTesis.pdf')}}"> 2.8 Formato para cambio de proyecto de tesis </a>
                                </div>
                            </p>
                            <br><br>
                            <p><strong>3. Reporte de calificaciones</strong><br>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/3.1 ActaEvalTrabTesis.pdf')}}"> 3.1 Acta de trabajo de tesis semestral para el programa de Maestría en Ciencias Ambientales </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/3.4 Calif_SemTesis.pdf')}}"> 3.4 Formato para calificación de seminario de tesis para Maestría y Doctorado en Ciencias Ambientales </a>
                                </div>
                            </p>
                            <br><br>
                            <p><strong>4. Obtención de grado</strong><br>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/4.1 SolicitudExamenJur.pdf')}}"> 4.1 Anexo a la solicitud oficial de aprobación de examen de grado y jurado de examen </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/4.3_PortadaTesis.docx')}}"> 4.3 Portada de tesis para Maestría y Doctorado en Ciencias Ambientales </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/4.5 PMPCA_Poster.pptx')}}"> 4.5 Poster de tesis para Maestría y Doctorado en Ciencias Ambientales </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        4.7 Cartas para publicación de tesis en repositorio institucional<br>
                                        <div style="margin-left: 25px;">
                                            <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                                <a href="{{asset('storage/pdf/4.7.1 CartaAutorizacion_VoBoDirectorTesis.docx')}}">4.7.1 Carta de autorización para el autoarchivo de una tesis en el repositorio institucional de la UASLP con Vo.Bo. del director de tesis</a>
                                            </div>
                                            <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                                <a href="{{asset('storage/pdf/4.7.2 CartaAutorizacion_CoautoriaDirectorTesis.docx')}}">4.7.2 Carta de autorización para el autoarchivo de una tesis en el repositorio institucional de la UASLP en coautoría con el director de tesis</a>
                                            </div>
                                            <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                                <a href="{{asset('storage/pdf/4.7.3 CartaAutorizacion_Coparticipacion.docx')}}">4.7.3 Carta de autorización para el autoarchivo de una tesis en el repositorio institucional de la UASLP en coparticipación con otra institución</a>
                                            </div>
                                            <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                                <a href="{{asset('storage/pdf/4.7.4 SolicitudEmbargo.docx')}}">4.7.4 Solicitud de embargo del repositorio institucional de la UASLP</a>
                                            </div>
                                       </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/4.8 RecepcionTesis.pdf')}}"> 4.8 Formato para registro de línea de investigación de tesis</a>
                                </div>
                            </p>
                            <br><br>
                            <p><strong>5. Egresados</strong><br>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="http://a.uaslp.mx/o7B5Fwg3"> 5.1 Evaluación de director de tesis </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="http://a.uaslp.mx/f8PNy2o5"> 5.2 Evaluación de asesor  </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="https://forms.office.com/r/05Lh2gKbSP"> 5.3 Encuesta básica de egresados  </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="https://forms.office.com/r/h7VmNrqMGm"> 5.4 Encuesta para programa de egresados del PMPCA  </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="https://forms.office.com/r/E8GF1BBTbR"> 5.5 Registro de artículos </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="https://forms.office.com/r/0W7Dt8tGWk"> 5.6. Registro de premios y reconocimientos </a>
                                </div>
                            </p>
                            <br><br>
                            <p><strong>6. Formatos Conacyt</strong><br>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/6.1 Formato_Evaluacion_Desempeno_Becario_PMPCA.pdf')}}"> 6.1 Formato para la evaluación semestral de becario Conacyt </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/6.2 FormatoRetribucionSocial_Anexo.pdf')}}"> 6.2 Actividades de retribución social + anexo</a>
                                </div>
                            </p>


                            </div>
                        </div>
                    </div>
                </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <strong>Maestría en Ciencias Ambientales (doble titulación)</strong>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body" id="accordionTextM"><br>
                                <p><strong>1. Inscripción</strong><br>
                                    <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/1.2 F_Inscripcion_ENREM.pdf')}}"> 1.2 Formato de inscripción a la Maestría en Ciencias Ambientales (doble titulación) </a>
                                    </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/1.4 F_AltasBajas.pdf')}}"> 1.4 Formato de altas y bajas </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/1.5 FormatoBajatemporales.pdf')}}"> 1.5 Formato de baja temporal </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/1.6 CartaResponsabilidadesAlumnos.pdf')}}"> 1.6 Carta de responsabilidad de alumnos de la UASLP </a>
                                </div>
                            </p>
                            <br><br>
                            <p><strong>2. Tesis y comité tutorial</strong><br>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/2.2 AsignacionDirectorTesis.pdf')}}"> 2.2 Formato para asignación de director de tesis del programa de Maestría en Ciencias Ambientales (doble titulación) </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/2.4 ComTutorialTesis.pdf')}}"> 2.4 Formato para el registro de comité tutorial y título de tesis para el programa de Maestría en Ciencias Ambientales (doble titulación) </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/2.6 CambioComiteTutorial.pdf')}}"> 2.6 Formato para el cambio de comité tutorial </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/2.7 AdecuacionTituloTesis.pdf')}}"> 2.7 Formato para adecuación de título de tesis </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/2.8 CambioTesis.pdf')}}"> 2.8 Formato para cambio de proyecto de tesis </a>
                                </div>
                            </p>
                            <br><br>
                            <p><strong>3. Reporte de calificaciones</strong><br>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/3.2 ActaEvalTrabTesis.pdf')}}"> 3.2 Acta de trabajo de tesis semestral para el programa de Maestría en Ciencias Ambientales (doble titulación)</a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/3.5 Calif_SemTesis.pdf')}}"> 3.5 Formato para calificación de seminario de tesis para Maestría en Ciencias Ambientales (doble tiulación) </a>
                                </div>
                            </p>
                            <br><br>
                            <p><strong>4. Obtención de grado</strong><br>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/4.1 SolicitudExamenJur.pdf')}}"> 4.1 Anexo a la solicitud oficial de aprobación de examen de grado y jurado de examen </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/4.4 PortadaTesis.docx')}}"> 4.4 Portada de tesis para Maestría en Ciencias Ambientales (doble titulación) </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/4.6 ENREM_Poster.pptx')}}"> 4.6 Poster de tesis para Maestría en Ciencias Ambientales (doble titulación) </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        4.7 Cartas para publicación de tesis en repositorio institucional<br>
                                        <div style="margin-left: 25px;">
                                            <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                                <a href="{{asset('storage/pdf/4.7.1 CartaAutorizacion_VoBoDirectorTesis.docx')}}">4.7.1 Carta de autorización para el autoarchivo de una tesis en el repositorio institucional de la UASLP con Vo.Bo. del director de tesis</a>
                                            </div>
                                            <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                                <a href="{{asset('storage/pdf/4.7.2 CartaAutorizacion_CoautoriaDirectorTesis.docx')}}">4.7.2 Carta de autorización para el autoarchivo de una tesis en el repositorio institucional de la UASLP en coautoría con el director de tesis</a>
                                            </div>
                                            <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                                <a href="{{asset('storage/pdf/4.7.3 CartaAutorizacion_Coparticipacion.docx')}}">4.7.3 Carta de autorización para el autoarchivo de una tesis en el repositorio institucional de la UASLP en coparticipación con otra institución</a>
                                            </div>
                                            <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                                <a href="{{asset('storage/pdf/4.7.4 SolicitudEmbargo.docx')}}">4.7.4 Solicitud de embargo del repositorio institucional de la UASLP</a>
                                            </div>
                                       </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/4.8 RecepcionTesis.pdf')}}"> 4.8 Formato para registro de línea de investigación de tesis</a>
                                </div>
                            </p>
                            <br><br>
                            <p><strong>5. Egresados</strong><br>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="http://a.uaslp.mx/o7B5Fwg3"> 5.1 Evaluación de director de tesis </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="http://a.uaslp.mx/f8PNy2o5"> 5.2 Evaluación de asesor  </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="https://forms.office.com/r/05Lh2gKbSP"> 5.3 Encuesta básica de egresados  </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="https://forms.office.com/r/h7VmNrqMGm"> 5.4 Encuesta para programa de egresados del PMPCA  </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="https://forms.office.com/r/E8GF1BBTbR"> 5.5 Registro de artículos </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="https://forms.office.com/r/0W7Dt8tGWk"> 5.6. Registro de premios y reconocimientos </a>
                                </div>
                            </p>
                            <br><br>
                            <p><strong>6. Formatos Conacyt</strong><br>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/6.1 Formato_Evaluacion_Desempeno_Becario_PMPCA.pdf')}}"> 6.1 Formato para la evaluación semestral de becario Conacyt </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/6.2 FormatoRetribucionSocial_Anexo.pdf')}}"> 6.2 Actividades de retribución social + anexo</a>
                                </div>
                            </p>
                                </div>
                            </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <strong>Doctorado en Ciencias Ambientales</strong>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body" id="accordionTextM"><br>
                            <p><strong>1. Inscripción</strong><br>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/1.3_Inscripcion_DCA.pdf')}}"> 1.3 Formato de inscripción al Doctorado en Ciencias Ambientales </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/1.4 F_AltasBajas.pdf')}}"> 1.4 Formato de altas y bajas </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/1.5 FormatoBajatemporales.pdf')}}"> 1.5 Formato de baja temporal </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/1.6 CartaResponsabilidadesAlumnos.pdf')}}"> 1.6 Carta de responsabilidad de alumnos de la UASLP </a>
                                </div>
                            </p>
                            <br><br>
                            <p><strong>2. Tesis y comité tutorial</strong><br>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/2.5 ComTutorialTesis.pdf')}}"> 2.5 Formato para el registro de comité tutorial y título de tesis para el programa de Doctorado en Ciencias Ambientales </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/2.6 CambioComiteTutorial.pdf')}}"> 2.6 Formato para el cambio de comité tutorial </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/2.7 AdecuacionTituloTesis.pdf')}}"> 2.7 Formato para adecuación de título de tesis </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/2.8 CambioTesis.pdf')}}"> 2.8 Formato para cambio de proyecto de tesis </a>
                                </div>
                            </p>
                            <br><br>
                            <p><strong>3. Reporte de calificaciones</strong><br>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/3.3 ActaEvalTrabTesis.pdf')}}"> 3.3 Acta de trabajo de tesis semestral para el programa de Doctorado en Ciencias Ambientales </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/3.4 Calif_SemTesisD.pdf')}}"> 3.4 Formato para calificación de seminario de tesis para Maestría y Doctorado en Ciencias Ambientales </a>
                                </div>
                            </p>
                            <br><br>
                            <p><strong>4. Obtención de grado</strong><br>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/4.1 SolicitudExamenJur.pdf')}}"> 4.1 Anexo a la solicitud oficial de aprobación de examen de grado y jurado de examen </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/4.2 RequisitosEgreso.pdf')}}"> 4.2 Formato de solicitud de aprobación de requisitos de egreso de alumnos del Doctorado en Ciencias Ambientales </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/4.3_PortadaTesis.docx')}}"> 4.3 Portada de tesis para Maestría y Doctorado en Ciencias Ambientales </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/4.5 PMPCA_Poster.pptx')}}"> 4.5 Poster de tesis para Maestría y Doctorado en Ciencias Ambientales </a>
                                </div>{{asset('storage/pdf/4.5 PMPCA_Poster.pptx')}}
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        4.7 Cartas para publicación de tesis en repositorio institucional<br>
                                        <div style="margin-left: 25px;">
                                            <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                                <a href="{{asset('storage/pdf/4.7.1 CartaAutorizacion_VoBoDirectorTesis.docx')}}">4.7.1 Carta de autorización para el autoarchivo de una tesis en el repositorio institucional de la UASLP con Vo.Bo. del director de tesis</a>
                                            </div>
                                            <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                                <a href="{{asset('storage/pdf/4.7.2 CartaAutorizacion_CoautoriaDirectorTesis.docx')}}">4.7.2 Carta de autorización para el autoarchivo de una tesis en el repositorio institucional de la UASLP en coautoría con el director de tesis</a>
                                            </div>
                                            <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                                <a href="{{asset('storage/pdf/4.7.3 CartaAutorizacion_Coparticipacion.docx')}}">4.7.3 Carta de autorización para el autoarchivo de una tesis en el repositorio institucional de la UASLP en coparticipación con otra institución</a>
                                            </div>
                                            <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                                <a href="{{asset('storage/pdf/4.7.4 SolicitudEmbargo.docx')}}">4.7.4 Solicitud de embargo del repositorio institucional de la UASLP</a>
                                            </div>
                                       </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/4.8 RecepcionTesis.pdf')}}"> 4.8 Formato para registro de línea de investigación de tesis</a>
                                </div>
                            </p>
                            <br><br>
                            <p><strong>5. Egresados</strong><br>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="http://a.uaslp.mx/o7B5Fwg3"> 5.1 Evaluación de director de tesis </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="http://a.uaslp.mx/f8PNy2o5"> 5.2 Evaluación de asesor  </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="https://forms.office.com/r/05Lh2gKbSP"> 5.3 Encuesta básica de egresados  </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="https://forms.office.com/r/h7VmNrqMGm"> 5.4 Encuesta para programa de egresados del PMPCA  </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="https://forms.office.com/r/E8GF1BBTbR"> 5.5 Registro de artículos </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="https://forms.office.com/r/0W7Dt8tGWk"> 5.6. Registro de premios y reconocimientos </a>
                                </div>
                            </p>
                            <br><br>
                            <p><strong>6. Formatos Conacyt</strong><br>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/6.1 Formato_Evaluacion_Desempeno_Becario_PMPCA.pdf')}}"> 6.1 Formato para la evaluación semestral de becario Conacyt </a>
                                </div>
                                <div class="col-12 col-sm-12 my-4" id="enlacetramites">
                                        <a href="{{asset('storage/pdf/6.2 FormatoRetribucionSocial_Anexo.pdf')}}"> 6.2 Actividades de retribución social + anexo</a>
                                </div>
                            </p>

                            </div>
                        </div>
                    </div>



            </div>
        </div>
        </div>
    </section>
@endsection