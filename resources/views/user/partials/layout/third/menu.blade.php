<div class="collapse-menu mt-30 main_menubar">
    <?php $menuCats = App\Models\ProductCategory::where(['parent_id' => 0, 'is_top_menu' => true])->whereIn('category_name',['Male','Female','Kids','Others'])->get();?>
    <ul>
        <li><a href="javascript:void(0);" class="vm-menu"><i class="fa fa-navicon"></i><span>All Departments</span></a>
            <ul class="vm-dropdown">
                @foreach($menuCats as $menu)
                    @if($menu->childrens->count() > 0)
                        <li><a href="#">{{$menu->category_name}} <b
                                    class="caret"></b></a>
                            <ul class="mega-menu">
                                @foreach($menu->childrens as $childMenu)
                                    <li class="megamenu-single">
                                        @if($childMenu->childrens->count() > 0)
                                            <span
                                                class="mega-menu-title"><a href="{{route('product.index', $childMenu->slug)}}">{{$childMenu->category_name}}</a></span>
                                            <ul>
                                                @foreach($childMenu->childrens as $leaveMenu)
                                                    <li><a href="{{route('product.index', $leaveMenu->slug)}}">{{$leaveMenu->category_name}}</a></li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <a href="{{route('product.index', $childMenu->slug)}}">{{$childMenu->category_name}}</a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="{{route('product.index', $menu->slug)}}">{{$menu->category_name}}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
    </ul>
</div>
