@extends('layouts/layout')
@section('content')
<div class="bg-white min-h-screen font-JF">
  <div class="py-8 ">
    <div class="mx-auto max-w-screen-xl px-4 md:px-8">
        <div class="grid gap-8 md:grid-cols-2 lg:gap-12 bg-gradient-to-l from-teal-200/15 to-white rounded-3xl p-4">
            <div>
                <div class="h-80 md:h-[350px] rounded-md max-w-full bg-contain bg-no-repeat mt-8" 
                  style="background-image:url({{asset('storage/assets/images/graphic.png')}});">
                </div>
            </div>
            <div class="md:pt-8 lg:flex lg:flex-col lg:justify-center">  
            <h1 class="mb-4 text-center text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6 md:text-right">Green Concept</h1>
            <p class="mb-6 text-gray-900 sm:text-lg md:mb-8 leading-8 md:leading-10 tracking-wider">
              تعتبر جرين كونسبت من أكبر شركات الصيانة الزراعية والمبيدات في المملكة العربية السعودية، وقد كان
               لنا شرف برمجته وتصميمه بالكامل وإجراء تحديثات دورية له منذ عام 2018 وحتى اآلن،
                حيث يتميز الموقع بواجهة جذابة بالصفحة الرئيسية تعرض أحدث العروض من خالل ساليدر متحرك يتيح لمدير الموقع إنشاء تصميمات رسومية متقدمة جدا
                بخطوات بسيطة وسهلة. كما تحتوى لوحة تحكم الموقع الداخلية على عدد من الميزات المتطورة
                التي تتيح تعديل الصور والنصوص بكل سهولة مع إمكانية تعديل وعرض الخدى.
            </p>
            <a href="/" class="text-granada-betrolum-warm hover:text-teal-300  md:mb-2 lg:mb-0">
              <p class="inline-flex items-center">أعرف المزيد 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 mx-2 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
              </p>
            </a>
          </div>
        </div>
      </div>
  </div>
  <div class="py-8 ">
    <div class="mx-auto w-11/12 max-w-screen-xl px-4 md:px-8">
        <div class="grid gap-8 md:grid-cols-2 lg:gap-12 bg-gradient-to-r from-teal-200/15 to-white rounded-3xl p-4">
          <div class="md:pt-8 lg:flex lg:flex-col lg:justify-center">  
            <h1 class="mb-4 text-center text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6 md:text-right">Fluffy Blue</h1>
            <p class="mb-6 text-gray-900 sm:text-lg md:mb-8 leading-8 md:leading-10 tracking-wider">
              تشرفنا بتنفيذ مشروع تصميم وبرمجة موقع فلافي بلو لبيع وعرض منتجات الملابس،
               حيث يعتبر الموقع  سهل وسلسل في التعمل في شراء المنتجات حيث يسهل علي العملاء عملية الشراء مع تمكين العملاء
                من متابعة حالة الطلبات من داخل حساباتهم على الموقع في أي وقت ومن أي مكان. 
            </p>
              <a href="/" class="text-granada-betrolum-warm hover:text-teal-300  md:mb-2 lg:mb-0">
                <p class="inline-flex items-center">أعرف المزيد 
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 mx-2 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                  </svg>
                </p>
              </a>
          </div>
          <div>
              <div class="h-96 md:h-[350px] rounded-md max-w-full bg-contain bg-no-repeat mt-8" 
                style="background-image:url({{asset('storage/assets/images/screen.png')}});">
              </div>
          </div>
        </div>
      </div>
  </div>
  <div class="py-8 ">
    <div class="mx-auto max-w-screen-xl px-4 md:px-8">
        <div class="grid gap-8 md:grid-cols-2 lg:gap-12 bg-gradient-to-l from-teal-200/15 to-white rounded-3xl p-4">
            <div>
                <div class="h-80 md:h-[350px] rounded-md max-w-full bg-contain bg-no-repeat mt-8" 
                  style="background-image:url({{asset('storage/assets/images/mobile.png')}});">
                </div>
            </div>
            <div class="md:pt-8 lg:flex lg:flex-col lg:justify-center">  
            <h1 class="mb-4 text-center text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6 md:text-right">Enjaz</h1>
            <p class="mb-6 text-gray-900 sm:text-lg md:mb-8 leading-8 md:leading-10 tracking-wider">
              تشرفنا بتنفيذ مشروع تصميم وبرمجة منصة إنجاز فوري لخدمات التعقيب وإتمام المعامالت الحكومية، حيث تعتبر المنصة وسيط رقمي بين العمالء
              الراغبين في إتمام المعامالت الحكومية وبين مكاتب التعقيب والمعقبين المتخصصين، مع تمكين العمالء من متابعة حالة طلبات التعميد والتعقيب من
              داخل حساباتهم على المنصة في أي وقت ومن أي مكان. راعينا في تصميم وبرمجة منصة إنجاز فوري تبسيط تجربة المستخدم،   
                
            </p>
            <a href="/" class="text-granada-betrolum-warm hover:text-teal-300  md:mb-2 lg:mb-0">
              <p class="inline-flex items-center">أعرف المزيد 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 mx-2 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
              </p>
            </a>
          </div>
        </div>
      </div>
  </div>
  <div class="py-8 ">
    <div class="mx-auto w-11/12 max-w-screen-xl px-4 md:px-8">
        <div class="grid gap-8 md:grid-cols-2 lg:gap-12 bg-gradient-to-r from-teal-200/15 to-white rounded-3xl p-4">
          <div class="md:pt-8 lg:flex lg:flex-col lg:justify-center">  
            <h1 class="mb-4 text-center text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6 md:text-right">Green Concept</h1>
            <p class="mb-6 text-gray-900 sm:text-lg md:mb-8 leading-8 md:leading-10 tracking-wider">تعتبر جرين كونسبت من أكبر شركات الصيانة الزراعية والمبيدات في المملكة العربية السعودية، وقد كان لنا شرف برمجته وتصميمه بالكامل وإجراء تحديثات
              دورية له منذ عام 2018 وحتى اآلن، حيث يتميز الموقع بواجهة جذابة بالصفحة الرئيسية تعرض أحدث العروض من خالل ساليدر متحرك يتيح لمدير الموقع
              إنشاء تصميمات رسومية متقدمة جدا بخطوات بسيطة وسهلة. كما تحتوى لوحة تحكم الموقع الداخلية على عدد من الميزات المتطورة التي تتيح تعديل
              الصور والنصوص بكل سهولة مع إمكانية تعديل وعرض الخدى.</p>
                <a href="/" class="text-granada-betrolum-warm hover:text-teal-300  md:mb-2 lg:mb-0">
                  <p class="inline-flex items-center">أعرف المزيد 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 mx-2 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                  </p>
                </a>
          </div>
          <div>
              <div class="h-96 md:h-[350px] rounded-md max-w-full bg-contain bg-no-repeat mt-8" 
                style="background-image:url({{asset('storage/assets/images/screen.png')}});">
              </div>
          </div>
        </div>
      </div>
  </div>
  
</div>


@endsection