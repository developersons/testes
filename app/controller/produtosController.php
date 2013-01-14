<style type="text/css">
    body{background: #eee;}
    
</style>

<?
    class Produtos extends Controller{
        public function index(){
            $this->view('produtosIndex');
        }
        public function novos(){
            $this->view('produtosNovos');
        }
    }
?>