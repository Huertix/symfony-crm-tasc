<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_01b1eb9cc67f2b0dcdd28fc534bd4a989143c85b36aacb5eccd2ec09f9378b0b extends Twig_Template
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
        $__internal_e3311e03c1f796199b4cba5656d6cc7c2f1193838558f4a9b5c192f28f0956ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3311e03c1f796199b4cba5656d6cc7c2f1193838558f4a9b5c192f28f0956ee->enter($__internal_e3311e03c1f796199b4cba5656d6cc7c2f1193838558f4a9b5c192f28f0956ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_421fcb8e1bfbac6efc8fcf1607eb3baae3f8776213d97fbf853d6cf2d79c3941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421fcb8e1bfbac6efc8fcf1607eb3baae3f8776213d97fbf853d6cf2d79c3941->enter($__internal_421fcb8e1bfbac6efc8fcf1607eb3baae3f8776213d97fbf853d6cf2d79c3941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e3311e03c1f796199b4cba5656d6cc7c2f1193838558f4a9b5c192f28f0956ee->leave($__internal_e3311e03c1f796199b4cba5656d6cc7c2f1193838558f4a9b5c192f28f0956ee_prof);

        
        $__internal_421fcb8e1bfbac6efc8fcf1607eb3baae3f8776213d97fbf853d6cf2d79c3941->leave($__internal_421fcb8e1bfbac6efc8fcf1607eb3baae3f8776213d97fbf853d6cf2d79c3941_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
