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

/* show-order-history.twig */
class __TwigTemplate_b53db2102b69160252514ba4ac0592c0a3b295bee0815c39b7bd0b127abd738f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout2.twig", "show-order-history.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_headlinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<style>
    :root {
        --body-bg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        --msger-bg: #fff;
        --border: 2px solid #ddd;
        --left-msg-bg: #ececec;
        --right-msg-bg: #579ffb;
    }

    html {
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        margin: 0;
        padding: 0;
        box-sizing: inherit;
    }

    .msger {
        display: flex;
        flex-flow: column wrap;
        justify-content: space-between;
        width: 100%;
        max-width: 867px;
        margin: 25px 10px;
        min-height: 400px;
        border: var(--border);
        border-radius: 5px;
        background: var(--msger-bg);
        box-shadow: 0 15px 15px -5px rgba(0, 0, 0, 0.2);
    }

    .msger-header {
        display: flex;
        justify-content: center;
        padding: 10px;
        border-bottom: var(--border);
        background: white;
        color: var(--futures-color);
    }

    .msger-chat {
        flex: 1;
        overflow-y: auto;
        padding: 10px;
    }

    .msger-chat::-webkit-scrollbar {
        width: 6px;
    }

    .msger-chat::-webkit-scrollbar-track {
        background: #ddd;
    }

    .msger-chat::-webkit-scrollbar-thumb {
        background: #bdbdbd;
    }

    .msg {
        display: flex;
        align-items: flex-end;
        margin-bottom: 10px;
    }

    .msg:last-of-type {
        margin: 0;
    }

    .msg-img {
        width: 50px;
        height: 50px;
        margin-right: 10px;
        background: #ddd;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        border-radius: 50%;
    }

    .msg-bubble {
        max-width: 450px;
        padding: 15px;
        border-radius: 15px;
        background: var(--left-msg-bg);
    }

    .msg-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .msg-info-name {
        margin-right: 10px;
        font-weight: bold;
    }

    .msg-info-time {
        font-size: 0.85em;
    }

    .left-msg .msg-bubble {
        border-bottom-left-radius: 0;
    }

    .right-msg {
        flex-direction: row-reverse;
    }

    .right-msg .msg-bubble {
        background: var(--futures-color);
        color: #fff;
        border-bottom-right-radius: 0;
    }

    .right-msg .msg-img {
        margin: 0 0 0 10px;
    }

    .msger-inputarea {
        display: flex;
        padding: 10px;
    }

    .msger-inputarea * {
        padding: 10px;
        border: none;
        border-radius: 3px;
        font-size: 1em;
    }

    .msger-input {
        flex: 1;
        border: var(--border);
        outline: none;
    }

    .msger-send-btn {
        margin-left: 10px;
        background: var(--futures-color);
        color: #fff;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.23s;
    }


    .msger-chat {
        background-color: #fcfcfe;
    }
</style>
";
    }

    // line 160
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        echo "<div class=\"row\">
    <div class=\"col-6\">
        <div class=\"header-2\">
            <h1 class=\"main-title\">#ID: 00001</h1>
        </div>
        <div>
            <b style=\"font-weight: 700; margin-right: 10px;\">Project name:</b>
            FAVICON for The Futures
        </div>
        <div>
            <b style=\"font-weight: 700; margin-right: 10px;\">Placed date:</b>
            22/07/2019
        </div>
        <div>
            <div class=\"my-3\">
                <!-- Card content -->
                <div class=\"\">
                    ";
        // line 197
        echo "                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Title of the Request</div>
                            <div class=\"col-7\">FAVICON for The Futures</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Description: </div>
                            <div class=\"col-7\">Hi. Can we please do this task right away. And pause the rest of all my
                                other tasks until this one is finished.
                                Detail List:
                                1) Please create thumbnails with each of the pictures attached.
                                2) Please use do the thumbnails with the style/template similar to the ones being done
                                for Fadela
                                Hilali 3) But please DO NOT use Fadela's colours (use the 2 colours attached as the
                                brand
                                colours) 4) The title of each thumbnail should be what is written on the file name
                                (background fading image should just relate to the topic on title.
                                5) Please find WETRANSFER attached with all files needed.</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Specific Text (If Any): </div>
                            <div class=\"col-7\">None</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Design Size:</div>
                            <div class=\"col-7\">None</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Design Custom Size:</div>
                            <div class=\"col-7\">000 Points x 000 Points</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">The Design is For:</div>
                            <div class=\"col-7\">Digital</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Audience You Are Trying to Reach:</div>
                            <div class=\"col-7\">Yoga Students / Yoga Teachers</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Links for inspiration:</div>
                            <div class=\"col-7\"><a href=\"\" target=\"_blank\">https://we.tl/t-wbMeDtCmLL</a></div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col font-weight-bold\">Archivo.docx</div>
                            <div class=\"col text-right\">
                                <a href=\"#\">EDIT</a>
                                |
                                <a href=\"#\">SHARE</a>
                                |
                                <a href=\"#\">DOWNLOAD</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Project Delivered: </div>
                            <div class=\"col-7\">May 8</div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"container\">
                            <span class=\"text-muted\"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class=\"col\">
        <div class=\"msger\">
            <header class=\"msger-header text-center\">
                Design Room ID# 00001
            </header>

            <main class=\"msger-chat\">
                <div class=\"msg left-msg\">
                    <div class=\"msg-img\"
                        style=\"background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)\"></div>

                    <div class=\"msg-bubble\">
                        <div class=\"msg-info\">
                            <div class=\"msg-info-name\">William</div>

                            <div class=\"msg-info-time\">12:45 - 22/06/19</div>
                        </div>

                        <div class=\"msg-text\">
                            Hi, welcome to SimpleChat! Go ahead and send me a message. 😄
                        </div>
                    </div>
                </div>

                <div class=\"msg right-msg\">
                    <div class=\"msg-img\"
                        style=\"background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)\"></div>

                    <div class=\"msg-bubble\">
                        <div class=\"msg-info\">
                            <div class=\"msg-info-name\">Angel</div>
                            <div class=\"msg-info-time\">12:46 - 22/06/19</div>
                        </div>

                        <div class=\"msg-text\">
                            You can change your name in JS section!
                        </div>
                    </div>
                </div>
            </main>

            <form class=\"msger-inputarea\">
                <input type=\"text\" class=\"msger-input\" placeholder=\"Enter your message...\">
                <button type=\"submit\" class=\"msger-send-btn\">Send</button>
            </form>
        </div>
    </div>
