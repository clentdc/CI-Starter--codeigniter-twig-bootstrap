<?php

/* includes/footer.html */
class __TwigTemplate_b1dc0560945a2f31253d5a4e47964280 extends Twig_Template
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
        echo "
<!-- end of right column content -->
<!-- footer section -->

<!-- end of footer section -->


\t<link href=\"";
        // line 8
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "public/css/bootstrap.min.css\" rel=\"stylesheet\">
\t<link href=\"";
        // line 9
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "public/css/bootstrap-responsive.min.css\" rel=\"stylesheet\">
\t<link href=\"";
        // line 10
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "public/css/custom.css\" rel=\"stylesheet\">

\t<script src=\"";
        // line 12
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "public/js/jquery.min.js\"></script>
\t<script src=\"";
        // line 13
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "public/js/lodash.min.js\"></script>
\t<script src=\"";
        // line 14
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "public/js/bootstrap.min.js\"></script>
\t<script src=\"";
        // line 15
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "public/js/custom.js\"></script>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "includes/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  54 => 14,  49 => 13,  44 => 12,  38 => 10,  33 => 9,  28 => 8,  30 => 10,  91 => 46,  80 => 37,  74 => 36,  68 => 34,  65 => 33,  53 => 24,  48 => 23,  34 => 13,  21 => 2,  19 => 1,);
    }
}
