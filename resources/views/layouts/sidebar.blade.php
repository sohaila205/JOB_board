<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">

        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano" dir="rtl">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li>
                        <a href="{{route('dashboard')}}">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>لوحة التحكم</span>
                        </a>
                    </li>
                    @if(Auth::user()->id==8)
                    <li class="nav-parent {{(Route::current()->getName() == 'admin.user.all' || Route::current()->getName() == 'admin.user.create') ? 'nav-expanded nav-active' : ''}}">
                        <a>
                            <i class="fa fa-group" aria-hidden="true"></i>
                            <span>المدونين</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{(Route::current()->getName() == 'admin.user.all') ? 'nav-active' : ''}}">
                                <a href="{{route('admin.user.all')}}">
                                    كل بيانات   المدونين
                                </a>
                            </li>
                            <li class="{{(Route::current()->getName() == 'admin.user.create') ? 'nav-active' : ''}}">
                                <a href="{{route('admin.user.create')}}">
                                    تسجيل مدون
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    <li>
                        <a href="{{route('admin.category.all')}}">
                            <i class="fa fa-cubes" aria-hidden="true"></i>
                            <span>الأقسام</span>
                        </a>
                    </li>
                    <li class="nav-parent {{(Route::current()->getName() == 'admin.newsletter.all' || Route::current()->getName() == 'admin.newsletter.create') ? 'nav-expanded nav-active' : ''}}">
                        <a>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <span>القائمة البريدية</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{(Route::current()->getName() == 'admin.newsletter.all') ? 'nav-active' : ''}}">
                                <a href="{{route('admin.newsletter.all')}}">
                                    بيانات المشتركين
                                </a>
                            </li>
                            <li class="{{(Route::current()->getName() == 'admin.newsletter.create') ? 'nav-active' : ''}}">
                                <a href="{{route('admin.newsletter.send')}}">
                                    إرسال بريد
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent {{(Route::current()->getName() == 'admin.article.all' || Route::current()->getName() == 'admin.article.create') ? 'nav-expanded nav-active' : ''}}">
                        <a>
                            <i class="fa fa-edit" aria-hidden="true"></i>
                            <span>المقالات</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{(Route::current()->getName() == 'admin.article.all') ? 'nav-active' : ''}}">
                                <a href="{{route('admin.article.all')}}">
                                    جميع المقالات
                                </a>
                            </li>
                            <li class="{{(Route::current()->getName() == 'admin.article.create') ? 'nav-active' : ''}}">
                                <a href="{{route('admin.article.create')}}">
                                    كتابة مقال
                                </a>
                            </li>
                        </ul>
                    </li>


                    <!-- Albums -->
                    <li class="nav-parent {{(Route::current()->getName() == 'album.index' || Route::current()->getName() == 'album.create') ? 'nav-expanded nav-active' : ''}}">
                        <a>
                            <i class="fa fa-edit" aria-hidden="true"></i>
                            <span>الالبومات</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{(Route::current()->getName() == 'album.index') ? 'nav-active' : ''}}">
                                <a href="{{route('album.index')}}">
                                    جميع الالبومات
                                </a>
                            </li>
                            <li class="{{(Route::current()->getName() == 'album.create') ? 'nav-active' : ''}}">
                                <a href="{{route('album.create')}}">
                                    إضافة البوم
                                </a>
                            </li>
                        </ul>
                    </li>

                                    {{-- color --}}
                    <li class="nav-parent {{(Route::current()->getName() == 'color.index' || Route::current()->getName() == 'color.create') ? 'nav-expanded nav-active' : ''}}">
                        <a>
                            <i class="fa fa-edit" aria-hidden="true"></i>
                            <span>الألوان</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{(Route::current()->getName() == 'color.index') ? 'nav-active' : ''}}">
                                <a href="{{route('color.index')}}">
                                    جميع الألوان
                                </a>
                            </li>
                            <li class="{{(Route::current()->getName() == 'color.create') ? 'nav-active' : ''}}">
                                <a href="{{route('color.create')}}">
                                    إضافة لون
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- materiaL --}}
                   
                    <li class="nav-parent {{(Route::current()->getName() == 'material.index' || Route::current()->getName() == 'material.create') ? 'nav-expanded nav-active' : ''}}">
                        <a>
                            <i class="fa fa-edit" aria-hidden="true"></i>
                            <span>الخامات</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{(Route::current()->getName() == 'material.index') ? 'nav-active' : ''}}">
                                <a href="{{route('material.index')}}">
                                    جميع الخامات                                </a>
                            </li>
                            <li class="{{(Route::current()->getName() == 'material.create') ? 'nav-active' : ''}}">
                                <a href="{{route('material.create')}}">
                                    إضافة خامة
                                </a>
                            </li>
                        </ul>
                    </li>



                    {{-- category --}}
                    <li class="nav-parent {{(Route::current()->getName() == 'category.index' || Route::current()->getName() == 'category.create') ? 'nav-expanded nav-active' : ''}}">
                        <a>
                            <i class="fa fa-edit" aria-hidden="true"></i>
                            <span>التصنيفات</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{(Route::current()->getName() == 'category.index') ? 'nav-active' : ''}}">
                                <a href="{{route('category.index')}}">
                                    جميع التصنيفات
                                </a>
                            </li>
                            <li class="{{(Route::current()->getName() == 'category.create') ? 'nav-active' : ''}}">
                                <a href="{{route('category.create')}}">
                                    إضافة تصنيف
                                </a>
                            </li>
                        </ul>
                    </li>
 {{-- subcategory --}}
 <li class="nav-parent {{(Route::current()->getName() == 'subcategory.index' || Route::current()->getName() == 'subcategory.create') ? 'nav-expanded nav-active' : ''}}">
    <a>
        <i class="fa fa-edit" aria-hidden="true"></i>
        <span>التصنيفات الفرعية</span>
    </a>
    <ul class="nav nav-children">
        <li class="{{(Route::current()->getName() == 'subcategory.index') ? 'nav-active' : ''}}">
            <a href="{{route('subcategory.index')}}">
                جميع التصنيفات الفرعية
            </a>
        </li>
        <li class="{{(Route::current()->getName() == 'subcategory.create') ? 'nav-active' : ''}}">
            <a href="{{route('subcategory.create')}}">
                إضافة تصنيف فرعي
            </a>
        </li>
    </ul>
