<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_f64cb1e13b00a32cd8d39681c8fe7b2613b9bfc2d9d9aba6a8671f6253ff557f extends Twig_Template
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
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($this->getContext($context, "group"), "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "group"), "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  124 => 33,  84 => 20,  244 => 75,  228 => 70,  211 => 64,  191 => 58,  185 => 55,  178 => 53,  172 => 51,  146 => 44,  137 => 39,  129 => 37,  113 => 33,  97 => 24,  81 => 19,  90 => 26,  70 => 17,  65 => 16,  23 => 3,  53 => 22,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 29,  61 => 18,  38 => 6,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 73,  235 => 72,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 66,  208 => 63,  204 => 61,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 35,  67 => 16,  63 => 15,  59 => 14,  94 => 23,  89 => 9,  85 => 25,  75 => 18,  68 => 14,  56 => 9,  87 => 25,  28 => 3,  93 => 28,  88 => 21,  78 => 21,  27 => 4,  46 => 11,  26 => 6,  44 => 8,  31 => 4,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 47,  151 => 45,  142 => 59,  138 => 54,  136 => 56,  121 => 35,  117 => 34,  105 => 40,  91 => 22,  62 => 19,  49 => 19,  24 => 3,  25 => 5,  21 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 11,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 32,  115 => 29,  111 => 27,  108 => 26,  101 => 27,  98 => 31,  96 => 27,  83 => 25,  74 => 14,  66 => 15,  55 => 14,  52 => 11,  50 => 10,  43 => 15,  41 => 10,  35 => 9,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 60,  193 => 73,  189 => 57,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 49,  162 => 57,  154 => 46,  149 => 51,  147 => 58,  144 => 49,  141 => 41,  133 => 38,  130 => 41,  125 => 36,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 35,  99 => 28,  95 => 28,  92 => 21,  86 => 8,  82 => 22,  80 => 23,  73 => 39,  64 => 14,  60 => 14,  57 => 13,  54 => 12,  51 => 15,  48 => 11,  45 => 10,  42 => 8,  39 => 7,  36 => 9,  33 => 6,  30 => 6,);
    }
}
