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
        // line 3
        echo "<link rel=\"stylesheet\" href=\"/thefutures/styles/breads.css\">
";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<!-- Main content Header-->
<div class=\"row\">
    <div class=\"col\">
        <div class=\"index header\">
            <div>
                <h1 class=\"\">Project Progress</h1>
            </div>
        </div>
        <!--/ Main content Header-->
        <!-- Main content Data Display-->
        <table id=\"\" cellspacing=\"0\" class=\"table tickets-table table-hover\">
            <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Project Name</th>
                    <th scope=\"col\">Placed</th>
                    <th scope=\"col\">Placed By</th>
                    <th scope=\"col\">Received</th>
                    <th scope=\"col\">In Production</th>
                    <th scope=\"col\">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope=\"row\">
                        <a href=\"/thefutures/dashboard/order-history/TC1031972989\">
                            00001
                        </a>
                    </th>

                    <td>FAVICON for The Futures</td>
                    <td>19/06/2019</td>
                    <td>William</td>
                    <td><button type=\"button\" class=\"btn btn-circle\"><i class=\"\"></i></td>
                    <td>
                        <div class=\"pulsating-dot\">
                            <div class=\"pulsating-dot__ripple\">
                                <span></span>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div style=\"width: 100;\" class=\"bg-futures text-center\">
                            <p class=\"text-white mb-0\">
                                Awaiting approval
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope=\"row\">
                        <a href=\"/dashboard/order-history/TC1031972989\">
                            00002
                        </a>
                    </th>
                    <td>FAVICON for The Futures</td>
                    <td>19/06/2019</td>
                    <td>William</td>
                    <td>
                        <div class=\"pulsating-dot\">
                            <div class=\"pulsating-dot__ripple\">
                                <span></span>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </td>
                    <td><button type=\"button\" class=\"btn btn-circle\"></td>
                    <td>
                        <div style=\"width: 100;\" class=\"bg-yellow text-center\">
                            <p class=\"text-dark mb-0\">Up Next</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope=\"row\">
                        <a href=\"/dashboard/order-history/TC1031972989\">
                            00002
                        </a>
                    </th>
                    <td>FAVICON for The Futures</td>
                    <td>19/06/2019</td>
                    <td>William</td>
                    <td>
                        <div class=\"pulsating-dot\">
                            <div class=\"pulsating-dot__ripple\">
                                <span></span>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </td>
                    <td><button type=\"button\" class=\"btn btn-circle\"></td>
                    <td>
                        <div style=\"width: 100;\" class=\"bg-futures-gray text-center\">
                            <p class=\"text-white mb-0\"> On Queue </p>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th scope=\"row\">
                        <a href=\"/dashboard/order-history/TC1031972989\">
                            00002
                        </a>
                    </th>
                    <td>FAVICON for The Futures</td>
                    <td>19/06/2019</td>
                    <td>William</td>
                    <td>
                        <div class=\"pulsating-dot\">
                            <div class=\"pulsating-dot__ripple\">
                                <span></span>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </td>
                    <td><button type=\"button\" class=\"btn btn-circle\"></td>
                    <td>
                        <div style=\"width: 100;\" class=\"bg-futures-gray text-center\">
                            <p class=\"text-white mb-0\"> On Queue </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope=\"row\">
                        <a href=\"/dashboard/order-history/TC1031972989\">
                            00002
                        </a>
                    </th>
                    <td>FAVICON for The Futures</td>
                    <td>19/06/2019</td>
                    <td>William</td>
                    <td>
                        <div class=\"pulsating-dot\">
                            <div class=\"pulsating-dot__ripple\">
                                <span></span>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </td>
                    <td><button type=\"button\" class=\"btn btn-circle\"></td>
                    <td>
                        <div style=\"width: 100;\" class=\"bg-futures-gray text-center\">
                            <p class=\"text-white mb-0\"> On Queue </p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div>
    <div class=\"container breadcrumbs-container\">
        <h1 class=\"breadcrumbs-title\">Order Transcripts</h1>
        <div class=\"right steps-container\">
            <ul class=\"breadcrumbs unstyled\">

                <li class=\"breadcrumb step-1 breadcrumb-active\">
                    <div class=\"breadcrumb-number\">

                    </div>
                    <div class=\"breadcrumb-name\">
                        Add Files
                    </div>
                </li>
                <li class=\"breadcrumb-connector\">
                    <div class=\"connector\"></div>
                </li>
                <li class=\"breadcrumb step-2\">
                    <div class=\"breadcrumb-number\">

                    </div>
                    <div class=\"breadcrumb-name\">
                        Sign In
                    </div>
                </li>
                <li class=\"breadcrumb-connector\">
                    <div class=\"connector\"></div>
                </li>
                <li class=\"breadcrumb step-3 last\">
                    <div class=\"breadcrumb-number\">

                    </div>
                    <div class=\"breadcrumb-name\">
                        Pay
                    </div>
                </li>
            </ul>
        </div>
        <div class=\"clear\"></div>
    </div>
