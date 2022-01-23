<?php 
	require_once('models/Category.php');
	class CategoryController{
		var $cate_model;

		function __construct(){
			$this->cate_model = new Category();
		}

		public function list(){
			$data = array();
			$data = $this->cate_model->All();
			require_once('views/category/list.php');
        }
        
        public function detail(){
            $id = isset($_GET['id'])?$_GET['id']:0;
            $cate = $this->cate_model->find($id);
            require_once('views/category/detail.php');
		}

		public function add(){
			require_once("views/category/add.php");
        }
        
        public function store(){
            $data = array();
            $data['title'] = $_POST['title'];
            $data['description'] = $_POST['description'];
            
            $status = $this->cate_model->create($data);
             if($status === true){
              header("Location: ?mod=category");
             } else {
                 header("Location: ?mod=category&act=add");

             }
        }

        public function delete(){
            $id = isset($_GET['id'])?$_GET['id']:0;
            $cate = $this->cate_model->delete($id);
            header("Location: ?mod=category&act=list");
        }

        public function edit(){
            $id = isset($_GET['id'])?$_GET['id']:0;
            $cate = $this->cate_model->find($id);
            require_once("views/category/edit.php");
        }

        public function update(){
            $data = array();
            $data['id'] = $_POST['id'];
            $data['title'] = $_POST['title'];
            $data['description'] = $_POST['description'];
            
            $status = $this->cate_model->update($data);
             if($status === true){
              header("Location: ?mod=category");
             } else {
                 header("Location: ?mod=category&act=edit&id=".$data['id']);

             }
        }

	}
 ?>