<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* show-order-history.twig */
class __TwigTemplate_b53db2102b69160252514ba4ac0592c0a3b295bee0815c39b7bd0b127abd738f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'headlinks' => [$this, 'block_headlinks'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout2.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout2.twig", "show-order-history.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_headlinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"header-2\">
            <h1 class=\"main-title\">#ID: 00001</h1>
        </div>
        <div>
            <b style=\"font-weight: 700; margin-right: 10px;\">Project name:</b>
            FAVICON for The Futures
        </div>
        <div>
            <div class=\"my-3\">
                <!-- Card content -->
                <div class=\"\">
                    ";
        // line 38
        echo "                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"font-weight-bold\">Placed</div>
                                <div>Date</div>
                                <div>By William</div>
                            </div>
                            <div class=\"col\">
                                <div class=\"font-weight-bold\">Length</div>
                                <div>5m</div>
                                <div></div>
                            </div>
                            <div class=\"col\">
                                <div class=\"font-weight-bold\">Total</div>
                                <div>\$5.00</div>
                                <div>Print receipt</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Title of the Request</div>
                            <div class=\"col-6\">FAVICON for The Futures</div>
                            <div class=\"col-3 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Description: </div>
                            <div class=\"col-6\">Hi. Can we please do this task right away. And pause the rest of all my
                                other tasks until this one is finished.
                                Detail List:
                                1) Please create thumbnails with each of the pictures attached.
                                2) Please use do the thumbnails with the style/template similar to the ones being done
                                for Fadela
                                Hilali 3) But please DO NOT use Fadela's colours (use the 2 colours attached as the
                                brand
                                colours) 4) The title of each thumbnail should be what is written on the file name
                                (background fading image should just relate to the topic on title.
                                5) Please find WETRANSFER attached with all files needed.</div>
                            <div class=\"col-3 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Specific Text (If Any): </div>
                            <div class=\"col-6\">None</div>
                            <div class=\"col-3 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Design Size:</div>
                            <div class=\"col-6\">None</div>
                            <div class=\"col-3 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Design Custom Size:</div>
                            <div class=\"col-6\">000 Points x 000 Points</div>
                            <div class=\"col-3 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">The Design is For:</div>
                            <div class=\"col-6\">Digital</div>
                            <div class=\"col-3 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Audience You Are Trying to Reach:</div>
                            <div class=\"col-6\">Yoga Students / Yoga Teachers</div>
                            <div class=\"col-3 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Links for inspiration:</div>
                            <div class=\"col-6\"><a href=\"\" target=\"_blank\">https://we.tl/t-wbMeDtCmLL</a></div>
                            <div class=\"col-3 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col font-weight-bold\">Archivo.docx</div>
                            <div class=\"col text-right\">
                                <a href=\"#\">EDIT</a>
                                |
                                <a href=\"#\">SHARE</a>
                                |
                                <a href=\"#\">DOWNLOAD</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Project Delivered: </div>
                            <div class=\"col-6\">May 8</div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"container\">
                            <span class=\"text-muted\"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Chat zone -->
<link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">


