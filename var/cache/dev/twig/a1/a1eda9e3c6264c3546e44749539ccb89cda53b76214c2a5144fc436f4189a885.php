<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_677dc3565d57a76b9359f09f749829427f4434400c643ce83bffa56e08a09f9b extends Twig_Template
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
        $__internal_5a8f7aac1ead3382da80f1c6f00970d76b3ea8fc637deaccf5d1a631bb5a2c16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8f7aac1ead3382da80f1c6f00970d76b3ea8fc637deaccf5d1a631bb5a2c16->enter($__internal_5a8f7aac1ead3382da80f1c6f00970d76b3ea8fc637deaccf5d1a631bb5a2c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_cd8d09ba2e95bd69bafe7563c1fe7a0ee30868bd9258f84d94dd1521ffb3dc33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8d09ba2e95bd69bafe7563c1fe7a0ee30868bd9258f84d94dd1521ffb3dc33->enter($__internal_cd8d09ba2e95bd69bafe7563c1fe7a0ee30868bd9258f84d94dd1521ffb3dc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_5a8f7aac1ead3382da80f1c6f00970d76b3ea8fc637deaccf5d1a631bb5a2c16->leave($__internal_5a8f7aac1ead3382da80f1c6f00970d76b3ea8fc637deaccf5d1a631bb5a2c16_prof);

        
        $__internal_cd8d09ba2e95bd69bafe7563c1fe7a0ee30868bd9258f84d94dd1521ffb3dc33->leave($__internal_cd8d09ba2e95bd69bafe7563c1fe7a0ee30868bd9258f84d94dd1521ffb3dc33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
