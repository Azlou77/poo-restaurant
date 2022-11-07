<?php
namespace Core\Controller;

class DefaultController{
    protected function render(string $viewPath, array $parameters = []){
        // var_dump($parameters);
        try {
            ob_start();
            extract($parameters);
            require ROOT."/templates/$viewPath.php";
        $content = ob_get_clean();
        } catch (\Throwable $th) {
            echo("error");
        }
        // ob_start();
        //     extract($parameters);
        //     require ROOT."/templates/$viewPath.php";
        // $content = ob_get_clean();
        require ROOT.'/templates/base.php';
    }
}