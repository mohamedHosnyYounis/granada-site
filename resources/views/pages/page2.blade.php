@extends('layouts/layout')
@section('content')

<!-- abou-us -->
<div class="bg-gray-200/25 py-6 sm:py-8 lg:py-12 min-h-screen font-JF">
    <div class="mx-auto max-w-screen-xl px-4 md:px-8">
      <div class="grid gap-8 md:grid-cols-2 lg:gap-12">
        <div class="md:pt-8 lg:flex lg:flex-col lg:justify-start">
  
          <h1 class="mb-4 text-center text-2xl font-bold text-teal-500 sm:text-3xl md:mb-6 md:text-right">من نحن</h1>
  
          <p class="mb-6 text-gray-500 sm:text-lg md:mb-8 leading-6 md:leading-9">تأسست شركة غرناطة للبرمجيات لمواكبة الطلب المتزايد على إنشاء المواقع اإللكترونية وتطبيقات الجوال وإنشاء وإدارة حمالت التسويق
                    الرقمي، وتضم الشركة فريق عمل كامل به محترفين من كل التخصصات الالزمة لتنفيذ مواقع وتطبيقات لألنشطة التجارية والخدمية بمختلف مجاالت
                    عملها.
                    من المتعارف عليه حالًيا فإن امتالك موقع إنترنت أو تطبيق جوال يعتبر من أهم أساسيات انتشار ونجاح األنشطة التجارية والخدمية، وال يتوقف األمر
                    عند مجرد إنشاء الموقع اإللكتروني أو تطبيق الهاتف فقط، ولكن من المهم جًدا أن يراعي الموقع أو التطبيق العديد من المعايير الفنية والتسويقية
                    لزيادة فرص نجاحه وانتشاره بعد بدء تشغيله.
                    وهذا هو أهم ما يميز أسلوب عملنا في غرناطة حيث نلتزم بمعايير جودة عالية عند تصميم وبرمجة المواقع أو التطبيقات بحيث تكون متوافقة مع
                    أحدث توجهات تجربة المستخدم ومتوافقة أيًضا مع أحدث معايير محرك البحث جوجل ومنصات التواصل االجتماعي الرئيسية ولذلك نجحنا بفضل هللا
                    في تحقيق مستويات قياسية من رضا العمالء، وكنا بمثابة شريك تقني لهم وليس مجرد شركة برمجة تنفذ لهم مشاريع فقط.
                    ومع الزيادة المستمرة لعدد المواقع والتطبيقات في مختلف المجاالت وارتفاع معدالت المنافسة بينها فإن حاجة األنشطة التجارية والخدمية إلى
                    شركة برمجيات موثوقة أصبحت أكبر من أي وقت مضى، ولذلك فنحن في غرناطة نوفر خدمة دعم فني مميز بعد تسليم أي موقع أو تطبيق لضمان
                    تشغيله بشكل مثالي والمساعدة في تحقيق أهدافه الرئيسية.
          </p>
          <button class="border-[1.6px] bg-granada-betrolum-warm hover:bg-teal-400 text-white hover:transition-colors mt-8 duration-500 w-44 h-12 rounded-md">تواصل معنا</button>
        </div>
          <div class="md:mt-10">
              <div class="bg-cover h-96 md:h-[850px] w-full mx-auto text-center overflow-hidden rounded-lg"
              style="background-image:url({{asset('storage/assets/images/company3.jpg')}});">
              </div>
          </div>
      </div>
        <div class="my-16 text-center">
            <div class="text-center py-4">
                <h2 class="text-gray-800 text-2xl font-semibold mt-2 ">لا تكتفي بما نخبرك به عن جودة خدماتنا ولكن شاهد ما يقوله عملائنا</h2>
            </div>
            <div class="grid gap-x-6 md:grid-cols-3 pt-8 lg:gap-x-12">
                <div class="mb-12 md:mb-0 rounded-xl py-4 bg-white ">
                    <div class="mb-6 flex justify-center">
                        <div class="w-20 h-20 rounded-full bg-cover shadow-lg"
                            style="background-image:url({{ asset('storage/assets/images/model1.jpg') }});">
                        </div>
                    </div>
                    <h5 class="mb-2 text-lg font-bold">Mohamed Ahmed</h5>
                    <h6 class="mb-4 font-medium text-gray-600 px-2">
                        مدير تسويق لدي مجموعة صالح للسيارات
                    </h6>
                    <p class="mb-4 px-4">
                        يسعدنا نحن مجموعة صالح للسيارات ان نتقدم بخالص الشكر والتقدير لشركة غرناطة للقيام بانشاء الموقع
                        الالكتروني الخاص بمجموعة صالح للسيارات
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="inline-block w-6">
                            <path fill="currentColor"
                                d="M580 556h160V396H580v160Zm-360 0h160V396H220v160Zm406 220 80-160H520V336h280v288l-76 152h-98Zm-360 0 80-160H160V336h280v288l-76 152h-98Zm34-300Zm360 0Z" />
                        </svg>
                    </p>
                    <ul class="mb-0 flex justify-center">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                <path fill="currentColor"
                                    d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                <path fill="currentColor"
                                    d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                <path fill="currentColor"
                                    d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                <path fill="currentColor"
                                    d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                <path fill="currentColor"
                                    d="m480 757 157 95-42-178 138-120-182-16-71-168v387ZM233 976l65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                        </li>
                    </ul>
                </div>
                <div class="mb-12 md:mb-0 rounded-xl py-4 bg-white">
                    <div class="mb-6 flex justify-center">
                        <div class="w-20 h-20 rounded-full bg-cover shadow-lg"
                            style="background-image:url({{ asset('storage/assets/images/model2.jpg') }});">
                        </div>
                    </div>
                    <h5 class="mb-2 text-lg font-bold">Ali Tarek</h5>
                    <h6 class="mb-4 font-medium text-gray-600 px-2">
                        مسئول العلاقات العامة لسلسلة مطاعم قصر الكبابجي
                    </h6>
                    <p class="mb-4 px-4">
                        نودّ أن نتقدم إليكم بجزيل الشكر والتقدير على جهودكم المميزة وخدماتكم المهنية في مجال التسويق
                        الإلكتروني.
                        لقد أثبتتم كفاءة عالية وفعالية كبيرة في جميع الحملات التي قمتم بتنفيذها لنا، مما أدى إلى تحقيق
                        نتائج إيجابية للغاية فاقت توقعاتنا.
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="inline-block w-6">
                            <path fill="currentColor"
                                d="M580 556h160V396H580v160Zm-360 0h160V396H220v160Zm406 220 80-160H520V336h280v288l-76 152h-98Zm-360 0 80-160H160V336h280v288l-76 152h-98Zm34-300Zm360 0Z" />
                        </svg>
                    </p>
                    <ul class="mb-0 flex justify-center">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                <path fill="currentColor"
                                    d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                <path fill="currentColor"
                                    d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                <path fill="currentColor"
                                    d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                <path fill="currentColor"
                                    d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                <path fill="currentColor"
                                    d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                        </li>
                    </ul>
                </div>
                <div class="mb-0 rounded-xl py-4 bg-white">
                    <div class="mb-6 flex justify-center">
                        <div class="w-20 h-20 rounded-full bg-cover shadow-lg"
                            style="background-image:url({{ asset('storage/assets/images/model3.jpg') }});">
                        </div>
                    </div>
                    <h5 class="mb-2 text-lg font-bold">Gaser Ahmed</h5>
                    <h6 class="mb-4 font-medium text-gray-600 px-2">
                        مسئول الموارد البشرية لدي شركة استبرق للملابس الشبابية
                    </h6>
                    <p class="mb-4 px-4 text-gra">
                        أود أن أتقدم إليكم بخالص الشكر والتقدير على العمل الرائع الذي قمتم به من تصميمات رائعة لشركتنا.
                        لقد تفوقتم على جميع توقعاتنا، ونحن ممتنون جدًا لجهودكم ومهاراتكم.
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="inline-block w-6">
                            <path fill="currentColor"
                                d="M580 556h160V396H580v160Zm-360 0h160V396H220v160Zm406 220 80-160H520V336h280v288l-76 152h-98Zm-360 0 80-160H160V336h280v288l-76 152h-98Zm34-300Zm360 0Z" />
                        </svg>
                    </p>
                    <ul class="mb-0 flex justify-center">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                <path fill="currentColor"
                                    d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                <path fill="currentColor"
                                    d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                <path fill="currentColor"
                                    d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                <path fill="currentColor"
                                    d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                <path fill="currentColor"
                                    d="m323 851 157-94 157 95-42-178 138-120-182-16-71-168-71 167-182 16 138 120-42 178Zm-90 125 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-355Z" />
                            </svg>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
      
</div>
  
@endsection