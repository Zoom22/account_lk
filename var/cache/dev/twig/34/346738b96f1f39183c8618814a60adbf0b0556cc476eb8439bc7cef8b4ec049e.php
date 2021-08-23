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

/* transactions.html.twig */
class __TwigTemplate_cc5add912f3bb37de6dd30a4fe87bad296de5c54fd0f2d47698a4b604e284ccc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transactions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "transactions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\"/>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <h3 class=\"display-6 text-center mb-4\">История списаний средств с баланса</h3>
    <div class=\"row\">
        <div class=\"mb-5 col-4\">
            <label for=\"from\" class=\"form-label\">Фильтр по датам:</label>
            <div class=\"input-group mb-3\">
                <input type=\"text\" class=\"form-control\" id=\"from\" name=\"from\" placeholder=\"Начало\">
                <span class=\"input-group-text\">-</span>
                <input type=\"text\" class=\"form-control\" id=\"to\" name=\"to\" placeholder=\"Конец\">
            </div>
        </div>
        <div class=\"mb-5 col-4\">
            <label for=\"filter\" class=\"form-label\">Фильтр по услуге:</label>
            <select class=\"form-select\" id=\"filter\" aria-label=\"Service filter\">
                <option selected>Выберите услугу</option>
                <option value=\"1\">Лифт</option>
                <option value=\"2\">Домофон</option>
                <option value=\"3\">Горячая вода</option>
            </select>
        </div>
    </div>
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ta"]) {
            // line 32
            echo "
        <div class=\"card mb-3\">
            <div class=\"card-header\">
                ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ta"], "service", [], "any", false, false, false, 35), "html", null, true);
            echo "
            </div>
            <div class=\"card-body\">
                <p class=\"card-text\">
                    ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ta"], "date", [], "any", false, false, false, 39), "html", null, true);
            echo " - за ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ta"], "period", [], "any", false, false, false, 39), "html", null, true);
            echo " списано ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ta"], "price", [], "any", false, false, false, 39), "html", null, true);
            echo " руб. Баланс: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ta"], "balance", [], "any", false, false, false, 39), "html", null, true);
            echo " руб.
                </p>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    <div class=\"mt-5 d-grid gap-2 col-6 mx-auto\">
        <button class=\"btn btn-success\" type=\"button\">Расчетный день</button>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>
    <script type=\"text/javascript\" src=\"js/transactions.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "transactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 50,  144 => 49,  134 => 44,  117 => 39,  110 => 35,  105 => 32,  101 => 31,  79 => 11,  72 => 10,  61 => 5,  54 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


    {% block stylesheets %}
        {{ parent() }}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\"/>
    {% endblock %}


{% block body %}
    <h3 class=\"display-6 text-center mb-4\">История списаний средств с баланса</h3>
    <div class=\"row\">
        <div class=\"mb-5 col-4\">
            <label for=\"from\" class=\"form-label\">Фильтр по датам:</label>
            <div class=\"input-group mb-3\">
                <input type=\"text\" class=\"form-control\" id=\"from\" name=\"from\" placeholder=\"Начало\">
                <span class=\"input-group-text\">-</span>
                <input type=\"text\" class=\"form-control\" id=\"to\" name=\"to\" placeholder=\"Конец\">
            </div>
        </div>
        <div class=\"mb-5 col-4\">
            <label for=\"filter\" class=\"form-label\">Фильтр по услуге:</label>
            <select class=\"form-select\" id=\"filter\" aria-label=\"Service filter\">
                <option selected>Выберите услугу</option>
                <option value=\"1\">Лифт</option>
                <option value=\"2\">Домофон</option>
                <option value=\"3\">Горячая вода</option>
            </select>
        </div>
    </div>
    {% for ta in transactions %}

        <div class=\"card mb-3\">
            <div class=\"card-header\">
                {{ ta.service }}
            </div>
            <div class=\"card-body\">
                <p class=\"card-text\">
                    {{ ta.date }} - за {{ ta.period }} списано {{ ta.price }} руб. Баланс: {{ ta.balance }} руб.
                </p>
            </div>
        </div>
    {% endfor %}
    <div class=\"mt-5 d-grid gap-2 col-6 mx-auto\">
        <button class=\"btn btn-success\" type=\"button\">Расчетный день</button>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>
    <script type=\"text/javascript\" src=\"js/transactions.js\"></script>
{% endblock %}", "transactions.html.twig", "/var/www/account/templates/transactions.html.twig");
    }
}
