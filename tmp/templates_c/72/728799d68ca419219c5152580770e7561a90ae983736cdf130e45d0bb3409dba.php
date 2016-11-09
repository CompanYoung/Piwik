<?php

/* _sparklineFooter.twig */
class __TwigTemplate_38df474732dd3ebb38517d3313e99f1e60b27d49ab08255418613d5b30248f52 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    \$(function () {
        initializeSparklines();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "_sparklineFooter.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<script type=\"text/javascript\">
    \$(function () {
        initializeSparklines();
    });
</script>
";
    }
}
