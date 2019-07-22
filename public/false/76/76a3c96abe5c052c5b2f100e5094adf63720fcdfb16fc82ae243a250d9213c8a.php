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
  <div class=\"my-4\">
    <h2>Invite a User</h2>
    <form action=\"\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"md-form\">
            <input type=\"text\" id=\"form1\" class=\"form-control\" required>
            <label for=\"form1\">First Name</label>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"md-form\">
            <input type=\"text\" id=\"form1\" class=\"form-control\" required>
            <label for=\"form1\">Email</label>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col\">
          <a class=\"futures-color-purple btn-transparent\">+ Invite another user</a>
        </div>
      </div>
      <button class=\"mt-4 ml-0 btn btn-futures\">Send Invites</a>
    </form>
  </div>
  <hr>
  <div class=\"mt-5\">
    <h2 class=\"mb-3\">Invited</h2>
    <div class=\"data table-responsive text-nowrap\">
      <table id=\"\" cellspacing=\"0\" class=\"table history-table table-hover\">
        <thead>
          <tr>
            <th scope=\"col\">Name</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Invited On</th>
            <th scope=\"col\">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope=\"row\">
              Oliver Sinclair
            </th>
            <td>oliver@thefutures.io</td>
            <td>22/07/2019</td>
            <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class=\"mt-5\">
    <h2 class=\"mb-3\">Active</h2>
    <div class=\"data table-responsive text-nowrap\">
      <table id=\"\" cellspacing=\"0\" class=\"table history-table table-hover\">
        <thead>
          <tr>
            <th scope=\"col\">Name</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Role</th>
            <th scope=\"col\">Joined On</th>
            <th scope=\"col\">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope=\"row\">
              William
            </th>
            <td>william@thefutures.io</td>
            <td>Manager</td>
            <td>21/06/2019</td>
            <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
          </tr>
          <tr>
            <th scope=\"row\">
              Angel
            </th>
            <td>angel@thefutures.io</td>
            <td>User</td>
            <td>22/06/2019</td>
            <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
          </tr>
          <tr>
            <th scope=\"row\">
              William
            </th>
            <td>william@thefutures.io</td>
            <td>Manager</td>
            <td>21/06/2019</td>
            <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
          </tr>
          <tr>
            <th scope=\"row\">
              Angel
            </th>
            <td>angel@thefutures.io</td>
            <td>User</td>
            <td>22/06/2019</td>
            <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
          </tr>
        </tbody>
      </table>
    </div>
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
  <div class=\"my-4\">
    <h2>Invite a User</h2>
    <form action=\"\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"md-form\">
            <input type=\"text\" id=\"form1\" class=\"form-control\" required>
            <label for=\"form1\">First Name</label>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"md-form\">
            <input type=\"text\" id=\"form1\" class=\"form-control\" required>
            <label for=\"form1\">Email</label>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col\">
          <a class=\"futures-color-purple btn-transparent\">+ Invite another user</a>
        </div>
      </div>
      <button class=\"mt-4 ml-0 btn btn-futures\">Send Invites</a>
    </form>
  </div>
  <hr>
  <div class=\"mt-5\">
    <h2 class=\"mb-3\">Invited</h2>
    <div class=\"data table-responsive text-nowrap\">
      <table id=\"\" cellspacing=\"0\" class=\"table history-table table-hover\">
        <thead>
          <tr>
            <th scope=\"col\">Name</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Invited On</th>
            <th scope=\"col\">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope=\"row\">
              Oliver Sinclair
            </th>
            <td>oliver@thefutures.io</td>
            <td>22/07/2019</td>
            <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class=\"mt-5\">
    <h2 class=\"mb-3\">Active</h2>
    <div class=\"data table-responsive text-nowrap\">
      <table id=\"\" cellspacing=\"0\" class=\"table history-table table-hover\">
        <thead>
          <tr>
            <th scope=\"col\">Name</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Role</th>
            <th scope=\"col\">Joined On</th>
            <th scope=\"col\">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope=\"row\">
              William
            </th>
            <td>william@thefutures.io</td>
            <td>Manager</td>
            <td>21/06/2019</td>
            <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
          </tr>
          <tr>
            <th scope=\"row\">
              Angel
            </th>
            <td>angel@thefutures.io</td>
            <td>User</td>
            <td>22/06/2019</td>
            <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
          </tr>
          <tr>
            <th scope=\"row\">
              William
            </th>
            <td>william@thefutures.io</td>
            <td>Manager</td>
            <td>21/06/2019</td>
            <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
          </tr>
          <tr>
            <th scope=\"row\">
              Angel
            </th>
            <td>angel@thefutures.io</td>
            <td>User</td>
            <td>22/06/2019</td>
            <td><a href=\"\"><i class=\"fas fa-link\"></i></a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!--/ Main content Data Display-->
{% endblock %}", "manage-team.twig", "/opt/lampp/htdocs/thefutures/resources/views/manage-team.twig");
    }
}
