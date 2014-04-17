<?php

/* WebProfilerBundle:Profiler:search.html.twig */
class __TwigTemplate_3c3c6630c51399a82e2684df456de16dd94082ab81171571e176454ddb986a20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"search clearfix\" id=\"searchBar\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle;\" width=\"16\" height=\"16\" alt=\"Search\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAC2ElEQVR42u3XvUtbYRQG8JcggSxSiqlQoXUQUfEDnDoIEkK30ulKh0REFEOkitaIaBUU4gchQ8BBGyKGIC79B7rVxaGlm+JooYtQCq2U0oq9OX0eOBeCRXrf69DFwI9z73nPeTlJbrxXIyL/1e0AfyWueTVAEgrwGt5qLGge675e1gPUQaqxsfEgmUyerq6uft3e3v61v78vjDxnnuusYz3WTI0bDXAnHA6/Gh0d/bS7u+vu7e3JdbjOOtazDzmjAg9QF41Gy+vr6+eVSkX8Yj372I9zA8EGiEQi6bW1tfNyuSyK7/II0YEmMBodzYuHfezXmkADNAwNDX3c2dkRKpVKl4hZCIO5SvNZ1LleD/uxzz0c2w/Q0tLyAheYWywWRT0H4wPrhNjf1taWYd56gOHh4XdbW1tC+Xz+CNH4pfVCuo/9AAsLC182NzeFVlZWUojGL60X0n3sB8BFdFEoFISWlpYeIhq/tF5I97EfIJfLufgohZqbm+8jGr+0Xkj3sR9geXn5x8bGhlBHR8czROOX1gvpPvYDzM3NnWSzWaFYLPYG0fil9UK6j/0As7OzWVxMQul0+ht6nuDY/AvrWO/16j7WA/BCerC4uHiJKNTX13eid7wQzs1VzHOddV4P+n9zHwj0l5BfQ35+fl4Ix248Hj8NhUIlLPXDXeQNI8+Z5zrrvJ6BgYEzrMVxHGgAfg3hmZmZD4jiwd3ue3d393F9ff0hnwcYec4812tlMplqb2/vMepigW/H09PTUXgPEsTU1FS1p6dHhwj4QDI5ORmBHFyAXEfXK+DW5icmJqpdXV21Q9g/ko2Pj1MTvIQDOAPReKD5Jq1zwAVR/CVVOzs7OUR/oAFSqZQtB1wQz9jYWLW9vf0I2z2yHgAXWRAOuCCekZGRamtr66HtALw9B+WAC+JJJBI/rQfA081NOOCCEJ6gP1sPMDg4eFNP4Uw9vv3X7HaAq/4AszA5PJFqlwgAAAAASUVORK5CYII=\" />
        Search
    </h3>
    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_search"), "html", null, true);
        echo "\" method=\"get\">
        <label for=\"ip\">IP</label>
        <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "ip"), "html", null, true);
        echo "\" />
        <div class=\"clear-fix\"></div>
        <label for=\"method\">Method</label>
        <select name=\"method\" id=\"method\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "", 1 => "DELETE", 2 => "GET", 3 => "HEAD", 4 => "PATCH", 5 => "POST", 6 => "PUT"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                <option";
            echo ((($this->getContext($context, "m") == $this->getContext($context, "method"))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "m"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </select>
        <div class=\"clear-fix\"></div>
        <label for=\"url\">URL</label>
        <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
        echo "\" />
        <div class=\"clear-fix\"></div>
        <label for=\"token\">Token</label>
        <input type=\"text\" name=\"token\" id=\"token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" />
        <div class=\"clear-fix\"></div>
        <label for=\"start\">From</label>
        <input type=\"text\" name=\"start\" id=\"start\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "start"), "html", null, true);
        echo "\" />
        <div class=\"clear-fix\"></div>
        <label for=\"end\">Until</label>
        <input type=\"text\" name=\"end\" id=\"end\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getContext($context, "end"), "html", null, true);
        echo "\" />
        <div class=\"clear-fix\"></div>
        <label for=\"limit\">Limit</label>
        <select name=\"limit\" id=\"limit\">
            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 10, 1 => 50, 2 => 100));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 32
            echo "                <option";
            echo ((($this->getContext($context, "l") == $this->getContext($context, "limit"))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "l"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </select>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">SEARCH</span>
                </span>
            </span>
        </button>
        <div class=\"clear-fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  353 => 121,  344 => 119,  332 => 116,  321 => 112,  318 => 111,  315 => 110,  306 => 107,  300 => 105,  297 => 104,  291 => 102,  274 => 97,  263 => 95,  104 => 32,  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  369 => 165,  348 => 153,  334 => 145,  293 => 118,  288 => 101,  276 => 113,  271 => 111,  262 => 104,  259 => 103,  248 => 96,  195 => 71,  150 => 55,  175 => 65,  161 => 63,  134 => 47,  385 => 160,  382 => 159,  376 => 169,  367 => 156,  363 => 126,  359 => 153,  357 => 123,  354 => 151,  351 => 120,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  327 => 114,  324 => 113,  317 => 135,  311 => 131,  308 => 130,  303 => 106,  292 => 121,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  251 => 97,  249 => 100,  242 => 96,  237 => 93,  231 => 83,  225 => 87,  223 => 86,  218 => 83,  212 => 78,  206 => 77,  190 => 76,  180 => 63,  174 => 65,  100 => 39,  795 => 477,  792 => 476,  781 => 474,  777 => 473,  773 => 471,  760 => 470,  734 => 464,  731 => 463,  712 => 461,  695 => 460,  691 => 458,  687 => 457,  683 => 456,  679 => 455,  675 => 454,  671 => 453,  667 => 452,  664 => 451,  662 => 450,  645 => 449,  634 => 447,  619 => 441,  614 => 439,  610 => 438,  607 => 437,  605 => 436,  591 => 434,  586 => 431,  552 => 399,  534 => 396,  517 => 395,  514 => 394,  512 => 393,  507 => 391,  502 => 389,  202 => 77,  188 => 68,  170 => 84,  165 => 60,  110 => 22,  76 => 27,  153 => 56,  148 => 46,  127 => 60,  118 => 49,  114 => 33,  58 => 18,  124 => 33,  84 => 27,  244 => 97,  228 => 88,  211 => 64,  191 => 69,  185 => 74,  178 => 66,  172 => 62,  146 => 44,  137 => 39,  129 => 37,  113 => 38,  97 => 23,  81 => 23,  90 => 37,  70 => 24,  65 => 16,  23 => 4,  53 => 15,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 183,  407 => 131,  402 => 130,  398 => 129,  393 => 178,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 161,  360 => 109,  355 => 157,  341 => 118,  337 => 103,  322 => 138,  314 => 99,  312 => 109,  309 => 108,  305 => 125,  298 => 121,  294 => 90,  285 => 115,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  229 => 87,  220 => 70,  214 => 69,  177 => 64,  169 => 60,  140 => 58,  132 => 51,  128 => 49,  107 => 27,  61 => 23,  38 => 12,  273 => 112,  269 => 94,  254 => 92,  243 => 92,  240 => 92,  238 => 73,  235 => 85,  230 => 82,  227 => 81,  224 => 81,  221 => 85,  219 => 84,  217 => 66,  208 => 63,  204 => 76,  179 => 69,  159 => 53,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  94 => 34,  89 => 30,  85 => 24,  75 => 24,  68 => 30,  56 => 16,  87 => 32,  28 => 3,  93 => 38,  88 => 25,  78 => 26,  27 => 3,  46 => 13,  26 => 6,  44 => 9,  31 => 8,  196 => 92,  183 => 82,  171 => 58,  166 => 56,  163 => 82,  158 => 62,  156 => 62,  151 => 59,  142 => 59,  138 => 54,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 35,  62 => 24,  49 => 11,  24 => 3,  25 => 35,  21 => 2,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 11,  40 => 8,  37 => 7,  22 => 2,  246 => 136,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 20,  115 => 29,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 31,  74 => 27,  66 => 25,  55 => 13,  52 => 12,  50 => 18,  43 => 9,  41 => 8,  35 => 5,  32 => 7,  29 => 3,  209 => 79,  203 => 78,  199 => 73,  193 => 69,  189 => 57,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 49,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 42,  141 => 51,  133 => 38,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 51,  103 => 25,  99 => 31,  95 => 34,  92 => 27,  86 => 8,  82 => 19,  80 => 29,  73 => 20,  64 => 21,  60 => 14,  57 => 20,  54 => 19,  51 => 13,  48 => 9,  45 => 10,  42 => 13,  39 => 10,  36 => 8,  33 => 6,  30 => 5,);
    }
}
