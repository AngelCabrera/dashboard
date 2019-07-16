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

/* myFiles2.twig */
class __TwigTemplate_1f01363e831db9558c5300ab6b68bf1baf9bd267b4a08f1d4c3daa38d91915eb extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout2.twig", "myFiles2.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<!-- Main content Header-->
<div class=\"index header\">
    <div>
        <h1 class=\"main-title\">My Files </h1>
    </div>

    <!-- Search Bar 
                <div class=\"input-group md-form form-sm form-2 pl-0\">
                  <input class=\"form-control my-0 py-1\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
                  <div class=\"input-group-append\">
                    <span class=\"input-group-text lighten-2\" id=\"basic-text1\"><i class=\"fas fa-search text-grey\"
                        aria-hidden=\"true\"></i></span>
                  </div>
                </div>
                <!-- /Search Bar -->

    <button class=\"btn btn-futures dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
        aria-expanded=\"false\">NEW ORDER</button>
    <div class=\"dropdown-menu\">
        <a class=\"dropdown-item\" href=\"#\">Action</a>
        <a class=\"dropdown-item\" href=\"#\">Another action</a>
        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" href=\"#\">Separated link</a>
    </div>


</div>

<!--/ Main content Header-->
<!-- Main content Data Display-->
<div class=\"data table-responsive text-nowrap\">
    <table id=\"\" cellspacing=\"0\" class=\"table table-hover\">
        <thead>
            <tr>
                <th scope=\"col\" style=\"width: 60%;\">Name</th>
                <th scope=\"col\">Uploaded</th>
                <th scope=\"col\">Rating</th>
                <th scope=\"col\">Status</th>
                <th scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope=\"row\">
                    <a href=\"orderDetails/TC1031972989.html\">
                        TC1031972989
                    </a>
                </th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <th scope=\"row\">
                    <a href=\"orderDetails/TC1031972989.html\">
                        TC0376402980
                    </a>
                </th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>
                    <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <th scope=\"row\">
                    <a href=\"orderDetails/TC1031972989.html\">
                        TC1031972989
                    </a>
                </th>
                <td>Larry the Bird</td>
                <td>Larry</td>
                <td>@twitter</td>
                <td>
                    <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <th scope=\"row\">
                    <a href=\"orderDetails/TC1031972989.html\">
                        TC1031972989
                    </a>
                </th>
                <td>Larry the Bird</td>
                <td>Larry</td>
                <td>@twitter</td>
                <td>
                    <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <th scope=\"row\">
                    <a href=\"orderDetails/TC1031972989.html\">
                        TC1031972989
                    </a>
                </th>
                <td>Larry the Bird</td>
                <td>Larry</td>
                <td>@twitter</td>
                <td>
                    <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "myFiles2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout2.twig' %}
{% block content %}
<!-- Main content Header-->
<div class=\"index header\">
    <div>
        <h1 class=\"main-title\">My Files </h1>
    </div>

    <!-- Search Bar 
                <div class=\"input-group md-form form-sm form-2 pl-0\">
                  <input class=\"form-control my-0 py-1\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
                  <div class=\"input-group-append\">
                    <span class=\"input-group-text lighten-2\" id=\"basic-text1\"><i class=\"fas fa-search text-grey\"
                        aria-hidden=\"true\"></i></span>
                  </div>
                </div>
                <!-- /Search Bar -->

    <button class=\"btn btn-futures dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
        aria-expanded=\"false\">NEW ORDER</button>
    <div class=\"dropdown-menu\">
        <a class=\"dropdown-item\" href=\"#\">Action</a>
        <a class=\"dropdown-item\" href=\"#\">Another action</a>
        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" href=\"#\">Separated link</a>
    </div>


</div>

<!--/ Main content Header-->
<!-- Main content Data Display-->
<div class=\"data table-responsive text-nowrap\">
    <table id=\"\" cellspacing=\"0\" class=\"table table-hover\">
        <thead>
            <tr>
                <th scope=\"col\" style=\"width: 60%;\">Name</th>
                <th scope=\"col\">Uploaded</th>
                <th scope=\"col\">Rating</th>
                <th scope=\"col\">Status</th>
                <th scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope=\"row\">
                    <a href=\"orderDetails/TC1031972989.html\">
                        TC1031972989
                    </a>
                </th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <th scope=\"row\">
                    <a href=\"orderDetails/TC1031972989.html\">
                        TC0376402980
                    </a>
                </th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>
                    <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <th scope=\"row\">
                    <a href=\"orderDetails/TC1031972989.html\">
                        TC1031972989
                    </a>
                </th>
                <td>Larry the Bird</td>
                <td>Larry</td>
                <td>@twitter</td>
                <td>
                    <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <th scope=\"row\">
                    <a href=\"orderDetails/TC1031972989.html\">
                        TC1031972989
                    </a>
                </th>
                <td>Larry the Bird</td>
                <td>Larry</td>
                <td>@twitter</td>
                <td>
                    <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <th scope=\"row\">
                    <a href=\"orderDetails/TC1031972989.html\">
                        TC1031972989
                    </a>
                </th>
                <td>Larry the Bird</td>
                <td>Larry</td>
                <td>@twitter</td>
                <td>
                    <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
{% endblock %}", "myFiles2.twig", "/opt/lampp/htdocs/thefutures/resources/views/myFiles2.twig");
    }
}
