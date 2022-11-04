<?php
namespace Core\Controller;

class DefaultController{
    protected function render(string $viewPath, array $parameters = []){
        ob_start();
            extract($parameters);
            require ROOT."/templates/$viewPath.php";
        $content = ob_get_clean();
        require ROOT.'/templates/base.php';
    }
}