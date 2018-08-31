<?php

/* home.html.twig */
class __TwigTemplate_95494f4708ba75cd4734946818c387a5d619822ab51d363bcbd8227441060d99 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "</head>

<body>

\t<div class=\"homepage bigheader\" id=\"bigheader\">

\t\t<form  action=\"/search\" method=\"POST\">
\t\t\t<div class=\"searchlinediv\">
\t\t\t<div class=\"searchlinediv\"> 
\t\t\t\t<input name=\"search\" placeholder=\" &nbsp; What are you looking for?\" onkeydown=\"if (event.keyCode == 13) myFunction(this.value)\" type=\"text\" />
\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t 
\t</div>
 
<div class=\"content\">

\t<div class=\"slickslider\">
\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 48
            echo "
\t\t<div class=\"pure-g comments margintop15\">

\t\t\t

\t\t\t<div class=\"pure-u-1-6\">
\t\t\t\t<img alt=\"";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "items_name", array());
            echo " Image\" src=\"/img/books_covers/";
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "items_image", array());
            echo ".jpg\" class=\"homepageimage\" />
\t\t\t</div>
\t\t\t<div class=\"pure-u-5-6\">
\t\t\t\t<div class=\"commentsheader\"><a href=\"/";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "items_id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["comment"], "items_name", array())), array(" " => "-", "." => "", "/" => "", "+" => ""));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "items_name", array());
            echo "</a></div>
\t\t\t\t<div  class=\"stars\">
\t\t\t\t\t";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 60
                echo "\t\t\t\t\t\t★
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array()) < 5)) {
                // line 63
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (5 - twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array()))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 64
                    echo "\t\t\t\t\t\t\t☆
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t</div> 

\t\t\t\t<div class=\"username\"><strong>";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "author", array());
            echo "</strong></div>
\t\t\t\t<div class=\"feebacktext\">
\t\t\t\t


\t\t\t\t\t";
            // line 74
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", array())) > 200)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", array()), 0, 200) . "...")) : (twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["comment"], "text", array()), array("\\u2019" => "'", "\\u201d" => "", "\\u201c" => "", "\\u2013" => " ", "\\n" => "<br>"))));
            echo "
\t\t\t\t</div>
\t\t\t\t<span class=\"placeandtime\">";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "details", array());
            echo "</span>
\t\t\t</div>
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t</div>

\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t 
\t\t\t<div class=\"home artistphotosblock\">
\t\t\t\t<p class=\"photos\">

\t\t\t    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 90
            echo "\t\t\t    \t<a href=\"/";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["a"], "name", array())), array(" " => "-", "." => "", "/" => "", "+" => ""));
            echo "\"><img alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "name", array());
            echo "\" src=\"/img/books_covers/";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "image", array());
            echo ".jpg\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "name", array());
            echo "\" /></a>
\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "\t\t\t      
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>

</div>

<div class=\"darkfooter\">
\t<div class=\"content\">

\t\t<div class=\"pure-g\">
\t\t\t
\t\t\t<div class=\"pure-u-1-3\">

\t\t\t\t<b>Popular Categories</b>
\t\t\t\t<ul>
\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"/category/16\">Rock & Pop</a></li>
\t\t\t\t\t\t<li><a href=\"/category/18\">Musicals</a></li>
\t\t\t\t\t\t<li><a href=\"/category/19\">Rap & Hip-Hop</a></li>
\t\t\t\t\t\t<li><a href=\"/category/20\">Alternative Rock</a></li>
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div>


\t\t\t<div class=\"pure-u-1-3\">
\t\t\t\t
\t\t\t\t<b>Recently added</b>
\t\t\t\t<div class=\"slickslider\">
\t\t\t\t

\t\t\t\t";
        // line 125
        $context["cols"] = 3;
        // line 126
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["footer_links"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 127
            echo "\t\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) % ($context["cols"] ?? null)) == 0)) {
                // line 128
                echo "\t\t\t\t\t\t<div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t";
            }
            // line 131
            echo "
\t\t\t\t\t<li><a href=\"/";
            // line 132
            echo twig_get_attribute($this->env, $this->source, $context["f"], "id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["f"], "name", array())), array(" " => "-", "." => "", "/" => "", "+" => ""));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["f"], "name", array());
            echo "</a></li>

\t\t\t\t\t";
            // line 134
            if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) % ($context["cols"] ?? null)) == (($context["cols"] ?? null) - 1)) || twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()))) {
                // line 135
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 138
            echo "
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "
\t\t\t
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"pure-u-1-3\">

\t\t\t\t<b>More information</b>
\t\t\t\t<ul>
\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"/page/about\">About us</a></li>
\t\t\t\t\t\t<li><a href=\"/page/privacy-policy\">Privacy Policy</a></li>
\t\t\t\t\t\t<li><a href=\"/page/contact\">Contact</a></li>
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div>

\t\t</div>

\t</div>
</div>

<script>
    \$(document).ready(function(){
\t  \$('.slickslider').slick({
\t\tslidesToShow: 1,
\t\tslidesToScroll: 1,
\t\tautoplay: true,
\t\tautoplaySpeed: 2000,
\t\tdots: false,
\t    prevArrow: false,
\t    nextArrow: false
\t  });
\t});

\tdocument.getElementById(\"bigheader\").style.height = \"100vh\";
</script>

</body>

</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "FansVoice. We need to hear your voice";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/pure-min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/pure-extend.css\">
        <!--[if lte IE 8]>
            <link rel=\"stylesheet\" href=\"/css/grids-responsive-old-ie-min.css\">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/grids-responsive-min.css\">
        <!--<![endif]-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/tickets.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/tabs.css\">

\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/slick/slick.css\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/slick/slick-theme.css\"/>

\t\t<script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
\t\t<script src=\"/js/slick/slick.min.js\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 10,  327 => 9,  321 => 5,  275 => 140,  260 => 138,  255 => 135,  253 => 134,  244 => 132,  241 => 131,  236 => 128,  233 => 127,  215 => 126,  213 => 125,  178 => 92,  161 => 90,  157 => 89,  147 => 81,  136 => 76,  131 => 74,  123 => 69,  119 => 67,  116 => 66,  109 => 64,  104 => 63,  101 => 62,  94 => 60,  90 => 59,  81 => 57,  73 => 54,  65 => 48,  61 => 47,  40 => 28,  38 => 9,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "/home/dmytro/dev/php/bookmaster/src/views/home.html.twig");
    }
}
