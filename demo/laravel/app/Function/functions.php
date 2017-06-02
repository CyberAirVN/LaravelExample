<?php 
function cate_parent ($data,$parent = 1,$str="----",$select = 5){
	foreach ($data as $key => $val) {
		$id = $val["id"];
		$name = $val["name"];


		if ($val["parent_id"] == $parent) {
			if ($select != 0 && $id == $select) {
			echo "<option value='$id' selected='selected'>$str $name</option>";
			
			}
			else {
				echo "<option value='$id'>$str $name</option>";
			}
		cate_parent ($data,$id,$str."--");
		}
	}
}


?>