<?php

/* partials/base.html.twig */
class __TwigTemplate_98efbad1b9d95f54143d3a7c373f5d9f56a93083ce5a47af98e71b2de5562cb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
    <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "    </head>
    <body>

    ";
        // line 29
        $this->displayBlock('header', $context, $blocks);
        // line 72
        echo "
    ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 150
        echo "
    ";
        // line 151
        $this->displayBlock('footer', $context, $blocks);
        // line 188
        echo "
    ";
        // line 189
        $this->displayBlock('bottom', $context, $blocks);
        // line 192
        echo "
    </body>
    ";
        // line 194
        $this->displayBlock('javascripts', $context, $blocks);
        // line 199
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

    <script>
        /*<-- Información del usuario -->*/
        let nNavegador = navigator.appCodeName;
        let pAltura = screen.height;
        let pAnchura = screen.width;
        let nOS = navigator.platform;

        /*<-- Información de la página web -->*/
        let nCookies = navigator.cookieEnabled;
        let pHost = window.location.hostname;

        if (nCookies === true) {
            nCookies = \"Sí\";
        }else{
            nCookies = \"No\";
        }
        /*<-- Información del visitante -->*/
        document.getElementById(\"info\").innerHTML = \"Tu navegador es: \"+nNavegador;
        document.getElementById(\"tPantalla\").innerHTML = \"Las medidas de tu pantalla son: \"+pAnchura+\" x \"+pAltura;
        document.getElementById(\"os\").innerHTML = \"Tu Sistema Operativo es: \"+nOS;

        /*<-- Información de la página web -->*/
        document.getElementById(\"cookies\").innerHTML = \"¿Las cookies están habilitadas? \"+nCookies;
        document.getElementById(\"host\").innerHTML = \"El host es \"+pHost;

        /*******************************************************************************/

        window.onload = cargar;

        /*<-- Botón para subir arriba -->*/
        window.onscroll = function() {
            scrolltoTop();
        };

        function cargar() {
            iniciar();
        }

        function scrolltoTop() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
                document.getElementById(\"myBtn\").style.display = \"block\";
            } else {
                document.getElementById(\"myBtn\").style.display = \"none\";
            }
        }

        /*<-- Validación de formulario por JS -->*/
        function iniciar(){
            document.getElementById(\"cForm\").addEventListener(\"submit\", vldcnForm);
        }

        function vldcnForm(event) {

            let cEmail = document.getElementById(\"cform\").elements(\"femail\");

            if(document.getElementById(\"cForm\").elements[\"fname\"].value === \"\" && document.getElementById(\"cForm\").elements[\"femail\"].value ===\"\" ){
                alert(\"Te faltan elementos por completar\");
                event.preventDefault();
            }
            if (cEmail.indexOf(\"@\") === 0){
                alert(\"Falta el campo del email\");
                event.preventDefault();
            }
        }
        /*******************************************************************************/

        function myFunction() {
            let x = document.getElementById(\"myTopnav\");
            if (x.className === \"topnav\") {
                x.className += \" responsive\";
            } else {
                x.className = \"topnav\";
            }
        }

        /*******************************************************************************/

        let slideIndex = 1;
        showDivs(slideIndex);

        function plusSlides(n){
            showDivs(slideIndex += n);
        }
        function currentSlide(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n){
            let i;
            let slides = document.getElementsByClassName(\"mySlides\");
            let dots = document.getElementsByClassName(\"dot\");
            if (n > slides.length){
                slideIndex = 1;
            }
            for (i = 0; i < slides.length; i++){
                slides[i].style.display = \"none\";
            }
            for (i = 0; i < dots.length; i++){
                dots[i].className = dots[i].className.replace(\" active\", \"\");
            }
            slides[slideIndex-1].style.display = \"block\";
            dots[slideIndex-1].className += \" active\";
        }

        /*******************************************************************************/

        \$(document).ready(function(){

            /*<-- Animación para subir arriba -->*/
            \$(\"#myBtn\").click(function() {
                \$('html, body').animate({scrollTop: 0}, 1000);
            });

            /*<-- Teclado retraíble -->*/
            \$(\"input[name='boton']\").click(function () {
                var tBtn = \$(this).val();
                var tBtn2 = \$(\"#field\").val();

                var tBtn3 = tBtn2 + tBtn;

                \$(\"#field\").val(tBtn3);
            });

            /*<-- Buscar el contenido escrito en el buscador -->*/
            \$(\"#buscar\").click(function () {
                var valor_form = \$(\"#field\").val();
                \$(\"form[name='searchForm']\").attr('action', valor_form);
            });

            /*<-- Pasar el valor de los botones a minusculas -->*/
            document.getElementById(\"shift\").addEventListener(\"click\", minusculas);

            function minusculas() {
                let botones = document.getElementsByClassName(\"btns\");
                for (let i = 0; i < botones.length; i++){
                    botones[i].value = botones[i].value.toLowerCase();
                }
                if (botones.value.toLowerCase()){
                    botones[i].value = botones[i].value.toUpperCase();
                }
            }
            /*<-- Hacer aparecer y desaparecer el teclado -->*/
            \$(\"#dKeyboard\").click(function () {
                \$(\"#teclado\").toggle();
            });

        });

        /*******************************************************************************/

    </script>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "            <meta charset=\"utf-8\" />
            <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
            <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
            <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

            ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

        ";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://unpkg.com/purecss@1.0.0/build/pure-min.css", 1 => 100), "method");
        // line 19
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://unpkg.com/tachyons@4.9.1/css/tachyons.min.css", 1 => 99), "method");
        // line 20
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 98), "method");
        // line 21
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 97), "method");
        // line 22
        echo "            ";
    }

    // line 29
    public function block_header($context, array $blocks = array())
    {
        // line 30
        echo "        <header>
            <!-- <nav class=\"pa3 pa4-ns navigator\" id=\"navb\">
                <a class=\"link dim b f6 f5-ns dib mr3\" href=\"#\" title=\"Home\">Car Shop</a>
                <a class=\"link dim b f6 f5-ns dib mr3\"></a>

                <a href=\"javascript:void(0);\" class=\"icon\" onclick=\"collaps()\">
                    <i class=\"fa fa-bars\"></i>
                </a>
                    
                <div class=\"searcher\">
                    <form name=\"searchForm\" class=\"form-inline\" action=\"\">
                        <input class=\"form-control mr-sm-2 fields\" id=\"field\" type=\"text\" placeholder=\"Search\">
                        <button class=\"btn btn-success\" id=\"buscar\" type=\"submit\">Search</button>
                    </form>
                </div>

                                ";
        // line 47
        echo "                <div class=\"search-container\">
                    <form action=\"/action_page.php\">
                        <input type=\"text\" placeholder=\"Search..\" name=\"search\">
                        <button type=\"submit\">Submit</button>
                    </form>
                </div>

            </nav> -->
            <div class=\"topnav\" id=\"myTopnav\">
                <a href=\"#home\" class=\"active\">Home</a>
                <a href=\"#news\">News</a>
                <a href=\"#contact\">Contact</a>
                <a href=\"#about\">About</a>
                <div class=\"searcher\">
                    <form name=\"searchForm\" class=\"form-inline\" action=\"\">
                        <input class=\"form-control mr-sm-2 fields\" id=\"field\" type=\"text\" placeholder=\"Search\">
                        <button class=\"btn btn-success\" id=\"buscar\" type=\"submit\">Search</button>
                    </form>
                </div>
                <a href=\"javascript:void(0);\" class=\"icon\" onclick=\"myFunction()\">
                    <i class=\"fa fa-bars\"></i>
                </a>
            </div>
        </header>
    ";
    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        // line 74
        echo "        <button id=\"myBtn\" onclick=\"scrolltoTop()\" title=\"Go to top\">Top</button>

        <div class=\"slideshow-container\">
            <div class=\"mySlides\">
                <img src=\"";
        // line 78
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/MB_V250d.jpg");
        echo "\" style=\"width:100%\">
                <div class=\"text\">Mercedes-Benz V250d AMG Line</div>
            </div>

            <div class=\"mySlides\">
                <img src=\"";
        // line 83
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/HondaCEV.jpg");
        echo "\" style=\"width:100%\">
                <div class=\"text\">Honda Clarity EV</div>
            </div>

            <div class=\"mySlides\">
                <img src=\"";
        // line 88
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/Infiniti_PB_S.jpg");
        echo "\" style=\"width:100%\">
                <div class=\"text\">Infiniti Project Black S</div>
            </div>

            <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
            <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>
        </div>
        <br />
        <div class=\"tc\">
            <span class=\"dot\" onclick=\"currentSlide(1)\"></span>
            <span class=\"dot\" onclick=\"currentSlide(2)\"></span>
            <span class=\"dot\" onclick=\"currentSlide(3)\"></span>
        </div>

        <div class=\"tc\">
            <input type=\"button\" class=\"dplyBtn\" value=\"Desplegar teclado\" id=\"dKeyboard\">
        </div>

        <div class=\"tc\" id=\"teclado\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"Q\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"W\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"E\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"R\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"T\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"Y\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"U\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"I\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"O\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"P\">
            <br />
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"A\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"S\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"D\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"F\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"G\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"H\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"J\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"K\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"L\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"Ñ\">
            <br />
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"Z\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"X\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"C\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"V\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"B\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"N\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\",\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\".\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"-\">
            <br />
            <input type=\"button\" class=\"btnshift\" value=\"Shift\" id=\"shift\">
        </div>
        <div id=\"field\">

        </div>
        <section id=\"body\">
            <div class=\"wrapper padding\">
                ";
        // line 146
        $this->displayBlock('content', $context, $blocks);
        // line 147
        echo "            </div>
        </section>
    ";
    }

    // line 146
    public function block_content($context, array $blocks = array())
    {
    }

    // line 151
    public function block_footer($context, array $blocks = array())
    {
        // line 152
        echo "        <footer id=\"footer\">
            <div class=\" mw6-m mw100-ns mw100-l info roboto\"> ";
        // line 153
        echo " ";
        // line 154
        echo "                <div id=\"infoEx\">Información sobre ti:</div>
                <div id=\"info\"></div>
                <div id=\"tPantalla\"></div>
                <div id=\"os\"></div>
                <br />
                <div id=\"infoEx\">Información sobre ti:</div>
                <div id=\"cookies\"></div>
                <div id=\"host\"></div>
            </div>
            <div class=\"mw6-m mw100-ns mw100-l contact roboto\"> ";
        // line 163
        echo " ";
        // line 164
        echo "                <p class=\"underline\">Contacto:</p>
                <form action=\"#\" name=\"cnctForm\" id=\"cForm\" onsubmit=\"vldcnForm()\" method=\"POST\">
                    <table>
                        <tr><td>Nombre:</td><td><input type=\"text\" class=\"fields\" name=\"fname\"></td></tr>
                        <tr><td></td><td></td></tr>
                        <tr><td>Correo electrónico:</td><td><input type=\"text\" class=\"fields\" name=\"femail\"></td></tr>
                    </table>
                    <br />
                    <input type=\"reset\" class=\"btn\">
                    <input type=\"submit\" class=\"btn\" value=\"Enviar\">
                </form>
            </div>
            <div class=\"tc sn\">
                <p id=\"infoEx\">Redes sociales:</p>
                <a href=\"#\" class=\"fa fa-facebook  rrss\"></a>
                <a href=\"#\" class=\"fa fa-twitter   rrss\"></a>
                <a href=\"#\" class=\"fa fa-youtube   rrss\"></a>
                <a href=\"#\" class=\"fa fa-instagram rrss\"></a>
            </div>
            <div class=\"fl w-100 pa2 tc copyright\"> ";
        // line 184
        echo "                Copyright 2018 - Sergio Chávez - Theme built for educational purposes
            </div>
        </footer>
    ";
    }

    // line 189
    public function block_bottom($context, array $blocks = array())
    {
        // line 190
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
    ";
    }

    // line 194
    public function block_javascripts($context, array $blocks = array())
    {
        // line 195
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 196
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js", 1 => 99), "method");
        // line 197
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js", 1 => 98), "method");
        // line 198
        echo "    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 198,  504 => 197,  501 => 196,  498 => 195,  495 => 194,  488 => 190,  485 => 189,  478 => 184,  457 => 164,  455 => 163,  444 => 154,  442 => 153,  439 => 152,  436 => 151,  431 => 146,  425 => 147,  423 => 146,  362 => 88,  354 => 83,  346 => 78,  340 => 74,  337 => 73,  309 => 47,  291 => 30,  288 => 29,  284 => 22,  281 => 21,  278 => 20,  275 => 19,  272 => 18,  269 => 17,  261 => 23,  259 => 17,  253 => 14,  249 => 13,  246 => 12,  244 => 11,  233 => 7,  230 => 6,  227 => 5,  67 => 199,  65 => 194,  61 => 192,  59 => 189,  56 => 188,  54 => 151,  51 => 150,  49 => 73,  46 => 72,  44 => 29,  39 => 26,  37 => 5,  32 => 3,  29 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
    <head>
        {% block head %}
            <meta charset=\"utf-8\" />
            <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            {% include 'partials/metadata.html.twig' %}

            <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
            <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

            {% block stylesheets %}
                {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 100) %}
                {% do assets.addCss('https://unpkg.com/tachyons@4.9.1/css/tachyons.min.css', 99) %}
                {% do assets.addCss('theme://css/custom.css', 98) %}
                {% do assets.addCss('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', 97) %}
            {% endblock %}
            {{ assets.css() }}

        {% endblock head %}
    </head>
    <body>

    {% block header %}
        <header>
            <!-- <nav class=\"pa3 pa4-ns navigator\" id=\"navb\">
                <a class=\"link dim b f6 f5-ns dib mr3\" href=\"#\" title=\"Home\">Car Shop</a>
                <a class=\"link dim b f6 f5-ns dib mr3\"></a>

                <a href=\"javascript:void(0);\" class=\"icon\" onclick=\"collaps()\">
                    <i class=\"fa fa-bars\"></i>
                </a>
                    
                <div class=\"searcher\">
                    <form name=\"searchForm\" class=\"form-inline\" action=\"\">
                        <input class=\"form-control mr-sm-2 fields\" id=\"field\" type=\"text\" placeholder=\"Search\">
                        <button class=\"btn btn-success\" id=\"buscar\" type=\"submit\">Search</button>
                    </form>
                </div>

                                {#{% include 'partials/navigation.html.twig' %}#}
                <div class=\"search-container\">
                    <form action=\"/action_page.php\">
                        <input type=\"text\" placeholder=\"Search..\" name=\"search\">
                        <button type=\"submit\">Submit</button>
                    </form>
                </div>

            </nav> -->
            <div class=\"topnav\" id=\"myTopnav\">
                <a href=\"#home\" class=\"active\">Home</a>
                <a href=\"#news\">News</a>
                <a href=\"#contact\">Contact</a>
                <a href=\"#about\">About</a>
                <div class=\"searcher\">
                    <form name=\"searchForm\" class=\"form-inline\" action=\"\">
                        <input class=\"form-control mr-sm-2 fields\" id=\"field\" type=\"text\" placeholder=\"Search\">
                        <button class=\"btn btn-success\" id=\"buscar\" type=\"submit\">Search</button>
                    </form>
                </div>
                <a href=\"javascript:void(0);\" class=\"icon\" onclick=\"myFunction()\">
                    <i class=\"fa fa-bars\"></i>
                </a>
            </div>
        </header>
    {% endblock %}

    {% block body %}
        <button id=\"myBtn\" onclick=\"scrolltoTop()\" title=\"Go to top\">Top</button>

        <div class=\"slideshow-container\">
            <div class=\"mySlides\">
                <img src=\"{{ url('theme://images/MB_V250d.jpg') }}\" style=\"width:100%\">
                <div class=\"text\">Mercedes-Benz V250d AMG Line</div>
            </div>

            <div class=\"mySlides\">
                <img src=\"{{ url('theme://images/HondaCEV.jpg') }}\" style=\"width:100%\">
                <div class=\"text\">Honda Clarity EV</div>
            </div>

            <div class=\"mySlides\">
                <img src=\"{{ url('theme://images/Infiniti_PB_S.jpg') }}\" style=\"width:100%\">
                <div class=\"text\">Infiniti Project Black S</div>
            </div>

            <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
            <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>
        </div>
        <br />
        <div class=\"tc\">
            <span class=\"dot\" onclick=\"currentSlide(1)\"></span>
            <span class=\"dot\" onclick=\"currentSlide(2)\"></span>
            <span class=\"dot\" onclick=\"currentSlide(3)\"></span>
        </div>

        <div class=\"tc\">
            <input type=\"button\" class=\"dplyBtn\" value=\"Desplegar teclado\" id=\"dKeyboard\">
        </div>

        <div class=\"tc\" id=\"teclado\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"Q\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"W\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"E\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"R\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"T\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"Y\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"U\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"I\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"O\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"P\">
            <br />
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"A\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"S\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"D\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"F\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"G\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"H\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"J\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"K\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"L\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"Ñ\">
            <br />
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"Z\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"X\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"C\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"V\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"B\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"N\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\",\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\".\">
            <input type=\"button\" class=\"btns\" name=\"boton\" value=\"-\">
            <br />
            <input type=\"button\" class=\"btnshift\" value=\"Shift\" id=\"shift\">
        </div>
        <div id=\"field\">

        </div>
        <section id=\"body\">
            <div class=\"wrapper padding\">
                {% block content %}{% endblock %}
            </div>
        </section>
    {% endblock %}

    {% block footer %}
        <footer id=\"footer\">
            <div class=\" mw6-m mw100-ns mw100-l info roboto\"> {# fl w50 pa2 ma3 info roboto #} {# #}
                <div id=\"infoEx\">Información sobre ti:</div>
                <div id=\"info\"></div>
                <div id=\"tPantalla\"></div>
                <div id=\"os\"></div>
                <br />
                <div id=\"infoEx\">Información sobre ti:</div>
                <div id=\"cookies\"></div>
                <div id=\"host\"></div>
            </div>
            <div class=\"mw6-m mw100-ns mw100-l contact roboto\"> {# fl w50 pa2 ma3 contact roboto #} {#  #}
                <p class=\"underline\">Contacto:</p>
                <form action=\"#\" name=\"cnctForm\" id=\"cForm\" onsubmit=\"vldcnForm()\" method=\"POST\">
                    <table>
                        <tr><td>Nombre:</td><td><input type=\"text\" class=\"fields\" name=\"fname\"></td></tr>
                        <tr><td></td><td></td></tr>
                        <tr><td>Correo electrónico:</td><td><input type=\"text\" class=\"fields\" name=\"femail\"></td></tr>
                    </table>
                    <br />
                    <input type=\"reset\" class=\"btn\">
                    <input type=\"submit\" class=\"btn\" value=\"Enviar\">
                </form>
            </div>
            <div class=\"tc sn\">
                <p id=\"infoEx\">Redes sociales:</p>
                <a href=\"#\" class=\"fa fa-facebook  rrss\"></a>
                <a href=\"#\" class=\"fa fa-twitter   rrss\"></a>
                <a href=\"#\" class=\"fa fa-youtube   rrss\"></a>
                <a href=\"#\" class=\"fa fa-instagram rrss\"></a>
            </div>
            <div class=\"fl w-100 pa2 tc copyright\"> {# class=\"tc copyright\" #}
                Copyright 2018 - Sergio Chávez - Theme built for educational purposes
            </div>
        </footer>
    {% endblock %}

    {% block bottom %}
        {{ assets.js('bottom') }}
    {% endblock %}

    </body>
    {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
        {% do assets.addJs('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 99) %}
        {% do assets.addJs('https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', 98) %}
    {% endblock %}
    {{ assets.js() }}

    <script>
        /*<-- Información del usuario -->*/
        let nNavegador = navigator.appCodeName;
        let pAltura = screen.height;
        let pAnchura = screen.width;
        let nOS = navigator.platform;

        /*<-- Información de la página web -->*/
        let nCookies = navigator.cookieEnabled;
        let pHost = window.location.hostname;

        if (nCookies === true) {
            nCookies = \"Sí\";
        }else{
            nCookies = \"No\";
        }
        /*<-- Información del visitante -->*/
        document.getElementById(\"info\").innerHTML = \"Tu navegador es: \"+nNavegador;
        document.getElementById(\"tPantalla\").innerHTML = \"Las medidas de tu pantalla son: \"+pAnchura+\" x \"+pAltura;
        document.getElementById(\"os\").innerHTML = \"Tu Sistema Operativo es: \"+nOS;

        /*<-- Información de la página web -->*/
        document.getElementById(\"cookies\").innerHTML = \"¿Las cookies están habilitadas? \"+nCookies;
        document.getElementById(\"host\").innerHTML = \"El host es \"+pHost;

        /*******************************************************************************/

        window.onload = cargar;

        /*<-- Botón para subir arriba -->*/
        window.onscroll = function() {
            scrolltoTop();
        };

        function cargar() {
            iniciar();
        }

        function scrolltoTop() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
                document.getElementById(\"myBtn\").style.display = \"block\";
            } else {
                document.getElementById(\"myBtn\").style.display = \"none\";
            }
        }

        /*<-- Validación de formulario por JS -->*/
        function iniciar(){
            document.getElementById(\"cForm\").addEventListener(\"submit\", vldcnForm);
        }

        function vldcnForm(event) {

            let cEmail = document.getElementById(\"cform\").elements(\"femail\");

            if(document.getElementById(\"cForm\").elements[\"fname\"].value === \"\" && document.getElementById(\"cForm\").elements[\"femail\"].value ===\"\" ){
                alert(\"Te faltan elementos por completar\");
                event.preventDefault();
            }
            if (cEmail.indexOf(\"@\") === 0){
                alert(\"Falta el campo del email\");
                event.preventDefault();
            }
        }
        /*******************************************************************************/

        function myFunction() {
            let x = document.getElementById(\"myTopnav\");
            if (x.className === \"topnav\") {
                x.className += \" responsive\";
            } else {
                x.className = \"topnav\";
            }
        }

        /*******************************************************************************/

        let slideIndex = 1;
        showDivs(slideIndex);

        function plusSlides(n){
            showDivs(slideIndex += n);
        }
        function currentSlide(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n){
            let i;
            let slides = document.getElementsByClassName(\"mySlides\");
            let dots = document.getElementsByClassName(\"dot\");
            if (n > slides.length){
                slideIndex = 1;
            }
            for (i = 0; i < slides.length; i++){
                slides[i].style.display = \"none\";
            }
            for (i = 0; i < dots.length; i++){
                dots[i].className = dots[i].className.replace(\" active\", \"\");
            }
            slides[slideIndex-1].style.display = \"block\";
            dots[slideIndex-1].className += \" active\";
        }

        /*******************************************************************************/

        \$(document).ready(function(){

            /*<-- Animación para subir arriba -->*/
            \$(\"#myBtn\").click(function() {
                \$('html, body').animate({scrollTop: 0}, 1000);
            });

            /*<-- Teclado retraíble -->*/
            \$(\"input[name='boton']\").click(function () {
                var tBtn = \$(this).val();
                var tBtn2 = \$(\"#field\").val();

                var tBtn3 = tBtn2 + tBtn;

                \$(\"#field\").val(tBtn3);
            });

            /*<-- Buscar el contenido escrito en el buscador -->*/
            \$(\"#buscar\").click(function () {
                var valor_form = \$(\"#field\").val();
                \$(\"form[name='searchForm']\").attr('action', valor_form);
            });

            /*<-- Pasar el valor de los botones a minusculas -->*/
            document.getElementById(\"shift\").addEventListener(\"click\", minusculas);

            function minusculas() {
                let botones = document.getElementsByClassName(\"btns\");
                for (let i = 0; i < botones.length; i++){
                    botones[i].value = botones[i].value.toLowerCase();
                }
                if (botones.value.toLowerCase()){
                    botones[i].value = botones[i].value.toUpperCase();
                }
            }
            /*<-- Hacer aparecer y desaparecer el teclado -->*/
            \$(\"#dKeyboard\").click(function () {
                \$(\"#teclado\").toggle();
            });

        });

        /*******************************************************************************/

    </script>
</html>
", "partials/base.html.twig", "/var/www/html/grav/user/themes/car-shop/templates/partials/base.html.twig");
    }
}
