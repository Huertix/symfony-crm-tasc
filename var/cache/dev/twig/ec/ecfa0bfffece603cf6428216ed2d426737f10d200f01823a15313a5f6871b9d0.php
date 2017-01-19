<?php

/* clients/list.html.twig */
class __TwigTemplate_60d620612aae9996dd382daf8506381939a4cc85cbbd9b179f350de14ae0df87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5494de0c6372079ac131bdbdda32d643c2d5abba440d7b010ba0cf9d3f89f0e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5494de0c6372079ac131bdbdda32d643c2d5abba440d7b010ba0cf9d3f89f0e2->enter($__internal_5494de0c6372079ac131bdbdda32d643c2d5abba440d7b010ba0cf9d3f89f0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/list.html.twig"));

        $__internal_4bca00e83f415cb6be2e81b0582bf1c6996792e28000d1a002e6e966dedd6f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bca00e83f415cb6be2e81b0582bf1c6996792e28000d1a002e6e966dedd6f52->enter($__internal_4bca00e83f415cb6be2e81b0582bf1c6996792e28000d1a002e6e966dedd6f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5494de0c6372079ac131bdbdda32d643c2d5abba440d7b010ba0cf9d3f89f0e2->leave($__internal_5494de0c6372079ac131bdbdda32d643c2d5abba440d7b010ba0cf9d3f89f0e2_prof);

        
        $__internal_4bca00e83f415cb6be2e81b0582bf1c6996792e28000d1a002e6e966dedd6f52->leave($__internal_4bca00e83f415cb6be2e81b0582bf1c6996792e28000d1a002e6e966dedd6f52_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_612272e2afa5294125cb04bd27fccbf4e15c0c2ce1167b9a14e5aef0309b1105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_612272e2afa5294125cb04bd27fccbf4e15c0c2ce1167b9a14e5aef0309b1105->enter($__internal_612272e2afa5294125cb04bd27fccbf4e15c0c2ce1167b9a14e5aef0309b1105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d8798749ceed920b742e68a7b7ee531aa38549e3c2bfda04e613908129e5a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8798749ceed920b742e68a7b7ee531aa38549e3c2bfda04e613908129e5a8c->enter($__internal_1d8798749ceed920b742e68a7b7ee531aa38549e3c2bfda04e613908129e5a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"content\">
        <input type=\"text\" onkeyup=\"filter(this)\" name=\"search\" />
        <input type=\"text\" name=\"list_matched\"/>
    </div>
    <table class=\"table table-striped\" id=\"clients_list\">
        <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 17
            echo "            <tr class=\"client_row\">
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "codigo", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clients_show", array("clientCode" => $this->getAttribute($context["client"], "codigo", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nombre", array()), "html", null, true);
            echo "</a></td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tbody>
    </table>
";
        
        $__internal_1d8798749ceed920b742e68a7b7ee531aa38549e3c2bfda04e613908129e5a8c->leave($__internal_1d8798749ceed920b742e68a7b7ee531aa38549e3c2bfda04e613908129e5a8c_prof);

        
        $__internal_612272e2afa5294125cb04bd27fccbf4e15c0c2ce1167b9a14e5aef0309b1105->leave($__internal_612272e2afa5294125cb04bd27fccbf4e15c0c2ce1167b9a14e5aef0309b1105_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_490f81a77ea395f9a99b25346578e85238b6fc9fece14c667a6e044e72279e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490f81a77ea395f9a99b25346578e85238b6fc9fece14c667a6e044e72279e44->enter($__internal_490f81a77ea395f9a99b25346578e85238b6fc9fece14c667a6e044e72279e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_09bd1e9ce2f2e6a3b8664b7bc5d1750afc909a6f63cd873bf9df3851945b0ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09bd1e9ce2f2e6a3b8664b7bc5d1750afc909a6f63cd873bf9df3851945b0ae9->enter($__internal_09bd1e9ce2f2e6a3b8664b7bc5d1750afc909a6f63cd873bf9df3851945b0ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script language=\"javascript\" type=\"text/javascript\">
        function filter(element) {

            var count = 0;
            var value = \$(element).val();
            value = value.toLowerCase().replace(/\\b[a-z]/g, function(letter) {
                return letter.toUpperCase();
            });

            \$(\".client_row\").each(function() {
                if (\$(this).text().search(value) > -1) {
                    \$(this).show();
                    count++;
                    \$(\"input[name='list_matched']\").show();
                }
                else {
                    \$(this).hide();
                }
            });

            \$(\"input[name='list_matched']\").val(count);
            
        }
    </script>

";
        
        $__internal_09bd1e9ce2f2e6a3b8664b7bc5d1750afc909a6f63cd873bf9df3851945b0ae9->leave($__internal_09bd1e9ce2f2e6a3b8664b7bc5d1750afc909a6f63cd873bf9df3851945b0ae9_prof);

        
        $__internal_490f81a77ea395f9a99b25346578e85238b6fc9fece14c667a6e044e72279e44->leave($__internal_490f81a77ea395f9a99b25346578e85238b6fc9fece14c667a6e044e72279e44_prof);

    }

    public function getTemplateName()
    {
        return "clients/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 28,  100 => 27,  88 => 23,  76 => 19,  72 => 18,  69 => 17,  65 => 16,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"content\">
        <input type=\"text\" onkeyup=\"filter(this)\" name=\"search\" />
        <input type=\"text\" name=\"list_matched\"/>
    </div>
    <table class=\"table table-striped\" id=\"clients_list\">
        <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>

        </tr>
        </thead>
        <tbody>
        {% for client in clients %}
            <tr class=\"client_row\">
                <td>{{ client.codigo }}</td>
                <td><a href=\"{{ path('clients_show', {'clientCode': client.codigo}) }}\">{{  client.nombre }}</a></td>

            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script language=\"javascript\" type=\"text/javascript\">
        function filter(element) {

            var count = 0;
            var value = \$(element).val();
            value = value.toLowerCase().replace(/\\b[a-z]/g, function(letter) {
                return letter.toUpperCase();
            });

            \$(\".client_row\").each(function() {
                if (\$(this).text().search(value) > -1) {
                    \$(this).show();
                    count++;
                    \$(\"input[name='list_matched']\").show();
                }
                else {
                    \$(this).hide();
                }
            });

            \$(\"input[name='list_matched']\").val(count);
            
        }
    </script>

{% endblock %}", "clients/list.html.twig", "/vagrant/crm-web/app/Resources/views/clients/list.html.twig");
    }
}
