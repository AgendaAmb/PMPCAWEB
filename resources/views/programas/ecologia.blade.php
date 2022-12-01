@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="colorTexto">
            <div id="professor-description" class="row mb-4 p-5">
                <div class="col-12 col-sm-12">
                    <h1><strong>ECOLOGÍA</strong></h1>
                </div>
                <div class="col-12 col-sm-12 container">
                    <div>
                        <h4><strong>Datos generales</strong></h4>
                        <br>
                        <div class="table-responsive" id="contTabla">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos">
                                        <th scope="col">Tipo de crédito</th>
                                        <th scope="col">Tipo de asignatura</th>
                                        <th scope="col">Idioma de impartición</th>
                                        <th scope="col">Modalidad de impartición</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Obligatorio para Maestría <br>
                                            en Ciencias y Doctorado <br>
                                            en Ciencias directo <br>
                                            Optativo para Doctorado <br>
                                            en Ciencias</td>
                                        <td>Curso teórico-práctico</td>
                                        <td id="contTablaIzq">
                                            <ul>
                                                <li>
                                                    Español
                                                </li>
                                                <li>
                                                    Pero el examen escrito, las <br>
                                                    tareas, los informes de las <br>
                                                    salidas a campo y el trabajo <br>
                                                    semestral se pueden <br>
                                                    presentar en inglés. <br>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>Presencial</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-12 col-sm-12 container">
                    <div>
                        <h4><strong>Créditos</strong></h4>
                        <p>De acuerdo con la propuesta curricular, los datos escolares de la asignatura son:</p>
                        <div class="table-responsive" id="contTabla">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos">
                                        <th scope="col">Semestre</th>
                                        <th scope="col">No. de semanas</th>
                                        <th scope="col">Horas presenciales de teoría por semana</th>
                                        <th scope="col">Horas presenciales de práctica por semana</th>
                                        <th scope="col">Horas de trabajo autónomo del estudiante por semana</th>
                                        <th scope="col">Total de créditos (RGEP)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>16</td>
                                        <td>4</td>
                                        <td>2</td>
                                        <td>5</td>
                                        <td>10</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr>
                <h4> <strong>Objetivo general de aprendizaje</strong> </h4>
                <p>
                    Al concluir esta asignatura, el estudiante logrará aportar las bases para la conceptualización ecológica
                    de los
                    ecosistemas, con énfasis en sus componentes bióticos y abióticos, tanto en ambientes naturales, como en
                    hábitats
                    inducidos por los humanos y analizar las interacciones de los humanos con los ecosistemas, su situación
                    actual y
                    tendencias desde el nivel local al nacional y al global.
                </p>
                <hr>
                <div class="col-12 col-sm-12 container">
                    <div>
                        <h4><strong>Competencia profesionales a las que contribuye la asignatura</strong></h4>

                        <p>
                            Esta asignatura contribuye de manera directa al logro de las siguientes competencias
                            profesionales del perfil de egreso
                            del programa:
                        </p>
                        <div class="table-responsive" id="contTablaIzq">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos">
                                        <th scope="col">Competencia</th>
                                        <th scope="col">Descripción de la competencia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="contTabla"> <strong>Competencias
                                                profesionales que
                                                contribuye a
                                                desarrollar la
                                                materia</strong></td>

                                        <td>
                                            El posgraduado será capaz de realizar el análisis integral de los ecosistemas
                                            naturales,
                                            los cambios inducidos en ellos por los humanos y su relación con problemas de
                                            las
                                            ciencias ambientales
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"> <strong>Competencias
                                                profesionales que
                                                contribuye a desarrollar la
                                                materia</strong></td>

                                        <td>
                                            El posgraduado tendrá la capacidad para entender los elementos esenciales de los
                                            ecosistemas naturales y podrá inferir los problemas derivados de sus
                                            transformaciones a
                                            ambientes humanizados como ciudades, áreas industriales, zonas agrícolas,
                                            pecuarias y
                                            forestales, espacios de producción de energía y materias primas y, en general,
                                            en zonas donde se producen nuevos ciclos y relaciones de energía y surgen
                                            problemas derivados
                                            de la intervención de los humanos en los ecosistemas
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="contTabla"> <strong>Competencias
                                                transversales a las
                                                que contribuye a
                                                desarrollar la
                                                materia</strong></td>

                                        <td>
                                            El egresado establecerá razonamientos coherentes y sistematizables entre la
                                            información
                                            derivada de la experiencia, los marcos conceptuales y los modelos explicativos
                                            derivados
                                            de los campos científicos y tecnológicos propios de la profesión.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="col-12 col-sm-12 container">
                    <div>
                        <h4><strong>Planeación didáctica general</strong></h4>
                        <p>A continuación, se describe la planeación general del proceso de aprendizaje:</p>
                        <div class="table-responsive" id="contTabla">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos">
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre de la unidad o fase</th>
                                        <th scope="col">Resultados de aprendizaje específicos</th>
                                        <th scope="col">Metodologías y actividades de enseñanza - aprendizaje</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            Introducción
                                        </td>
                                        <td id="contTablaIzq">
                                            Conocer el concepto de la <br>
                                            ecología; además de su<br>
                                            definición, su objeto de estudio,<br>
                                            niveles de organización, escalas<br>
                                            temporales y espaciales y su<br>
                                            conexión con otras disciplinas de<br>
                                            las ciencias ambientales<br>
                                            Hacer énfasis del papel de la<br>
                                            ecología en la crisis ambiental<br>
                                            contemporánea
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul>
                                                <li>
                                                    Exposiciones orales del profesor
                                                </li>
                                                <li>
                                                    Exposiciones orales de alumnos
                                                </li>
                                                <li>
                                                    Realización de ejercicios a manera de
                                                    tareas
                                                </li>
                                                <li>
                                                    Discusión de lecturas
                                                </li>
                                                <li>
                                                    Salida a campo para recorrer ecosistemas
                                                    de zonas secas, templadas y tropicales
                                                    húmedas
                                                </li>
                                            </ul>
                                        </td>

                                    <tr>
                                        <td>2</td>
                                        <td>La ecología
                                            funcional</td>
                                        <td id="contTablaIzq">
                                            Analizar las interacciones bióticas<br>
                                            que configuran las redes tróficas<br>
                                            y sus relaciones con el<br>
                                            componente abiótico para<br>
                                            conformar los ciclos<br>
                                            biogeoquímicos.
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul>
                                                <li>
                                                    Exposiciones orales del profesor
                                                </li>
                                                <li>
                                                    Exposiciones orales de alumnos
                                                </li>
                                                <li>
                                                    Realización de ejercicios a manera de
                                                    tareas
                                                </li>
                                                <li>
                                                    Discusión de lecturas
                                                </li>
                                                <li>
                                                    Salida a campo para recorrer ecosistemas
                                                    de zonas secas, templadas y tropicales
                                                    húmedas
                                                </li>
                                            </ul>
                                        </td>
                                    <tr>
                                        <td>3</td>
                                        <td>La ecología
                                            estructural</td>
                                        <td id="contTablaIzq">
                                            Reconocer los atributos<br>
                                            específicos de las poblaciones y<br>
                                            las comunidades y algunas<br>
                                            técnicas generales para<br>
                                            estudiarlas en campo.<br>
                                            Analizar el concepto de sucesión<br>
                                            ecológica y su utilidad para la<br>
                                            restauración ecológica<br>
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul>
                                                <li>
                                                    Exposiciones orales del profesor
                                                </li>
                                                <li>
                                                    Exposiciones orales de alumnos
                                                </li>
                                                <li>
                                                    Realización de ejercicios a manera de
                                                    tareas
                                                </li>
                                                <li>
                                                    Discusión de lecturas
                                                </li>
                                                <li>
                                                    Salida a campo para recorrer ecosistemas
                                                    de zonas secas, templadas y tropicales
                                                    húmedas
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Los
                                            ecosistemas y
                                            los problemas
                                            ambientales del
                                            Antropoceno
                                        </td>
                                        <td id="contTablaIzq">
                                            Recapitular todo lo aprendido en<br>
                                            el curso usando el concepto<br>
                                            integrador de ecosistema, en el<br>
                                            contexto de los problemas<br>
                                            ambientales que definen al<br>
                                            Antropoceno
                                        </td>
                                        <td id="contTablaIzq">

                                            <ul>
                                                <li>
                                                    Exposiciones orales del profesor
                                                </li>
                                                <li>
                                                    Exposiciones orales de alumnos
                                                </li>
                                                <li>
                                                    Realización de ejercicios a manera de
                                                    tareas
                                                </li>
                                                <li>
                                                    Discusión de lecturas
                                                </li>
                                                <li>
                                                    Salida a campo para recorrer ecosistemas
                                                    de zonas secas, templadas y tropicales
                                                    húmedas
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="col-12 col-sm-12 container">
                    <div>
                        <h4><strong>Evaluación</strong></h4>
                        <p>A continuación, se muestra las condiciones de las evaluaciones parciales.</p>
                        <div class="table-responsive" id="contTabla">
                            <table class="table table-bordered border-dark" id="colorTexto">
                                <thead>
                                    <tr id="tablaTitulos">
                                        <th scope="col"># <br> parcial</th>
                                        <th scope="col">Momento de evaluación</th>
                                        <th scope="col">Método de evaluación y valor para la evaluacion parcial</th>
                                        <th scope="col">Ponderación para evaluación final</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>En la sesión 10</td>
                                        <td>Examen escrito</td>
                                        <td>23.3</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>En la sesión 22</td>
                                        <td>Examen escrito</td>
                                        <td>23.3</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>En la sesión 32</td>
                                        <td>Examen escrito</td>
                                        <td>23.4</td>
                                    </tr>

                                    <tr>
                                        <td>Tareas</td>
                                        <td>Permanente</td>
                                        <td>Informes escritos</td>
                                        <td>10.0</td>
                                    </tr>

                                    <tr>
                                        <td>Trabajo
                                            semestral</td>
                                        <td>Casi al final del
                                            curso</td>
                                        <td>Escrito siguiendo el modelo de un artículo de ensayo</td>
                                        <td>20.0</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td></td>
                                        <td></td>
                                        <td>100.0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr>
                <h4> <strong>Recursos bibliográficos y digitales</strong> </h4>
                <h5> <strong>Textos básicos</strong></h5>
                <p>
                    • Agrawal, A.A. 2003. Why omnivory?. Ecology. 84:2521.<br>
                    • Berkes, F.; J. Coding y C. Folke. 2003. Navigating Social-Ecological Systems. Cambridge University.
                    Cambridge: England. <br>
                    • Burke, A. 2003. Practical measure in arid lands restoration after mining –a review for the southern
                    Namib. South
                    African Journal of Science. 99:413-417.<br>
                    • Celi, L. 2020. 'Eco-Ego'. An image to represent the (Deep) Ecology. Ecology (May 2, 2020).<br>
                    • Dajoz, R. 2002. Tratado de ecología. 2ª Ed. Mundi Prensa: Madrid, España.<br>
                    • Dregne, H.E. 2002. Land degradation in the drylands. Arid Land Research and Management. 16:99-132.<br>
                    • Herrera, A., M.D. Fernández, E. Rengifo y W. Tezara. 2001. Efecto de la concentración elevada de CO2
                    sobre la
                    fotosíntesis en especies tropicales. Interciencia. 26:469-471.<br>
                    • Hill, D.; M. Fasham, G. Tucker, M. Shewry y P. Shaw. 2005. Handbook of biodiversity methods. Cambridge
                    University Press: Cambridge, Inglaterra.<br>
                    • Holechek, J. L.; R. A. Cole, J. T. Fisher y R. Valdez. 2003. Natural resources: ecology, economics,
                    and
                    policy 2th
                    Ed. Pearson Education: New Jersey, Estados Unidos.<br>
                    • Lima, M. 2006. Los efectos ecológicos de las fluctuaciones climáticas. Investigación y Ciencia. Julio.
                    46-52.<br>
                    • Margalef, R. 2005. Ecología. Omega. Barcelona, España.<br>
                    • Martínez, M.L.; R.H. Manson; P. Balvanera; R. Dirzo; J. Soberón; L. García-Barrios; M. Martínez-Ramos;
                    P.
                    Moreno-Casasola; L. Rosenzweig; J. Sarukhán. 2006. The evolution of ecology in Mexico: facing challenges
                    and preparing for the future. Frontiers in Ecology an the Environment. 4:259-265.<br>
                    • McCune, B.; J. B. Grace y D. L. Urban. 2002. Analysis of ecological communities. MjM: Gleneden Beach,
                    Estados
                    Unidos.<br>
                    • Mitchell, K. 2001. Quantitative analysis by the point-centered quarter method. Department of
                    Mathematics
                    and
                    Computer Colleges, Hobart and William Smith Colleges. Geneva, N.Y. IMP<br>
                    • Nebel R. B. J. y R. T. Wright. 2002. Environmental science. 8th Ed. Prentice Hall: San Francisco,
                    Estados Unidos.<br>
                    • Odum, E. P. 1992. Ecología: bases científicas para un nuevo paradigma. Vedrà: Barcelona, España.<br>
                    • Rodríguez M., J.; J. M. Blanco, V. Rodríguez M. 2016. Ecología. 4ª Ed. Pirámide: Madrid, España.<br>
                    • Schlesinger, W. H. 1991. Biogeochemistry. An analysis of global change. Academic Press, Elsevier: San
                    Diego,
                    Estados Unidos.<br>
                    • Smith, R.L. y T.M. Smith. 2001. Ecology & field biology. Pearsons Addison Wesley: San Francisco,
                    Estados
                    Unidos.<br>
                    • Smith, R.L. y T.M. Smith. 2014. Elements of ecology. 9ª Ed. Addison Wesley. Madrid, España. 664 p.<br>
                    • Tansley, A.G. 1935. The use and abuse of vegetational concepts and terms. Ecology. 16:284-307.<br>
                    • Tao, F.; M. Yokosawa; Y. Hayashi; E. Lin. 2003. Terrestrial water cycle and the impact of climate
                    change. Ambio.
                    32:295-301.<br>
                    • Terradas, J. 2001. Ecología de la vegetación. Omega: Barcelona, España. 703 p.

                </p>

                <h5> <strong>Textos básicos</strong></h5>

                <p id="enlacesNormativa">
                    • <a href="http://bibliotecas.uaslp.mx/">http://bibliotecas.uaslp.mx/</a><br>
                    • <a href="http://slpm.uaslp.mx/">http://slpm.uaslp.mx/</a> <br>
                    • <a href=" http://socbot.mx/nuevositio/"> http://socbot.mx/nuevositio/</a> <br>
                    • <a href="http://web.b.ebscohost.com.creativaplus.uaslp.mx/ehost/command/detail?">http://web.b.ebscohost.com.creativaplus.uaslp.mx/ehost/command/detail?</a> <br>
                    • <a href=" http://web.ecologia.unam.mx/"> http://web.ecologia.unam.mx/</a> <br>
                    • <a href="http://www.conabio.gob.mx/">http://www.conabio.gob.mx/</a>  <br>
                    • <a href="http://www.ecology.com/">http://www.ecology.com/</a>  <br>
                    • <a href="http://www.rae.es/">http://www.rae.es/</a><br>
                    • <a href="http://www.scme.mx/scme/">http://www.scme.mx/scme/</a> <br>
                    • <a href="http://www.theplantlist.org/ <br>">http://www.theplantlist.org/</a> <br>
                    • <a href="https://bvu.uaslp.mx/ <br>">https://bvu.uaslp.mx/</a> <br>
                    • <a href="https://folk.uio.no/ohammer/past/ <br>">https://folk.uio.no/ohammer/past/</a> <br>
                    • <a href="https://link.springer.com.creativaplus.uaslp.mx/ <br>">https://link.springer.com.creativaplus.uaslp.mx/</a> <br>
                    • <a href="https://scholar.google.es/ <br>">https://scholar.google.es/</a> <br>
                    • <a href="https://www.biodiversitylibrary.org/  <br>">https://www.biodiversitylibrary.org/</a> <br>
                    • <a href="https://www.esa.org/esa/ <br>">https://www.esa.org/esa/</a> <br>
                    • <a href="https://www.gob.mx/inecc <br>">https://www.gob.mx/inecc</a> <br>
                    • <a href="https://www.gob.mx/profepa <br>">https://www.gob.mx/profepa</a> <br>
                    • <a href="https://www.gob.mx/semarnat <br>">https://www.gob.mx/semarnat</a> <br>
                    • <a href="https://www.inecol.mx/inecol/index.php/es/ <br>">https://www.inecol.mx/inecol/index.php/es/</a> <br>
                    • <a href="https://www.inegi.org.mx/ <br>">https://www.inegi.org.mx/</a> <br>
                    • <a href="https://www.jstor.org.creativaplus.uaslp.mx/ <br>">https://www.jstor.org.creativaplus.uaslp.mx/</a> <br>
                    • <a href="https://www.millenniumassessment.org/en/index.html <br>">https://www.millenniumassessment.org/en/index.html</a> <br>
                    • <a href="https://www.sciencedirect.com <br>">https://www.sciencedirect.com</a> <br>
                </p>

                <hr>
                <h4> <strong>Requisitos para cursar la asignatura</strong> </h4>
                <p>
                    • Ninguno
                </p>

                <hr>
                <h4> <strong>Interoperabilidad</strong> </h4>
                <p>
                    • Ninguna
                </p>

                <hr>
                <h4> <strong>Otras formas de acreditación</strong> </h4>
                <p>
                    • Ninguna
                </p>

                <hr>
                <h4> <strong>Máximo y mínimo de estudiantes por grupo</strong> </h4>
                <p>
                    • Máximo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 25 <br>
                    • Mínimo de estudiantes por grupo para garantizar viabilidad académica, pedagógica y financiera: 2
                </p>

                <hr>
                <h4> <strong>Elaboradores y revisores</strong> </h4>
                <p> <strong> • Elaboró: </strong>Juan Antonio Reyes Agüero
                    <br>
                    <strong> • Revisó:</strong>
                </p>
            </div>
        </div>
    </div>
@endsection
