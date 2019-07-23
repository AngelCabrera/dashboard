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

/* support.twig */
class __TwigTemplate_dd0165d4ae766170dd96b75bd2ff6ca4f87bef928c25c7bdb7f2f8cc0ed2cfcd extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout2.twig", "support.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<div class=\"card\">
    <div class=\"card-body\">
        <div class=\"little-title mb-4\">I HAVE A QUESTION ABOUT:</div>
        <form action=\"\">
            <div class=\"row\">
                <div class=\"col\">
                    <label for=\"sales-button\" class=\"flex flex-row align-items-center\">
                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" class=\"custom-control-input\" id=\"defaultUnchecked\"
                                name=\"defaultExampleRadios\">
                            <label class=\"custom-control-label\" for=\"defaultUnchecked\">Sales</label>
                            <i class=\"ml-5 fas fa-comment\"></i>
                        </div>
                    </label>
                </div>
                <div class=\"col\">
                    <label for=\"sales-button\" class=\"flex flex-row align-items-center\">
                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" class=\"custom-control-input\" id=\"defaultUnchecked\"
                                name=\"defaultExampleRadios\">
                            <label class=\"custom-control-label\" for=\"defaultUnchecked\">Sales</label>
                            <i class=\"ml-5 fas fa-comment\"></i>
                        </div>
                    </label>
                </div>
                <div class=\"col\">
                    <label for=\"sales-button\" class=\"flex flex-row align-items-center\">
                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" class=\"custom-control-input\" id=\"defaultUnchecked\"
                                name=\"defaultExampleRadios\">
                            <label class=\"custom-control-label\" for=\"defaultUnchecked\">Sales</label>
                            <i class=\"ml-5 fas fa-comment\"></i>
                        </div>
                    </label>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <label for=\"sales-button\" class=\"flex flex-row align-items-center\">
                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" class=\"custom-control-input\" id=\"defaultUnchecked\"
                                name=\"defaultExampleRadios\">
                            <label class=\"custom-control-label\" for=\"defaultUnchecked\">Sales</label>
                            <i class=\"ml-5 fas fa-comment\"></i>
                        </div>
                    </label>
                </div>
                <div class=\"col\">
                    <label for=\"sales-button\" class=\"flex flex-row align-items-center\">
                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" class=\"custom-control-input\" id=\"defaultUnchecked\"
                                name=\"defaultExampleRadios\">
                            <label class=\"custom-control-label\" for=\"defaultUnchecked\">Sales</label>
                            <i class=\"ml-5 fas fa-comment\"></i>
                        </div>
                    </label>
                </div>
                <div class=\"col\">
                    <label for=\"sales-button\" class=\"flex flex-row align-items-center\">
                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" class=\"custom-control-input\" id=\"defaultUnchecked\"
                                name=\"defaultExampleRadios\">
                            <label class=\"custom-control-label\" for=\"defaultUnchecked\">Sales</label>
                            <i class=\"ml-5 fas fa-comment\"></i>
                        </div>
                    </label>
                </div>
            </div>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "support.twig";
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
        return new Source("{% extends \"layout2.twig\" %}
{% block content %}
<div class=\"card\">
    <div class=\"card-body\">
        <div class=\"little-title mb-4\">I HAVE A QUESTION ABOUT:</div>
        <form action=\"\">
            <div class=\"row\">
                <div class=\"col\">
                    <label for=\"sales-button\" class=\"flex flex-row align-items-center\">
                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" class=\"custom-control-input\" id=\"defaultUnchecked\"
                                name=\"defaultExampleRadios\">
                            <label class=\"custom-control-label\" for=\"defaultUnchecked\">Sales</label>
                            <i class=\"ml-5 fas fa-comment\"></i>
                        </div>
                    </label>
                </div>
                <div class=\"col\">
                    <label for=\"sales-button\" class=\"flex flex-row align-items-center\">
                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" class=\"custom-control-input\" id=\"defaultUnchecked\"
                                name=\"defaultExampleRadios\">
                            <label class=\"custom-control-label\" for=\"defaultUnchecked\">Sales</label>
                            <i class=\"ml-5 fas fa-comment\"></i>
                        </div>
                    </label>
                </div>
                <div class=\"col\">
                    <label for=\"sales-button\" class=\"flex flex-row align-items-center\">
                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" class=\"custom-control-input\" id=\"defaultUnchecked\"
                                name=\"defaultExampleRadios\">
                            <label class=\"custom-control-label\" for=\"defaultUnchecked\">Sales</label>
                            <i class=\"ml-5 fas fa-comment\"></i>
                        </div>
                    </label>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <label for=\"sales-button\" class=\"flex flex-row align-items-center\">
                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" class=\"custom-control-input\" id=\"defaultUnchecked\"
                                name=\"defaultExampleRadios\">
                            <label class=\"custom-control-label\" for=\"defaultUnchecked\">Sales</label>
                            <i class=\"ml-5 fas fa-comment\"></i>
                        </div>
                    </label>
                </div>
                <div class=\"col\">
                    <label for=\"sales-button\" class=\"flex flex-row align-items-center\">
                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" class=\"custom-control-input\" id=\"defaultUnchecked\"
                                name=\"defaultExampleRadios\">
                            <label class=\"custom-control-label\" for=\"defaultUnchecked\">Sales</label>
                            <i class=\"ml-5 fas fa-comment\"></i>
                        </div>
                    </label>
                </div>
                <div class=\"col\">
                    <label for=\"sales-button\" class=\"flex flex-row align-items-center\">
                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" class=\"custom-control-input\" id=\"defaultUnchecked\"
                                name=\"defaultExampleRadios\">
                            <label class=\"custom-control-label\" for=\"defaultUnchecked\">Sales</label>
                            <i class=\"ml-5 fas fa-comment\"></i>
                        </div>
                    </label>
                </div>
            </div>
        </form>
    </div>
</div>
{% endblock %}", "support.twig", "/opt/lampp/htdocs/thefutures/resources/views/support.twig");
    }
}
