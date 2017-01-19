<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_531806c14012381e0d41c0763a45811f5491acc2864343c248e6e1869a0c46f6 extends Twig_Template
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
        $__internal_4814e3cd3455e6f513c99dda90ad208c894f4b4abd4c426bd8f8647b32ca099f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4814e3cd3455e6f513c99dda90ad208c894f4b4abd4c426bd8f8647b32ca099f->enter($__internal_4814e3cd3455e6f513c99dda90ad208c894f4b4abd4c426bd8f8647b32ca099f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_be3338abca2bbb34c85efa3629149aa3e1dc2578189a5773a3f84f3d73754ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3338abca2bbb34c85efa3629149aa3e1dc2578189a5773a3f84f3d73754ba6->enter($__internal_be3338abca2bbb34c85efa3629149aa3e1dc2578189a5773a3f84f3d73754ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4814e3cd3455e6f513c99dda90ad208c894f4b4abd4c426bd8f8647b32ca099f->leave($__internal_4814e3cd3455e6f513c99dda90ad208c894f4b4abd4c426bd8f8647b32ca099f_prof);

        
        $__internal_be3338abca2bbb34c85efa3629149aa3e1dc2578189a5773a3f84f3d73754ba6->leave($__internal_be3338abca2bbb34c85efa3629149aa3e1dc2578189a5773a3f84f3d73754ba6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
