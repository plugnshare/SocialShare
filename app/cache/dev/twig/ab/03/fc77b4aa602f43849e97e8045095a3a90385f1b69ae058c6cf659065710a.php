<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_ab03fc77b4aa602f43849e97e8045095a3a90385f1b69ae058c6cf659065710a extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    -moz-border-radius: 16px;
    -webkit-border-radius: 16px;
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  161 => 63,  134 => 54,  385 => 160,  382 => 159,  376 => 158,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  351 => 150,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  327 => 140,  324 => 139,  317 => 135,  311 => 131,  308 => 130,  303 => 128,  292 => 121,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 107,  261 => 105,  255 => 103,  251 => 101,  249 => 100,  242 => 96,  237 => 93,  231 => 89,  225 => 87,  223 => 86,  218 => 83,  212 => 79,  206 => 77,  190 => 68,  180 => 63,  174 => 59,  100 => 39,  795 => 477,  792 => 476,  781 => 474,  777 => 473,  773 => 471,  760 => 470,  734 => 464,  731 => 463,  712 => 461,  695 => 460,  691 => 458,  687 => 457,  683 => 456,  679 => 455,  675 => 454,  671 => 453,  667 => 452,  664 => 451,  662 => 450,  645 => 449,  634 => 447,  619 => 441,  614 => 439,  610 => 438,  607 => 437,  605 => 436,  591 => 434,  586 => 431,  552 => 399,  534 => 396,  517 => 395,  514 => 394,  512 => 393,  507 => 391,  502 => 389,  202 => 94,  188 => 90,  170 => 84,  165 => 83,  110 => 22,  76 => 31,  153 => 77,  148 => 46,  127 => 60,  118 => 49,  114 => 33,  58 => 25,  124 => 33,  84 => 40,  244 => 97,  228 => 88,  211 => 64,  191 => 67,  185 => 66,  178 => 66,  172 => 64,  146 => 44,  137 => 39,  129 => 37,  113 => 48,  97 => 23,  81 => 19,  90 => 42,  70 => 15,  65 => 16,  23 => 4,  53 => 10,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 147,  337 => 103,  322 => 138,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 125,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 58,  132 => 51,  128 => 49,  107 => 27,  61 => 12,  38 => 7,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 73,  235 => 72,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 66,  208 => 63,  204 => 76,  179 => 69,  159 => 53,  143 => 43,  135 => 62,  119 => 42,  102 => 40,  71 => 35,  67 => 24,  63 => 18,  59 => 13,  94 => 34,  89 => 9,  85 => 32,  75 => 21,  68 => 30,  56 => 11,  87 => 34,  28 => 3,  93 => 28,  88 => 20,  78 => 26,  27 => 3,  46 => 13,  26 => 11,  44 => 20,  31 => 3,  196 => 92,  183 => 82,  171 => 58,  166 => 56,  163 => 82,  158 => 62,  156 => 47,  151 => 59,  142 => 59,  138 => 54,  136 => 71,  121 => 50,  117 => 19,  105 => 18,  91 => 33,  62 => 27,  49 => 14,  24 => 7,  25 => 35,  21 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 136,  157 => 56,  145 => 74,  139 => 63,  131 => 61,  123 => 35,  120 => 20,  115 => 29,  111 => 47,  108 => 19,  101 => 43,  98 => 45,  96 => 37,  83 => 33,  74 => 27,  66 => 18,  55 => 16,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 6,  32 => 5,  29 => 3,  209 => 78,  203 => 78,  199 => 73,  193 => 69,  189 => 57,  187 => 67,  182 => 87,  176 => 86,  173 => 85,  168 => 57,  164 => 49,  162 => 54,  154 => 60,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 38,  130 => 39,  125 => 51,  122 => 35,  116 => 31,  112 => 42,  109 => 52,  106 => 51,  103 => 25,  99 => 28,  95 => 28,  92 => 21,  86 => 8,  82 => 19,  80 => 32,  73 => 16,  64 => 23,  60 => 14,  57 => 12,  54 => 14,  51 => 15,  48 => 9,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
