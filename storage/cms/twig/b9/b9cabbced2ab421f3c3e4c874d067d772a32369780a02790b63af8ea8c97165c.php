<?php

/* C:\xampp\htdocs\oceanideas/themes/demo/layouts/mainLayout.htm */
class __TwigTemplate_e1194042a98ac3ff51d340c93b6346a2ba86819d83981c57c9bae51dc0c8ebc8 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
\t<link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/fonts/flaticon/flaticon.css");
        echo "\">
    <link href=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/custom.css");
        echo "\" rel=\"stylesheet\">
\t<title>Oceanideas | ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
</head>
<body>
\t";
        // line 11
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 12
        echo "\t<nav class=\"navbar navbar-white navbar-fixed-bottom\" role=\"navigation\">
        <div class=\"container-fluid\">
            <!-- Toggle navigation -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#collapsed-navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logo.jpg");
        echo "\"></a>
            </div>
            <!-- Nav links -->
            <div class=\"collapse navbar-collapse\" id=\"collapsed-navbar\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"#\">About</a>
                    </li>
                    <li>
                        <a href=\"#\">Services</a>
                    </li>
                    <li>
                        <a href=\"#\">Portfolio</a>
                    </li>
                    <li>
                        <a href=\"#\">Contact</a>
                    </li>
                </ul>

                <div class=\"social\">    
                    <a href=\"#\"><i class=\"flaticon-facebook-logo\"></i></a>
                    <a href=\"#\"><i class=\"flaticon-twitter-logo-silhouette\"></i></a>
                    <a href=\"#\"><i class=\"flaticon-instagram-logo\"></i></a>               
                </div>
            </div>
            <!-- /.navbar-collapse -->
            
        </div>
        <!-- /.container -->
    </nav>
</body>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\oceanideas/themes/demo/layouts/mainLayout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 22,  42 => 12,  40 => 11,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
\t<link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/fonts/flaticon/flaticon.css'|theme}}\">
    <link href=\"{{ 'assets/css/custom.css'|theme }}\" rel=\"stylesheet\">
\t<title>Oceanideas | {{ this.page.title }}</title>
</head>
<body>
\t{% page %}
\t<nav class=\"navbar navbar-white navbar-fixed-bottom\" role=\"navigation\">
        <div class=\"container-fluid\">
            <!-- Toggle navigation -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#collapsed-navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{'home'|page}}\"><img src=\"{{'assets/images/logo.jpg'|theme}}\"></a>
            </div>
            <!-- Nav links -->
            <div class=\"collapse navbar-collapse\" id=\"collapsed-navbar\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"#\">About</a>
                    </li>
                    <li>
                        <a href=\"#\">Services</a>
                    </li>
                    <li>
                        <a href=\"#\">Portfolio</a>
                    </li>
                    <li>
                        <a href=\"#\">Contact</a>
                    </li>
                </ul>

                <div class=\"social\">    
                    <a href=\"#\"><i class=\"flaticon-facebook-logo\"></i></a>
                    <a href=\"#\"><i class=\"flaticon-twitter-logo-silhouette\"></i></a>
                    <a href=\"#\"><i class=\"flaticon-instagram-logo\"></i></a>               
                </div>
            </div>
            <!-- /.navbar-collapse -->
            
        </div>
        <!-- /.container -->
    </nav>
</body>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</html>", "C:\\xampp\\htdocs\\oceanideas/themes/demo/layouts/mainLayout.htm", "");
    }
}
