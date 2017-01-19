<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_74b225c23315820d6deb744ce44d580381bc6c80203d84429c89218376a0c30a extends Twig_Template
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
        $__internal_d57646143faf033cbccbcb6aa65d42575f03a8b8f3f9e8fdcda59d7c5d441a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d57646143faf033cbccbcb6aa65d42575f03a8b8f3f9e8fdcda59d7c5d441a32->enter($__internal_d57646143faf033cbccbcb6aa65d42575f03a8b8f3f9e8fdcda59d7c5d441a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1103a99b39bcebf44621571052f3cc41e191f51be0282ef8bf9292633b339e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1103a99b39bcebf44621571052f3cc41e191f51be0282ef8bf9292633b339e1d->enter($__internal_1103a99b39bcebf44621571052f3cc41e191f51be0282ef8bf9292633b339e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d57646143faf033cbccbcb6aa65d42575f03a8b8f3f9e8fdcda59d7c5d441a32->leave($__internal_d57646143faf033cbccbcb6aa65d42575f03a8b8f3f9e8fdcda59d7c5d441a32_prof);

        
        $__internal_1103a99b39bcebf44621571052f3cc41e191f51be0282ef8bf9292633b339e1d->leave($__internal_1103a99b39bcebf44621571052f3cc41e191f51be0282ef8bf9292633b339e1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
