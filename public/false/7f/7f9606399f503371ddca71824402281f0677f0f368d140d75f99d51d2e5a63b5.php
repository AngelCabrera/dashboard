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

/* request.twig */
class __TwigTemplate_88a55a35903d5f54c14cff99e9a4abff48abc6706ee10a8f30abb7cb3d85b383 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout2.twig", "request.twig", 1);
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
<div class=\"index header\">
    <h1 class=\"\">Project Request Form</h1>
</div>
";
        // line 22
        echo "
<div>
    <div class=\"project-request\" class=\"mt-5\">
        <p class=\"mb-1\">Making a request is super simple, only complete the 3 steps below and press submit. Your request
            will be put in a queue and delivered in order of arrival.</p>
        <div class=\"card-header\" style=\"padding-left: 11px;\">
            <ul class=\"nav nav-tabs card-header-tabs\">
                <li class=\"nav-item\">
                    <a id=\"graphic\" class=\"nav-link active m-0\">Graphic Design</a>
                </li>
                <li class=\"nav-item \">
                    <a id=\"video\" class=\"nav-link m-0\">Video Editing (By invite Only)</a>
                </li>
            </ul>
        </div>
        <div class=\"mt-4\">
            <div class=\"row\">
                <div class=\"col-7 pr-4\">
                    <div>
                        <h5 class=\"mb-0 font-weight-bold card-title\">1. Tell us about your design</h5>
                        <small class=\"mt-0 text-muted\">Be as detailed as possible.</small>
                    </div>
                    <form action=\"\" class=\"mt-2\">
                        <!-- Material input -->
                        <div class=\"md-form\">
                            <input type=\"text\" id=\"form1\" class=\"form-control\" required>
                            <label for=\"form1\">Title of request</label>
                        </div>
                        <div class=\"md-form mb-4 pink-textarea active-pink-textarea\">
                            <textarea id=\"form2\" class=\"md-textarea form-control\" rows=\"2\"></textarea>
                            <label for=\" form2\">Briefly Description of what you want to see in your project</label>
                        </div>
                        <div>
                            <small class=\"m-0 text-muted\">
                                We love lists, please list the specific things you wish to see on your piece.
                                Our creatives are always more efficient when you are able to itemise your requests.
                            </small>
                            <div class=\"md-form\">
                                <input type=\"text\" id=\"form1\" class=\"form-control\" required>
                                <label for=\"form1\">1. </label>
                            </div>
                            <div class=\"text-right font-weight-bold\" id=\"request-addmore-button\">
                                + ADD MORE
                            </div>
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
                            <div class=\"md-form\">
                                <input type=\"text\" id=\"form5\" class=\"form-control\" required>
                                <label for=\"form5\">Type of audience you are trying to reach.</label>
                            </div>
                            <div class=\"md-form mb-4 pink-textarea active-pink-textarea\">
                                <textarea id=\"form3\" class=\"md-textarea form-control\" rows=\"2\"></textarea>
                                <label for=\"form3\">Share any links you would like us to see for inspiration. Just paste
                                    them in this box.</label>
                            </div>
                        </div>
                    </form>


                </div>
                <div class=\"col\">
                    <div class=\"\">
                        <div class=\"\">
                            <h5 class=\"mb-1 font-weight-bold card-title\">2. Upload Assets</h5>
                            <small class=\"mt-1 text-muted\">Upload anything you may want in your design (photos,
                                fonts,
                                logos, word docs, images, etc).</small>
                        </div>
                        <div class=\"my-3\">
                            <div class=\"card file-upload-card\">
                                <div class=\"card-body p-1\">
                                    <div class=\"file-upload\">
                                        <div class=\"image-upload-wrap\">
                                            <input class=\"file-upload-input\" multiple type='file'
                                                onchange=\"readURL(this);\" accept=\"image/*\" />

                                            <div class=\"drag-text\">
                                                <div class=\"d-block\">
                                                    <button class=\"btn btn-circle btn-xl bg-futures text-white d-inline\"
                                                        type=\"button\"
                                                        onclick=\"\$('.file-upload-input').trigger( 'click' )\">
                                                        <i class=\"fas fa-plus\"></i>
                                                    </button>
                                                    <p class=\"mb-0 d-inline\">Upload your files
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"file-upload-content\">
                                            <div class=\"image-title-wrap\">
                                                <div class=\"d-flex justify-content-between align-items-center file-uploaded\"
                                                    style=\"border-bottom: 1px solid #ced4da;\">
                                                    <p class=\"mb-0 image-title\">
                                                    </p>
                                                    <a><i class=\"fas fa-times\"></i></a>
                                                </div>
                                                <div class=\"d-flex justify-content-between align-items-center file-uploaded\"
                                                    style=\"border-bottom: 1px solid #ced4da;\">
                                                    <p class=\"mb-0 image-title\">
                                                    </p>
                                                    <a><i class=\"fas fa-times\"></i></a>
                                                </div>
                                                <div class=\"d-flex justify-content-between align-items-center file-uploaded\"
                                                    style=\"border-bottom: 1px solid #ced4da;\">
                                                    <p class=\"mb-0 image-title\">
                                                    </p>
                                                    <a><i class=\"fas fa-times\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        ";
        // line 155
        echo "                                    </div>
                                </div>
                            </div>
                            ";
        // line 161
        echo "                        </div>
                        <div>
                            <small class=\"\">Please make sure that your file upload does not exceed 10MB in
                                Total</small>
                        </div>
                    </div>

                    <div class=\"\">
                        <div class=\"mt-4\">
                            <hr>
                            <div class=\"py-4\">
                                <h5 class=\"mb-0 font-weight-bold card-title\">3. Files Needed</h5>
                                <small class=\"mt-0 text-muted\">Pick the types of files you want to receive.</small>
                                <div class=\"my-2\">
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
                        </div>
                    </div>
                    <hr>
                    <div class=\"\">
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultUnchecked\">
                            <label class=\"custom-control-label\" for=\"defaultUnchecked\">I confirm I have providad all
                                final copy and/or content for this request. I have read and accept the
                                <a href=\"#\"> Terms of Service</a>
                            </label>
                        </div>
                        ";
        // line 208
        echo "                    </div>
                </div>
            </div>
        </div>
        <div class=\"card-footer\">
            <div class=\"m-0 text-right\">
                <button class=\"m-0 btn btn-futures-request\">Submit Request</button>
            </div>
        </div>
    </div>