</div>

<!-- Chat zone -->
<script>
    const msgerForm = get(\".msger-inputarea\");
    const msgerInput = get(\".msger-input\");
    const msgerChat = get(\".msger-chat\");

    const BOT_MSGS = [
        \"Hi, how are you?\",
        \"Ohh... I can't understand what you trying to say. Sorry!\",
        \"I like to play games... But I don't know how to play!\",
        \"Sorry if my answers are not relevant. :))\",
        \"I feel sleepy! :(\"
    ];

    // Icons made by Freepik from www.flaticon.com
    const BOT_IMG = \"https://image.flaticon.com/icons/svg/327/327779.svg\";
    const PERSON_IMG = \"https://image.flaticon.com/icons/svg/145/145867.svg\";
    const BOT_NAME = \"William\";
    const PERSON_NAME = \"Angel\";

    msgerForm.addEventListener(\"submit\", event => {
        event.preventDefault();

        const msgText = msgerInput.value;
        if (!msgText) return;

        appendMessage(PERSON_NAME, PERSON_IMG, \"right\", msgText);
        msgerInput.value = \"\";

        botResponse();
    });

    function appendMessage(name, img, side, text) {
        //   Simple solution for small apps
        const msgHTML = `
    <div class=\"msg \${side}-msg\">
      <div class=\"msg-img\" style=\"background-image: url(\${img})\"></div>

      <div class=\"msg-bubble\">
        <div class=\"msg-info\">
          <div class=\"msg-info-name\">\${name}</div>
          <div class=\"msg-info-time\">\${formatDate(new Date())} - 22/06/19</div>
        </div>

        <div class=\"msg-text\">\${text}</div>
      </div>
    </div>
  `;

        msgerChat.insertAdjacentHTML(\"beforeend\", msgHTML);
        msgerChat.scrollTop += 500;
    }

    function botResponse() {
        const r = random(0, BOT_MSGS.length - 1);
        const msgText = BOT_MSGS[r];
        const delay = msgText.split(\" \").length * 100;

        setTimeout(() => {
            appendMessage(BOT_NAME, BOT_IMG, \"left\", msgText);
        }, delay);
    }

    // Utils
    function get(selector, root = document) {
        return root.querySelector(selector);
    }

    function formatDate(date) {
        const h = \"0\" + date.getHours();
        const m = \"0\" + date.getMinutes();

        return `\${h.slice(-2)}:\${m.slice(-2)}`;
    }

    function random(min, max) {
        return Math.floor(Math.random() * (max - min) + min);
    }
</script>

";
    }

    public function getTemplateName()
    {
        return "show-order-history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 197,  215 => 161,  211 => 160,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout2.twig'  %}
{% block headlinks %}
<style>
    :root {
        --body-bg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        --msger-bg: #fff;
        --border: 2px solid #ddd;
        --left-msg-bg: #ececec;
        --right-msg-bg: #579ffb;
    }

    html {
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        margin: 0;
        padding: 0;
        box-sizing: inherit;
    }

    .msger {
        display: flex;
        flex-flow: column wrap;
        justify-content: space-between;
        width: 100%;
        max-width: 867px;
        margin: 25px 10px;
        min-height: 400px;
        border: var(--border);
        border-radius: 5px;
        background: var(--msger-bg);
        box-shadow: 0 15px 15px -5px rgba(0, 0, 0, 0.2);
    }

    .msger-header {
        display: flex;
        justify-content: center;
        padding: 10px;
        border-bottom: var(--border);
        background: white;
        color: var(--futures-color);
    }

    .msger-chat {
        flex: 1;
        overflow-y: auto;
        padding: 10px;
    }

    .msger-chat::-webkit-scrollbar {
        width: 6px;
    }

    .msger-chat::-webkit-scrollbar-track {
        background: #ddd;
    }

    .msger-chat::-webkit-scrollbar-thumb {
        background: #bdbdbd;
    }

    .msg {
        display: flex;
        align-items: flex-end;
        margin-bottom: 10px;
    }

    .msg:last-of-type {
        margin: 0;
    }

    .msg-img {
        width: 50px;
        height: 50px;
        margin-right: 10px;
        background: #ddd;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        border-radius: 50%;
    }

    .msg-bubble {
        max-width: 450px;
        padding: 15px;
        border-radius: 15px;
        background: var(--left-msg-bg);
    }

    .msg-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .msg-info-name {
        margin-right: 10px;
        font-weight: bold;
    }

    .msg-info-time {
        font-size: 0.85em;
    }

    .left-msg .msg-bubble {
        border-bottom-left-radius: 0;
    }

    .right-msg {
        flex-direction: row-reverse;
    }

    .right-msg .msg-bubble {
        background: var(--futures-color);
        color: #fff;
        border-bottom-right-radius: 0;
    }

    .right-msg .msg-img {
        margin: 0 0 0 10px;
    }

    .msger-inputarea {
        display: flex;
        padding: 10px;
    }

    .msger-inputarea * {
        padding: 10px;
        border: none;
        border-radius: 3px;
        font-size: 1em;
    }

    .msger-input {
        flex: 1;
        border: var(--border);
        outline: none;
    }

    .msger-send-btn {
        margin-left: 10px;
        background: var(--futures-color);
        color: #fff;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.23s;
    }


    .msger-chat {
        background-color: #fcfcfe;
    }
</style>
{% endblock %}
{% block content %}
<div class=\"row\">
    <div class=\"col-6\">
        <div class=\"header-2\">
            <h1 class=\"main-title\">#ID: 00001</h1>
        </div>
        <div>
            <b style=\"font-weight: 700; margin-right: 10px;\">Project name:</b>
            FAVICON for The Futures
        </div>
        <div>
            <b style=\"font-weight: 700; margin-right: 10px;\">Placed date:</b>
            22/07/2019
        </div>
        <div>
            <div class=\"my-3\">
                <!-- Card content -->
                <div class=\"\">
                    {# <div class=\"d-flex justify-content-between\">
                        <div class=\"\">
                            <div class=\"font-weight-bold\">Placed</div>
                            <div>Date</div>
                            <div>By William</div>
                        </div>

                        <div class=\"mx-4\">
                            <div class=\"font-weight-bold\">Length</div>
                            <div>5m</div>
                            <div></div>
                        </div>
                        <div class=\"mx-4\">
                            <div class=\"font-weight-bold\">Total</div>
                            <div>\$5.00</div>
                            <div>Print receipt</div>
                        </div>
                    </div>
                    <hr> #}
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Title of the Request</div>
                            <div class=\"col-7\">FAVICON for The Futures</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Description: </div>
                            <div class=\"col-7\">Hi. Can we please do this task right away. And pause the rest of all my
                                other tasks until this one is finished.
                                Detail List:
                                1) Please create thumbnails with each of the pictures attached.
                                2) Please use do the thumbnails with the style/template similar to the ones being done
                                for Fadela
                                Hilali 3) But please DO NOT use Fadela's colours (use the 2 colours attached as the
                                brand
                                colours) 4) The title of each thumbnail should be what is written on the file name
                                (background fading image should just relate to the topic on title.
                                5) Please find WETRANSFER attached with all files needed.</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Specific Text (If Any): </div>
                            <div class=\"col-7\">None</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Design Size:</div>
                            <div class=\"col-7\">None</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Design Custom Size:</div>
                            <div class=\"col-7\">000 Points x 000 Points</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">The Design is For:</div>
                            <div class=\"col-7\">Digital</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Audience You Are Trying to Reach:</div>
                            <div class=\"col-7\">Yoga Students / Yoga Teachers</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Links for inspiration:</div>
                            <div class=\"col-7\"><a href=\"\" target=\"_blank\">https://we.tl/t-wbMeDtCmLL</a></div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col font-weight-bold\">Archivo.docx</div>
                            <div class=\"col text-right\">
                                <a href=\"#\">EDIT</a>
                                |
                                <a href=\"#\">SHARE</a>
                                |
                                <a href=\"#\">DOWNLOAD</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 font-weight-bold\">Project Delivered: </div>
                            <div class=\"col-7\">May 8</div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"container\">
                            <span class=\"text-muted\"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class=\"col\">
        <div class=\"msger\">
            <header class=\"msger-header text-center\">
                Design Room ID# 00001
            </header>

            <main class=\"msger-chat\">
                <div class=\"msg left-msg\">
                    <div class=\"msg-img\"
                        style=\"background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)\"></div>

                    <div class=\"msg-bubble\">
                        <div class=\"msg-info\">
                            <div class=\"msg-info-name\">William</div>

                            <div class=\"msg-info-time\">12:45 - 22/06/19</div>
                        </div>

                        <div class=\"msg-text\">
                            Hi, welcome to SimpleChat! Go ahead and send me a message. 😄
                        </div>
                    </div>
                </div>

                <div class=\"msg right-msg\">
                    <div class=\"msg-img\"
                        style=\"background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)\"></div>

                    <div class=\"msg-bubble\">
                        <div class=\"msg-info\">
                            <div class=\"msg-info-name\">Angel</div>
                            <div class=\"msg-info-time\">12:46 - 22/06/19</div>
                        </div>

                        <div class=\"msg-text\">
                            You can change your name in JS section!
                        </div>
                    </div>
                </div>
            </main>

            <form class=\"msger-inputarea\">
                <input type=\"text\" class=\"msger-input\" placeholder=\"Enter your message...\">
                <button type=\"submit\" class=\"msger-send-btn\">Send</button>
            </form>
        </div>
    </div>
</div>

<!-- Chat zone -->
<script>
    const msgerForm = get(\".msger-inputarea\");
    const msgerInput = get(\".msger-input\");
    const msgerChat = get(\".msger-chat\");

    const BOT_MSGS = [
        \"Hi, how are you?\",
        \"Ohh... I can't understand what you trying to say. Sorry!\",
        \"I like to play games... But I don't know how to play!\",
        \"Sorry if my answers are not relevant. :))\",
        \"I feel sleepy! :(\"
    ];

    // Icons made by Freepik from www.flaticon.com
    const BOT_IMG = \"https://image.flaticon.com/icons/svg/327/327779.svg\";
    const PERSON_IMG = \"https://image.flaticon.com/icons/svg/145/145867.svg\";
    const BOT_NAME = \"William\";
    const PERSON_NAME = \"Angel\";

    msgerForm.addEventListener(\"submit\", event => {
        event.preventDefault();

        const msgText = msgerInput.value;
        if (!msgText) return;

        appendMessage(PERSON_NAME, PERSON_IMG, \"right\", msgText);
        msgerInput.value = \"\";

        botResponse();
    });

    function appendMessage(name, img, side, text) {
        //   Simple solution for small apps
        const msgHTML = `
    <div class=\"msg \${side}-msg\">
      <div class=\"msg-img\" style=\"background-image: url(\${img})\"></div>

      <div class=\"msg-bubble\">
        <div class=\"msg-info\">
          <div class=\"msg-info-name\">\${name}</div>
          <div class=\"msg-info-time\">\${formatDate(new Date())} - 22/06/19</div>
        </div>

        <div class=\"msg-text\">\${text}</div>
      </div>
    </div>
  `;

        msgerChat.insertAdjacentHTML(\"beforeend\", msgHTML);
        msgerChat.scrollTop += 500;
    }

    function botResponse() {
        const r = random(0, BOT_MSGS.length - 1);
        const msgText = BOT_MSGS[r];
        const delay = msgText.split(\" \").length * 100;

        setTimeout(() => {
            appendMessage(BOT_NAME, BOT_IMG, \"left\", msgText);
        }, delay);
    }

    // Utils
    function get(selector, root = document) {
        return root.querySelector(selector);
    }

    function formatDate(date) {
        const h = \"0\" + date.getHours();
        const m = \"0\" + date.getMinutes();

        return `\${h.slice(-2)}:\${m.slice(-2)}`;
    }

    function random(min, max) {
        return Math.floor(Math.random() * (max - min) + min);
    }
</script>

{% endblock %}", "show-order-history.twig", "/opt/lampp/htdocs/thefutures/resources/views/show-order-history.twig");
    }
}
