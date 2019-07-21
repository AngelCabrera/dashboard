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

/* order-history.twig */
class __TwigTemplate_db847fb5b25e69471d5caae957248f10d2b2538fb26c12403186c0c3939d5163 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout2.twig", "order-history.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<!-- Main content Header-->
<div class=\"header  mb-4\">
  <h1 class=\"main-title\">Project History</h1>
</div>
<!--/ Main content Header-->
<!-- Main content Data Display-->
<div class=\"data table-responsive text-nowrap\">
  <table id=\"\" cellspacing=\"0\" class=\"table tickets-table table-hover\">
    <thead>
      <tr>
        <th scope=\"col\">#ID</th>
        <th scope=\"col\">Project Name</th>
        <th scope=\"col\">Placed</th>
        <th scope=\"col\">Placed By</th>
        <th scope=\"col\">Direct Link</th>
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
        <td>William Villalobos</td>
        <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
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
        <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
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
        <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
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
        <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
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
        <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
      </tr>
    </tbody>
  </table>
</div>

";
        // line 84
        echo "
<!--/ Main content Data Display-->
";
    }

    public function getTemplateName()
    {
        return "order-history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 84,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout2.twig' %}
{% block content %}
<!-- Main content Header-->
<div class=\"header  mb-4\">
  <h1 class=\"main-title\">Project History</h1>
</div>
<!--/ Main content Header-->
<!-- Main content Data Display-->
<div class=\"data table-responsive text-nowrap\">
  <table id=\"\" cellspacing=\"0\" class=\"table tickets-table table-hover\">
    <thead>
      <tr>
        <th scope=\"col\">#ID</th>
        <th scope=\"col\">Project Name</th>
        <th scope=\"col\">Placed</th>
        <th scope=\"col\">Placed By</th>
        <th scope=\"col\">Direct Link</th>
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
        <td>William Villalobos</td>
        <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
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
        <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
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
        <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
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
        <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
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
        <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
      </tr>
    </tbody>
  </table>
</div>

{# 
<div class=\"float-right\">
  <a class=\"btn red-button\">Export as .CSV</a>
</div> #}

<!--/ Main content Data Display-->
{% endblock %}", "order-history.twig", "/opt/lampp/htdocs/thefutures/resources/views/order-history.twig");
    }
}
