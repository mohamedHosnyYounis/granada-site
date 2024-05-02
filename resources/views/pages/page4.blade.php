@extends('layouts/layout')
@section('content')
<div class="bg-white min-h-screen font-JF">
    <div class="bg-gray-100 py-8">
        <div class="mx-auto w-11/12 max-w-screen-xl px-4 md:px-8">
            <div class="grid gap-8 md:grid-cols-2 lg:gap-12">
              <div class="md:pt-8 lg:flex lg:flex-col lg:justify-center">  
                <h1 class="mb-4 text-center text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6 md:text-right">انشاء المواقع الالكترونية</h1>
                <p class="mb-6 text-gray-900 sm:text-lg md:mb-8 leading-8 md:leading-10 md:tracking-wider">نساعدك في إنشاء الموقع اإللكتروني المناسب لنشاطك التجاري أو الخدمي وفًقا لميزانيتك سواء كنت تريد إنشاء موقع إلكتروني تعريفي لشركة أو
                  مؤسسة، أو إنشاء متجر إلكتروني لبيع المنتجات عبر اإلنترنت، أو موقع بمواصفات تصميم وبرمجة خاصة.
                  كما نراعي في إنشاء الموقع اإللكتروني أن يكون متوافًقا مع معايير تجربة المستخدم الحالية، باإلضافة إلى اختيار تصميمات عصرية مناسبة لطبيعة
                  نشاطك، مع االلتزام بمعايير تحسين محركات البحث SEO األساسية في صفحات الموقع.</p>
                  <div>
                    <button class=" bg-granada-betrolum-warm hover hover:bg-teal-400 text-white text-base hover:transition-colors duration-500 w-52 h-10 rounded-md">تعرف علي تفاصيل الخدمة</button>
                  </div>
              </div>
              <div>
                  <div class="h-80 md:h-[350px] rounded-md max-w-full bg-contain bg-no-repeat mt-8" 
                    style="background-image:url({{asset('storage/assets/images/laptop.png')}});">
                  </div>
              </div>
            </div>
          </div>
    </div>
    <div class="bg-gray-200 py-8">
        <div class="mx-auto max-w-screen-xl px-4 md:px-8">
            <div class="grid gap-8 md:grid-cols-2 lg:gap-12">
                <div>
                    <div class="h-80 md:h-[350px] rounded-md max-w-full bg-contain bg-no-repeat mt-8" 
                      style="background-image:url({{asset('storage/assets/images/mobile.png')}});">
                    </div>
                </div>
                <div class="md:pt-8 lg:flex lg:flex-col lg:justify-center">  
                <h1 class="mb-4 text-center text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6 md:text-right">إنشاء تطبيقات الجوال</h1>
                <p class="mb-6 text-gray-900 sm:text-lg md:mb-8 leading-8 md:leading-10 md:tracking-wider">إذا كنت تريد إنشاء تطبيق جوال لتحول فكرتك إلى مشروع أو إذا كان لديك مشروع قائم بالفعل وتريد إنشاء تطبيقات جوال تعمل على هواتف أندرويد
                    وآيفون، فنحن نوفر لك إمكانية تنفيذ ذلك بمعايير تصميم وبرمجة وتأمين عالية جًدا.
                    كما يمكننا ربط تطبيق الجوال الخاص بمشروعك مع بوابات الدفع اإللكتروني إلتاحة الدفع ببطاقات بنكية، وكذلك الربط مع شركات الشحن وخرائط
                    جوجل لتوفير تتبع مسارات الشحن أو التنقل بحسب نشاط مشروعك.</p>
                  <div>
                    <button class=" bg-granada-betrolum-warm hover hover:bg-teal-400 text-white text-base hover:transition-colors duration-500 w-52 h-10 rounded-md">تعرف علي تفاصيل الخدمة</button>
                  </div>
              </div>
            </div>
          </div>
    </div>
    <div class="bg-gray-100 py-8 ">
      <div class="mx-auto w-11/12 max-w-screen-xl px-4 md:px-8">
          <div class="grid gap-8 md:grid-cols-2 lg:gap-12">
            <div class="md:pt-8 lg:flex lg:flex-col lg:justify-center">  
              <h1 class="mb-4 text-center text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6 md:text-right">إدارة وصيانة المواقع والتطبيقات</h1>
              <p class="mb-6 text-gray-900 sm:text-lg md:mb-8 leading-8 md:leading-10 tracking-wider">إذا لم يكن لديك الوقت أو فريق العمل الكافي إلدارة موقعك او متجرك اإللكتروني أو تطبيق الجوال الخاص بمشروعك، فنحن هنا لدعمك ليس فقط
                بخبرتنا في إنشاء التطبيقات والمواقع فقط ولكن تشغيلها وإدارتها وصيانتها أيًضا.
                تشمل خدمة إدارة المواقع والمتاجر اإللكترونية والتطبيقات إدخال بيانات وصف المنتجات والخدمات ورفع الصور والفيديوهات الخاصة بها، وتعديل
                محتوى صفحات الموقع بحسب متطلباتكم، مع اقتراح التحسينات الضرورية.</p>
                <div>
                  <button class=" bg-granada-betrolum-warm hover hover:bg-teal-400 text-white text-base hover:transition-colors duration-500 w-52 h-10 rounded-md">تعرف علي تفاصيل الخدمة</button>
                </div>
            </div>
            <div>
                <div class="h-80 md:h-[350px] rounded-md max-w-full bg-contain bg-no-repeat mt-8" 
                  style="background-image:url({{asset('storage/assets/images/web.png')}});">
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="bg-gray-200 py-8 ">
      <div class="mx-auto max-w-screen-xl px-4 md:px-8">
          <div class="grid gap-8 md:grid-cols-2 lg:gap-12">
              <div>
                  <div class="h-80 md:h-[350px] rounded-md max-w-full bg-contain bg-no-repeat mt-8" 
                    style="background-image:url({{asset('storage/assets/images/graphic.png')}});">
                  </div>
              </div>
              <div class="md:pt-8 lg:flex lg:flex-col lg:justify-center">  
              <h1 class="mb-4 text-center text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6 md:text-right">التصميم الجرافيكي والهوية البصرية</h1>
              <p class="mb-6 text-gray-900 sm:text-lg md:mb-8 leading-8 md:leading-10 tracking-wider">نساعدك في تمييز نشاطك التجاري أو الخدمي ليسهل على عمالئك التعرف عليه وسط هذا العدد الهائل من العالمات التجارية، حيث نوفر لك تصميم
                الشعارات واختيار ألوان التصميمات، وأنواع خطوط الكتابة.
                كما يمكننا تصميم ملف تعريفي احترافي لشركتك Profile Company مهما كان نشاطها، وكذلك تصميم العرض التقديمي األساسي الذي تستخدمه
                لعرض منتجاتك أو خدماتك في اجتماعاتك الهامة مع صناع القرار.</p>
                <div>
                  <button class=" bg-granada-betrolum-warm hover hover:bg-teal-400 text-white text-base hover:transition-colors duration-500 w-52 h-10 rounded-md">تعرف علي تفاصيل الخدمة</button>
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="bg-gray-100 py-8 ">
      <div class="mx-auto w-11/12 max-w-screen-xl px-4 md:px-8">
          <div class="grid gap-8 md:grid-cols-2 lg:gap-12">
            <div class="md:pt-8 lg:flex lg:flex-col lg:justify-center">  
              <h1 class="mb-4 text-center text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6 md:text-right">خدمات التسويق الرقمي</h1>
              <p class="mb-6 text-gray-900 sm:text-lg md:mb-8 leading-8 md:leading-10 tracking-wider">نقوم بتحديد شرائح الجمهور المستهدف والتركيز على الشرائح األكثر مالءمة، مع تحديد مالمح شخصية العميل Persona Buyer ووضع جدول زمني إلنتاج
                ونشر المحتوى المناسب على حسابات التواصل االجتماعي. كما نقوم بإنشاء وإدارة الحمالت اإلعالنية على منصات التواصل االجتماعي وعلى منصة إعالنات جوجل، مع اختيار أنواع الحمالت اإلعالنية المناسبة لمراحل
                رحلة العميل وإنشاء الجماهير المخصصة وإعادة استهدافها.</p>
                <div>
                  <button class=" bg-granada-betrolum-warm hover hover:bg-teal-400 text-white text-base hover:transition-colors duration-500 w-52 h-10 rounded-md">تعرف علي تفاصيل الخدمة</button>
                </div>
            </div>
            <div>
                <div class="h-80 md:h-[350px] rounded-md max-w-full bg-contain bg-no-repeat mt-8" 
                  style="background-image:url({{asset('storage/assets/images/screen.png')}});">
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
  


@endsection