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

/* tickets.twig */
class __TwigTemplate_b8fcfc1cfde0ebf5f33f36cbac0213ad67e8edeb2d40793077c9aa3ce443a6a6 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout2.twig", "tickets.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<!-- Main content Header-->
<div class=\"row\">
    <div class=\"col-5\">

    </div>
    <div class=\"col-7\">
        <div class=\" index header\">
            <div>
                <h1 class=\"main-title\">Order Status</h1>
            </div>
        </div>

        <!--/ Main content Header-->
        <!-- Main content Data Display-->

        <table id=\"\" cellspacing=\"0\" class=\"table tickets-table table-hover\">
            <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Project Name</th>
                    <th scope=\"col\">Received</th>
                    <th scope=\"col\">In Production</th>
                    <th scope=\"col\">In review</th>
                    <th scope=\"col\">Delivered</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope=\"row\">
                        <a href=\"orderDetails/TC1031972989.html\">
                            1
                        </a>
                    </th>
                    <td>Mark</td>
                    <td><button type=\"button\" class=\"btn btn-default btn-circle\"><i class=\"\"></i></td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                    <td>N/A</td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                </tr>
                <tr>
                    <th scope=\"row\">
                        <a href=\"orderDetails/TC1031972989.html\">
                            2
                        </a>
                    </th>
                    <td>Jacob</td>
                    <td><button type=\"button\" class=\"btn btn-default btn-circle\"><i class=\"\"></i></td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                    <td>N/A</td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                </tr>
                <tr>
                    <th scope=\"row\">
                        <a href=\"orderDetails/TC1031972989.html\">
                            3
                        </a>
                    </th>
                    <td>Larry the Bird</td>
                    <td><button type=\"button\" class=\"btn btn-default btn-circle\"><i class=\"\"></i></td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                    <td>N/A</td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                </tr>
                <tr>
                    <th scope=\"row\">
                        <a href=\"orderDetails/TC1031972989.html\">
                            4
                        </a>
                    </th>
                    <td>Larry the Bird</td>
                    <td><button type=\"button\" class=\"btn btn-default btn-circle\"><i class=\"\"></i></td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                    <td>N/A</td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                </tr>
                <tr>
                    <th scope=\"row\">
                        <a href=\"orderDetails/TC1031972989.html\">
                            5
                        </a>
                    </th>
                    <td>Larry the Bird</td>
                    <td><button type=\"button\" class=\"btn btn-default btn-circle\"><i class=\"\"></i></td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                    <td>N/A</td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "tickets.twig";
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
<div class=\"row\">
    <div class=\"col-5\">

    </div>
    <div class=\"col-7\">
        <div class=\" index header\">
            <div>
                <h1 class=\"main-title\">Order Status</h1>
            </div>
        </div>

        <!--/ Main content Header-->
        <!-- Main content Data Display-->

        <table id=\"\" cellspacing=\"0\" class=\"table tickets-table table-hover\">
            <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Project Name</th>
                    <th scope=\"col\">Received</th>
                    <th scope=\"col\">In Production</th>
                    <th scope=\"col\">In review</th>
                    <th scope=\"col\">Delivered</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope=\"row\">
                        <a href=\"orderDetails/TC1031972989.html\">
                            1
                        </a>
                    </th>
                    <td>Mark</td>
                    <td><button type=\"button\" class=\"btn btn-default btn-circle\"><i class=\"\"></i></td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                    <td>N/A</td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                </tr>
                <tr>
                    <th scope=\"row\">
                        <a href=\"orderDetails/TC1031972989.html\">
                            2
                        </a>
                    </th>
                    <td>Jacob</td>
                    <td><button type=\"button\" class=\"btn btn-default btn-circle\"><i class=\"\"></i></td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                    <td>N/A</td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                </tr>
                <tr>
                    <th scope=\"row\">
                        <a href=\"orderDetails/TC1031972989.html\">
                            3
                        </a>
                    </th>
                    <td>Larry the Bird</td>
                    <td><button type=\"button\" class=\"btn btn-default btn-circle\"><i class=\"\"></i></td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                    <td>N/A</td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                </tr>
                <tr>
                    <th scope=\"row\">
                        <a href=\"orderDetails/TC1031972989.html\">
                            4
                        </a>
                    </th>
                    <td>Larry the Bird</td>
                    <td><button type=\"button\" class=\"btn btn-default btn-circle\"><i class=\"\"></i></td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                    <td>N/A</td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                </tr>
                <tr>
                    <th scope=\"row\">
                        <a href=\"orderDetails/TC1031972989.html\">
                            5
                        </a>
                    </th>
                    <td>Larry the Bird</td>
                    <td><button type=\"button\" class=\"btn btn-default btn-circle\"><i class=\"\"></i></td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                    <td>N/A</td>
                    <td><button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-check\"></i></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
{% endblock %}", "tickets.twig", "/opt/lampp/htdocs/thefutures/resources/views/tickets.twig");
    }
}
