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
<div class=\"header\">
  <h1 class=\"main-title\">Order History</h1>
  <button class=\"btn btn-futures dropdown-toggle mr-4\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
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
        <th scope=\"col\">Order #</th>
        <th scope=\"col\">Placed</th>
        <th scope=\"col\">Placed by</th>
        <th scope=\"col\">Status</th>
        <th scope=\"col\">Description</th>
        <th scope=\"col\">Size</th>
        <th scope=\"col\">Cost</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope=\"row\">
          <a href=\"/thefutures/dashboard/TC1031972989\">
            TC1031972989
          </a>
        </th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope=\"row\">
          <a href=\"/thefutures/dashboard/TC1031972989\">
            TC0376402980
          </a>
        </th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope=\"row\">
          <a href=\"/thefutures/dashboard/TC1031972989\">
            TC1031972989
          </a>
        </th>
        <td>Larry the Bird</td>
        <td>Larry</td>
        <td>@twitter</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope=\"row\">
          <a href=\"/thefutures/dashboard/TC1031972989\">
            TC1031972989
          </a>
        </th>
        <td>Larry the Bird</td>
        <td>Larry</td>
        <td>@twitter</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope=\"row\">
          <a href=\"/thefutures/dashboard/TC1031972989\">
            TC1031972989
          </a>
        </th>
        <td>Larry the Bird</td>
        <td>Larry</td>
        <td>@twitter</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  </table>
</div>

<div class=\"float-right\">
  <a class=\"btn red-button\">Export as .CSV</a>
</div>

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
        return array (  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout2.twig' %}
{% block content %}
<!-- Main content Header-->
<div class=\"header\">
  <h1 class=\"main-title\">Order History</h1>
  <button class=\"btn btn-futures dropdown-toggle mr-4\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
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
        <th scope=\"col\">Order #</th>
        <th scope=\"col\">Placed</th>
        <th scope=\"col\">Placed by</th>
        <th scope=\"col\">Status</th>
        <th scope=\"col\">Description</th>
        <th scope=\"col\">Size</th>
        <th scope=\"col\">Cost</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope=\"row\">
          <a href=\"/thefutures/dashboard/TC1031972989\">
            TC1031972989
          </a>
        </th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope=\"row\">
          <a href=\"/thefutures/dashboard/TC1031972989\">
            TC0376402980
          </a>
        </th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope=\"row\">
          <a href=\"/thefutures/dashboard/TC1031972989\">
            TC1031972989
          </a>
        </th>
        <td>Larry the Bird</td>
        <td>Larry</td>
        <td>@twitter</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope=\"row\">
          <a href=\"/thefutures/dashboard/TC1031972989\">
            TC1031972989
          </a>
        </th>
        <td>Larry the Bird</td>
        <td>Larry</td>
        <td>@twitter</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope=\"row\">
          <a href=\"/thefutures/dashboard/TC1031972989\">
            TC1031972989
          </a>
        </th>
        <td>Larry the Bird</td>
        <td>Larry</td>
        <td>@twitter</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  </table>
</div>

<div class=\"float-right\">
  <a class=\"btn red-button\">Export as .CSV</a>
</div>

<!--/ Main content Data Display-->
{% endblock %}", "order-history.twig", "/opt/lampp/htdocs/thefutures/resources/views/order-history.twig");
    }
}
