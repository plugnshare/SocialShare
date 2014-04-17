<?php

/* AcmeDemoBundle:Secured:helloadmin.html.twig */
class __TwigTemplate_3aff049420f29ffb423720f043addf57e558d987c93e67f174efb4377f3edccc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . $this->getContext($context, "name")), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo " secured for Admins only!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:helloadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  76 => 17,  153 => 45,  148 => 43,  127 => 28,  118 => 34,  114 => 33,  58 => 17,  124 => 33,  84 => 29,  244 => 75,  228 => 70,  211 => 64,  191 => 58,  185 => 55,  178 => 53,  172 => 51,  146 => 44,  137 => 39,  129 => 37,  113 => 33,  97 => 24,  81 => 19,  90 => 32,  70 => 19,  65 => 16,  23 => 4,  53 => 10,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 41,  132 => 51,  128 => 49,  107 => 29,  61 => 12,  38 => 6,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 73,  235 => 72,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 66,  208 => 63,  204 => 61,  179 => 69,  159 => 61,  143 => 56,  135 => 39,  119 => 42,  102 => 17,  71 => 35,  67 => 16,  63 => 15,  59 => 13,  94 => 34,  89 => 9,  85 => 25,  75 => 21,  68 => 14,  56 => 11,  87 => 25,  28 => 3,  93 => 28,  88 => 31,  78 => 26,  27 => 5,  46 => 11,  26 => 9,  44 => 11,  31 => 3,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 47,  151 => 45,  142 => 59,  138 => 54,  136 => 56,  121 => 35,  117 => 19,  105 => 18,  91 => 22,  62 => 17,  49 => 13,  24 => 7,  25 => 35,  21 => 3,  19 => 2,  79 => 22,  72 => 16,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 38,  123 => 47,  120 => 20,  115 => 29,  111 => 27,  108 => 19,  101 => 29,  98 => 31,  96 => 27,  83 => 23,  74 => 14,  66 => 18,  55 => 14,  52 => 14,  50 => 10,  43 => 11,  41 => 10,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 60,  193 => 73,  189 => 57,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 49,  162 => 57,  154 => 46,  149 => 51,  147 => 58,  144 => 42,  141 => 42,  133 => 38,  130 => 41,  125 => 36,  122 => 35,  116 => 41,  112 => 42,  109 => 31,  106 => 36,  103 => 35,  99 => 28,  95 => 28,  92 => 26,  86 => 8,  82 => 28,  80 => 23,  73 => 16,  64 => 13,  60 => 14,  57 => 12,  54 => 14,  51 => 15,  48 => 9,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
