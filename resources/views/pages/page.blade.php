@extends('layouts/layout')
@section('content')

<!-- Blog post with featured image -->
<div class="w-full md:w-11/12 mx-auto p-5 sm:p-8 md:p-12 relative font-JF">
    
    <div class="bg-cover h-[350px] md:h-[700px] w-full mx-auto text-center overflow-hidden rounded-t-3xl md:rounded-lg flex flex-col justify-end"
        style="background-image:url({{asset('storage/assets/images/office4.jpg')}});">
        <div class="bg-gray-800/40 md:bg-white w-full md:w-8/12 mx-auto rounded-t-3xl text-right p-4 md:p-8">
            <h2 class="text-xl md:text-2xl text-white md:text-black font-semibold font-JF">{{ $page_title }}</h2>
            <p class="text-gray-200 md:text-gray-500 pt-4">مقالة حول البرمجة والتكنولوجيا</p>
        </div>
    </div>
    <div class="w-12/12 md:w-8/12 mx-auto bg-white p-2 md:p-8 rounded-b-3xl min-h-96">
        <div class="px-8">
            <h2 class="pt-4 md:pt-0 text-xl font-semibold">قسم البرمجة:</h2>
            <p class="text-gray-500">تصميم وتطوير تطبيقات الويب والبرامج وتطبيقات الهاتف المحمول.
                كتابة وإنشاء التعليمات البرمجية باستخدام لغات البرمجة المختلفة.
                اختبار وتصحيح الأخطاء في البرامج للتأكد من وظيفتها بسلاسة.
                دمج حلول البرمجيات مع الأنظمة الأخرى.
                تقديم الدعم الفني للعملاء فيما يتعلق بالمنتجات البرمجية.</p>
            <h2 class="text-xl font-semibold pt-4">قسم التصميم:</h2>
            <p class="text-gray-500">تصميم واجهات المستخدم (UI) وتجارب المستخدم (UX) للمواقع الإلكترونية والتطبيقات.
                إنشاء رسومات وأيقونات وصور عالية الجودة.
                التأكد من أن التصاميم تتوافق مع معايير العلامة التجارية للشركة.
                الاستمرار في تحديث التصاميم لتتناسب مع أحدث الاتجاهات.</p>
            <h2 class="text-xl font-semibold pt-4">قسم التسويق:</h2>
            <p class="text-gray-500">تطوير خطط واستراتيجيات تسويقية لزيادة الوعي بالعلامة التجارية وجذب العملاء.
                إدارة حملات التسويق عبر الإنترنت وغير المتصلة بالإنترنت.
                تحليل بيانات التسويق لقياس فعالية الحملات وتحديد مجالات التحسين.
                إنشاء محتوى تسويقي جذاب، مثل منشورات المدونة ومقاطع الفيديو ورسائل البريد الإلكتروني.
                إدارة علاقات العملاء (CRM) لبناء علاقات قوية مع العملاء.</p>
            <h2 class="text-xl font-semibold pt-4">قسم تغليف وطباعة:</h2>
            <p class="text-gray-500">تتنوع أقسام وقطاعات شركات التغليف والطباعة بشكل كبير، وذلك تبعًا لحجم الشركة ونوع الخدمات التي تقدمها. سأقوم هنا بشرح الأقسام والقطاعات الرئيسية المتواجدة عادةً في هذه الشركات.</p>
        </div>
    </div>
</div>


@endsection