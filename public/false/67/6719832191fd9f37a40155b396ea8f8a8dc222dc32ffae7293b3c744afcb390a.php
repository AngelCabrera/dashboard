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
        --border: 1px solid #ddd;
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
        height: 700px;
        overflow: hidden;
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
        padding: 10px;
        max-height: 560px;
        overflow: hidden;
    }

    .msger-chat:hover {
        overflow: scroll;
        overflow-x: hidden;
    }

    .msger-buttons {
        padding: 10px;
        border-top: 1px solid #ddd;
    }

    .msger-chat::-webkit-scrollbar {
        width: 6px;
    }

    .msger-chat::-webkit-scrollbar:hover {}

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
        border-radius: 8px;
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

    // line 172
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 173
        echo "<div class=\"header\">
    <h1>Design Room</h1>
    <div class=\"row py-2\" style=\"font-size: 14px; border-top: 2px solid #eeeeee; border-bottom: 2px solid #eeeeee;\">
        <div class=\"col\">
            <p class=\"m-0\"><span class=\"little-title\">#ID:</span> 00001</p>
            <p class=\"m-0\"><span class=\"little-title\">Project name:</span> FAVICON for The Futures</p>
        </div>
        <div class=\"col\">
            <p class=\"m-0\"><span class=\"little-title\">Placed Date:</span> 22/07/2019</p>
            <p class=\"m-0\"><span class=\"little-title\">Placed By:</span> William Villalobos</p>
        </div>
        <div class=\"col\">
            <p class=\"m-0\"><span class=\"little-title\">Status:</span> Open Ticket</p>
            <p class=\"m-0\"><span class=\"little-title\">Delivered:</span> N/A</p>
        </div>
    </div>
