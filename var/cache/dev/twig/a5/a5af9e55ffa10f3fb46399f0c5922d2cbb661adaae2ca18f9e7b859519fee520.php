<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d4c1daa8c0e1641d3734aae846d9e064633b4505286a6ecbf5d6f6b56cd8b120 extends Twig_Template
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
        $__internal_c1d2318cff4a45fe7e2fb17577f0314256ef105c028f55b3c5737624a7dd45b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d2318cff4a45fe7e2fb17577f0314256ef105c028f55b3c5737624a7dd45b0->enter($__internal_c1d2318cff4a45fe7e2fb17577f0314256ef105c028f55b3c5737624a7dd45b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_d434cee07cd293e4d8b5f21279454e9423c47a082e6d621d0ef2130e8fd7315c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d434cee07cd293e4d8b5f21279454e9423c47a082e6d621d0ef2130e8fd7315c->enter($__internal_d434cee07cd293e4d8b5f21279454e9423c47a082e6d621d0ef2130e8fd7315c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_c1d2318cff4a45fe7e2fb17577f0314256ef105c028f55b3c5737624a7dd45b0->leave($__internal_c1d2318cff4a45fe7e2fb17577f0314256ef105c028f55b3c5737624a7dd45b0_prof);

        
        $__internal_d434cee07cd293e4d8b5f21279454e9423c47a082e6d621d0ef2130e8fd7315c->leave($__internal_d434cee07cd293e4d8b5f21279454e9423c47a082e6d621d0ef2130e8fd7315c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
