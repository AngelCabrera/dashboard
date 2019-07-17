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
  <link rel=\"stylesheet\" href=\"../styles/main.css\">
</head>

<body>
  <!-- Add your site or app content here -->

  <!--Navbar-->
  <nav class=\"navbar navbar-expand-lg navbar-light\">
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
          <a href=\"#\" id=\"menu\" data-toggle=\"dropdown\" class=\"nav-link dropdown-toggle w-100\">Services</a>
          <ul class=\"dropdown-menu mt-2 rounded-0  border-0 z-depth-1\">
            <li class=\"dropdown-item p-0\">
              <a class=\"w-100 text-link\" href=\"#\">My Files</a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a href=\"#\" class=\"text-link w-100\">Order History</a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a href=\"#\" class=\"text-link w-100\">Manage Team</a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a href=\"#\" class=\"text-link w-100\">Settings</a>
            </li>
          </ul>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Enterprise</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">About</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Contact</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\"><i class=\"far fa-bell\"></i></a>
        </li>
        <!-- Dropdown -->
        <li class=\"nav-item dropdown\">
          <a href=\"#\" id=\"menu\" data-toggle=\"dropdown\" class=\"nav-link dropdown-toggle w-100\">Hi William</a>
          <ul class=\"dropdown-menu mt-2 rounded-0  border-0 z-depth-1\">
            <li class=\"dropdown-item p-0\">
              <a class=\"w-100 text-link\" href=\"/thefutures/dashboard/\">My Files</a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a href=\"/thefutures/dashboard/order-history\" class=\"text-link w-100\">Order History</a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a href=\"#\" class=\"text-link w-100\">Manage Team</a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a href=\"#\" class=\"text-link w-100\">Settings</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- Links -->
  </nav>
  <!--/.Navbar-->

  <main class=\"container-fluid main-wrapper\">
    <div class=\"row\">
      <!--Left_Navbar-->
      <div id=\"sidebar\" class=\"col-xl-2 col-md-3 col-4\">
        <nav>
          <div class=\"sidebar-link ";
        // line 123
        if ((($context["active"] ?? null) == "myfiles")) {
            echo " sidebar-active ";
        }
        echo "\">
            <a class=\"text-link \" href=\"/thefutures/dashboard/\">My files</a>
          </div>
          <div class=\"sidebar-link ";
        // line 126
        if ((($context["active"] ?? null) == "order")) {
            echo " sidebar-active ";
        }
        echo "\">
            <a class=\"text-link \" href=\"/thefutures/dashboard/order-history\">Order History</a>
          </div>
          <div class=\"sidebar-link ";
        // line 129
        if ((($context["active"] ?? null) == "manage")) {
            echo " sidebar-active ";
        }
        echo "\">
            <a class=\"text-link\" href=\"/thefutures/dashboard/manage-team\">Manage Team</a>
          </div>
          <div class=\"sidebar-link ";
        // line 132
        if ((($context["active"] ?? null) == "settings")) {
            echo " sidebar-active ";
        }
        echo "\">
            <a class=\"text-link\" href=\"/thefutures/dashboard/settings\">Settings</a>
          </div>
          <div class=\"sidebar-link ";
        // line 135
        if ((($context["active"] ?? null) == "tickets")) {
            echo " sidebar-active ";
        }
        echo "\">
            <a class=\"text-link\" href=\"/thefutures/dashboard/tickets\">Tickets</a>
          </div>
          <div class=\"sidebar-link\">
            &nbsp;
          </div>
          <div class=\"sidebar-link\">
            <a class=\"text-link\" class=\"text-link\" href=\"#\">
              Make a Payment
            </a>
          </div>
          <div class=\"sidebar-link\">
            <a class=\"text-link\" class=\"text-link\" href=\"#\">
              Transaction History
            </a>
          </div>
          <div class=\"sidebar-link\">
            <a class=\"text-link\" class=\"text-link\" href=\"#\">
              Billing Settings
            </a>
          </div>
        </nav>
      </div>
      <!--/.Left_Navbar-->
      <!-- Main Content-->
      <div id=\"main-content\" class=\"col-xl-10 col-md-9 col-8\">
        <div class=\"container \">
          <div class=\"main-content\">
            ";
        // line 163
        $this->displayBlock('content', $context, $blocks);
        // line 164
        echo "          </div>
        </div>
      </div>
      <!-- Main Content-->
    </div>
  </main>


  <!-- build:js scripts/main.min.js -->
  <!-- endbuild -->

  <!-- JQuery -->
  ";
        // line 176
        $this->displayBlock('scripts', $context, $blocks);
        // line 177
        echo "  <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
  <script src=\"//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
  <!-- Bootstrap tooltips -->
  <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\">
  </script>
  <!-- Bootstrap core JavaScript -->
  <script type=\"text/javascript\"
    src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js\"></script>
  <!-- MDB core JavaScript -->
  <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/js/mdb.min.js\"></script>

  <script src=\"../scripts/src/main.js\"></script>

  <!-- Built with love using Web Starter Kit -->