</div>
<div class=\"row mt-4\">
    <div class=\"pl-0 col-6 pr-4\">
        <div class=\"msger\">
            <header class=\"msger-header text-center little-title\">
                Design Desk
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
            <div class=\"msger-buttons d-flex justify-content-center\">
                <a href=\"#\" class=\"my-0 mx-4\">Give Video Feedback</a>
                <a href=\"#\" class=\"my-0 mx-4\">Give Screengrab Feedback</a>
            </div>
            <form class=\"msger-inputarea\">
                <input type=\"text\" class=\"msger-input\" placeholder=\"Enter your message...\">
                <button type=\"submit\" class=\"msger-send-btn\"><i class=\"fas fa-paper-plane\"></i></button>
            </form>
        </div>
    </div>
    <div class=\"col-6\" style=\"max-height: 700px; overflow-y: scroll; overflow-x: hidden;\">
        <div>
            <div class=\"\">
                <!-- Card content -->
                <div class=\"\">
                    ";
        // line 266
        echo "                    <div class=\"field-set\" style=\"border-top: 1px solid #e1e1e1\">
                        <div class=\"row\">
                            <div class=\"col-3 little-title\">Title of the Request:</div>
                            <div class=\"col-7\">FAVICON for The Futures</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 little-title\">Description: </div>
                            <div class=\"col-7\">Hi. Can we please do this task right away. And pause the rest of all
                                my
                                other tasks until this one is finished.
                                Detail List:
                                1) Please create thumbnails with each of the pictures attached.
                                2) Please use do the thumbnails with the style/template similar to the ones being
                                done
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
                            <div class=\"col-3 little-title\">Specific Text (If Any): </div>
                            <div class=\"col-7\">None</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 little-title\">Design Size:</div>
                            <div class=\"col-7\">None</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 little-title\">Design Custom Size:</div>
                            <div class=\"col-7\">000 Points x 000 Points</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 little-title\">The Design is For:</div>
                            <div class=\"col-7\">Digital</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 little-title\">Audience You Are Trying to Reach:</div>
                            <div class=\"col-7\">Yoga Students / Yoga Teachers</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 little-title\">Links for inspiration:</div>
                            <div class=\"col-7\"><a href=\"\" target=\"_blank\">https://we.tl/t-wbMeDtCmLL</a></div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col little-title\">Archivo.docx</div>
                            <div class=\"col text-right\">
                                <a href=\"#\">Add</a>
                            </div>
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
        return array (  303 => 266,  227 => 173,  223 => 172,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout2.twig'  %}
{% block headlinks %}
<style>
    :root {
        --body-bg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        --msger-bg: #fff;
        --border: 1px solid #ddd;
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
        height: 700px;
        overflow: hidden;
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
        padding: 10px;
        max-height: 560px;
        overflow: hidden;
    }

    .msger-chat:hover {
        overflow: scroll;
        overflow-x: hidden;
    }

    .msger-buttons {
        padding: 10px;
        border-top: 1px solid #ddd;
    }

    .msger-chat::-webkit-scrollbar {
        width: 6px;
    }

    .msger-chat::-webkit-scrollbar:hover {}

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
        border-radius: 8px;
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
<div class=\"header\">
    <h1>Design Room</h1>
    <div class=\"row py-2\" style=\"font-size: 14px; border-top: 2px solid #eeeeee; border-bottom: 2px solid #eeeeee;\">
        <div class=\"col\">
            <p class=\"m-0\"><span class=\"little-title\">#ID:</span> 00001</p>
            <p class=\"m-0\"><span class=\"little-title\">Project name:</span> FAVICON for The Futures</p>
        </div>
        <div class=\"col\">
            <p class=\"m-0\"><span class=\"little-title\">Placed Date:</span> 22/07/2019</p>
            <p class=\"m-0\"><span class=\"little-title\">Placed By:</span> William Villalobos</p>
        </div>
        <div class=\"col\">
            <p class=\"m-0\"><span class=\"little-title\">Status:</span> Open Ticket</p>
            <p class=\"m-0\"><span class=\"little-title\">Delivered:</span> N/A</p>
        </div>
    </div>
</div>
<div class=\"row mt-4\">
    <div class=\"pl-0 col-6 pr-4\">
        <div class=\"msger\">
            <header class=\"msger-header text-center little-title\">
                Design Desk
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
            <div class=\"msger-buttons d-flex justify-content-center\">
                <a href=\"#\" class=\"my-0 mx-4\">Give Video Feedback</a>
                <a href=\"#\" class=\"my-0 mx-4\">Give Screengrab Feedback</a>
            </div>
            <form class=\"msger-inputarea\">
                <input type=\"text\" class=\"msger-input\" placeholder=\"Enter your message...\">
                <button type=\"submit\" class=\"msger-send-btn\"><i class=\"fas fa-paper-plane\"></i></button>
            </form>
        </div>
    </div>
    <div class=\"col-6\" style=\"max-height: 700px; overflow-y: scroll; overflow-x: hidden;\">
        <div>
            <div class=\"\">
                <!-- Card content -->
                <div class=\"\">
                    {# <div class=\"d-flex justify-content-between\">
                        <div class=\"\">
                            <div class=\"little-title\">Placed</div>
                            <div>Date</div>
                            <div>By William</div>
                        </div>

                        <div class=\"mx-4\">
                            <div class=\"little-title\">Length</div>
                            <div>5m</div>
                            <div></div>
                        </div>
                        <div class=\"mx-4\">
                            <div class=\"little-title\">Total</div>
                            <div>\$5.00</div>
                            <div>Print receipt</div>
                        </div>
                    </div>
                    <hr> #}
                    <div class=\"field-set\" style=\"border-top: 1px solid #e1e1e1\">
                        <div class=\"row\">
                            <div class=\"col-3 little-title\">Title of the Request:</div>
                            <div class=\"col-7\">FAVICON for The Futures</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 little-title\">Description: </div>
                            <div class=\"col-7\">Hi. Can we please do this task right away. And pause the rest of all
                                my
                                other tasks until this one is finished.
                                Detail List:
                                1) Please create thumbnails with each of the pictures attached.
                                2) Please use do the thumbnails with the style/template similar to the ones being
                                done
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
                            <div class=\"col-3 little-title\">Specific Text (If Any): </div>
                            <div class=\"col-7\">None</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 little-title\">Design Size:</div>
                            <div class=\"col-7\">None</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 little-title\">Design Custom Size:</div>
                            <div class=\"col-7\">000 Points x 000 Points</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 little-title\">The Design is For:</div>
                            <div class=\"col-7\">Digital</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 little-title\">Audience You Are Trying to Reach:</div>
                            <div class=\"col-7\">Yoga Students / Yoga Teachers</div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col-3 little-title\">Links for inspiration:</div>
                            <div class=\"col-7\"><a href=\"\" target=\"_blank\">https://we.tl/t-wbMeDtCmLL</a></div>
                            <div class=\"col-2 text-right\"><a class=\"\" href=\"#\">Edit</a></div>
                        </div>
                    </div>
                    <div class=\"field-set\">
                        <div class=\"row\">
                            <div class=\"col little-title\">Archivo.docx</div>
                            <div class=\"col text-right\">
                                <a href=\"#\">Add</a>
                            </div>
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
