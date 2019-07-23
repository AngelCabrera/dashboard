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

/* layout2.twig */
class __TwigTemplate_a72057a0508cd6fe7894d3273393732af180932e56e5f34bd67e7b32de702933 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'headlinks' => [$this, 'block_headlinks'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>Dashboard</title>
  <!-- Disable tap highlight on IE -->
  <meta name=\"msapplication-tap-highlight\" content=\"no\">

  <!-- Web Application Manifest -->
  <link rel=\"manifest\" href=\"manifest.json\">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name=\"mobile-web-app-capable\" content=\"yes\">
  <meta name=\"application-name\" content=\"Web Starter Kit\">
  <link rel=\"icon\" sizes=\"192x192\" href=\"images/touch/chrome-touch-icon-192x192.png\">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
  <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
  <meta name=\"apple-mobile-web-app-title\" content=\"Web Starter Kit\">
  <link rel=\"apple-touch-icon\" href=\"images/touch/apple-touch-icon.png\">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name=\"msapplication-TileImage\" content=\"images/touch/ms-touch-icon-144x144-precomposed.png\">
  <meta name=\"msapplication-TileColor\" content=\"#2F3BA2\">

  <!-- Color the status bar on mobile devices -->
  <meta name=\"theme-color\" content=\"#2F3BA2\">

  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
  <!--
    <link rel=\"canonical\" href=\"http://www.example.com/\">
    -->
  <link rel=\"stylesheet\" href=\"//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
  <!-- Bootstrap core CSS -->
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
  <!-- Material Design Bootstrap -->
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/css/mdb.min.css\" rel=\"stylesheet\">
  <!--Rubik font-->
  <link href=\"https://fonts.googleapis.com/css?family=Rubik&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"/thefutures/styles/main.css\">
  <link href=\"https://fonts.googleapis.com/css?family=Rubik&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"/styles/main.css\">
  ";
        // line 50
        $this->displayBlock('headlinks', $context, $blocks);
        // line 51
        echo "</head>

<body>
  <!-- Add your site or app content here -->

  <!--Navbar-->
  <nav class=\"navbar navbar-expand-md fixed-top navbar-light\">
    <!-- Navbar brand -->
    <a class=\"navbar-brand\" href=\"#\"><img src=\"https://thefutures.io/img/logotipo.png\" style=\"height: 3rem;\" alt=\"\"></a>
    <!-- Collapse button -->
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#basicExampleNav\"
      aria-controls=\"basicExampleNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <!-- Collapsible content -->
    <div class=\"collapse navbar-collapse\" id=\"basicExampleNav\">
      <!-- Links -->
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item dropdown\">
          <a href=\"#\" id=\"menu\" data-toggle=\"dropdown\" class=\"nav-link dropdown-toggle\">Services</a>
          <ul class=\"dropdown-menu mt-2 p-0 rounded-0  border-0 z-depth-1\">
            <li class=\"dropdown-item p-0 pt-2\">
              <a class=\"d-flex justify-content-between services-cards\" href=\"#\">
                <div class=\"mr-4 flex-wrap\" style=\"max-width: 50%;\">
                  <div class=\"h6 font-weight-bold\" style=\"color: #a383ff;\">Monthly</div>
                  <div class=\"mt-2\">Professional <br>transcriptionists</div>
                </div>
                <div class=\"mr3 text-right\">
                  <div class=\"h4\" style=\"color: #a383ff;\">\$1</div>
                  <div style=\"font-size: 14px; font-weight: bold\">per minute</div>
                </div>
              </a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a class=\"d-flex justify-content-between services-cards\" href=\"#\">
                <div class=\"mr-4 flex-wrap\" style=\"max-width: 50%;\">
                  <div class=\"h6 font-weight-bold\" style=\"color: #fdcc02;\">One-off</div>
                  <div class=\"mt-2\">Professional <br>transcriptionists</div>
                </div>
                <div class=\"mr3 text-right\">
                  <div class=\"h4\" style=\"color: #fdcc02;\">\$1</div>
                  <div style=\"font-size: 14px; font-weight: bold\">per minute</div>
                </div>
              </a>
            </li>

          </ul>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">About</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link ";
        // line 103
        if ((($context["active"] ?? null) == "support")) {
            echo "sidebar-active";
        }
        echo "\" href=\"support\">Support</a>
        </li>
        <!-- Dropdown -->
        <li class=\"nav-item dropdown\">
          <a href=\"#\" id=\"menu\" data-toggle=\"dropdown\" class=\"nav-link dropdown-toggle \">Hi William</a>
          <ul class=\"dropdown-menu p-0 mt-2 rounded-0  border-0 z-depth-1\">
            <li class=\"dropdown-item p-0 pt-2\">
              <a class=\"\" href=\"/thefutures/dashboard/\">Place a Request</a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a href=\"/thefutures/dashboard/order-history\" class=\"\">Project Progress</a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a href=\"#\" class=\"\">Project History</a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a href=\"#\" class=\"\">Manage Team</a>
            </li>
            <li class=\" dropdown-item p-0\">
              <a href=\"#\" class=\"\">Account Settings</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- Links -->
  </nav>
  <div>
    <div class=\"page-wrapper chiller-theme toggled\">
      <div id=\"little-sidebar\" class=\"position-absolute h-100\">
        <div class=\"sidebar-icon-wrapper text-center\">
          <a id=\"show-sidebar\" class=\"sidebar-icon text-white\" href=\"#\">
            <i class=\"fas fa-angle-right\"></i>
          </a>
        </div>
        <div class=\"sidebar-icon-wrapper text-center\">
          <a class=\"text-white sidebar-icon\" href=\"#\">
            <i class=\"fas fa-align-left\"></i>
          </a>
        </div>
        <div class=\"sidebar-icon-wrapper text-center\">
          <a class=\"text-white sidebar-icon\" href=\"#\">
            <i class=\"fas fa-history\"></i>
          </a>
        </div>
        <div class=\"sidebar-icon-wrapper text-center\">
          <a class=\"text-white sidebar-icon\" href=\"#\">
            <i class=\"fas fa-folder\"></i>
          </a>
        </div>
        <div class=\"sidebar-icon-wrapper text-center\">
          <a class=\"text-white sidebar-icon\" href=\"#\">
            <i class=\"fas fa-user-friends\"></i>
          </a>
        </div>
        <div class=\"sidebar-icon-wrapper text-center\">
          <a class=\"text-white sidebar-icon\" href=\"#\">
            <i class=\"fas fa-rocket\"></i>
          </a>
        </div>
        <div class=\"sidebar-icon-wrapper text-center\">
          <a class=\"text-white sidebar-icon\" href=\"#\">
            <i class=\"fab fa-leanpub\"></i>
          </a>
        </div>
        <div class=\"sidebar-icon-wrapper text-center\">
          <a class=\"text-white sidebar-icon\" href=\"#\">
            <i class=\"fas fa-cog\"></i>
          </a>
        </div>
        <div class=\"sidebar-icon-wrapper text-center\">
          <a class=\"text-white sidebar-icon\" href=\"#\">
            <i class=\"fas fa-receipt\"></i>
          </a>
        </div>
        <div class=\"sidebar-icon-wrapper text-center\">
          <a class=\"text-white sidebar-icon\" href=\"#\">
            <i class=\"fas fa-scroll\"></i>
          </a>
        </div>
      </div>
      <nav id=\"sidebar\" class=\"sidebar-wrapper\">
        <div class=\"sidebar-content\">
          <div class=\"sidebar-brand\">
            <a href=\"#\">&nbsp</a>
            <div id=\"close-sidebar\">
              <i class=\"fas fa-angle-left\"></i>
            </div>
          </div>
          <div class=\"sidebar-menu\">
            <div class=\"sidebar-link py-2 ";
        // line 192
        if ((($context["active"] ?? null) == "tickets")) {
            echo "sidebar-active";
        }
        echo "\">
              <div class=\"\">
                <a class=\"text-link ";
        // line 194
        if ((($context["active"] ?? null) == "tickets")) {
            echo "active";
        }
        echo "\"
                  href=\"/thefutures/dashboard/tickets\">Place a Request</a>
              </div>
            </div>
            <div class=\"sidebar-link py-2 ";
        // line 198
        if ((($context["active"] ?? null) == "status")) {
            echo "sidebar-active";
        }
        echo "\">
              <div class=\"\">
                <a class=\"text-link ";
        // line 200
        if ((($context["active"] ?? null) == "status")) {
            echo "active";
        }
        echo "\"
                  href=\"/thefutures/dashboard/projects-status\">Project Progress</a>
              </div>
            </div>
            <div class=\"sidebar-link py-2  ";
        // line 204
        if ((($context["active"] ?? null) == "order")) {
            echo "sidebar-active";
        }
        echo "\">
              <div class=\"\">
                <a class=\"text-link ";
        // line 206
        if ((($context["active"] ?? null) == "order")) {
            echo "active";
        }
        echo "\"
                  href=\"/thefutures/dashboard/order-history\">Project History</a>
              </div>
            </div>
            <div class=\"sidebar-link py-2 ";
        // line 210
        if ((($context["active"] ?? null) == "manage")) {
            echo "sidebar-active";
        }
        echo "\">
              <div class=\"\">
                <a class=\"text-link ";
        // line 212
        if ((($context["active"] ?? null) == "manage")) {
            echo "active";
        }
        echo "\"
                  href=\"/thefutures/dashboard/manage-team\">Manage Team</a>
              </div>
            </div>
            <div class=\"sidebar-link py-2 ";
        // line 216
        if ((($context["active"] ?? null) == "settings")) {
            echo "sidebar-active";
        }
        echo "\">
              <div class=\"\">
                <a class=\"text-link ";
        // line 218
        if ((($context["active"] ?? null) == "productivity")) {
            echo "active";
        }
        echo "\"
                  href=\"/thefutures/dashboard/productivity\">Manage Productivity</a>
              </div>
            </div>
            <div class=\"sidebar-link py-2\">
              &nbsp;
            </div>
            <div class=\"sidebar-link py-2\">
              <div class=\"\">
                <a class=\"text-link\" class=\"text-link\" href=\"#\">
                  Knowledge Base (Soon)
                </a>
              </div>
            </div>
            <div class=\"sidebar-link py-2 ";
        // line 232
        if ((($context["active"] ?? null) == "settings")) {
            echo "sidebar-active";
        }
        echo "\">
              <div class=\"\">
                <a class=\"text-link ";
        // line 234
        if ((($context["active"] ?? null) == "settings")) {
            echo "active";
        }
        echo "\"
                  href=\"/thefutures/dashboard/settings\">Account Settings</a>
              </div>
            </div>
            <div class=\"sidebar-link py-2\">
              <div class=\"\">
                <a class=\"text-link\" class=\"text-link\" href=\"#\">
                  Billing Settings
                </a>
              </div>
            </div>
            <div class=\"sidebar-link py-2\">
              <div class=\"\">
                <a class=\"text-link\" class=\"text-link\" href=\"#\">
                  Transaction History
                </a>
              </div>
            </div>
          </div>
          <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-content  -->
      </nav>
      <!-- sidebar-wrapper  -->
      <main class=\"page-content\">
        <div class=\"container-fluid\">
          <div class=\"main-content\">
            ";
        // line 261
        $this->displayBlock('content', $context, $blocks);
        // line 262
        echo "          </div>
        </div>
      </main>
      <!-- page-content\" -->
    </div>
  </div>


  <!-- build:js scripts/main.min.js -->
  <!-- endbuild -->

  <!-- JQuery -->
  <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
  <script src=\"//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
  <!-- Bootstrap tooltips -->
  <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\">
  </script>
  <!-- Bootstrap core JavaScript -->
  <script type=\"text/javascript\"
    src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js\"></script>
  <!-- MDB core JavaScript -->
  <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/js/mdb.min.js\"></script>
  ";
        // line 284
        $this->displayBlock('scripts', $context, $blocks);
        // line 285
        echo "  <script src=\"/thefutures/scripts/main.js\"></script>
  <script src=\"/scripts/main.js\"></script>
  <!-- Built with love using Web Starter Kit -->
</body>

</html>";
    }

    // line 50
    public function block_headlinks($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 261
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 284
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 284,  413 => 261,  407 => 50,  398 => 285,  396 => 284,  372 => 262,  370 => 261,  338 => 234,  331 => 232,  312 => 218,  305 => 216,  296 => 212,  289 => 210,  280 => 206,  273 => 204,  264 => 200,  257 => 198,  248 => 194,  241 => 192,  147 => 103,  93 => 51,  91 => 50,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>Dashboard</title>
  <!-- Disable tap highlight on IE -->
  <meta name=\"msapplication-tap-highlight\" content=\"no\">

  <!-- Web Application Manifest -->
  <link rel=\"manifest\" href=\"manifest.json\">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name=\"mobile-web-app-capable\" content=\"yes\">
  <meta name=\"application-name\" content=\"Web Starter Kit\">
  <link rel=\"icon\" sizes=\"192x192\" href=\"images/touch/chrome-touch-icon-192x192.png\">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
  <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
  <meta name=\"apple-mobile-web-app-title\" content=\"Web Starter Kit\">
  <link rel=\"apple-touch-icon\" href=\"images/touch/apple-touch-icon.png\">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name=\"msapplication-TileImage\" content=\"images/touch/ms-touch-icon-144x144-precomposed.png\">
  <meta name=\"msapplication-TileColor\" content=\"#2F3BA2\">

  <!-- Color the status bar on mobile devices -->
  <meta name=\"theme-color\" content=\"#2F3BA2\">

  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
  <!--
    <link rel=\"canonical\" href=\"http://www.example.com/\">
    -->
  <link rel=\"stylesheet\" href=\"//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
  <!-- Bootstrap core CSS -->
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
  <!-- Material Design Bootstrap -->
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/css/mdb.min.css\" rel=\"stylesheet\">
  <!--Rubik font-->
  <link href=\"https://fonts.googleapis.com/css?family=Rubik&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"/thefutures/styles/main.css\">
  <link href=\"https://fonts.googleapis.com/css?family=Rubik&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"/styles/main.css\">
  {% block headlinks %}{% endblock %}
</head>

<body>
  <!-- Add your site or app content here -->

  <!--Navbar-->
  <nav class=\"navbar navbar-expand-md fixed-top navbar-light\">
    <!-- Navbar brand -->
    <a class=\"navbar-brand\" href=\"#\"><img src=\"https://thefutures.io/img/logotipo.png\" style=\"height: 3rem;\" alt=\"\"></a>
    <!-- Collapse button -->
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#basicExampleNav\"
      aria-controls=\"basicExampleNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <!-- Collapsible content -->
    <div class=\"collapse navbar-collapse\" id=\"basicExampleNav\">
      <!-- Links -->
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item dropdown\">
          <a href=\"#\" id=\"menu\" data-toggle=\"dropdown\" class=\"nav-link dropdown-toggle\">Services</a>
          <ul class=\"dropdown-menu mt-2 p-0 rounded-0  border-0 z-depth-1\">
            <li class=\"dropdown-item p-0 pt-2\">
              <a class=\"d-flex justify-content-between services-cards\" href=\"#\">
                <div class=\"mr-4 flex-wrap\" style=\"max-width: 50%;\">
                  <div class=\"h6 font-weight-bold\" style=\"color: #a383ff;\">Monthly</div>
                  <div class=\"mt-2\">Professional <br>transcriptionists</div>
                </div>
                <div class=\"mr3 text-right\">
                  <div class=\"h4\" style=\"color: #a383ff;\">\$1</div>
                  <div style=\"font-size: 14px; font-weight: bold\">per minute</div>
                </div>
              </a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a class=\"d-flex justify-content-between services-cards\" href=\"#\">
                <div class=\"mr-4 flex-wrap\" style=\"max-width: 50%;\">
                  <div class=\"h6 font-weight-bold\" style=\"color: #fdcc02;\">One-off</div>
                  <div class=\"mt-2\">Professional <br>transcriptionists</div>
                </div>
                <div class=\"mr3 text-right\">
                  <div class=\"h4\" style=\"color: #fdcc02;\">\$1</div>
                  <div style=\"font-size: 14px; font-weight: bold\">per minute</div>
                </div>
              </a>
            </li>

          </ul>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">About</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link {% if active == \"support\" %}sidebar-active{% endif %}\" href=\"support\">Support</a>
        </li>
        <!-- Dropdown -->
        <li class=\"nav-item dropdown\">
          <a href=\"#\" id=\"menu\" data-toggle=\"dropdown\" class=\"nav-link dropdown-toggle \">Hi William</a>
          <ul class=\"dropdown-menu p-0 mt-2 rounded-0  border-0 z-depth-1\">
            <li class=\"dropdown-item p-0 pt-2\">
              <a class=\"\" href=\"/thefutures/dashboard/\">Place a Request</a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a href=\"/thefutures/dashboard/order-history\" class=\"\">Project Progress</a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a href=\"#\" class=\"\">Project History</a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a href=\"#\" class=\"\">Manage Team</a>
            </li>
            <li class=\" dropdown-item p-0\">
              <a href=\"#\" class=\"\">Account Settings</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- Links -->
  </nav>
  <div>
    <div class=\"page-wrapper chiller-theme toggled\">
      <div id=\"little-sidebar\" class=\"position-absolute h-100\">
        <div class=\"sidebar-icon-wrapper text-center\">
          <a id=\"show-sidebar\" class=\"sidebar-icon text-white\" href=\"#\">
            <i class=\"fas fa-angle-right\"></i>
          </a>
        </div>
        <div class=\"sidebar-icon-wrapper text-center\">
          <a class=\"text-white sidebar-icon\" href=\"#\">
            <i class=\"fas fa-align-left\"></i>
          </a>
        </div>
        <div class=\"sidebar-icon-wrapper text-center\">
          <a class=\"text-white sidebar-icon\" href=\"#\">
            <i class=\"fas fa-history\"></i>
          </a>
        </div>
        <div class=\"sidebar-icon-wrapper text-center\">
          <a class=\"text-white sidebar-icon\" href=\"#\">
            <i class=\"fas fa-folder\"></i>
          </a>
        </div>
        <div class=\"sidebar-icon-wrapper text-center\">
          <a class=\"text-white sidebar-icon\" href=\"#\">
            <i class=\"fas fa-user-friends\"></i>
          </a>
        </div>
        <div class=\"sidebar-icon-wrapper text-center\">
          <a class=\"text-white sidebar-icon\" href=\"#\">
            <i class=\"fas fa-rocket\"></i>
          </a>
        </div>
        <div class=\"sidebar-icon-wrapper text-center\">
          <a class=\"text-white sidebar-icon\" href=\"#\">
            <i class=\"fab fa-leanpub\"></i>
          </a>
        </div>
        <div class=\"sidebar-icon-wrapper text-center\">
          <a class=\"text-white sidebar-icon\" href=\"#\">
            <i class=\"fas fa-cog\"></i>
          </a>
        </div>
        <div class=\"sidebar-icon-wrapper text-center\">
          <a class=\"text-white sidebar-icon\" href=\"#\">
            <i class=\"fas fa-receipt\"></i>
          </a>
        </div>
        <div class=\"sidebar-icon-wrapper text-center\">
          <a class=\"text-white sidebar-icon\" href=\"#\">
            <i class=\"fas fa-scroll\"></i>
          </a>
        </div>
      </div>
      <nav id=\"sidebar\" class=\"sidebar-wrapper\">
        <div class=\"sidebar-content\">
          <div class=\"sidebar-brand\">
            <a href=\"#\">&nbsp</a>
            <div id=\"close-sidebar\">
              <i class=\"fas fa-angle-left\"></i>
            </div>
          </div>
          <div class=\"sidebar-menu\">
            <div class=\"sidebar-link py-2 {% if active == \"tickets\" %}sidebar-active{% endif %}\">
              <div class=\"\">
                <a class=\"text-link {% if active == \"tickets\" %}active{% endif %}\"
                  href=\"/thefutures/dashboard/tickets\">Place a Request</a>
              </div>
            </div>
            <div class=\"sidebar-link py-2 {% if active == \"status\" %}sidebar-active{% endif %}\">
              <div class=\"\">
                <a class=\"text-link {% if active == \"status\" %}active{% endif %}\"
                  href=\"/thefutures/dashboard/projects-status\">Project Progress</a>
              </div>
            </div>
            <div class=\"sidebar-link py-2  {% if active == \"order\" %}sidebar-active{% endif %}\">
              <div class=\"\">
                <a class=\"text-link {% if active == \"order\" %}active{% endif %}\"
                  href=\"/thefutures/dashboard/order-history\">Project History</a>
              </div>
            </div>
            <div class=\"sidebar-link py-2 {% if active == \"manage\" %}sidebar-active{% endif %}\">
              <div class=\"\">
                <a class=\"text-link {% if active == \"manage\" %}active{% endif %}\"
                  href=\"/thefutures/dashboard/manage-team\">Manage Team</a>
              </div>
            </div>
            <div class=\"sidebar-link py-2 {% if active == \"settings\" %}sidebar-active{% endif %}\">
              <div class=\"\">
                <a class=\"text-link {% if active == \"productivity\" %}active{% endif %}\"
                  href=\"/thefutures/dashboard/productivity\">Manage Productivity</a>
              </div>
            </div>
            <div class=\"sidebar-link py-2\">
              &nbsp;
            </div>
            <div class=\"sidebar-link py-2\">
              <div class=\"\">
                <a class=\"text-link\" class=\"text-link\" href=\"#\">
                  Knowledge Base (Soon)
                </a>
              </div>
            </div>
            <div class=\"sidebar-link py-2 {% if active == \"settings\" %}sidebar-active{% endif %}\">
              <div class=\"\">
                <a class=\"text-link {% if active == \"settings\" %}active{% endif %}\"
                  href=\"/thefutures/dashboard/settings\">Account Settings</a>
              </div>
            </div>
            <div class=\"sidebar-link py-2\">
              <div class=\"\">
                <a class=\"text-link\" class=\"text-link\" href=\"#\">
                  Billing Settings
                </a>
              </div>
            </div>
            <div class=\"sidebar-link py-2\">
              <div class=\"\">
                <a class=\"text-link\" class=\"text-link\" href=\"#\">
                  Transaction History
                </a>
              </div>
            </div>
          </div>
          <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-content  -->
      </nav>
      <!-- sidebar-wrapper  -->
      <main class=\"page-content\">
        <div class=\"container-fluid\">
          <div class=\"main-content\">
            {% block content %}{% endblock %}
          </div>
        </div>
      </main>
      <!-- page-content\" -->
    </div>
  </div>


  <!-- build:js scripts/main.min.js -->
  <!-- endbuild -->

  <!-- JQuery -->
  <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
  <script src=\"//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
  <!-- Bootstrap tooltips -->
  <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\">
  </script>
  <!-- Bootstrap core JavaScript -->
  <script type=\"text/javascript\"
    src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js\"></script>
  <!-- MDB core JavaScript -->
  <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/js/mdb.min.js\"></script>
  {% block scripts %}{% endblock %}
  <script src=\"/thefutures/scripts/main.js\"></script>
  <script src=\"/scripts/main.js\"></script>
  <!-- Built with love using Web Starter Kit -->
</body>

</html>", "layout2.twig", "/opt/lampp/htdocs/thefutures/resources/views/layout2.twig");
    }
}
