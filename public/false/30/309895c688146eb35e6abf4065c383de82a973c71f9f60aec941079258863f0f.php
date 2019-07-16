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

/* layout.twig */
class __TwigTemplate_ff3292bb4e78cd8c61cc250d70193124c01b682793aa672b3675eff12076953f extends \Twig\Template
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
    <title>Order History</title>

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
    <link rel=\"stylesheet\" href=\"../styles/simple-sidebar.css\">
</head>

<body>
    <!-- Add your site or app content here -->
    <!--Navbar-->
    <nav id=\"navbar\" class=\"navbar navbar-expand-lg navbar-light\">
        <!-- Navbar brand -->
        <a class=\"navbar-brand\" href=\"#\"><img src=\"https://thefutures.io/img/logotipo.png\" style=\"height: 3rem;\"
                alt=\"\"></a>
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
            </ul>
            <!-- Links -->
    </nav>
    <!--/.Navbar-->

    <main class=\"container-fluid main-wrapper\">
        <div class=\"row\">
            <!--Left_Navbar-->
            <div class=\"bg-light border-right\" id=\"sidebar-wrapper\">
                <div class=\"sidebar-heading\">Start Bootstrap </div>
                <div class=\"list-group list-group-flush\">
                    <a href=\"#\" class=\"list-group-item list-group-item-action bg-light\">Dashboard</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action bg-light\">Shortcuts</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action bg-light\">Overview</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action bg-light\">Events</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action bg-light\">Profile</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action bg-light\">Status</a>
                </div>
            </div>
            <!--/.Left_Navbar-->
            <!-- Main Content-->
            <div id=\"main-content\" class=\"\">
                <div class=\"container \">
                    <div class=\"main-content\">
                        ";
        // line 139
        $this->displayBlock('content', $context, $blocks);
        // line 140
        echo "                        <!-- Main content Header-->
                        <!--
            <div class=\"index header\">
              <div>
                <h1 class=\"main-title\">My Files </h1>
              </div>
              <div class=\"my-files-items\">
                <!-- Search Bar 
                <div class=\"input-group md-form form-sm form-2 pl-0\">
                  <input class=\"form-control my-0 py-1\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
                  <div class=\"input-group-append\">
                    <span class=\"input-group-text lighten-2\" id=\"basic-text1\"><i class=\"fas fa-search text-grey\"
                        aria-hidden=\"true\"></i></span>
                  </div>
                </div>
                <!-- /Search Bar
                <div>
                  <button class=\"btn btn-futures dropdown-toggle mr-4\" type=\"button\" data-toggle=\"dropdown\"
                    aria-haspopup=\"true\" aria-expanded=\"false\">PLACE NEW ORDER</button>
                  <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                  </div>
                </div>
              </div>
            </div>

            <!--/ Main content Header-->
                        <!-- Main content Data Display
            <div class=\"data table-responsive text-nowrap\">
              <table id=\"\" cellspacing=\"0\" class=\"table table-hover\">
                <thead>
                  <tr>
                    <th scope=\"col\" style=\"width: 60%;\">Name</th>
                    <th scope=\"col\">Uploaded</th>
                    <th scope=\"col\">Rating</th>
                    <th scope=\"col\">Status</th>
                    <th scope=\"col\"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope=\"row\">
                      <a href=\"orderDetails/TC1031972989.html\">
                        TC1031972989
                      </a>
                    </th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                      <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope=\"row\">
                      <a href=\"orderDetails/TC1031972989.html\">
                        TC0376402980
                      </a>
                    </th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>
                      <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope=\"row\">
                      <a href=\"orderDetails/TC1031972989.html\">
                        TC1031972989
                      </a>
                    </th>
                    <td>Larry the Bird</td>
                    <td>Larry</td>
                    <td>@twitter</td>
                    <td>
                      <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope=\"row\">
                      <a href=\"orderDetails/TC1031972989.html\">
                        TC1031972989
                      </a>
                    </th>
                    <td>Larry the Bird</td>
                    <td>Larry</td>
                    <td>@twitter</td>
                    <td>
                      <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope=\"row\">
                      <a href=\"orderDetails/TC1031972989.html\">
                        TC1031972989
                      </a>
                    </th>
                    <td>Larry the Bird</td>
                    <td>Larry</td>
                    <td>@twitter</td>
                    <td>
                      <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            -->
                        <!--/ Main content Data Display-->
                    </div>
                </div>
            </div>
            <!-- Main Content-->
        </div>
    </main>


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
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/js/mdb.min.js\">
    </script>
    <script>
        \$(\"#menu-toggle\").click(function (e) {
            e.preventDefault();
            \$(\"#wrapper\").toggleClass(\"toggled\");
        });
    </script>

    <!-- Built with love using Web Starter Kit -->
