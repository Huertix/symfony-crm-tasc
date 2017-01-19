<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d07cc03dba3557aca3f1e726839a70ca791164ae139a971ae596cf420e8df668 extends Twig_Template
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
        $__internal_02945657129c553c6e402f6220fd007e58f506703e83cc7994f55b5e539f7fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02945657129c553c6e402f6220fd007e58f506703e83cc7994f55b5e539f7fd3->enter($__internal_02945657129c553c6e402f6220fd007e58f506703e83cc7994f55b5e539f7fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_860fa518260232079366725e9ed26b9230183272afbdc52c95053a1d7dd84b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860fa518260232079366725e9ed26b9230183272afbdc52c95053a1d7dd84b24->enter($__internal_860fa518260232079366725e9ed26b9230183272afbdc52c95053a1d7dd84b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_02945657129c553c6e402f6220fd007e58f506703e83cc7994f55b5e539f7fd3->leave($__internal_02945657129c553c6e402f6220fd007e58f506703e83cc7994f55b5e539f7fd3_prof);

        
        $__internal_860fa518260232079366725e9ed26b9230183272afbdc52c95053a1d7dd84b24->leave($__internal_860fa518260232079366725e9ed26b9230183272afbdc52c95053a1d7dd84b24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