</div>
";
    }

    // line 213
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
        return array (  268 => 213,  61 => 6,  57 => 5,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout2.twig' %}
{% block headlinks %}
<link rel=\"stylesheet\" href=\"/thefutures/styles/breads.css\">
{% endblock %}
{% block content %}
<!-- Main content Header-->
<div class=\"row\">
    <div class=\"col\">
        <div class=\"index header\">
            <div>
                <h1 class=\"\">Project Progress</h1>
            </div>
        </div>
        <!--/ Main content Header-->
        <!-- Main content Data Display-->
        <table id=\"\" cellspacing=\"0\" class=\"table tickets-table table-hover\">
            <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Project Name</th>
                    <th scope=\"col\">Placed</th>
                    <th scope=\"col\">Placed By</th>
                    <th scope=\"col\">Received</th>
                    <th scope=\"col\">In Production</th>
                    <th scope=\"col\">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope=\"row\">
                        <a href=\"/thefutures/dashboard/order-history/TC1031972989\">
                            00001
                        </a>
                    </th>

                    <td>FAVICON for The Futures</td>
                    <td>19/06/2019</td>
                    <td>William</td>
                    <td><button type=\"button\" class=\"btn btn-circle\"><i class=\"\"></i></td>
                    <td>
                        <div class=\"pulsating-dot\">
                            <div class=\"pulsating-dot__ripple\">
                                <span></span>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div style=\"width: 100;\" class=\"bg-futures text-center\">
                            <p class=\"text-white mb-0\">
                                Awaiting approval
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope=\"row\">
                        <a href=\"/dashboard/order-history/TC1031972989\">
                            00002
                        </a>
                    </th>
                    <td>FAVICON for The Futures</td>
                    <td>19/06/2019</td>
                    <td>William</td>
                    <td>
                        <div class=\"pulsating-dot\">
                            <div class=\"pulsating-dot__ripple\">
                                <span></span>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </td>
                    <td><button type=\"button\" class=\"btn btn-circle\"></td>
                    <td>
                        <div style=\"width: 100;\" class=\"bg-yellow text-center\">
                            <p class=\"text-dark mb-0\">Up Next</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope=\"row\">
                        <a href=\"/dashboard/order-history/TC1031972989\">
                            00002
                        </a>
                    </th>
                    <td>FAVICON for The Futures</td>
                    <td>19/06/2019</td>
                    <td>William</td>
                    <td>
                        <div class=\"pulsating-dot\">
                            <div class=\"pulsating-dot__ripple\">
                                <span></span>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </td>
                    <td><button type=\"button\" class=\"btn btn-circle\"></td>
                    <td>
                        <div style=\"width: 100;\" class=\"bg-futures-gray text-center\">
                            <p class=\"text-white mb-0\"> On Queue </p>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th scope=\"row\">
                        <a href=\"/dashboard/order-history/TC1031972989\">
                            00002
                        </a>
                    </th>
                    <td>FAVICON for The Futures</td>
                    <td>19/06/2019</td>
                    <td>William</td>
                    <td>
                        <div class=\"pulsating-dot\">
                            <div class=\"pulsating-dot__ripple\">
                                <span></span>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </td>
                    <td><button type=\"button\" class=\"btn btn-circle\"></td>
                    <td>
                        <div style=\"width: 100;\" class=\"bg-futures-gray text-center\">
                            <p class=\"text-white mb-0\"> On Queue </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope=\"row\">
                        <a href=\"/dashboard/order-history/TC1031972989\">
                            00002
                        </a>
                    </th>
                    <td>FAVICON for The Futures</td>
                    <td>19/06/2019</td>
                    <td>William</td>
                    <td>
                        <div class=\"pulsating-dot\">
                            <div class=\"pulsating-dot__ripple\">
                                <span></span>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </td>
                    <td><button type=\"button\" class=\"btn btn-circle\"></td>
                    <td>
                        <div style=\"width: 100;\" class=\"bg-futures-gray text-center\">
                            <p class=\"text-white mb-0\"> On Queue </p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div>
    <div class=\"container breadcrumbs-container\">
        <h1 class=\"breadcrumbs-title\">Order Transcripts</h1>
        <div class=\"right steps-container\">
            <ul class=\"breadcrumbs unstyled\">

                <li class=\"breadcrumb step-1 breadcrumb-active\">
                    <div class=\"breadcrumb-number\">

                    </div>
                    <div class=\"breadcrumb-name\">
                        Add Files
                    </div>
                </li>
                <li class=\"breadcrumb-connector\">
                    <div class=\"connector\"></div>
                </li>
                <li class=\"breadcrumb step-2\">
                    <div class=\"breadcrumb-number\">

                    </div>
                    <div class=\"breadcrumb-name\">
                        Sign In
                    </div>
                </li>
                <li class=\"breadcrumb-connector\">
                    <div class=\"connector\"></div>
                </li>
                <li class=\"breadcrumb step-3 last\">
                    <div class=\"breadcrumb-number\">

                    </div>
                    <div class=\"breadcrumb-name\">
                        Pay
                    </div>
                </li>
            </ul>
        </div>
        <div class=\"clear\"></div>
    </div>
</div>
{% endblock %}



{% block scripts %}
{% endblock %}", "projects-status.twig", "/opt/lampp/htdocs/thefutures/resources/views/projects-status.twig");
    }
}
