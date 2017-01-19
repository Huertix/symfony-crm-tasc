<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_963a90d168b83e10df88b4e828643e9fcb653b765d6b10e08501cad24828ddd4 extends Twig_Template
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
        $__internal_2afc54a4ac05b14d69d8fddeb484c0925fe48412d5faefa067977bc19fd6af97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2afc54a4ac05b14d69d8fddeb484c0925fe48412d5faefa067977bc19fd6af97->enter($__internal_2afc54a4ac05b14d69d8fddeb484c0925fe48412d5faefa067977bc19fd6af97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_8cd9012637b0dd81c3fcb6532647d320e7e33367ed270387e95680394f789ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd9012637b0dd81c3fcb6532647d320e7e33367ed270387e95680394f789ad0->enter($__internal_8cd9012637b0dd81c3fcb6532647d320e7e33367ed270387e95680394f789ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_2afc54a4ac05b14d69d8fddeb484c0925fe48412d5faefa067977bc19fd6af97->leave($__internal_2afc54a4ac05b14d69d8fddeb484c0925fe48412d5faefa067977bc19fd6af97_prof);

        
        $__internal_8cd9012637b0dd81c3fcb6532647d320e7e33367ed270387e95680394f789ad0->leave($__internal_8cd9012637b0dd81c3fcb6532647d320e7e33367ed270387e95680394f789ad0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
