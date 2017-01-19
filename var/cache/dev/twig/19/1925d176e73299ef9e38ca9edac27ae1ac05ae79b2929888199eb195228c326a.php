<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b87617d8262ca5c3d1a474b959f7dd078d78c594eee4f1a75c5ed7b4bd027e67 extends Twig_Template
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
        $__internal_3ad178d7f39965efd7147947e3fc6158fe8098e515acbbc94f92c2455249ba71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad178d7f39965efd7147947e3fc6158fe8098e515acbbc94f92c2455249ba71->enter($__internal_3ad178d7f39965efd7147947e3fc6158fe8098e515acbbc94f92c2455249ba71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_d246eac7653518d3171de68a433771fecfbb95177089d29042d97b94b38f9ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d246eac7653518d3171de68a433771fecfbb95177089d29042d97b94b38f9ec0->enter($__internal_d246eac7653518d3171de68a433771fecfbb95177089d29042d97b94b38f9ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3ad178d7f39965efd7147947e3fc6158fe8098e515acbbc94f92c2455249ba71->leave($__internal_3ad178d7f39965efd7147947e3fc6158fe8098e515acbbc94f92c2455249ba71_prof);

        
        $__internal_d246eac7653518d3171de68a433771fecfbb95177089d29042d97b94b38f9ec0->leave($__internal_d246eac7653518d3171de68a433771fecfbb95177089d29042d97b94b38f9ec0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
