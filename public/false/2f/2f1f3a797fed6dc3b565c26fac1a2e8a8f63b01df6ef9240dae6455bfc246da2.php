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

/* settings.twig */
class __TwigTemplate_1513a85e7d1e90c288257ca3e717aa3cfbd3c0b2d7ee0fc0cf5f4ee688fee3f0 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout2.twig", "settings.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<!-- Main content Header-->
<div class=\"header\">
  <h1 class=\"main-title\">William Villalobos</h1>
</div>
<!--/ Main content Header-->
<!-- Main content Data Display-->
<div>
  <div class=\"alert bg-primary text-white notice-bar\" role=\"alert\" style=\"margin-top: 30px;\">
    Default values are subject to change according to your billing account owner
  </div>
  <div class=\"settings\">
    <h2>Account Settings</h2>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">Email</div>
        <div class=\"col\">williamvillalobos@gmail.com</div>
        <div class=\"col text-right\"><a class=\"pr-4\" href=\"#\">CHANGE</a></div>
      </div>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">Password</div>
        <div class=\"col\">******</div>
        <div class=\"col text-right\"><a class=\"pr-4\" href=\"#\">CHANGE</a></div>
      </div>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">API Key</div>
        <div class=\"col\">******</div>
        <div class=\"col text-right\"><a class=\"pr-4\" href=\"#\">SHOW</a></div>
      </div>
    </div>
  </div>
  <div class=\"settings\">
    <div>
      <h2>Personal Settings
        <span class=\"float-right\">
          <a class=\"pr-4 settings-buttons\" href=\"#\">Edit</a>
        </span>
      </h2>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">First Name</div>
        <div class=\"col\">William</div>
        <div class=\"col text-right\"><a class=\"pr-4\" href=\"#\"></a></div>
      </div>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">Last Name</div>
        <div class=\"col\">Villalobos</div>
        <div class=\"col text-right\"><a class=\"settings-buttons\" href=\"#\"></a></div>
      </div>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">Phone</div>
      </div>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">Street</div>
      </div>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">City</div>
      </div>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">State</div>
      </div>
    </div>
  </div>
  <div class=\"settings\">
    <h2>Membership Settings</h2>
    <div class=\"row\">
      <div class=\"col\">
        <a class=\"btn gray-button\">PAUSE MEMBERSHIP</a>
        <p>Lorem ipsum dolor sit amet consectetur adipis icing elit. Repudiandae odio porr</p>
      </div>
      <div class=\"col-1 d-flex justify-content-center\">
        <div style=\"min-height: 100%; background: gray; width:1px\">
        </div>
      </div>
      <div class=\"col\">
        <a class=\"btn gray-button\">CANCEL MEMBERSHIP</a>
        <p>Lorem ipsum dolor sit amet consectetur adipis icing elit. Repudiandae odio porr</p>
      </div>
    </div>
  </div>
  <div class=\"settings\">
    <div>
      <h2>Order Preferences</h2>
    </div>
    <div class=\"field-set\">
      <h5>
        Global Settings
        <span class=\"float-right\">
          <a href=\"#\" class=\"settings-buttons\">
            EDIT
          </a>
        </span>
      </h5>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">First Name</div>
        <div class=\"col\">William</div>
        <div class=\"col text-right\"><a class=\"pr-4\" href=\"#\"></a></div>
      </div>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">Last Name</div>
        <div class=\"col\">Villalobos</div>
        <div class=\"col text-right\"><a class=\"pr-4\" href=\"#\"></a></div>
      </div>
    </div>
  </div>
</div>
<!--/ Main content Data Display-->
";
    }

    public function getTemplateName()
    {
        return "settings.twig";
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
  <h1 class=\"main-title\">William Villalobos</h1>
</div>
<!--/ Main content Header-->
<!-- Main content Data Display-->
<div>
  <div class=\"alert bg-primary text-white notice-bar\" role=\"alert\" style=\"margin-top: 30px;\">
    Default values are subject to change according to your billing account owner
  </div>
  <div class=\"settings\">
    <h2>Account Settings</h2>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">Email</div>
        <div class=\"col\">williamvillalobos@gmail.com</div>
        <div class=\"col text-right\"><a class=\"pr-4\" href=\"#\">CHANGE</a></div>
      </div>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">Password</div>
        <div class=\"col\">******</div>
        <div class=\"col text-right\"><a class=\"pr-4\" href=\"#\">CHANGE</a></div>
      </div>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">API Key</div>
        <div class=\"col\">******</div>
        <div class=\"col text-right\"><a class=\"pr-4\" href=\"#\">SHOW</a></div>
      </div>
    </div>
  </div>
  <div class=\"settings\">
    <div>
      <h2>Personal Settings
        <span class=\"float-right\">
          <a class=\"pr-4 settings-buttons\" href=\"#\">Edit</a>
        </span>
      </h2>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">First Name</div>
        <div class=\"col\">William</div>
        <div class=\"col text-right\"><a class=\"pr-4\" href=\"#\"></a></div>
      </div>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">Last Name</div>
        <div class=\"col\">Villalobos</div>
        <div class=\"col text-right\"><a class=\"settings-buttons\" href=\"#\"></a></div>
      </div>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">Phone</div>
      </div>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">Street</div>
      </div>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">City</div>
      </div>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">State</div>
      </div>
    </div>
  </div>
  <div class=\"settings\">
    <h2>Membership Settings</h2>
    <div class=\"row\">
      <div class=\"col\">
        <a class=\"btn gray-button\">PAUSE MEMBERSHIP</a>
        <p>Lorem ipsum dolor sit amet consectetur adipis icing elit. Repudiandae odio porr</p>
      </div>
      <div class=\"col-1 d-flex justify-content-center\">
        <div style=\"min-height: 100%; background: gray; width:1px\">
        </div>
      </div>
      <div class=\"col\">
        <a class=\"btn gray-button\">CANCEL MEMBERSHIP</a>
        <p>Lorem ipsum dolor sit amet consectetur adipis icing elit. Repudiandae odio porr</p>
      </div>
    </div>
  </div>
  <div class=\"settings\">
    <div>
      <h2>Order Preferences</h2>
    </div>
    <div class=\"field-set\">
      <h5>
        Global Settings
        <span class=\"float-right\">
          <a href=\"#\" class=\"settings-buttons\">
            EDIT
          </a>
        </span>
      </h5>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">First Name</div>
        <div class=\"col\">William</div>
        <div class=\"col text-right\"><a class=\"pr-4\" href=\"#\"></a></div>
      </div>
    </div>
    <div class=\"field-set\">
      <div class=\"row\">
        <div class=\"col font-weight-bold\">Last Name</div>
        <div class=\"col\">Villalobos</div>
        <div class=\"col text-right\"><a class=\"pr-4\" href=\"#\"></a></div>
      </div>
    </div>
  </div>
</div>
<!--/ Main content Data Display-->
{% endblock %}", "settings.twig", "/opt/lampp/htdocs/thefutures/resources/views/settings.twig");
    }
}
