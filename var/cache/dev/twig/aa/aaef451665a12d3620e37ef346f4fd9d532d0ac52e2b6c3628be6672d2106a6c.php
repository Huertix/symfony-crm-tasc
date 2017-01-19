<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_e058bc875ed6d876f2f1792443b157d2b5ed79b88bb5577664029218482f801a extends Twig_Template
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
        $__internal_d7353ce06dfc8fb9ad28b1f37f8ffd381a64b39b0db93d7b097387285de75262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7353ce06dfc8fb9ad28b1f37f8ffd381a64b39b0db93d7b097387285de75262->enter($__internal_d7353ce06dfc8fb9ad28b1f37f8ffd381a64b39b0db93d7b097387285de75262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_82505da4d1c3a24190a572ef8365ecc703993b4924b915685fedd1177f4e7ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82505da4d1c3a24190a572ef8365ecc703993b4924b915685fedd1177f4e7ff2->enter($__internal_82505da4d1c3a24190a572ef8365ecc703993b4924b915685fedd1177f4e7ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_d7353ce06dfc8fb9ad28b1f37f8ffd381a64b39b0db93d7b097387285de75262->leave($__internal_d7353ce06dfc8fb9ad28b1f37f8ffd381a64b39b0db93d7b097387285de75262_prof);

        
        $__internal_82505da4d1c3a24190a572ef8365ecc703993b4924b915685fedd1177f4e7ff2->leave($__internal_82505da4d1c3a24190a572ef8365ecc703993b4924b915685fedd1177f4e7ff2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
