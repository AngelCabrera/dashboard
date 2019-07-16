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

/* manage-team.twig */
class __TwigTemplate_bacfa6b66c04a6afcd5ba6d174c68fb8cda78879a8663148c0ea17f39593142b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout2.twig", "manage-team.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<!-- Main content Header-->
<div class=\"header\">
  <h1>Manage Team</h1>
</div>
<!--/ Main content Header-->
<!-- Main content Data Display-->
<div>
  <div class=\"row\">
    <div class=\"col fast-cards\">
      <i class=\"fas fa-user-friends cards-icons yellow-text\"></i>
      <div>
        <p class=\"mt-2 font-weight-bold\">Divide and conquer</p>
        <p class=\"mt-2\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis accusamus nemo
          atque</p>
      </div>
    </div>
    <div class=\"col fast-cards\">
      <i class=\"fas fa-user-friends cards-icons blue-text\"></i>
      <div>
        <p class=\"mt-2 font-weight-bold\">Divide and conquer</p>
        <p class=\"mt-2\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis accusamus nemo
          atque
        </p>
      </div>
    </div>
    <div class=\"col fast-cards\">
      <i class=\"fas fa-user-friends cards-icons green-text\"></i>
      <div>
        <p class=\"mt-2 font-weight-bold\">Divide and conquer</p>
        <p class=\"mt-2\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis accusamus nemo
          atque</p>
      </div>
    </div>
  </div>
  <div class=\"my-4\">
    <a class=\"f6\" href=\"\">Learn more about shared account permissions</a>
  </div>
  <hr>
  <div class=\"my-4\">
    <h2>Invite a User</h2>
    <hr>
    <form action=\"\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"form-group\">
            <label for=\"exampleInputEmail1\" class=\"f6\">FIRST NAME*</label>
            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\"
              placeholder=\"Enter first name\">
          </div>
        </div>
        <div class=\"col\">
          <div class=\"manage form-group\">
            <label for=\"exampleInputEmail1\" class=\"f6\">EMAIL*</label>
            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\"
              placeholder=\"Enter email\">
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col\">
          <a href=\"\">+ Invite another user</a>
        </div>
      </div>
      <button class=\"btn red-button filled\">Send Invites</a>
    </form>
  </div>

</div>
<!--/ Main content Data Display-->
";
    }

    public function getTemplateName()
    {
        return "manage-team.twig";
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
  <h1>Manage Team</h1>
</div>
<!--/ Main content Header-->
<!-- Main content Data Display-->
<div>
  <div class=\"row\">
    <div class=\"col fast-cards\">
      <i class=\"fas fa-user-friends cards-icons yellow-text\"></i>
      <div>
        <p class=\"mt-2 font-weight-bold\">Divide and conquer</p>
        <p class=\"mt-2\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis accusamus nemo
          atque</p>
      </div>
    </div>
    <div class=\"col fast-cards\">
      <i class=\"fas fa-user-friends cards-icons blue-text\"></i>
      <div>
        <p class=\"mt-2 font-weight-bold\">Divide and conquer</p>
        <p class=\"mt-2\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis accusamus nemo
          atque
        </p>
      </div>
    </div>
    <div class=\"col fast-cards\">
      <i class=\"fas fa-user-friends cards-icons green-text\"></i>
      <div>
        <p class=\"mt-2 font-weight-bold\">Divide and conquer</p>
        <p class=\"mt-2\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis accusamus nemo
          atque</p>
      </div>
    </div>
  </div>
  <div class=\"my-4\">
    <a class=\"f6\" href=\"\">Learn more about shared account permissions</a>
  </div>
  <hr>
  <div class=\"my-4\">
    <h2>Invite a User</h2>
    <hr>
    <form action=\"\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"form-group\">
            <label for=\"exampleInputEmail1\" class=\"f6\">FIRST NAME*</label>
            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\"
              placeholder=\"Enter first name\">
          </div>
        </div>
        <div class=\"col\">
          <div class=\"manage form-group\">
            <label for=\"exampleInputEmail1\" class=\"f6\">EMAIL*</label>
            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\"
              placeholder=\"Enter email\">
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col\">
          <a href=\"\">+ Invite another user</a>
        </div>
      </div>
      <button class=\"btn red-button filled\">Send Invites</a>
    </form>
  </div>

</div>
<!--/ Main content Data Display-->
{% endblock %}", "manage-team.twig", "/opt/lampp/htdocs/thefutures/resources/views/manage-team.twig");
    }
}
