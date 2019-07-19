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

/* projects-status.twig */
class __TwigTemplate_6f3eeb691b83d05feab8eec97d89ea17b5559c6ef493fde8ee715b77263c2c55 extends \Twig\Template
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
            'scripts' => [$this, 'block_scripts'],
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
        $this->parent = $this->loadTemplate("layout2.twig", "projects-status.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_headlinks($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<!-- Main content Header-->
<div class=\"row\">
    <div class=\"col\">
        <div class=\"index header\">
            <div>
                <h1 class=\"\">Project Status</h1>
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
                        <a href=\"/thefutures/dashboard/order-history/TC1031972989\">
                            00001
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
                        <a href=\"/dashboard/order-history/TC1031972989\">
                            00002
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
                        <a href=\"/dashboard/order-history/TC1031972989\">
                            00003
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
                        <a href=\"/dashboard/order-history/TC1031972989\">
                            00004
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
                        <a href=\"/thefutures/dashboard/order-history/TC1031972989\">
                            00005
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

    // line 95
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "projects-status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 95,  58 => 5,  54 => 4,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout2.twig' %}
{% block headlinks %}
{% endblock %}
{% block content %}
<!-- Main content Header-->
<div class=\"row\">
    <div class=\"col\">
        <div class=\"index header\">
            <div>
                <h1 class=\"\">Project Status</h1>
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
                        <a href=\"/thefutures/dashboard/order-history/TC1031972989\">
                            00001
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
                        <a href=\"/dashboard/order-history/TC1031972989\">
                            00002
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
                        <a href=\"/dashboard/order-history/TC1031972989\">
                            00003
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
                        <a href=\"/dashboard/order-history/TC1031972989\">
                            00004
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
                        <a href=\"/thefutures/dashboard/order-history/TC1031972989\">
                            00005
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
{% endblock %}



{% block scripts %}
{% endblock %}", "projects-status.twig", "/opt/lampp/htdocs/thefutures/resources/views/projects-status.twig");
    }
}