<div class=\"comments mt-5\">
    <h2 class=\" text-center\">Leave us your comments below</h2>
    <div class=\"card\">
        <div class=\"card-body comment\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <img src=\"https://ui-avatars.com/api/?name=Lohn+Roe&size=128\"
                        class=\"img rounded-circle img-fluid\" />
                    <p class=\"text-futures text-center\">15 Minutes Ago</p>
                </div>
                <div class=\"col-md-10\">
                    <p>
                        <a class=\"float-left\" href=\"#\">
                            <strong>London Real</strong> <span class=\"badge bg-futures\">Customer</span>
                        </a>
                    </p>
                    <div class=\"clearfix\"></div>
                    <p>Lorem Ipsum is simply dummy text of the pr make but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                        Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>

        <div class=\"card-body striped comment\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <img src=\"https://ui-avatars.com/api/?name=Wohn+Voe&size=128\"
                        class=\"img rounded-circle img-fluid\" />
                    <p class=\"text-futures text-center\">2 Hours Ago</p>
                </div>
                <div class=\"col-md-10\">
                    <p>
                        <a class=\"float-left\" href=\"#\">
                            <strong>William Villalobos</strong> <span class=\"badge bg-futures\">The futures</span>
                        </a>
                    </p>
                    <div class=\"clearfix\"></div>
                    <p>Lorem Ipsum is simply dummy text of the pr make but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                        Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>

        <div class=\"card-body comment\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <img src=\"https://ui-avatars.com/api/?name=Lohn+Roe&size=128\"
                        class=\"img rounded-circle img-fluid\" />
                    <p class=\"text-futures text-center\">15 Minutes Ago</p>
                </div>
                <div class=\"col-md-10\">
                    <p>
                        <a class=\"float-left\" href=\"#\">
                            <strong>London Real</strong> <span class=\"badge bg-futures\">Customer</span>
                        </a>
                    </p>
                    <div class=\"clearfix\"></div>
                    <p>Lorem Ipsum is simply dummy text of the pr make but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                        Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>

        <div class=\"card-body comment striped\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <img src=\"https://ui-avatars.com/api/?name=Wohn+Voe&size=128\"
                        class=\"img rounded-circle img-fluid\" />
                    <p class=\"text-futures text-center\">2 Hours Ago</p>
                </div>
                <div class=\"col-md-10\">
                    <p>
                        <a class=\"float-left\" href=\"#\">
                            <strong>William Villalobos</strong> <span class=\"badge bg-futures\">The futures</span>
                        </a>
                    </p>
                    <div class=\"clearfix\"></div>
                    <p>Lorem Ipsum is simply dummy text of the pr make but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                        Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "show-order-history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 38,  60 => 6,  56 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout2.twig'  %}
{% block headlinks %}

{% endblock %}
{% block content %}
<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"header-2\">
            <h1 class=\"main-title\">#ID: 00001</h1>
        </div>
        <div>
            <b style=\"font-weight: 700; margin-right: 10px;\">Project name:</b>
            FAVICON for The Futures
        </div>
        <div>
            <div class=\"my-3\">
                <!-- Card content -->
                <div class=\"\">
                    {# <div class=\"d-flex justify-content-between\">
                        <div class=\"\">
                            <div class=\"font-weight-bold\">Placed</div>
                            <div>Date</div>
                            <div>By William</div>
                        </div>

                        <div class=\"mx-4\">
                            <div class=\"font-weight-bold\">Length</div>
                            <div>5m</div>
                            <div></div>
                        </div>
                        <div class=\"mx-4\">
                            <div class=\"font-weight-bold\">Total</div>
                            <div>\$5.00</div>
                            <div>Print receipt</div>
                        </div>
                    </div>
                    <hr> #}
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"font-weight-bold\">Placed</div>
                                <div>Date</div>
                                <div>By William</div>
                            </div>
                            <div class=\"col\">
                                <div class=\"font-weight-bold\">Length</div>
                                <div>5m</div>
                                <div></div>
                            </div>
                            <div class=\"col\">
                                <div class=\"font-weight-bold\">Total</div>
                                <div>\$5.00</div>
                                <div>Print receipt</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Title of the Request</div>
                            <div class=\"col-6\">FAVICON for The Futures</div>
                            <div class=\"col-3 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Description: </div>
                            <div class=\"col-6\">Hi. Can we please do this task right away. And pause the rest of all my
                                other tasks until this one is finished.
                                Detail List:
                                1) Please create thumbnails with each of the pictures attached.
                                2) Please use do the thumbnails with the style/template similar to the ones being done
                                for Fadela
                                Hilali 3) But please DO NOT use Fadela's colours (use the 2 colours attached as the
                                brand
                                colours) 4) The title of each thumbnail should be what is written on the file name
                                (background fading image should just relate to the topic on title.
                                5) Please find WETRANSFER attached with all files needed.</div>
                            <div class=\"col-3 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Specific Text (If Any): </div>
                            <div class=\"col-6\">None</div>
                            <div class=\"col-3 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Design Size:</div>
                            <div class=\"col-6\">None</div>
                            <div class=\"col-3 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Design Custom Size:</div>
                            <div class=\"col-6\">000 Points x 000 Points</div>
                            <div class=\"col-3 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">The Design is For:</div>
                            <div class=\"col-6\">Digital</div>
                            <div class=\"col-3 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Audience You Are Trying to Reach:</div>
                            <div class=\"col-6\">Yoga Students / Yoga Teachers</div>
                            <div class=\"col-3 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Links for inspiration:</div>
                            <div class=\"col-6\"><a href=\"\" target=\"_blank\">https://we.tl/t-wbMeDtCmLL</a></div>
                            <div class=\"col-3 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col font-weight-bold\">Archivo.docx</div>
                            <div class=\"col text-right\">
                                <a href=\"#\">EDIT</a>
                                |
                                <a href=\"#\">SHARE</a>
                                |
                                <a href=\"#\">DOWNLOAD</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Project Delivered: </div>
                            <div class=\"col-6\">May 8</div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"container\">
                            <span class=\"text-muted\"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Chat zone -->
