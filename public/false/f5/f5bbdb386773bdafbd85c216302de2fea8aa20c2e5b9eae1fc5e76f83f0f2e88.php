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
    <div class=\"col-6\">
        <div class=\"index header\">
            <h2 class=\"\">Project Request Form</h2>
        </div>
        <div>
            <div class=\"card project-request\">
                <div class=\"card-header\">
                    <ul class=\"nav nav-tabs card-header-tabs\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"#\">Grapich Design</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Video Editing</a>
                        </li>
                    </ul>
                </div>
                <div class=\"card-body\">
                    <ul>
                        <li>
                            <small class=\"text-muted\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
                        </li>
                        <li>
                            <small class=\"text-muted\">Nulla sint necessitatibus exercitationem corrupti alias</small>
                        </li>
                        <li>
                            <small class=\"text-muted\">reprehenderit cupiditate quod ipsum. Natus quod delectus</small>
                        </li>
                    </ul>
                    <hr>
                    <div>
                        <h5 class=\"mb-0 font-weight-bold card-title\">Tell us about your design</h5>
                        <small class=\"mt-0 text-muted\">Be as detailed as possible.</small>
                    </div>
                    <form action=\"\" class=\"mt-2\">
                        <div class=\"form-group\">
                            <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\"Title of request\">
                        </div>
                        <div class=\"form-group\">
                            <textarea class=\"form-control form-control-sm rounded-0\" id=\"exampleFormControlTextarea2\"
                                rows=\"2\"
                                placeholder=\"Briefly Description of what you want to see in your project\"></textarea>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"exampleFormControlTextarea2\">
                                <small class=\"text-muted\">
                                    We love lists, please list the specific things you wish to see on your piece.
                                    Our creatives are always more efficient when you are able to itemise your requests.
                                </small></label>
                            <textarea class=\"form-control form-control-sm rounded-0\" id=\"exampleFormControlTextarea2\"
                                rows=\"\" placeholder=\"1.\"></textarea>
                        </div>
                        <button class=\"btn btn-futures\">Send Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-6\">
        <div class=\"index header\">
            <div>
                <h2 class=\"\">Order Status</h2>
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
    <div class=\"col-6\">
        <div class=\"index header\">
            <h2 class=\"\">Project Request Form</h2>
        </div>
        <div>
            <div class=\"card project-request\">
                <div class=\"card-header\">
                    <ul class=\"nav nav-tabs card-header-tabs\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"#\">Grapich Design</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Video Editing</a>
                        </li>
                    </ul>
                </div>
                <div class=\"card-body\">
                    <ul>
                        <li>
                            <small class=\"text-muted\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
                        </li>
                        <li>
                            <small class=\"text-muted\">Nulla sint necessitatibus exercitationem corrupti alias</small>
                        </li>
                        <li>
                            <small class=\"text-muted\">reprehenderit cupiditate quod ipsum. Natus quod delectus</small>
                        </li>
                    </ul>
                    <hr>
                    <div>
                        <h5 class=\"mb-0 font-weight-bold card-title\">Tell us about your design</h5>
                        <small class=\"mt-0 text-muted\">Be as detailed as possible.</small>
                    </div>
                    <form action=\"\" class=\"mt-2\">
                        <div class=\"form-group\">
                            <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\"Title of request\">
                        </div>
                        <div class=\"form-group\">
                            <textarea class=\"form-control form-control-sm rounded-0\" id=\"exampleFormControlTextarea2\"
                                rows=\"2\"
                                placeholder=\"Briefly Description of what you want to see in your project\"></textarea>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"exampleFormControlTextarea2\">
                                <small class=\"text-muted\">
                                    We love lists, please list the specific things you wish to see on your piece.
                                    Our creatives are always more efficient when you are able to itemise your requests.
                                </small></label>
                            <textarea class=\"form-control form-control-sm rounded-0\" id=\"exampleFormControlTextarea2\"
                                rows=\"\" placeholder=\"1.\"></textarea>
                        </div>
                        <button class=\"btn btn-futures\">Send Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-6\">
        <div class=\"index header\">
            <div>
                <h2 class=\"\">Order Status</h2>
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
