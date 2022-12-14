<?php
namespace MVC\Core;
class Controller
    {
        var $vars = [];
        var $layout = "default";
        var $string = "";
        function set($d)
        {
            $this->vars = array_merge($this->vars, $d);
        }
        function string($string){

        }
        function render($filename)
        {
            extract($this->vars);
            ob_start();
            //require(ROOT . "Views/" . ucfirst(str_replace('Controller', '', get_class($this))) . '/' . $filename . '.php');
            //require(ROOT."Views/MyTask/index.php");
            $replaceString = 'Controller';
            $getClass = get_class($this);
            $firstReplace = str_replace($replaceString, '',$getClass);
            $secondReplace = str_replace('MVC', '', $firstReplace);
            $thirdReplace = ucfirst(str_replace('\s','',$secondReplace));
            //$fourthReplace = str_replace($hashtag,'',$thirdReplace);
            require(ROOT . "Views/" . $thirdReplace.'/'. $filename . '.php');
            $content_for_layout = ob_get_clean();

            if ($this->layout == false)
            {
                $content_for_layout;
            }
            else
            {
                require(ROOT . "Views/Layouts/" . $this->layout . '.php');
            }
        }

        private function secure_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        protected function secure_form($form)
        {
            foreach ($form as $key => $value)
            {
                $form[$key] = $this->secure_input($value);
            }
        }

    }
?>