@extends('layout.ciees')
@section('content')
    <!-- Main -->
    <div class="wrapper style1">

        <div class="container">
            <div >
                <div class="col-4 col-12-mobile" id="sidebar">
                    <hr class="first" />

                    </article>
                    <h2><p><a href="{{ route('ciees.ciees')}}"><img src="images/ciees.jpg"></a></p></h2>
                   <h3><p>Los Comités Interinstitucionales para la Evaluación de la Educación Superior
                        son nueve cuerpos colegiados, integrados por distinguidos académicos del más alto nivel
                        de las Instituciones de Educación Superior de todo el país. Tienen a su cargo, la evaluación
                        de programas, funciones, servicios y proyectos académicos que se imparten en las instituciones
                        educativas que lo solicitan, formulando recomendaciones puntuales para su mejoramiento,
                        contenidas en los informes de evaluación, que se entregan a los directivos de las
                        instituciones.</p></h3>
                    <h2><p>Objetivos.</p></h2>
                        <h3><p>Coadyuvar al mejoramiento de la calidad de la educación superior en México, a través de la
                            evaluación diagnóstica de las funciones institucionales de los programas que se ofrecen
                            en las instituciones de ese nivel de estudios; propiciando que los modelos de organización
                            académica y pedagógica orienten al aprendizaje como un proceso a lo largo de la vida,
                            enfocado al análisis, interpretación y buen uso de la información más que a su acumulación.
                            Coadyuvar a la promoción de la evaluación externa interinstitucional de los programas
                            de docencia, investigación, difusión, administración y gestión de las instituciones de
                            educación superior del país, procurando que los resultados se utilicen en la toma de
                            decisiones de las instituciones educativas y gubernamentales.</p></h3>
                    <h2><p>Acciones.</p></h2>
                         <h3><p>Para lograr satisfactoriamente sus objetivos en los CIEES se realizan las siguientes
                             acciones que tienen impacto directamente en las instituciones de educación superior,
                             además de otras tantas que no se mencionan en este documento, que son de naturaleza de
                             organización interna.
                             <p>Contribuir al desarrollo de la cultura de la evaluación interinstitucional entre la
                             comunidad académica del país, a través de:<br> a) procesos formales de capacitación y
                             actualización;<br> b) la incorporación de sus integrantes más distinguidos como miembros
                             titulares, invitados o de apoyo en los Comités;<br> c) la coordinación con los órganos
                             técnicos y académicos responsables de los asuntos educativos en las IES; <br>d) la obtención,
                             generación y difusión de información sobre evaluación, y e) la vinculación con los
                             diversos sectores e instancias copartícipes en la educación superior nacional e
                                 internacional.</p>
                             <p>Coadyuvar a la modernización de la educación superior del país a través de las
                             recomendaciones que los Comités formulan a las instituciones y programas evaluados.
                             Apoyar a las instituciones y organismos encargados de la educación superior del país
                             a través de la asesoría y/o dictaminación de proyectos y programas específicos.<br>
                             Contribuir al desarrollo y consolidación del sistema nacional de evaluación y
                             acreditación, apoyando académicamente la constitución y la operación de los organismos
                             encargados de acreditar, considerando la homologación internacional de los mismos, y
                             satisfaciendo las necesidades institucionales de información en materia de evaluación,
                             acreditación y certificación.<br>
                             Obtener, producir y difundir información y materiales de apoyo para los procesos de
                             autoevaluación, evaluación y acreditación de funciones y programas, y hacer públicas la
                             misión, actividades, reflexiones y logros de los CIEES, manteniendo informada y actualizada
                                 a la comunidad académica.</p>

                             </br> </h3>
                </div>
            </div>

        </div>


</div>

    <script src="{{asset('estilo/js/jquery.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.dropotron.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrolly.min.js')}}"></script>
    <script src="{{asset('estilo/js/jquery.scrollex.min.js')}}"></script>
    <script src="{{asset('estilo/js/browser.min.js')}}"></script>
    <script src="{{asset('estilo/js/breakpoints.min.js')}}"></script>
    <script src="{{asset('estilo/js/util.js')}}"></script>
    <script src="{{asset('estilo/js/main.js')}}"></script>
@endsection