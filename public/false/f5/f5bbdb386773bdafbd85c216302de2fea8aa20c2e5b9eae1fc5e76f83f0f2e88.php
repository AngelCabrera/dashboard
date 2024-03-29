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
        $this->parent = $this->loadTemplate("layout2.twig", "tickets.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_headlinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<link rel=\"stylesheet\"
    href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/css/bootstrap-select.min.css\">
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<!-- Main content Header-->
<div class=\"row\">
    <div class=\"col\">
        <div class=\"index header\">
            <h1 class=\"\">Project Request Form</h1>
        </div>
        <div>
            <div class=\"card project-request\">
                <div class=\"card-header\">
                    <ul class=\"nav nav-tabs card-header-tabs\">
                        <li class=\"nav-item\">
                            <a id=\"graphic\" class=\"nav-link active\" href=\"#\">Graphic Design</a>
                        </li>
                        <li class=\"nav-item\">
                            <a id=\"video\" class=\"nav-link\" href=\"#\">Video Editing</a>
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
                        <h5 class=\"mb-0 font-weight-bold card-title\">1. Tell us about your design</h5>
                        <small class=\"mt-0 text-muted\">Be as detailed as possible.</small>
                    </div>
                    <form action=\"\" class=\"mt-2\">
                        <div class=\"form-group\">
                            <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\"Title of request\"
                                required>
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
                        <hr>
                        <div>
                            <p class=\"mb-0\">Select a design size *</p>
                            <select class=\"selectpicker\" multiple required>
                                <option value=\"1\">One</option>
                                <option value=\"2\">Two</option>
                                <option value=\"3\">Three</option>
                                <option value=\"3\">Three</option>
                            </select>
                            <div class=\"d-flex justify-content-between align-items-center my-2\">
                                <p class=\"my-0 w-50\">* This design is for: </p>
                                <select class=\"w-50 custom-select custom-select-sm\">
                                    <option selected>Open</option>
                                    <option value=\"1\">One</option>
                                    <option value=\"2\">Two</option>
                                    <option value=\"3\">Three</option>
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control form-control-sm rounded-0\" id=\"exampleFormControlTextarea2\"
                                    rows=\"\" placeholder=\"Type of audience you are trying to reach. *\"></input>
                            </div>
                            <div class=\"form-group\">
                                <textarea class=\"form-control form-control-sm rounded-0\"
                                    id=\"exampleFormControlTextarea2\" rows=\"3\"
                                    placeholder=\"Share any links you would like us to see for inspiration. Just paste them in this box.\"></textarea>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h5 class=\"mb-0 font-weight-bold card-title\">2. Upload Assets</h5>
                            <small class=\"mt-0 text-muted\">Upload anything you may want in your design (photos, fonts,
                                logos, word docs, images, etc).</small>

                            <div class=\" my-2\">
                                <div class=\"custom-file\">
                                    <input type=\"file\" multiple class=\"custom-file-input\" id=\"inputGroupFile01\"
                                        aria-describedby=\"inputGroupFileAddon01\">
                                    <label class=\"custom-file-label\" for=\"inputGroupFile01\">Choose file</label>
                                </div>
                            </div>
                            <div>
                                <small class=\"\">Please make sure that your file upload does not exceed 10MB in
                                    Total</small>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h5 class=\"mb-0 font-weight-bold card-title\">3. Files Needed</h5>
                            <small class=\"mt-0 text-muted\">Pick the types of files you want to receive.</small>
                            <div>
                                <!-- Default inline 1-->
                                <div class=\"custom-control custom-checkbox custom-control-inline\">
                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultInline1\">
                                    <label class=\"custom-control-label\" for=\"defaultInline1\">PNG</label>
                                </div>

                                <!-- Default inline 2-->
                                <div class=\"custom-control custom-checkbox custom-control-inline\">
                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultInline2\">
                                    <label class=\"custom-control-label\" for=\"defaultInline2\">JPG</label>
                                </div>

                                <!-- Default inline 3-->
                                <div class=\"custom-control custom-checkbox custom-control-inline\">
                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultInline3\">
                                    <label class=\"custom-control-label\" for=\"defaultInline3\">PDF</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class=\"custom-control custom-checkbox\">
                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultUnchecked\">
                                <label class=\"custom-control-label\" for=\"defaultUnchecked\">I confirm I have providad all
                                    final copy and/or content for this request. I have read and accept the <a
                                        href=\"#\">Terms of Service</a></label>
                            </div>
                        </div>
                        <hr>
                        <button class=\"mx-0 float-right btn btn-futures\">Send Request</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 154
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js\"></script>
<script>
    \$graphicDesing = document.getElementById('graphic');
    \$videoEditing = document.getElementById('video');

    addEvent(\$graphicDesing, \$videoEditing);
    addEvent(\$videoEditing, \$graphicDesing);

    function addEvent(element1, element2) {
        element1.addEventListener('click', () => {
            if (!element1.classList.contains('active')) {
                element1.classList.add('active');
                element2.classList.remove('active');
            }
        });
    }