</li>



                        {{-- brand --}}
                        <li class="nav-parent {{(Route::current()->getName() == 'brand.index' || Route::current()->getName() == 'brand.create') ? 'nav-expanded nav-active' : ''}}">
                            <a>
                                <i class="fa fa-edit" aria-hidden="true"></i>
                                <span>الماركات</span>
                            </a>
                            <ul class="nav nav-children">
                                <li class="{{(Route::current()->getName() == 'brand.index') ? 'nav-active' : ''}}">
                                    <a href="{{route('brand.index')}}">
                                        جميع الماركات
                                    </a>
                                </li>
                                <li class="{{(Route::current()->getName() == 'brand.create') ? 'nav-active' : ''}}">
                                    <a href="{{route('brand.create')}}">
                                        إضافة ماركة
                                    </a>
                                </li>
                            </ul>
                        </li>
                    {{-- previous project --}}
                    <li class="nav-parent {{(Route::current()->getName() == 'PreviousProject.index' || Route::current()->getName() == 'PreviousProject.create') ? 'nav-expanded nav-active' : ''}}">
                        <a>
                            <i class="fa fa-edit" aria-hidden="true"></i>
                            <span>المشاريع السابقة</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{(Route::current()->getName() == 'PreviousProject.index') ? 'nav-active' : ''}}">
                                <a href="{{route('PreviousProject.index')}}">
                                    جميع المشروعات
                                </a>
                            </li>
                            <li class="{{(Route::current()->getName() == 'PreviousProject.create') ? 'nav-active' : ''}}">
                                <a href="{{route('PreviousProject.create')}}">
                                    إضافة مشروع
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- product --}}
                    <li class="nav-parent {{(Route::current()->getName() == 'product.index' || Route::current()->getName() == 'product.create') ? 'nav-expanded nav-active' : ''}}">
                        <a>
                            <i class="fa fa-edit" aria-hidden="true"></i>
                            <span>المنتجات </span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{(Route::current()->getName() == 'product.index') ? 'nav-active' : ''}}">
                                <a href="{{route('product.index')}}">
                                    جميع المنتجات
                                </a>
                            </li>
                            <li class="{{(Route::current()->getName() == 'product.create') ? 'nav-active' : ''}}">
                                <a href="{{route('product.create')}}">
                                    إضافة منتج
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- faq --}}
                    <li class="nav-parent {{(Route::current()->getName() == 'faq.index' || Route::current()->getName() == 'faq.create') ? 'nav-expanded nav-active' : ''}}">
                        <a>
                            <i class="fa fa-edit" aria-hidden="true"></i>
                            <span>الأساله </span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{(Route::current()->getName() == 'faq.index') ? 'nav-active' : ''}}">
                                <a href="{{route('faq.index')}}">
                                    جميع الاساله 
                                </a>
                            </li>
                            <li class="{{(Route::current()->getName() == 'faq.create') ? 'nav-active' : ''}}">
                                <a href="{{route('faq.create')}}">
                                    إضافة سؤال                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- job --}}
                    <li class="nav-parent {{(Route::current()->getName() == 'ourteam.job.index' || Route::current()->getName() == 'ourteam.job.create') ? 'nav-expanded nav-active' : ''}}">
                        <a>
                            <i class="fa fa-edit" aria-hidden="true"></i>
                            <span>الوظائف </span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{(Route::current()->getName() == 'ourteam.job.index') ? 'nav-active' : ''}}">
                                <a href="{{route('ourteam.job.index')}}">
                                    جميع الوظائف 
                                </a>
                            </li>
                            <li class="{{(Route::current()->getName() == 'ourteam.job.create') ? 'nav-active' : ''}}">
                                <a href="{{route('ourteam.job.create')}}">
                                    إضافة وظيفه      
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- ourteam --}}
                    <li class="nav-parent {{(Route::current()->getName() == 'ourteam.index' || Route::current()->getName() == 'ourteam.create') ? 'nav-expanded nav-active' : ''}}">
                        <a>
                            <i class="fa fa-edit" aria-hidden="true"></i>
                            <span>فريق العمل</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{(Route::current()->getName() == 'ourteam.index') ? 'nav-active' : ''}}">
                                <a href="{{route('ourteam.index')}}">
                                    جميع فريق العمل 
                                </a>
                            </li>
                            <li class="{{(Route::current()->getName() == 'ourteam.create') ? 'nav-active' : ''}}">
                                <a href="{{route('ourteam.create')}}">
                                    إضافة جديد                                </a>
                            </li>
                        </ul>
                    </li>
                    
                      {{-- slider --}}
                      <li class="nav-parent {{(Route::current()->getName() == 'slider.index' || Route::current()->getName() == 'slider.create') ? 'nav-expanded nav-active' : ''}}">
                        <a>
                            <i class="fa fa-edit" aria-hidden="true"></i>
                            <span>سلايدر</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{(Route::current()->getName() == 'slider.index') ? 'nav-active' : ''}}">
                                <a href="{{route('slider.index')}}">
                                    جميع الاعلانات
                                </a>
                            </li>
                            <li class="{{(Route::current()->getName() == 'slider.create') ? 'nav-active' : ''}}">
                                <a href="{{route('slider.create')}}">
                                    إضافة اعلان
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- about us --}}
                    <li class="nav-parent {{(Route::current()->getName() == 'story.index' || Route::current()->getName() == 'ourteam.create') ? 'nav-expanded nav-active' : ''}}">
                        <a>
                            <i class="fa fa-edit" aria-hidden="true"></i>
                            <span>من نحن</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{(Route::current()->getName() == 'story.index') ? 'nav-active' : ''}}">
                                <a href="{{route('story.index')}}">
                             القصص
                                </a>
                            </li>
                            <li class="{{(Route::current()->getName() == 'ourteam.create') ? 'nav-active' : ''}}">
                                <a href="{{route('ourteam.create')}}">
                                     فريق العمل
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="{{(Route::current()->getName() == 'banner.index') ? 'nav-active' : ''}}">
                        <a href="{{route('banner.index')}}">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                            <span>الاعلانات</span>
                        </a>
                    </li>

                    <!-- Survey -->
                    <li class="{{(Route::current()->getName() == 'survey.index') ? 'nav-active' : ''}}">
                        <a href="{{route('survey.index')}}">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                            <span>استطلاع الرأي</span>
                        </a>
                    </li>
                    {{-- Comment --}}
                    <li class="{{(Route::current()->getName() == 'comment.index') ? 'nav-active' : ''}}">
                        <a href="{{route('comment.index')}}">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                            <span>التعليقات</span>
                        </a>
                    </li>



                    <!-- Video -->
                    <!-- <li>
                        <a href="{{route('video.create')}}">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                            <span> إضافة فيديو</span>
                        </a>
                    </li> -->

                </ul>
            </nav>

            <hr class="separator" />
        </div>

    </div>

</aside>
<!-- end: sidebar -->
