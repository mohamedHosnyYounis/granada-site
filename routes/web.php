<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/page/{name}', function($name){
    $page_title="
    أقسام وقطاعات شركة برمجة: نظرة ثاقبة على عالم التكنولوجيا";
    $lorn="
    بدأنا لنحقق هدف توفير مختلف الحلول والخدمات التكنولوجية عالية الكفاءة بعقول وإمكانيات مصرية وعربية بنسبة 100 %، واليوم صرنا نملك العديد من أهدافنا الجديدة التي تنقسم إلى أهداف عملائنا لأكثر من +300 مشروع على مستوى الشرق الأوسط وإفريقيا، وأهداف فريق العمل الذي تخطى اليوم +200 موظف في توسع وانتشار خدماتنا في أكثر من نطاق جغرافي،
     فـ توسعنا من دبي إلى مصر بثلاثة فروع ومنها إلى جدة ليصبح عدد فروعنا أربعة فروع تقدم لجميع عملائنا الدعم اللازم والخدمات المختلفة في رحلتهم الرقمية نحو عالم جديد مليء بالفرص والتحديات، يعمل على حلها باستمرار عقول فذة وفريق لا ييأس من المحترفين."; 
     return view('pages.page',[
        
        'name'=>$name,
        'lorn'=>$lorn,
        'page_title'=>$page_title,
    
    ]);
})->name('page.show');

Route::get('/page2/{depart}', function($depart){
    $page_title="";
    $lorn="";
        
        return view('pages.page2',[
        
        'name'=>$depart,
        'lorn'=>$lorn,
        'page_title'=>$page_title,
    
    ]);
})->name('page2.show');
Route::get('/page3/{serve}', function($serve){
    $page_title="";
    $lorn="";
        
        return view('pages.page3',[
        
        'name'=>$serve,
        'lorn'=>$lorn,
        'page_title'=>$page_title,
    
    ]);
})->name('page3.show');

Route::get('/page4/{servicess}', function($servicess){
    $page_title="";
    $lorn="";
        
        return view('pages.page4',[
        
        'name'=>$servicess,
        'lorn'=>$lorn,
        'page_title'=>$page_title,
    
    ]);
})->name('page4.show');