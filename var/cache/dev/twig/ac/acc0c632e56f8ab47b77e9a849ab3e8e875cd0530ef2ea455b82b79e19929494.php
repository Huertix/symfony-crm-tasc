<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_bb23f0f962eec74b0ffe126271b68dc5dac6b09b4e526c81f97fb52805ecb0dd extends Twig_Template
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
        $__internal_f60a600c256500d3f90f544df23e4038a122fbb23b4a69f340f74f3e7c0ff708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60a600c256500d3f90f544df23e4038a122fbb23b4a69f340f74f3e7c0ff708->enter($__internal_f60a600c256500d3f90f544df23e4038a122fbb23b4a69f340f74f3e7c0ff708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_c807529d5e3c9de21d1be8479e6e5f90661df2bcebbbd22960d3ea9cf87086f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c807529d5e3c9de21d1be8479e6e5f90661df2bcebbbd22960d3ea9cf87086f7->enter($__internal_c807529d5e3c9de21d1be8479e6e5f90661df2bcebbbd22960d3ea9cf87086f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f60a600c256500d3f90f544df23e4038a122fbb23b4a69f340f74f3e7c0ff708->leave($__internal_f60a600c256500d3f90f544df23e4038a122fbb23b4a69f340f74f3e7c0ff708_prof);

        
        $__internal_c807529d5e3c9de21d1be8479e6e5f90661df2bcebbbd22960d3ea9cf87086f7->leave($__internal_c807529d5e3c9de21d1be8479e6e5f90661df2bcebbbd22960d3ea9cf87086f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