</div>
";
    }

    // line 224
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 225
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

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function (e) {
                \$('.image-upload-wrap').hide();

                \$('.file-upload-image').attr('src', e.target.result);
                \$('.file-upload-content').show();

                \$('.image-title').html(input.files[0].name);
                \$('.image-title').html(input.files[1].name);
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        \$('.file-upload-input').replaceWith(\$('.file-upload-input').clone());
        \$('.file-upload-content').hide();
        \$('.image-upload-wrap').show();
    }
    \$('.image-upload-wrap').bind('dragover', function () {
        \$('.image-upload-wrap').addClass('image-dropping');
    });
    \$('.image-upload-wrap').bind('dragleave', function () {
        \$('.image-upload-wrap').removeClass('image-dropping');
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "request.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 225,  264 => 224,  248 => 208,  202 => 161,  197 => 155,  68 => 22,  62 => 7,  58 => 6,  52 => 3,  48 => 2,  37 => 1,);
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
<div class=\"index header\">
    <h1 class=\"\">Project Request Form</h1>
</div>
{# <div id=\"request-bullet-points\" class=\"mt-2 mb-4\">
    <ul class=\"my-3\">
        <li class=\"text-muted \">

        </li>
        <li class=\"text-muted\">
            Your reques will be put in a queue and delivered in order of
            arrival.
        </li>
    </ul>
</div> #}

<div>
    <div class=\"project-request\" class=\"mt-5\">
        <p class=\"mb-1\">Making a request is super simple, only complete the 3 steps below and press submit. Your request
            will be put in a queue and delivered in order of arrival.</p>
        <div class=\"card-header\" style=\"padding-left: 11px;\">
            <ul class=\"nav nav-tabs card-header-tabs\">
                <li class=\"nav-item\">
                    <a id=\"graphic\" class=\"nav-link active m-0\">Graphic Design</a>
                </li>
                <li class=\"nav-item \">
                    <a id=\"video\" class=\"nav-link m-0\">Video Editing (By invite Only)</a>
                </li>
            </ul>
        </div>
        <div class=\"mt-4\">
            <div class=\"row\">
                <div class=\"col-7 pr-4\">
                    <div>
                        <h5 class=\"mb-0 font-weight-bold card-title\">1. Tell us about your design</h5>
                        <small class=\"mt-0 text-muted\">Be as detailed as possible.</small>
                    </div>
                    <form action=\"\" class=\"mt-2\">
                        <!-- Material input -->
                        <div class=\"md-form\">
                            <input type=\"text\" id=\"form1\" class=\"form-control\" required>
                            <label for=\"form1\">Title of request</label>
                        </div>
                        <div class=\"md-form mb-4 pink-textarea active-pink-textarea\">
                            <textarea id=\"form2\" class=\"md-textarea form-control\" rows=\"2\"></textarea>
                            <label for=\" form2\">Briefly Description of what you want to see in your project</label>
                        </div>
                        <div>
                            <small class=\"m-0 text-muted\">
                                We love lists, please list the specific things you wish to see on your piece.
                                Our creatives are always more efficient when you are able to itemise your requests.
                            </small>
                            <div class=\"md-form\">
                                <input type=\"text\" id=\"form1\" class=\"form-control\" required>
                                <label for=\"form1\">1. </label>
                            </div>
                            <div class=\"text-right font-weight-bold\" id=\"request-addmore-button\">
                                + ADD MORE
                            </div>
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
                            <div class=\"md-form\">
                                <input type=\"text\" id=\"form5\" class=\"form-control\" required>
                                <label for=\"form5\">Type of audience you are trying to reach.</label>
                            </div>
                            <div class=\"md-form mb-4 pink-textarea active-pink-textarea\">
                                <textarea id=\"form3\" class=\"md-textarea form-control\" rows=\"2\"></textarea>
                                <label for=\"form3\">Share any links you would like us to see for inspiration. Just paste
                                    them in this box.</label>
                            </div>
                        </div>
                    </form>


                </div>
                <div class=\"col\">
                    <div class=\"\">
                        <div class=\"\">
                            <h5 class=\"mb-1 font-weight-bold card-title\">2. Upload Assets</h5>
                            <small class=\"mt-1 text-muted\">Upload anything you may want in your design (photos,
                                fonts,
                                logos, word docs, images, etc).</small>
                        </div>
                        <div class=\"my-3\">
                            <div class=\"card file-upload-card\">
                                <div class=\"card-body p-1\">
                                    <div class=\"file-upload\">
                                        <div class=\"image-upload-wrap\">
                                            <input class=\"file-upload-input\" multiple type='file'
                                                onchange=\"readURL(this);\" accept=\"image/*\" />

                                            <div class=\"drag-text\">
                                                <div class=\"d-block\">
                                                    <button class=\"btn btn-circle btn-xl bg-futures text-white d-inline\"
                                                        type=\"button\"
                                                        onclick=\"\$('.file-upload-input').trigger( 'click' )\">
                                                        <i class=\"fas fa-plus\"></i>
                                                    </button>
                                                    <p class=\"mb-0 d-inline\">Upload your files
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"file-upload-content\">
                                            <div class=\"image-title-wrap\">
                                                <div class=\"d-flex justify-content-between align-items-center file-uploaded\"
                                                    style=\"border-bottom: 1px solid #ced4da;\">
                                                    <p class=\"mb-0 image-title\">
                                                    </p>
                                                    <a><i class=\"fas fa-times\"></i></a>
                                                </div>
                                                <div class=\"d-flex justify-content-between align-items-center file-uploaded\"
                                                    style=\"border-bottom: 1px solid #ced4da;\">
                                                    <p class=\"mb-0 image-title\">
                                                    </p>
                                                    <a><i class=\"fas fa-times\"></i></a>
                                                </div>
                                                <div class=\"d-flex justify-content-between align-items-center file-uploaded\"
                                                    style=\"border-bottom: 1px solid #ced4da;\">
                                                    <p class=\"mb-0 image-title\">
                                                    </p>
                                                    <a><i class=\"fas fa-times\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        {# <div class=\"mt-2 text-center\">
                                            {# <button class=\"btn btn-circle btn-xl bg-futures text-white\" type=\"button\"
                                                onclick=\"\$('.file-upload-input').trigger( 'click' )\">
                                                <i class=\"fas fa-plus\"></i>
                                            </button>
                                        </div> #}
                                    </div>
                                </div>
                            </div>
                            {# <div class=\"file-upload-wrapper\">
                                <input type=\"file\" id=\"input-file-now\" class=\"file-upload\" />
                            </div> #}
                        </div>
                        <div>
                            <small class=\"\">Please make sure that your file upload does not exceed 10MB in
                                Total</small>
                        </div>
                    </div>

                    <div class=\"\">
                        <div class=\"mt-4\">
                            <hr>
                            <div class=\"py-4\">
                                <h5 class=\"mb-0 font-weight-bold card-title\">3. Files Needed</h5>
                                <small class=\"mt-0 text-muted\">Pick the types of files you want to receive.</small>
                                <div class=\"my-2\">
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
                        </div>
                    </div>
                    <hr>
                    <div class=\"\">
                        <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultUnchecked\">
                            <label class=\"custom-control-label\" for=\"defaultUnchecked\">I confirm I have providad all
                                final copy and/or content for this request. I have read and accept the
                                <a href=\"#\"> Terms of Service</a>
                            </label>
                        </div>
                        {# <div class=\"mt-4 text-right\">
                            <button class=\"mx-0 btn btn-futures\">Submit Request</button>
                        </div> #}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card-footer\">
            <div class=\"m-0 text-right\">
                <button class=\"m-0 btn btn-futures-request\">Submit Request</button>
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

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function (e) {
                \$('.image-upload-wrap').hide();

                \$('.file-upload-image').attr('src', e.target.result);
                \$('.file-upload-content').show();

                \$('.image-title').html(input.files[0].name);
                \$('.image-title').html(input.files[1].name);
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        \$('.file-upload-input').replaceWith(\$('.file-upload-input').clone());
        \$('.file-upload-content').hide();
        \$('.image-upload-wrap').show();
    }
    \$('.image-upload-wrap').bind('dragover', function () {
        \$('.image-upload-wrap').addClass('image-dropping');
    });
    \$('.image-upload-wrap').bind('dragleave', function () {
        \$('.image-upload-wrap').removeClass('image-dropping');
    });
</script>

{# <script>
    \$('textarea').each(function () {
        this.setAttribute('style', 'height:' + (this.scrollHeight / 1.3) + 'px;overflow-y:hidden;');
    }).on('input', function () {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight / 1.3) + 'px';
    });
</script> #}
{% endblock %}", "request.twig", "/opt/lampp/htdocs/thefutures/resources/views/request.twig");
    }
}