<link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">


<div class=\"comments mt-5\">
    <h2 class=\" text-center\">Leave us your comments below</h2>
    <div class=\"card\">
        <div class=\"card-body comment\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <img src=\"https://ui-avatars.com/api/?name=Lohn+Roe&size=128\"
                        class=\"img rounded-circle img-fluid\" />
                    <p class=\"text-futures text-center\">15 Minutes Ago</p>
                </div>
                <div class=\"col-md-10\">
                    <p>
                        <a class=\"float-left\" href=\"#\">
                            <strong>London Real</strong> <span class=\"badge bg-futures\">Customer</span>
                        </a>
                    </p>
                    <div class=\"clearfix\"></div>
                    <p>Lorem Ipsum is simply dummy text of the pr make but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                        Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>

        <div class=\"card-body striped comment\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <img src=\"https://ui-avatars.com/api/?name=Wohn+Voe&size=128\"
                        class=\"img rounded-circle img-fluid\" />
                    <p class=\"text-futures text-center\">2 Hours Ago</p>
                </div>
                <div class=\"col-md-10\">
                    <p>
                        <a class=\"float-left\" href=\"#\">
                            <strong>William Villalobos</strong> <span class=\"badge bg-futures\">The futures</span>
                        </a>
                    </p>
                    <div class=\"clearfix\"></div>
                    <p>Lorem Ipsum is simply dummy text of the pr make but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                        Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>

        <div class=\"card-body comment\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <img src=\"https://ui-avatars.com/api/?name=Lohn+Roe&size=128\"
                        class=\"img rounded-circle img-fluid\" />
                    <p class=\"text-futures text-center\">15 Minutes Ago</p>
                </div>
                <div class=\"col-md-10\">
                    <p>
                        <a class=\"float-left\" href=\"#\">
                            <strong>London Real</strong> <span class=\"badge bg-futures\">Customer</span>
                        </a>
                    </p>
                    <div class=\"clearfix\"></div>
                    <p>Lorem Ipsum is simply dummy text of the pr make but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                        Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>

        <div class=\"card-body comment striped\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <img src=\"https://ui-avatars.com/api/?name=Wohn+Voe&size=128\"
                        class=\"img rounded-circle img-fluid\" />
                    <p class=\"text-futures text-center\">2 Hours Ago</p>
                </div>
                <div class=\"col-md-10\">
                    <p>
                        <a class=\"float-left\" href=\"#\">
                            <strong>William Villalobos</strong> <span class=\"badge bg-futures\">The futures</span>
                        </a>
                    </p>
                    <div class=\"clearfix\"></div>
                    <p>Lorem Ipsum is simply dummy text of the pr make but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                        Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


{% endblock %}", "show-order-history.twig", "/opt/lampp/htdocs/thefutures/resources/views/show-order-history.twig");
    }
}
