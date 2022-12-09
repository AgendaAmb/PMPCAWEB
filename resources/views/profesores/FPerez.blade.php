@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="professor-description" class="row mb-4">
            <div class="col-12 col-sm-12">
                <br>
                <h1><strong>DR. FRANCISCO JAVIER PÉREZ VÁZQUEZ</strong></h1><br>
            </div>
            <div class="col-12 col-sm-3 ">
                <img class="mx-auto d-block" src="{{ asset('storage/images/FranciscoJavierPerezVazquez.png') }}"
                    alt="">
            </div>
            <div class="col-12 col-sm-9">
                <div>
                    <h4><strong>Catedra CONACyT</strong></h4>
                    <h5><strong>Coordinación para la Innovación y Aplicación de la Ciencia y la Tecnología.
                            (CIACyT).</strong></h5>
                    <h5><strong>SNI nivel I.</strong></h5>
                    <br>
                    <p>
                        Sierra Leona # 550, Col. Lomas 2a. Sección,<br>
                        C.P. 78210, San Luis Potosí, S.L.P., México.<br>
                        Tel. + 52 (444) 826-2300 Ext. 8410 <br>
                        francisco_5505@hotmail.com, francisco.perezvaz@gmail.com
                    </p>

                    <div class="enlacesprof">
                        <a target="_blank" href="https://www.researchgate.net/profile/Francisco_Perez-Vazquez">Webpage</a>
                        <a target="_blank" href="">Curriculum Vitae </a>
                        <a target="_blank"
                            href="https://investigadores.uaslp.mx/InvestigadorProfile/l0gAAA%3d%3d">Directorio de
                            Investigadores</a>
                        <a target="_blank" href="https://orcid.org/0000-0002-2666-0379"><img
                                src="{{ asset('storage/images/orcid.png') }}" alt=""></a>
                        <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=53980406000"> <img
                                src="{{ asset('storage/images/scopus.png') }}" alt=""></a>
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
                            <li><strong>LGAC:</strong></li>
                            <p>
                            <ul class="vineta">
                                <li> Toxicología celular y molecular </li>
                                <li> Identificación de biomarcadores a enfermedades no transmisibles </li>
                                <li> Evaluación de riesgo a la salud humana </li>
                                <li> Salud en el trabajo para ocupaciones precarias </li>
                            </ul>
                            </p>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <strong>Publicaciones</strong>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Artículos de investigación</strong><br><br>
                    <p>
                        <ul class="vineta">
                            <li> 2019. DNA damage in earthworms by exposure of Persistent Organic Pollutants in low basin of Coatzacoalcos River, Mexico. Guillermo Espinosa-Reyes; Rogelio Costilla-Salazar; <b>Francisco J. Pérez-Vázquez</b>; Donaji J. González-Mille; Rogelio Flores-Ramírez; María del Carmen Cuevas-Díaz; Susana E. Medellín-Garibay; César A. Ilizaliturri-Hernández. Sci Total Environ. 2019 Feb 15;651(Pt 1):1236-1242. doi: 10.1016/j.scitotenv.2018.09.207. Epub 2018 Sep 17. </li><br>
                            <li> 2019. Antimycotic activity potentiation of Allium sativum extract and silver nanoparticles against Trichophyton rubrum. Marissa Robles Martínez; Juan Fernando Cárdenas González; <b>Francisco Javier Pérez Vázquez</b>; Juan Martín Montejano Carrizales; José Elias Pérez López. Chem Biodivers. 2019 Jan 6. doi: 10.1002/cbdv.201800525. [Epub ahead of print].</li><br>
                            <li> 2019. Evaluation of emerging biomarkers of renal damage and exposure to aflatoxin-B1 in Mexican indigenous women: a pilot study. Lorena Díaz de León Martínez; Fernando Díaz-Barriga; Olivier Barbier; Dora Linda Guzmán Ortíz; Manolo Ortega Romero; <b>Francisco Pérez Vázquez</b>; Rogelio Flores Ramírez. Environ Sci Pollut Res Int. 2019 Mar 5. doi: 10.1007/s11356-019-04634-z. [Epub ahead of print]</li><br>
                            <li> 2018. Evaluación de la exposición a hidrocarburos aromáticos policíclicos y partículas en suspensión (PM2,5) por quema de biomasa en una zona indígena del Estado de San Luis Potosí, México. Andrés Palacios-Ramírez, Rogelio Flores Ramírez, <b>Francisco Javier Pérez-Vázquez</b>*, Maribel Rodríguez-Aguilar, Astrid Schilmann, Horacio Riojas-Rodríguez, Evelyn Van Brussel, Fernando Díaz-Barriga. Revista de Salud Ambiental. Vol. 18 Num. 1 </li><br>
                            <li> 2018. Exposure to Mixtures of Pollutants in Mexican Children from Marginalized Urban Areas. Rogelio Flores-Ramírez; <b>Francisco J. Pérez-Vázquez</b>; Susanna E. Medellín-Garibay; Andrea Camacho Aldrete; Moisés Roberto Vallejo-Pérez; Lorena Díaz de León-Martínez; Leticia Carrizales Yañez; Fernando Díaz-Barriga. Ann Glob Health. 2018 Jul 27;84(2):250-256. doi: 10.29024/aogh.912.</li><br>
                            <li> 2018. Milk production in dairy cows supplemented with herbal choline and methionine. Germán Mendoza; Mario Francisco Oviedo; Juan Manuel Pinos; Héctor Aarón Lee Rangel; Anayeli Vázquez; Rogelio Flores; Alejandro Roque; Oswaldo Cifuentes.  Rev. FCA UNCUYO. OCT. 17 2018</li><br>
                            <li> 2017. Serum adipocyte-fatty acid binding protein (FABP4) levels in women from Mexico exposed to polycyclic aromatic hydrocarbons (PAHs). Angeles C. Ochoa-Martínez; Tania Ruiz-Vera; Lucia G. Pruneda-Álvarez; Ana K. González-Palomo; Claudia I. Almendárez-Reyna; <b>Francisco J. Pérez-Vázquez</b>; Iván N. Pérez-Maldonado. Environ Sci Pollut Res Int. 2017 Jan;24(2):1862-1870. doi: 10.1007/s11356-016-7971-8. Epub 2016 Oct 31.</li><br>
                            <li> 2017. Biomonitoring of persistent organic pollutants (POPs) in child populations living near contaminated sites in Mexico. R. Flores-Ramírez; <b>F. J. Pérez-Vázquez</b>; M. Rodríguez-Aguilar; S. E. Medellín-Garibay; E. Van Brussel; A. C. Cubillas-Tejeda; L. Carrizales-Yáñez; F. Díaz-Barriga. Sci Total Environ. 2017 Feb 1;579:1120-1126. doi: 10.1016/j.scitotenv.2016.11.087. Epub 2016 Nov 28.</li><br>
                            <li> 2016. Human health risks associated with heavy metals in soil in different areas of San Luis Potosí, México. <b>Francisco Javier Pérez-Vázquez</b>; Rogelio Flores-Ramírez; Angeles Catalina Ochoa-Martínez; Leticia Carrizales-Yáñez; César Arturo Ilizaliturri-Hernández; Jocelyne Moctezuma-González; Lucia Guadalupe Pruneda-Álvarez; Tania Ruiz-Vera; Sandra Teresa Orta-García; Ana Karen González-Palomo; Iván Nelinho Pérez-Maldonado. Human and Ecological Risk Assessment: An International Journal. Vol. 22, 2016.</li><br>
                            <li> 2016. Persistent Organic Pollutants and Heavy Metal Concentrations in Soil from the Metropolitan Area of Monterrey, Nuevo Leon, Mexico. Sandra Teresa Orta-García; Angeles Catalina Ochoa-Martínez; Leticia Carrizalez-Yáñez; José Antonio Varela-Silva; <b>Francisco Javier Pérez-Vázquez</b>; Lucia Guadalupe Pruneda-Álvarez; Arturo Torres-Dosal; Jorge Luis Guzmán-Mar; Iván N. Pérez-Maldonado. Arch Environ Contam Toxicol. 2016 Apr;70(3):452-63. doi: 10.1007/s00244-015-0239-3. Epub 2015 Nov 14.</li><br>
                            <li> 2016. Urinary 1-hydroxypyrene concentration as an exposure biomarker to polycyclic aromatic hydrocarbons (PAHs) in Mexican women from different hot spot scenarios and health risk assessment. Lucia G. Pruneda-Álvarez; <b>Francisco J. Pérez-Vázquez</b>; Tania Ruíz-Vera; Ángeles C. Ochoa-Martínez; Sandra T. Orta-García; Jorge A. Jiménez-Avalos; Iván N. Pérez-Maldonado. Environ Sci Pollut Res Int. 2016 Apr;23(7):6816-25. doi: 10.1007/s11356-015-5918-0. Epub 2015 Dec 12.</li><br>
                            <li> 2016. Polybrominated diphenyl ethers (PBDEs) concentration in soil from San Luis Potosi, Mexico: Levels and ecological and human health risk. <b>Francisco J. Pérez-Vázquez</b>; Sandra T. Orta-García; Ángeles C. Ochoa-Martínez; Lucia G. Pruneda-Álvarez; Tania Ruiz-Vera; Jorge Armando Jiménez-Avalos; Ana K. González-Palomo; Iván N. Pérez-Maldonado.  Int J Environ Health Res. 2016;26(3):239-53. doi: 10.1080/09603123.2015.1109066. Epub 2015 Nov 13.</li><br>
                            <li> 2016. Assessment of exposure to mixture pollutants in Mexican indigenous children. R. Flores-Ramírez; <b>F. J. Pérez-Vázquez</b>; V. G. Cilia-López; B. A. Zuki-Orozco; L. Carrizales; L. E. Batres-Esquivel; A. Palacios-Ramírez; F. Díaz-Barriga. Environ Sci Pollut Res Int. 2016 May;23(9):8577-88. doi: 10.1007/s11356-016-6101-y. Epub 2016 Jan 22.</li><br>
                            <li> 2016. Plasma asymmetric dimethylarginine (ADMA) levels in Mexican women exposed to polycyclic aromatic hydrocarbons (PAHs): A preliminary study. Lucía G. Pruneda-Álvarez; Tania Ruíz-Vera; Angeles C. Ochoa-Martínez <b>Francisco J. Pérez-Vázquez</b> Ana K. González Palomo; César A. Ilizaliturri-Hernández; Iván N. Pérez-Maldonado. Sci Total Environ. 2016 Dec 1;572:1195-1202. doi: 10.1016/j.scitotenv.2016.08.037. Epub 2016 Aug 10.</li>
                        </ul>
                    </p>
                    <strong>Capítulos de libros</strong><br><br>
                    <p>
                        .
                    </p>
                    <strong>Publicaciones en extenso</strong><br><br>
                    <p>.
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
                            <li> Indicadores metabolómicos para la detección temprana de enfermedades ocupacionales en
                                trabajadores precarios. Estrategia STOP (Salud en el trabajo para Ocupaciones Precarias).</li>
                            <br>
                            <li> Evaluación de la exposición a flúor, ftalatos y microplásticos en bebidas de consumo infantil.
                            </li><br>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <br><br><br>
    </div>
@endsection
