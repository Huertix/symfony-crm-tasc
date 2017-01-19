<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5f70ed2181e768d9bec6ac271e7705c591be5e5fc0b18a597166ad26ad26d4d3 extends Twig_Template
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
        $__internal_7c5ba8116eac413a5a6d825b0627f48ba20bf0c2f58c9d7961e2de09b6ca77be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5ba8116eac413a5a6d825b0627f48ba20bf0c2f58c9d7961e2de09b6ca77be->enter($__internal_7c5ba8116eac413a5a6d825b0627f48ba20bf0c2f58c9d7961e2de09b6ca77be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9419a532c1cbc423ac25078db17d1463874134c9b1e0aae7bfb6d1502427b46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9419a532c1cbc423ac25078db17d1463874134c9b1e0aae7bfb6d1502427b46c->enter($__internal_9419a532c1cbc423ac25078db17d1463874134c9b1e0aae7bfb6d1502427b46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7c5ba8116eac413a5a6d825b0627f48ba20bf0c2f58c9d7961e2de09b6ca77be->leave($__internal_7c5ba8116eac413a5a6d825b0627f48ba20bf0c2f58c9d7961e2de09b6ca77be_prof);

        
        $__internal_9419a532c1cbc423ac25078db17d1463874134c9b1e0aae7bfb6d1502427b46c->leave($__internal_9419a532c1cbc423ac25078db17d1463874134c9b1e0aae7bfb6d1502427b46c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
