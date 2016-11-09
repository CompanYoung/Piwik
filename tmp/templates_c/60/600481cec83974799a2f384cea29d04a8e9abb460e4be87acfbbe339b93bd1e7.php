<?php

/* @VisitsSummary/getSparklines.twig */
class __TwigTemplate_f9f89bef2bed0542510da0187aef7be13a1bd79797a210c5965f67d2a669d370 extends Twig_Template
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
        $this->loadTemplate("@VisitsSummary/_sparklines.twig", "@VisitsSummary/getSparklines.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@VisitsSummary/getSparklines.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% include \"@VisitsSummary/_sparklines.twig\" %}";
    }
}
