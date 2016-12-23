<?php

/* ProjetSymfony2Bundle:Auth:index.html.twig */
class __TwigTemplate_ab57ab34722b112a5efb413e4335616e4ad1ce41eebcdaf708ec19df77fe540a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ProjetSymfony2Bundle::layout8.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjetSymfony2Bundle::layout8.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <!DOCTYPE html>
    <html class=\"lockscreen\">
        <head>
            <meta charset=\"UTF-8\">
            <title>AdminLTE | Lockscreen</title>
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
            <!-- bootstrap 3.0.2 -->
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- font Awesome -->
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- Theme style -->
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/AdminLTE.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
              <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
              <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
            <![endif]-->
        </head>
        <body>
            <!-- Automatic element centering using js -->
            <div class=\"center\">            
                <div class=\"headline text-center\" id=\"time\">
                    <!-- Time auto generated by js -->
                </div><!-- /.headline -->

                <!-- User name -->
                <div class=\"lockscreen-name\">PermiK</div>

                <!-- START LOCK SCREEN ITEM -->
                <div class=\"lockscreen-item\">
                    <!-- lockscreen image -->
                    <div class=\"lockscreen-image\">
                        <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar5.png"), "html", null, true);
        echo "\" alt=\"user image\"/>
                    </div>
                    <!-- /.lockscreen-image -->

                    <!-- lockscreen credentials (contains the form) -->
                    <div class=\"lockscreen-credentials\">   
                        <form  method=\"POST\">

                            <div class=\"input-group\">

                                <input type=\"email\"  name=\"Email\"class=\"form-control\" placeholder=\"Entrez votre E-mail\" />
                                <input type=\"password\"  name=\"Password\"class=\"form-control\" placeholder=\"password\" />
                                <div class=\"input-group-btn\">
                                    ";
        // line 52
        echo "                                    <i class=\"fa fa-arrow-right text-muted\"><input type=\"submit\" value=\"\" class=\"btn btn-flat\" /></i>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.lockscreen credentials -->

                </div><!-- /.lockscreen-item -->


            </div><!-- /.center -->

            <!-- jQuery 2.0.2 -->
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
            <!-- Bootstrap -->
            <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <!-- page script -->
            <script type=\"text/javascript\">
                \$(function() {
                    startTime();
                    \$(\".center\").center();
                    \$(window).resize(function() {
                        \$(\".center\").center();
                    });
                });

                /*  */
                function startTime()
                {
                    var today = new Date();
                    var h = today.getHours();
                    var m = today.getMinutes();
                    var s = today.getSeconds();

                    // add a zero in front of numbers<10
                    m = checkTime(m);
                    s = checkTime(s);

                    //Check for PM and AM
                    var day_or_night = (h > 11) ? \"PM\" : \"AM\";

                    //Convert to 12 hours system
                    if (h > 12)
                        h -= 12;

                    //Add time to the headline and update every 500 milliseconds
                    \$('#time').html(h + \":\" + m + \":\" + s + \" \" + day_or_night);
                    setTimeout(function() {
                        startTime()
                    }, 500);
                }

                function checkTime(i)
                {
                    if (i < 10)
                    {
                        i = \"0\" + i;
                    }
                    return i;
                }

                /* CENTER ELEMENTS IN THE SCREEN */
                jQuery.fn.center = function() {
                    this.css(\"position\", \"absolute\");
                    this.css(\"top\", Math.max(0, ((\$(window).height() - \$(this).outerHeight()) / 2) +
                            \$(window).scrollTop()) - 30 + \"px\");
                    this.css(\"left\", Math.max(0, ((\$(window).width() - \$(this).outerWidth()) / 2) +
                            \$(window).scrollLeft()) + \"px\");
                    return this;
                }
            </script>
        </body>
    </html>

";
    }

    public function getTemplateName()
    {
        return "ProjetSymfony2Bundle:Auth:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 66,  100 => 52,  84 => 37,  58 => 14,  53 => 12,  48 => 10,  39 => 3,  36 => 2,  11 => 1,);
    }
}