</body>

</html>";
    }

    // line 163
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 176
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
        return array (  272 => 176,  266 => 163,  246 => 177,  244 => 176,  230 => 164,  228 => 163,  195 => 135,  187 => 132,  179 => 129,  171 => 126,  163 => 123,  39 => 1,);
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
  <link rel=\"stylesheet\" href=\"../styles/main.css\">
</head>

<body>
  <!-- Add your site or app content here -->

  <!--Navbar-->
  <nav class=\"navbar navbar-expand-lg navbar-light\">
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
          <a href=\"#\" id=\"menu\" data-toggle=\"dropdown\" class=\"nav-link dropdown-toggle w-100\">Services</a>
          <ul class=\"dropdown-menu mt-2 rounded-0  border-0 z-depth-1\">
            <li class=\"dropdown-item p-0\">
              <a class=\"w-100 text-link\" href=\"#\">My Files</a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a href=\"#\" class=\"text-link w-100\">Order History</a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a href=\"#\" class=\"text-link w-100\">Manage Team</a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a href=\"#\" class=\"text-link w-100\">Settings</a>
            </li>
          </ul>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Enterprise</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">About</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Contact</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\"><i class=\"far fa-bell\"></i></a>
        </li>
        <!-- Dropdown -->
        <li class=\"nav-item dropdown\">
          <a href=\"#\" id=\"menu\" data-toggle=\"dropdown\" class=\"nav-link dropdown-toggle w-100\">Hi William</a>
          <ul class=\"dropdown-menu mt-2 rounded-0  border-0 z-depth-1\">
            <li class=\"dropdown-item p-0\">
              <a class=\"w-100 text-link\" href=\"/thefutures/dashboard/\">My Files</a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a href=\"/thefutures/dashboard/order-history\" class=\"text-link w-100\">Order History</a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a href=\"#\" class=\"text-link w-100\">Manage Team</a>
            </li>
            <li class=\"dropdown-item p-0\">
              <a href=\"#\" class=\"text-link w-100\">Settings</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- Links -->
  </nav>
  <!--/.Navbar-->

  <main class=\"container-fluid main-wrapper\">
    <div class=\"row\">
      <!--Left_Navbar-->
      <div id=\"sidebar\" class=\"col-xl-2 col-md-3 col-4\">
        <nav>
          <div class=\"sidebar-link {% if active == 'myfiles' %} sidebar-active {% endif %}\">
            <a class=\"text-link \" href=\"/thefutures/dashboard/\">My files</a>
          </div>
          <div class=\"sidebar-link {% if active == 'order' %} sidebar-active {% endif %}\">
            <a class=\"text-link \" href=\"/thefutures/dashboard/order-history\">Order History</a>
          </div>
          <div class=\"sidebar-link {% if active == 'manage' %} sidebar-active {% endif %}\">
            <a class=\"text-link\" href=\"/thefutures/dashboard/manage-team\">Manage Team</a>
          </div>
          <div class=\"sidebar-link {% if active == 'settings' %} sidebar-active {% endif %}\">
            <a class=\"text-link\" href=\"/thefutures/dashboard/settings\">Settings</a>
          </div>
          <div class=\"sidebar-link {% if active == 'tickets' %} sidebar-active {% endif %}\">
            <a class=\"text-link\" href=\"/thefutures/dashboard/tickets\">Tickets</a>
          </div>
          <div class=\"sidebar-link\">
            &nbsp;
          </div>
          <div class=\"sidebar-link\">
            <a class=\"text-link\" class=\"text-link\" href=\"#\">
              Make a Payment
            </a>
          </div>
          <div class=\"sidebar-link\">
            <a class=\"text-link\" class=\"text-link\" href=\"#\">
              Transaction History
            </a>
          </div>
          <div class=\"sidebar-link\">
            <a class=\"text-link\" class=\"text-link\" href=\"#\">
              Billing Settings
            </a>
          </div>
        </nav>
      </div>
      <!--/.Left_Navbar-->
      <!-- Main Content-->
      <div id=\"main-content\" class=\"col-xl-10 col-md-9 col-8\">
        <div class=\"container \">
          <div class=\"main-content\">
            {% block content %}{% endblock %}
          </div>
        </div>
      </div>
      <!-- Main Content-->
    </div>
  </main>


  <!-- build:js scripts/main.min.js -->
  <!-- endbuild -->

  <!-- JQuery -->
  {% block scripts %}{% endblock %}
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

  <script src=\"../scripts/src/main.js\"></script>

  <!-- Built with love using Web Starter Kit -->
</body>

</html>", "layout2.twig", "/opt/lampp/htdocs/thefutures/resources/views/layout2.twig");
    }
}
