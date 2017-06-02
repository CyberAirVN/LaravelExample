<?php
namespace App\Http\Controllers;
use Illuminate\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CateRequest;
use App\cate;
class CateController extends Controller
{
    public function getAdd(){
        $parent = cate::select('id','name','parent_id')->get()->toArray();
    	return view('admin.cate.add',compact('parent'));
    }
    public function postAdd (CateRequest $request){
    	$cate = new cate;
    	$cate->name  		= $request->txtCateName;
    	$cate->alias 		= $request->txtCateName;
    	$cate->order 		= $request->txtOrder;
    	$cate->parent_id 	= $request->sltParent;
    	$cate->keywords  	= $request->txtKeywords;
    	$cate->description 	= $request->txtDescription;
    	$cate->save();
    	return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);
    }
    public function getList(){
        $data = cate::select('id','name','parent_id')->orderBy('id')->get()->toArray();
		return view('admin.cate.list',compact('data'));
	}
    public function getDelete($id){
        $parent = cate::where('parent_id',$id)->count();
        if ($parent==0) {
            $cate =  cate::find($id);
            $cate->delete();
            // return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=> 'da xoa']);
            $data = cate::select('id','name','parent_id')->orderBy('id')->get()->toArray();
            $view ='';
            foreach ($data as $key => $value) {
                $view .= '<tr class="odd gradeX" align="center">
                            <td>'.($key+1).'</td>
                            <td>'.$value['name'].'</td>
                            <td>
                                '.$value['parent_id'].'
                             </td>
                            <td class="center"><button class="delReview" value="'.$value['id'].'"><i class="fa fa-trash-o  fa-fw"></i> Delete</button></td>
                            <div id="content"></div>
                            <td class="center"><a href="/public/admin/cate/edit/'.$value['id'].'"><button><i class="fa fa-pencil fa-fw"></i>Edit</button></a></td>
                        </tr>';
            }
            return $view;
        }
        else {
            echo "<script>
                alert('sory ! ban kho the xoa');
                window.location'";
                    echo route('admin.cate.list');
                echo"'

            </script>";
        }
        
    }
    public function getEdit($id){
        $data = cate::findOrFail($id);
        $parent = cate::select('id','name','parent_id')->get()->toArray();
        return view('admin.cate.edit',compact('parent','data','id'));
    }

    public function postEdit(Request $request,$id){
        $this->validate($request,
                ["txtCateName"=> "required"],
                ["txtCateName.required"=>"vui long nhap ten catagory"]
            );
        $cate = cate::find($id);
        $cate->name         = $request->txtCateName;
        $cate->alias        = $request->txtCateName;
        $cate->order        = $request->txtOrder;
        $cate->keywords     = $request->txtKeywords;
        $cate->description  = $request->txtDescription;
        $cate->save();
        return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'da sua']);
    }
}
