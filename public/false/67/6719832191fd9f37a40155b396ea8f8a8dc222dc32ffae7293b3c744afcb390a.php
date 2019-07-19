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

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"header-2\">
    <h1 class=\"main-title\">#ID: 00001</h1>
</div>
<div>
    <b style=\"font-weight: 700; margin-right: 10px;\">Project name:</b>
    FAVICON for The Futures
</div>
<div>
    <div class=\"card my-5\">
        <!-- Card content -->
        <div class=\"card-body\">
            <!-- Title -->
            <!-- Text -->
            <div class=\"row\">
                <div class=\"col\">
                    <p>Hola</p>
                </div>
                <div class=\"col\">
                    <p>Hola</p>
                </div>
                <div class=\"col\">
                    <p>Hola</p>
                </div>
                <div class=\"col\"></div>
                <div class=\"col\"></div>
                <div class=\"col\"></div>
            </div>
            <hr>
            <div class=\"row\">
                <div class=\"container\" style=\"display: flex; justify-content: space-between;\">
                    <p>archivo.docx</p>
                    <div class=\"mx-2 float-right text-right\">
                        <a href=\"#\">VIEW & EDIT</a>
                        |
                        <a href=\"#\">SHARE</a>
                        |
                        <a href=\"#\">DOWNLOAD</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class=\"row\">
                <div class=\"container\">
                    Order Delivered: <span class=\"text-muted\">May 8</span>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- Chat zone -->
<link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">


<div class=\"comments\">
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
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout2.twig'  %}

{% block content %}
<div class=\"header-2\">
    <h1 class=\"main-title\">#ID: 00001</h1>
</div>
<div>
    <b style=\"font-weight: 700; margin-right: 10px;\">Project name:</b>
    FAVICON for The Futures
</div>
<div>
    <div class=\"card my-5\">
        <!-- Card content -->
        <div class=\"card-body\">
            <!-- Title -->
            <!-- Text -->
            <div class=\"row\">
                <div class=\"col\">
                    <p>Hola</p>
                </div>
                <div class=\"col\">
                    <p>Hola</p>
                </div>
                <div class=\"col\">
                    <p>Hola</p>
                </div>
                <div class=\"col\"></div>
                <div class=\"col\"></div>
                <div class=\"col\"></div>
            </div>
            <hr>
            <div class=\"row\">
                <div class=\"container\" style=\"display: flex; justify-content: space-between;\">
                    <p>archivo.docx</p>
                    <div class=\"mx-2 float-right text-right\">
                        <a href=\"#\">VIEW & EDIT</a>
                        |
                        <a href=\"#\">SHARE</a>
                        |
                        <a href=\"#\">DOWNLOAD</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class=\"row\">
                <div class=\"container\">
                    Order Delivered: <span class=\"text-muted\">May 8</span>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- Chat zone -->
<link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">


<div class=\"comments\">
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
