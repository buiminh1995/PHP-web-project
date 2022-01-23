<?php 
	$mod = (isset($_GET['mod'])?$_GET['mod']:'');
	$act = (isset($_GET['act'])?$_GET['act']:'list');
	//var_dump($_POST); 
	switch ($mod) {
		case 'category':
			require_once('controllers/CategoryController.php');
			$controller_obj = new CategoryController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
                    break;
				case 'store':
                    $controller_obj->store();
                    break;
				case 'add':
					$controller_obj->add();
                    break;
                case 'detail':
                    $controller_obj->detail();
					break;
				case 'delete':
					$controller_obj->delete();
					break;
				case 'edit':
					$controller_obj->edit();
					break;
				case 'update':
					$controller_obj->update();
					break;
				default:
					echo "Không tồn tại action này";
					break;
			}
			break;
		case 'post':
			echo "Post <br>";
			switch ($act) {
				case 'list':
					echo "Xem danh sách bài viết";
					break;
				case 'add':
					echo "Thêm mới bài viết";
					break;
				default:
					echo "Không tồn tại action này";
					break;
			}
			break;

		case 'author':
			require_once('controllers/AuthorController.php');
			$controller_obj = new AuthorController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'store':
					$controller_obj->store();
					break;
				case 'add':
					$controller_obj->add();
					break;
				case 'detail':
					$controller_obj->detail();
					break;
				case 'delete':
					$controller_obj->delete();
					break;
				case 'edit':
					$controller_obj->edit();
					break;
				case 'update':
					$controller_obj->update();
					break;
				default:
					echo "Không tồn tại action này";
					break;
			}
			break;
		
		default:
			echo "Không tồn tại module này";
			break;
	}
 ?>