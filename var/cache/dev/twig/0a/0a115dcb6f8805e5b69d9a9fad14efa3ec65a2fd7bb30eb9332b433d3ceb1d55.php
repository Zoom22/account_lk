<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html.twig */
class __TwigTemplate_e35c9065ca156504645ea3202d84b3c026287523c7acb00d1bfefba944b45b9e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <main>

        <h2 class=\"display-6 text-center mb-4\">Подключенные услуги</h2>

        <div class=\"table-responsive\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">Услуга</th>
                    <th scope=\"col\">Ед. измерения</th>
                    <th scope=\"col\">Цена за ед.</th>
                    <th scope=\"col\">Количество</th>
                    <th scope=\"col\">Цена</th>
                    <th scope=\"col\">Действия</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subs"]) {
            // line 23
            echo "                <tr>
                    <th scope=\"row\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subs"], "service", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</th>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subs"], "service", [], "any", false, false, false, 25), "unit", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subs"], "service", [], "any", false, false, false, 26), "price", [], "any", false, false, false, 26), "html", null, true);
            echo " руб.</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subs"], "quantity", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subs"], "service", [], "any", false, false, false, 28), "price", [], "any", false, false, false, 28) * twig_get_attribute($this->env, $this->source, $context["subs"], "quantity", [], "any", false, false, false, 28)), "html", null, true);
            echo " руб.</td>
                    <td>
                        <button type=\"button\" class=\"btn btn-primary btn-sm\">Отключить</button>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </tbody>
                <tfoot>
                <tr>
                    <th scope=\"row\">Итого:</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <th scope=\"row\">";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 41, $this->source); })()), "html", null, true);
        echo " руб.</th>
                </tr>
                </tfoot>

            </table>
        </div>


    <div class=\"d-grid gap-2 col-6 mx-auto\">
        <button class=\"btn btn-success\" type=\"button\" id=\"add-btn\">Добавить услуги</button>
    </div>

        <div id=\"add-tbl\" class=\"table-responsive mt-3\" hidden>
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">Услуга</th>
                    <th scope=\"col\">Ед. измерения</th>
                    <th scope=\"col\">Цена за ед.</th>
                    <th scope=\"col\">Действия</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 65
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 66), "html", null, true);
            echo "</th>
                        <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "unit", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                        <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 68), "html", null, true);
            echo " руб.</td>
                        <td>
                            <form action=\"/add/";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\" method=\"post\">
                            <button type=\"submit\" class=\"btn btn-primary btn-sm\" name=\"add\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo "\">
                                Подключить
                            </button>
                            </form>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                </tbody>
            </table>
        </div>

    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 87,  206 => 86,  199 => 85,  187 => 78,  174 => 71,  170 => 70,  165 => 68,  161 => 67,  157 => 66,  154 => 65,  150 => 64,  124 => 41,  115 => 34,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  87 => 24,  84 => 23,  80 => 22,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <main>

        <h2 class=\"display-6 text-center mb-4\">Подключенные услуги</h2>

        <div class=\"table-responsive\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">Услуга</th>
                    <th scope=\"col\">Ед. измерения</th>
                    <th scope=\"col\">Цена за ед.</th>
                    <th scope=\"col\">Количество</th>
                    <th scope=\"col\">Цена</th>
                    <th scope=\"col\">Действия</th>
                </tr>
                </thead>
                <tbody>
                {% for subs in subscriptions %}
                <tr>
                    <th scope=\"row\">{{ subs.service.name}}</th>
                    <td>{{ subs.service.unit}}</td>
                    <td>{{ subs.service.price}} руб.</td>
                    <td>{{ subs.quantity}}</td>
                    <td>{{ subs.service.price * subs.quantity}} руб.</td>
                    <td>
                        <button type=\"button\" class=\"btn btn-primary btn-sm\">Отключить</button>
                    </td>
                </tr>
                {% endfor %}
                </tbody>
                <tfoot>
                <tr>
                    <th scope=\"row\">Итого:</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <th scope=\"row\">{{ total }} руб.</th>
                </tr>
                </tfoot>

            </table>
        </div>


    <div class=\"d-grid gap-2 col-6 mx-auto\">
        <button class=\"btn btn-success\" type=\"button\" id=\"add-btn\">Добавить услуги</button>
    </div>

        <div id=\"add-tbl\" class=\"table-responsive mt-3\" hidden>
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">Услуга</th>
                    <th scope=\"col\">Ед. измерения</th>
                    <th scope=\"col\">Цена за ед.</th>
                    <th scope=\"col\">Действия</th>
                </tr>
                </thead>
                <tbody>
                {% for service in services %}
                    <tr>
                        <th scope=\"row\">{{ service.name}}</th>
                        <td>{{ service.unit}}</td>
                        <td>{{ service.price}} руб.</td>
                        <td>
                            <form action=\"/add/{{ service.id }}\" method=\"post\">
                            <button type=\"submit\" class=\"btn btn-primary btn-sm\" name=\"add\" value=\"{{ service.id }}\">
                                Подключить
                            </button>
                            </form>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>

    </main>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('js/index.js') }}\"></script>
{% endblock %}", "index.html.twig", "/var/www/account/templates/index.html.twig");
    }
}
