@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="professor-description" class="row mb-4">
            <div class="col-12 col-sm-12">
                <br>
                <h1><strong>DR. JOSÉ DE JESÚS MEJIA SAAVEDRA</strong></h1><br>
            </div>
            <div class="col-12 col-sm-3 ">
                <img class="mx-auto d-block" src="{{ asset('storage/images/Jose_de_Jesus_Mejia_Saavedra.png') }}"
                    alt="">
            </div>
            <div class="col-12 col-sm-9">
                <div>
                    <h4><strong>Profesor Investigador de Tiempo Completo. Nivel VI.</strong></h4>
                    <h5><strong>Facultad de Medicina.</strong></h5>
                    <h5><strong>SNI nivel I.</strong></h5>
                    <p>
                        Av. Venustiano Carranza 2405 Colonia Los Filtros,<br>
                        C.P. 78210 San Luis Potosí, S.L.P.<br>
                        Tel. (444) 8262300 Ext. 6619 <br>
                        jjesus@uaslp.mx
                    </p>

                    <div class="enlacesprof">
                        <a target="_blank" href="http://www.ciacyt.uaslp.mx/Grupo_ciaas.aspx">Webpage</a>
                        <a target="_blank"
                            href="http://www.ciacyt.uaslp.mx/images/pdf/Ciaas/Dr.JesusMejiaSaavedra.pdf">Curriculum
                            Vitae </a>
                        <a target="_blank"
                            href="https://investigadores.uaslp.mx/InvestigadorProfile/tRwAAA%3d%3d">Directorio de
                            Investigadores</a>
                        <a target="_blank" href="https://orcid.org/0000-0002-5924-5286"><img
                                src="{{ asset('storage/images/orcid.png') }}" alt=""></a>
                        <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=22734618500">
                            <img src="{{ asset('storage/images/scopus.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        <strong>Actividad académica</strong>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ol>
                            <li><strong>Cursos:</strong></li>
                            <p>
                            <ul class="vineta">
                                <li> Ecotoxicología</li>
                            </ul>
                            </p>
                            <li><strong>LGAC:</strong></li>
                            <p>
                            <ul class="vineta">
                                <li> Evaluación integrada del riesgo y salud ambiental </li>
                            </ul>
                            </p>
                            <li><strong>Dirección de Tesis:</strong></li>
                            <p><em>Maestría en Ciencias Ambientales (Doble Titulación), Co-Dirección</em></p>
                            <ul class="vineta">
                                <li> Velázquez Vázquez Viridiana Wendy. 2013. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202011-08/2013_pmpca_velazquezvazquez.pdf">The
                                        devil comes through water: invasion of the devil fish (Loricariidae) in the Grijalva
                                        River, Mexico</a>.</li>
                            </ul>

                            <p><em>Maestría en Ciencias Ambientales</em>
                            <ul class="vineta">
                                <li> González Mille Donaji Josefina. 2006. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202003-08/2006_pmpca_gonzalezmille.pdf">Riesgo
                                        ecológico en la zona minera de Villa de la Paz, San Luis Potosí</a>. </li>
                                <li> Medina Fernández Maribel. 2008. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202006-08/2008_pmpca_medinafernandez.pdf">Estimación
                                        del riesgo en salud por exposición a manganeso en la Huasteca Sur de San Luis
                                        Potosí</a>.</li>
                                <li> Pérez Fragoso María Eugenia. 2010. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202008-08/2010_pmpca_perezfragoso.pdf">Evaluación
                                        morfológica del bazo del sapo gigante <em>(Rhinella marina)</em> expuesto a una
                                        mezcla de contaminantes en una zona de Coatzacoalcos, Veracruz</a>. (Co-Dirección)
                                </li>
                                <li> Medina Garza Hugo. 2012. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202010-08/2012_pmpca_medinagarza.pdf">Uso
                                        de biomarcadores en peces como herramienta para evaluar la exposición y efecto de
                                        contaminantes ambientales en cuerpos de agua</a>. </li>
                                <li> Barrera Pérez Martha Isabel. 2013. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202011-08/2013_pmpca_barreraperez.pdf">Determinación
                                        de contaminantes orgánicos persistentes en tilapia <em>(Oreochromis sp)</em> de
                                        diferentes presas del país</a>.</li>
                                <li> Somohano Gamboa Ricardo Ernesto. 2013. <a
                                        href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4164/MCA1SGR201301.pdf?sequence=1&amp;isAllowed=y">Evaluación
                                        de la fitotoxicidad en suelos contaminados por metales pesados en pasivos
                                        ambientales minero-metalúrgicos</a>. (Co-dirección) </li>
                                <li> Jarquín Yáñez Lizet del Carmen. 2014. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2014_pmpca_jarquinyanez.pdf">Prevalencia
                                        de fluorosis dental y presencia de polimorfismos genéticos en una comunidad afectada
                                        por contenido de flúor en el agua de consumo</a>.</li>
                                <li> Campillo Cortés Luis Andrés. 2018. <a
                                        href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4540/MCA1CCL201801.pdf?sequence=1&amp;isAllowed=y">Asociación
                                        entre vitamina D y densidad mineral ósea en población infantil expuesta a flúor y
                                        arsénico a través del agua de consumo en una comunidad rural de San Luis Potosí</a>.
                                </li>
                                <li> Bravo Zamora Roxana. 2018. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4542">Diseño
                                        e implementación de un programa de nutrición en población infantil vulnerable a
                                        condiciones socio-ambientales: el caso de la reforma, Salinas de Hidalgo, San Luis
                                        Potosí</a>. </li>
                            </ul>
                            </p>

                            <p><em>Doctorado en Ciencias Ambientales</em>
                            <ul class="vineta">
                                <li> Espinosa Reyes Guillermo. 2009. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2005-08/2009_pmpca_espinosareyes.pdf">Diseño
                                        y aplicación de una metodología de evaluación de riesgo ecológico para fauna
                                        terrestre</a>. </li>
                                <li> González Mille Donaji Josefina. 2010. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2006-02/2010_pmpca_gonzalezmille.pdf">Aplicación
                                        de una metodología de evaluación de riesgo ecológico en fauna acuática de
                                        Coatzacoalcos, Veracruz</a>. </li>
                                <li> Ilizaliturri Hernández César Arturo. 2010. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2006-02/2010_pmpca_ilizaliturrihernandez.pdf">Aplicación
                                        de una metodología de evaluación de riesgo ecológico en el sistema de humedales de
                                        Coatzacoalcos, Veracruz</a>.</li>
                                <li> Gaytán Hernández Dario. 2015. <a
                                        href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2011-08/2015_pmpca_gaytanhernandez.pdf">Diseño
                                        de un paquete de herramientas metodológicas para una sala situacional de salud
                                        ambiental para el estado de San Luis Potosí</a>. (Co-Dirección) </li>
                                <li> Martínez Acuña Mónica Imelda. 2017. <a
                                        href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4204/DCA1MAM201701.pdf?sequence=1&amp;isAllowed=y">Determinación
                                        de biomarcadores de exposición, efecto y susceptibilidad para evaluar riesgo en
                                        salud por exposición a fluoruro y arsénico en población infantil del Estado de
                                        Zacatecas</a>.</li>
                                <li> Jarquín Yáñez Lizet del Carmen. 2019. <a
                                        href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4731/DCA1JYL201902.pdf?sequence=1&amp;isAllowed=y">Polimorfismos
                                        genéticos asociados a enfermedades óseas y fluorosis dental en población expuesta a
                                        flúor a través del agua de consumo</a>. </li>
                            </ul>
                        </ol>
                    </div>
                </div>
            </div>
            {{-- <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong>Publicaciones</strong>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p><strong>Artículos de Investigación</strong></p>
                        <p>
                        <ul class="vineta">
                            <li> Mónica Terán Hernández, Rebeca Ramis Prieto, Jaqueline Calderón Hernández, Carlos Garrocho
                                Rangel, Juan Campos Alanís; <b>Antonio Ávalos Lozano</b>, Miguel Aguilar Robledo., (2016).
                                Geographic variations in cervical cancer risk in San Luis Potosí state, México: A spatial
                                statistical approach. Universidad Nacional Autónoma de México, D.F. MEXICO.</li>
                        </ul>
                        </p>
                        <p><strong>Capítulos de Libros</strong></p>
                        <p>
                        <ul class="vineta">
                            <li> <b>Antonio Avalos-Lozano</b> (2017). Propuesta estratégica para el desarrollo sustentable
                                de las comunidades rurales en zonas áridas de México. En Diálogos temáticos sobre desarrollo
                                rural sustentable y soberanía alimentaria. Rocky Alvarado Hernández, <b>José Antonio Ávalos
                                    Lozano</b>, Anabell Guadalupe Díaz Espinosa, Antonio Manuel García Gonzáles, Luis Gómez
                                Oliver, Eduardo Arcadio Gonzáles Valenzuela, Antonio Hernández Beltrán, Octavio Jurado
                                Juárez, Liv Lafontaine Navarro, Roberto Martínez Yllescas, Martín Martínez Salvador, Jorge
                                Galo Medina Torres, Abel Pérez Zamorano, Vinicio Horacio Santoyo Cortés, Fernando Soto
                                Baquero y Antonio Yúnez Naude (Eds). Honorable Cámara de Diputados LXIII Legislatura/
                                Congreso de la Unión. ISBN 978-607-8501-34-2 </li>
                            <li> <b>Antonio Avalos-Lozano</b>, Miguel Aguilar-Robledo, (2017). Reconstructing the
                                Environmental History of Colonial Mining: The Real del Catorce Mining District, 18th to 19th
                                centuries; in J.R. Mcneill, George H. Vrtis, the Environmental History of Mining in North
                                America, University of California Press. ISBN 978 052 027 916 2.</li>
                            <li> Moreno-Unda,l A.A., Aguilar-Robledo y <b>J.A. Ávalos Lozano</b>, (2017). “El Programa
                                Nacional de Desmontes en México”. La historia ambiental en México: estudios de caso. M.
                                Aguilar-Robledo, H. Reyes-Hernández y O. Reyes-Pérez, eds. Universidad Autónoma de San Luis
                                Potosí-Centro de Investigaciones en Geografía Ambiental, UNAM. Aceptado.</li>
                            <li> <b>Ávalos Lozano, J.A.</b>, M. Aguilar Robledo, P. Medellín Milán y J. A. Alcalá Jáuregui.
                                (2017). “Esbozo histórico de la industria minera-metalúrgica de producción de plata en la
                                Nueva España/México, siglos XVIII y XIX”. La historia ambiental en México: estudios de caso.
                                M. Aguilar-Robledo, H. Reyes-Hernández y O. Reyes-Pérez, eds. Universidad Autónoma de San
                                Luis Potosí-Centro de Investigaciones en Geografía Ambiental, UNAM. Aceptado.</li>
                            <li> Gerardo A. Hernández Cendejas, <b>Antonio Ávalos Lozano</b> y Pedro Urquijo. (2016). El
                                Te’lom ¿Una alternativa a la deforestación en la Huasteca? Analisis de un sistema
                                agroforestal entre los Teenek Potosinos, en Etnoagroforestería en México. A.I.
                                Moreno-Calles, A.Casas, V.M. Toledo, M. Vallejo, UNAM. ISBN 978 607 028 164 8</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong>Vinculación</strong>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                        <ul class="vineta">
                            <li> <b>Estudio de Cuencas Atmosféricas para la Zona Metropolitana de la Ciudad de San Luis
                                    Potosí.</b><br>Director del Proyecto<br>Secretaría de Ecología y Gestión Ambiental del
                                Gobierno del Estado de San Luis Potosí y Universidad Autónoma de San Luis Potosí. <br>2018
                            </li><br>
                            <li> <b>Plan de Manejo de la Presa San José.</b> <br>Director del Proyecto<br>Secretaría de
                                Ecología y Gestión Ambiental del Gobierno del Estado de San Luis Potosí y Universidad
                                Autónoma de San Luis Potosí. <br>2018</li><br>
                            <li> <b>Inventario Estatal de Gases de Efecto Invernadero del Estado de San Luis Potosí 2007 -
                                    14. </b><br>Director del Proyecto<br>Secretaría de Ecología y Gestión Ambiental del
                                Gobierno del Estado de San Luis Potosí y Universidad Autónoma de San Luis Potosí. <br>2018
                            </li><br>
                            <li> <b>Estrategia Estatal de Acción ante el Cambio Climático.</b> <br>Director del
                                Proyecto<br>Secretaría de Ecología y Gestión Ambiental del Gobierno del Estado de San Luis
                                Potosí y Universidad Autónoma de San Luis Potosí. <br>2018</li><br>
                            <li> <b>Mantenimiento a los cuadrantes de la flora rescatada del proyecto Ramones Fase II Sur,
                                    localizados en el estado de San Luis Potosí.</b><br>Director del Proyecto<br>TAG
                                Pipelines S. de R.L. de C.V., y Universidad Autónoma de San Luis Potosí. <br>2017 a 2019
                            </li><br>
                            <li> <b>Construcción del “Jardín Botánico del Desierto Chihuahuense” para el rescate y
                                    reubicación de las plantas removidas en diferentes polígonos de los tramos T05-San Luis
                                    Potosí y T06-San Luis Potosí del proyecto Sistema de Transporte de gas natural Los
                                    Ramones Fase II Sur.</b> <br>Director del Proyecto<br>ICA-FLUOR DANIEL S.R.L de C.V. y
                                Universidad Autónoma de San Luis Potosí.<br> 2016-2017 </li><br>
                            <li> <b>Programa Estatal de Acción ante el Cambio Climático para el Estado de San Luis
                                    Potosí.</b> <br>Director del Proyecto<br>Secretaría de Ecología y Gestión Ambiental del
                                Gobierno del Estado de San Luis Potosí y Universidad Autónoma de San Luis Potosí. <br>2017
                            </li><br>
                            <li> <b>Diseño, establecimiento, arranque y operación de un sistema de vigilancia satelital,
                                    monitorización de riesgos y evaluación de siniestros agropecuarios para la República
                                    Mexicana. (SISMOR)</b><br>Director del Proyecto<br>MAPFRE-TEPEYAC S.A.<br>
                                Primer contrato: agosto 2015 a julio 2016<br>
                                Segundo contrato: agosto 2016 a julio 2017<br>
                                Tercer contrato: agosto 2017 a julio 2018<br>
                                Cuarto contrato: agosto 2018 a julio 2019</li><br>
                            <li> <b>La GEO WEB Sistema Producto Caña de Azúcar, definida como una Plataforma WEB, diseñada
                                    en software libre.</b><br>Director del Proyecto<br>El Ingenio Plan de Ayala, la unión
                                local de productores de Caña de Azúcar C.N.P.R., Unión Local C.N.C., Grupo Ejidal
                                Universidad Autónoma de San Luis Potosí.<br> 15 de diciembre de 2016 al 15 de diciembre del
                                2017</li><br>
                            </p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    </div>
    <br><br><br>
    </div>
@endsection