</body>

</html>";
    }

    // line 139
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  341 => 139,  180 => 140,  178 => 139,  38 => 1,);
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
    <title>Order History</title>

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
    <link rel=\"stylesheet\" href=\"../styles/simple-sidebar.css\">
</head>

<body>
    <!-- Add your site or app content here -->
    <!--Navbar-->
    <nav id=\"navbar\" class=\"navbar navbar-expand-lg navbar-light\">
        <!-- Navbar brand -->
        <a class=\"navbar-brand\" href=\"#\"><img src=\"https://thefutures.io/img/logotipo.png\" style=\"height: 3rem;\"
                alt=\"\"></a>
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
            </ul>
            <!-- Links -->
    </nav>
    <!--/.Navbar-->

    <main class=\"container-fluid main-wrapper\">
        <div class=\"row\">
            <!--Left_Navbar-->
            <div class=\"bg-light border-right\" id=\"sidebar-wrapper\">
                <div class=\"sidebar-heading\">Start Bootstrap </div>
                <div class=\"list-group list-group-flush\">
                    <a href=\"#\" class=\"list-group-item list-group-item-action bg-light\">Dashboard</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action bg-light\">Shortcuts</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action bg-light\">Overview</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action bg-light\">Events</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action bg-light\">Profile</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action bg-light\">Status</a>
                </div>
            </div>
            <!--/.Left_Navbar-->
            <!-- Main Content-->
            <div id=\"main-content\" class=\"\">
                <div class=\"container \">
                    <div class=\"main-content\">
                        {% block content %}{% endblock %}
                        <!-- Main content Header-->
                        <!--
            <div class=\"index header\">
              <div>
                <h1 class=\"main-title\">My Files </h1>
              </div>
              <div class=\"my-files-items\">
                <!-- Search Bar 
                <div class=\"input-group md-form form-sm form-2 pl-0\">
                  <input class=\"form-control my-0 py-1\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
                  <div class=\"input-group-append\">
                    <span class=\"input-group-text lighten-2\" id=\"basic-text1\"><i class=\"fas fa-search text-grey\"
                        aria-hidden=\"true\"></i></span>
                  </div>
                </div>
                <!-- /Search Bar
                <div>
                  <button class=\"btn btn-futures dropdown-toggle mr-4\" type=\"button\" data-toggle=\"dropdown\"
                    aria-haspopup=\"true\" aria-expanded=\"false\">PLACE NEW ORDER</button>
                  <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                  </div>
                </div>
              </div>
            </div>

            <!--/ Main content Header-->
                        <!-- Main content Data Display
            <div class=\"data table-responsive text-nowrap\">
              <table id=\"\" cellspacing=\"0\" class=\"table table-hover\">
                <thead>
                  <tr>
                    <th scope=\"col\" style=\"width: 60%;\">Name</th>
                    <th scope=\"col\">Uploaded</th>
                    <th scope=\"col\">Rating</th>
                    <th scope=\"col\">Status</th>
                    <th scope=\"col\"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope=\"row\">
                      <a href=\"orderDetails/TC1031972989.html\">
                        TC1031972989
                      </a>
                    </th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                      <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope=\"row\">
                      <a href=\"orderDetails/TC1031972989.html\">
                        TC0376402980
                      </a>
                    </th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>
                      <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope=\"row\">
                      <a href=\"orderDetails/TC1031972989.html\">
                        TC1031972989
                      </a>
                    </th>
                    <td>Larry the Bird</td>
                    <td>Larry</td>
                    <td>@twitter</td>
                    <td>
                      <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope=\"row\">
                      <a href=\"orderDetails/TC1031972989.html\">
                        TC1031972989
                      </a>
                    </th>
                    <td>Larry the Bird</td>
                    <td>Larry</td>
                    <td>@twitter</td>
                    <td>
                      <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope=\"row\">
                      <a href=\"orderDetails/TC1031972989.html\">
                        TC1031972989
                      </a>
                    </th>
                    <td>Larry the Bird</td>
                    <td>Larry</td>
                    <td>@twitter</td>
                    <td>
                      <a href=\"#\">
                        <i class=\"fas fa-ellipsis-h\"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            -->
                        <!--/ Main content Data Display-->
                    </div>
                </div>
            </div>
            <!-- Main Content-->
        </div>
    </main>


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
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/js/mdb.min.js\">
    </script>
    <script>
        \$(\"#menu-toggle\").click(function (e) {
            e.preventDefault();
            \$(\"#wrapper\").toggleClass(\"toggled\");
        });
    </script>

    <!-- Built with love using Web Starter Kit -->
</body>

</html>", "layout.twig", "/opt/lampp/htdocs/thefutures/resources/views/layout.twig");
    }
}
