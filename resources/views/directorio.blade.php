@extends('base')

@section('maincontent')
    <div id="colorTexto">
        <div id="p-container" class="container px-lg-8.5 px-md-5">
            <div class="col-12 col-sm-12 border">
                <img src="{{ asset('storage/images/8.png') }}" alt="">
                <div class="barraAzulFuerte"></div>
            </div>
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>DIRECTORIO</strong></h1>
                </div>
                <div class="col-12 col-sm-12">
                    <div>
                        <h5> <strong id="directorioprofes">Dra. Anuschka van 't Hooft</strong> </h5>
                        <p>
                            Coordinadora Académica del PMPCA <br>
                            Periodo de actividad 2023 - 2025
                            coordinacion.academica@uaslp.mx <br>
                            Tel: +52 (444) 826-2300 Ext. 7206 <br><br>
                            Funciones:<br>
                            Responsabilidad académica y administrativa para el buen funcionamiento del PMPCA.
                        </p><br>

                        <h5> <strong id="directorioprofes">M.I. Maricela Rodríguez Díaz de León</strong> </h5>
                        <p>
                            Coordinadora del área educativa de la Agenda Ambiental <br>
                            pmpca@uaslp.mx <br>
                            Tel: +52 (444) 826-2300 Ext. 7207 <br>
                        <div id="contTablaIzq">
                            Funciones:<br>
                            Encargada del Control Escolar en el PMPCA, algunas de las funciones especificas son: trámite de
                            aspirantes al PMPCA y ENREM, inscripciones semestrales, evaluación de cursos, expedición y
                            registro de actas de calificación de materias, trámite de alumnos para egreso y titulación,
                            control de actas de obtención de grado.
                        </div>
                        </p><br>

                        <h5> <strong id="directorioprofes">Tec. en Comp. Lorena Guadalupe Leija Martínez</strong> </h5>
                        <p>
                            Asistente PMPCA <br>
                            lorena.leija@uaslp.mx <br>
                            Tel: +52 (444) 826-2300 Ext. 7204 <br>
                            <div id="contTablaIzq">
                            Funciones:<br>
                            Elaboración de constancias, cartas y documentos oficiales, recepción de solicitudes al Comité
                            Académico, recepción de documentación en general, trámite de becas nacionales CONACyT.
                            </div>
                        </p><br>

                        <h5> <strong id="directorioprofes">L.A.P.P. Jennifer Adela Santillán Hernández</strong> </h5>
                        <p>
                            Archivo y redes sociales <br>
                            jennifer.santillan@uaslp.mx <br>
                            Tel: +52 (444) 826-2300 Ext. 7208 <br>
                            <div id="contTablaIzq">
                            Funciones:<br>
                            Actualizar el archivo general de los expedientes de los alumnos y profesores, administrar las redes sociales del PMPCA.
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
