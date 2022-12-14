@extends('profesores.templates.profesor')

@section('name')
    Dra. Laura Yáñez Espinosa
@endsection

@section('image')
    <img class="mx-auto d-block" src="{{ asset('storage/images/P_mujer.png') }}" alt="">
@endsection

@section('information')
    <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Instituto de Investigación de Zonas Desérticas. SNI nivel I.</strong></h5>
        <br>
        <p>
            Altair num. 200, Col. del Llano<br>
            C.P. 78377 San Luis Potosí, SLP. México<br>
            Tel.: 52 (444) 842-1146 Ext. 106 <br>
            <a href="mailto:lyaneze@uaslp.mx"> lyaneze@uaslp.mx </a>
        </p>

        <div class="enlacesprof">
            <a href="http://www.iizd.uaslp.mx/Documents/LYE.pdf">Webpage</a>
            <a href="http://www.iizd.uaslp.mx/Documents/CV_LYE.pdf">Curriculum Vitae</a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/20IAAA%3d%3d">Directorio de
                Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0001-5211-3603"><img
                    src="{{ asset('storage/images/orcid.png') }}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=6506684093">
                <img src="{{ asset('storage/images/scopus.png') }}" alt=""></a>
        </div>
    </div>
@endsection

@section('extra')
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse-actividad-academica" aria-expanded="true" aria-controls="collapseOne">
                    <strong>Actividad Académica</strong>
                </button>
            </h2>
            <div id="collapse-actividad-academica" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">

                    <p> Cursos </p>
                    <p></p>
                    <ul class="vineta">
                        <li> Evaluación y manejo de los recursos naturales renovables </li>
                        <li> Anatomía vegetal ambiental </li>
                    </ul>

                    <p> LGAC </p>
                    <p></p>
                    <ul class="vineta">
                        <li> Biología funcional </li>
                        <li> Biología de comunidades naturales </li>
                    </ul>

                    <p> Dirección de Tesis </p>
                    <p></p>
                    <ul>
                        <p> Maestría en Ciencias Ambientales (Doble Titulación), Co-Dirección </p>
                        <p></p>
                        <ul class="vineta">
                            <li> Werner Federico. 2012. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202010-08/2012_pmpca_wernerfederico.pdf">Assessment
                                    of the stream physical environment and study of its relation with water quality in the
                                    Guapi-Macacu watershed, Rio de Janeiro, Brazil</a>.</li>
                            <li> Quintana Sagarnaga Silvia Berenice. 2012. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202010-08/2012_pmpca_quintanasagarnaga.pdf">Native
                                    tree species in silvopastoral systems: a bioeconomic assessment in Cachoeiras de Macacu,
                                    Rio de Janeiro, Brazil</a>.</li>
                            <li> Pedraza Luengas Alejandra. 2014. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2014_pmpca_pedrazaluengas.pdf">Assessment
                                    of silvopastoral systems establishment in Italva, Rio de Janeiro, Brazil</a>.</li>
                            <li> Kreter Kristina. 2015. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202013-08/2015_pmpca_kreterkristina.pdf">Analysis
                                    of governance potentials and constraints for decentralized rural sanitation solutions in
                                    Rio de Janeiro</a>.</li>
                        </ul>

                        <p></p>
                        <p> Maestría en Ciencias Ambientales </p>
                        <p></p>
                        <ul class="vineta">
                            <li> Arellano Rivas Amaranta. 2012. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202010-08/2012_pmpca_arellanorivas.pdf">Caracterización
                                    de la anatomía y fisiología foliar de cuatro especies de Zamiáceas con distribución en
                                    San Luis Potosí<a>.</li>
                            <li> Rubio Mendez Gabriel. 2013. <a
                                    href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202011-08/2013_pmpca_rubiomendez.pdf">Estudio
                                    para la conservación a largo plazo de <em>Dioon edule</em> en San Luis Potosí</a>.
                                (Co-dirección).</li>
                        </ul>

                    </ul>
                </div>
            </div>
        </div>

    </div>
@endsection
