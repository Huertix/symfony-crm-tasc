<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_24ce05d611dc7dcd07f24d3310cfea0b272d918b2802a41558be4535e6aa33df extends Twig_Template
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
        $__internal_bf1201932080a518ffe2813b7cbf5081831fb38688a75728e5d72eff4978afd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf1201932080a518ffe2813b7cbf5081831fb38688a75728e5d72eff4978afd2->enter($__internal_bf1201932080a518ffe2813b7cbf5081831fb38688a75728e5d72eff4978afd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_75604d2d749b95558ebaf3e72f98cb8e9bc0c4674ff126ba55f57f51ee75c383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75604d2d749b95558ebaf3e72f98cb8e9bc0c4674ff126ba55f57f51ee75c383->enter($__internal_75604d2d749b95558ebaf3e72f98cb8e9bc0c4674ff126ba55f57f51ee75c383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bf1201932080a518ffe2813b7cbf5081831fb38688a75728e5d72eff4978afd2->leave($__internal_bf1201932080a518ffe2813b7cbf5081831fb38688a75728e5d72eff4978afd2_prof);

        
        $__internal_75604d2d749b95558ebaf3e72f98cb8e9bc0c4674ff126ba55f57f51ee75c383->leave($__internal_75604d2d749b95558ebaf3e72f98cb8e9bc0c4674ff126ba55f57f51ee75c383_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
