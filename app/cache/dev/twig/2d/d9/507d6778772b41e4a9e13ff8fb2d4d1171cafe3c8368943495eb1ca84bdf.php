<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_2dd9507d6778772b41e4a9e13ff8fb2d4d1171cafe3c8368943495eb1ca84bdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username"), "%confirmationUrl%" => $this->getContext($context, "confirmationUrl")), "FOSUserBundle");
        echo "
";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username"), "%confirmationUrl%" => $this->getContext($context, "confirmationUrl")), "FOSUserBundle");
        echo "
";
    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  153 => 45,  148 => 43,  127 => 37,  118 => 34,  114 => 33,  58 => 16,  124 => 33,  84 => 20,  244 => 75,  228 => 70,  211 => 64,  191 => 58,  185 => 55,  178 => 53,  172 => 51,  146 => 44,  137 => 39,  129 => 37,  113 => 33,  97 => 24,  81 => 19,  90 => 26,  70 => 19,  65 => 16,  23 => 3,  53 => 14,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 41,  132 => 51,  128 => 49,  107 => 29,  61 => 18,  38 => 8,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 73,  235 => 72,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 66,  208 => 63,  204 => 61,  179 => 69,  159 => 61,  143 => 56,  135 => 39,  119 => 42,  102 => 32,  71 => 35,  67 => 16,  63 => 15,  59 => 14,  94 => 23,  89 => 9,  85 => 25,  75 => 21,  68 => 14,  56 => 9,  87 => 25,  28 => 3,  93 => 28,  88 => 25,  78 => 21,  27 => 4,  46 => 11,  26 => 12,  44 => 11,  31 => 4,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 47,  151 => 45,  142 => 59,  138 => 54,  136 => 56,  121 => 35,  117 => 34,  105 => 30,  91 => 22,  62 => 17,  49 => 13,  24 => 7,  25 => 6,  21 => 3,  19 => 2,  79 => 22,  72 => 16,  69 => 25,  47 => 9,  40 => 10,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 38,  123 => 47,  120 => 32,  115 => 29,  111 => 27,  108 => 26,  101 => 29,  98 => 31,  96 => 27,  83 => 23,  74 => 14,  66 => 18,  55 => 14,  52 => 11,  50 => 10,  43 => 15,  41 => 9,  35 => 9,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 60,  193 => 73,  189 => 57,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 49,  162 => 57,  154 => 46,  149 => 51,  147 => 58,  144 => 42,  141 => 41,  133 => 38,  130 => 41,  125 => 36,  122 => 35,  116 => 41,  112 => 42,  109 => 31,  106 => 36,  103 => 35,  99 => 28,  95 => 28,  92 => 26,  86 => 8,  82 => 22,  80 => 23,  73 => 39,  64 => 14,  60 => 14,  57 => 15,  54 => 14,  51 => 15,  48 => 12,  45 => 10,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
