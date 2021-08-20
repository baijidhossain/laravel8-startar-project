<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Menu;
use App\Model\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class MenuBuilderController extends Controller
{





    public function index($id){
 
        Gate::authorize('app.menus.index');
        $menu=Menu::findOrFail($id);
        return view('backend.menus.builder',compact('menu'));
    }

    public function order(Request $request,$id){
        Gate::authorize('app.menus.index');

        $menuItemorder=json_decode($request->get('order'));
        $this->orderMenu($menuItemorder,null);

    }
    public function orderMenu(array $menuItems,$parentId){

                foreach($menuItems as $index=>$item){
                    $menuItem=MenuItem::findOrFail($item->id);
                    $menuItem->update([

                        'order'=>$index+1,
                        'parent_id'=>$parentId
                    ]);
                    if(isset($item->children)){
                        $this->orderMenu($item->children,$menuItem->id);
                    }
                    
                }
                
    }

    public function itemCreate($id){
      
        Gate::authorize('app.menus.create');
        $menu=Menu::findOrFail($id);
        return view('backend.menus.item.form',compact('menu'));

    }

    public function itemStore(Request $request,$id){

        Gate::authorize('app.menus.create');
        $menu=Menu::findOrFail($id);
        $menu->menuItems()->create([
            'type'=>$request->get('type'),
            'title'=>$request->get('title'),
            'divider_title'=>$request->get('divider_title'),
            'url'=>$request->get('url'),
            'target'=>$request->get('target'),
            'icon_class'=>$request->get('icon_class'),
            


        ]);
        notify()->success("Menu Item Created","Success");
        return redirect()->route('app.menus.builder',$menu->id);

    }



    
    public function itemEdit($id,$itemId){
      
        Gate::authorize('app.menus.edit');
        $menu=Menu::findOrFail($id);

        $menuItem=MenuItem::where('menu_id',$menu->id)->findOrFail($itemId);
        return view('backend.menus.item.form',compact('menu','menuItem'));

    }

    public function itemUpdate(Request $request,$id,$itemId){
      

        Gate::authorize('app.menus.create');
        $menu=Menu::findOrFail($id);
        $menuItem=MenuItem::where('menu_id',$menu->id)
        ->findOrfail($itemId)
        ->update([
            'type'=>$request->get('type'),
            'title'=>$request->get('title'),
            'divider_title'=>$request->get('divider_title'),
            'url'=>$request->get('url'),
            'target'=>$request->get('target'),
            'icon_class'=>$request->get('icon_class'),
        ]);
        notify()->success("Menu Item Updated","Success");
        return redirect()->route('app.menus.builder',$menu->id);

    }

    public function destroy($id,$itemId){
        Gate::authorize('app.menus.destroy');
         Menu::findOrFail($id)
         ->menuItems()
         ->findOrFail($itemId)
         ->delete();

         notify()->success("Menu Item deleted","Success");
         return back();


    }
}
