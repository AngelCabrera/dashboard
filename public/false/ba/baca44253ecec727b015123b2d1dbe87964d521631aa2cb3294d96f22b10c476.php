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

/* manage-productivity.twig */
class __TwigTemplate_ea16808fc513e0ee3827fae0c40098e79bf86d3933aa68bd6af9373a8a636f75 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout2.twig", "manage-productivity.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_headlinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<h1>Manage Productivity</h1>
<div class=\"settings\">
    <div class=\"field-set\">
        <div class=\"row\">
            <div class=\"col-2 little-title\">1 APU</div>
            <div class=\"col-3\">Active Project Unit (APU)</div>
            <div class=\"col\">
                <ul style=\"list-style-type: none\">
                    <li>Adding APUs is a simple and effective way to add productivity and reduce costs to your Graphic
                        Design
                        production quota.</li>
                    <li>An APU is the measurement on how many projects you can have started at once.</li>
                    <li>Next day delivery before midnight on a business day submission ratio applies to all projects,
                        unless
                        stated otherwise by your account executive.</li>
                    <li>Every new APU you add to your membership benefits from a cost cut of 20% than that of buying a
                        new
                        subscription.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"mt-4\">
        <div class=\"\">
            <a href=\"\" class=\"btn-transparent\">+ Add Another APU</a>
        </div>
        <button class=\"mt-4 ml-0 btn btn-futures\">SUBMIT</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "manage-productivity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  56 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout2.twig' %}
{% block headlinks %}
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
{% endblock %}
{% block content %}
<h1>Manage Productivity</h1>
<div class=\"settings\">
    <div class=\"field-set\">
        <div class=\"row\">
            <div class=\"col-2 little-title\">1 APU</div>
            <div class=\"col-3\">Active Project Unit (APU)</div>
            <div class=\"col\">
                <ul style=\"list-style-type: none\">
                    <li>Adding APUs is a simple and effective way to add productivity and reduce costs to your Graphic
                        Design
                        production quota.</li>
                    <li>An APU is the measurement on how many projects you can have started at once.</li>
                    <li>Next day delivery before midnight on a business day submission ratio applies to all projects,
                        unless
                        stated otherwise by your account executive.</li>
                    <li>Every new APU you add to your membership benefits from a cost cut of 20% than that of buying a
                        new
                        subscription.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"mt-4\">
        <div class=\"\">
            <a href=\"\" class=\"btn-transparent\">+ Add Another APU</a>
        </div>
        <button class=\"mt-4 ml-0 btn btn-futures\">SUBMIT</a>
    </div>
</div>
{% endblock %}", "manage-productivity.twig", "/opt/lampp/htdocs/thefutures/resources/views/manage-productivity.twig");
    }
}
