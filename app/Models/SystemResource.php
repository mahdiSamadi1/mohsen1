<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class SystemResource extends Model
{
    use HasFactory;



    public static function menu(int $company_id)
    {
        $Menus=DB::table('system_resource_permissions')
        ->join('system_resources','system_resource_permissions.resource_id','=','system_resources.id')
        ->join('company_employee_roles','system_resource_permissions.role_id','=','company_employee_roles.skill_id')
        ->join('company_employees','company_employee_roles.company_employee_id','=','company_employees.id')
        ->where('resource_type_id',1)->where('mobile',Auth::user()->phone)->where('permission_level',1)->where('company_employees.company_id',$company_id)
        ->select('system_resources.id' , 'system_resources.resource_name','system_resources.resource_title','system_resources.model_name','system_resources.parent_id','system_resources.resource_property','system_resources.display_order')
        ->distinct()->orderBy('display_order','asc')->get();
        //$items = Item::all();

        $tree = '[';

        foreach($Menus as $menu) {
            if ($menu->parent_id ==null){
                if ($tree == '[')
                    $tree .= '{';
                else
                    $tree .= ']},{';
                $tree = $tree.'"resource_id" : '.$menu->id.',"resource_name" :"'.$menu->resource_name.'","resource_title" : "'.$menu->resource_title.'", "resource_property" : '.$menu->resource_property.', "submeno":[';
                $first = 1;
            }
            else {
                if (!$first)
                    $tree .=',';
                $first = 0;
                $tree = $tree.'{"resource_id" : '.$menu->id.',"resource_name" :"'.$menu->resource_name.'","resource_title" : "'.$menu->resource_title.'", "resource_property" : '.$menu->resource_property.' }';
            }


        }
        $tree .=']}]';

       return $tree; //json_encode(
    }
}