</script>
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
        return array (  213 => 155,  209 => 154,  62 => 7,  58 => 6,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout2.twig' %}
{% block headlinks %}
<link rel=\"stylesheet\"
    href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/css/bootstrap-select.min.css\">
{% endblock %}
{% block content %}
<!-- Main content Header-->
<div class=\"row\">
    <div class=\"col\">
        <div class=\"index header\">
            <h1 class=\"\">Project Request Form</h1>
        </div>
        <div>
            <div class=\"card project-request\">
                <div class=\"card-header\">
                    <ul class=\"nav nav-tabs card-header-tabs\">
                        <li class=\"nav-item\">
                            <a id=\"graphic\" class=\"nav-link active\" href=\"#\">Graphic Design</a>
                        </li>
                        <li class=\"nav-item\">
                            <a id=\"video\" class=\"nav-link\" href=\"#\">Video Editing</a>
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
                        <h5 class=\"mb-0 font-weight-bold card-title\">1. Tell us about your design</h5>
                        <small class=\"mt-0 text-muted\">Be as detailed as possible.</small>
                    </div>
                    <form action=\"\" class=\"mt-2\">
                        <div class=\"form-group\">
                            <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\"Title of request\"
                                required>
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
                        <hr>
                        <div>
                            <p class=\"mb-0\">Select a design size *</p>
                            <select class=\"selectpicker\" multiple required>
                                <option value=\"1\">One</option>
                                <option value=\"2\">Two</option>
                                <option value=\"3\">Three</option>
                                <option value=\"3\">Three</option>
                            </select>
                            <div class=\"d-flex justify-content-between align-items-center my-2\">
                                <p class=\"my-0 w-50\">* This design is for: </p>
                                <select class=\"w-50 custom-select custom-select-sm\">
                                    <option selected>Open</option>
                                    <option value=\"1\">One</option>
                                    <option value=\"2\">Two</option>
                                    <option value=\"3\">Three</option>
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control form-control-sm rounded-0\" id=\"exampleFormControlTextarea2\"
                                    rows=\"\" placeholder=\"Type of audience you are trying to reach. *\"></input>
                            </div>
                            <div class=\"form-group\">
                                <textarea class=\"form-control form-control-sm rounded-0\"
                                    id=\"exampleFormControlTextarea2\" rows=\"3\"
                                    placeholder=\"Share any links you would like us to see for inspiration. Just paste them in this box.\"></textarea>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h5 class=\"mb-0 font-weight-bold card-title\">2. Upload Assets</h5>
                            <small class=\"mt-0 text-muted\">Upload anything you may want in your design (photos, fonts,
                                logos, word docs, images, etc).</small>

                            <div class=\" my-2\">
                                <div class=\"custom-file\">
                                    <input type=\"file\" multiple class=\"custom-file-input\" id=\"inputGroupFile01\"
                                        aria-describedby=\"inputGroupFileAddon01\">
                                    <label class=\"custom-file-label\" for=\"inputGroupFile01\">Choose file</label>
                                </div>
                            </div>
                            <div>
                                <small class=\"\">Please make sure that your file upload does not exceed 10MB in
                                    Total</small>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h5 class=\"mb-0 font-weight-bold card-title\">3. Files Needed</h5>
                            <small class=\"mt-0 text-muted\">Pick the types of files you want to receive.</small>
                            <div>
                                <!-- Default inline 1-->
                                <div class=\"custom-control custom-checkbox custom-control-inline\">
                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultInline1\">
                                    <label class=\"custom-control-label\" for=\"defaultInline1\">PNG</label>
                                </div>

                                <!-- Default inline 2-->
                                <div class=\"custom-control custom-checkbox custom-control-inline\">
                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultInline2\">
                                    <label class=\"custom-control-label\" for=\"defaultInline2\">JPG</label>
                                </div>

                                <!-- Default inline 3-->
                                <div class=\"custom-control custom-checkbox custom-control-inline\">
                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultInline3\">
                                    <label class=\"custom-control-label\" for=\"defaultInline3\">PDF</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class=\"custom-control custom-checkbox\">
                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultUnchecked\">
                                <label class=\"custom-control-label\" for=\"defaultUnchecked\">I confirm I have providad all
                                    final copy and/or content for this request. I have read and accept the <a
                                        href=\"#\">Terms of Service</a></label>
                            </div>
                        </div>
                        <hr>
                        <button class=\"mx-0 float-right btn btn-futures\">Send Request</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}



{% block scripts %}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js\"></script>
<script>
    \$graphicDesing = document.getElementById('graphic');
    \$videoEditing = document.getElementById('video');

    addEvent(\$graphicDesing, \$videoEditing);
    addEvent(\$videoEditing, \$graphicDesing);

    function addEvent(element1, element2) {
        element1.addEventListener('click', () => {
            if (!element1.classList.contains('active')) {
                element1.classList.add('active');
                element2.classList.remove('active');
            }
        });
    }
</script>
{% endblock %}", "tickets.twig", "/opt/lampp/htdocs/thefutures/resources/views/tickets.twig");
    }
}
